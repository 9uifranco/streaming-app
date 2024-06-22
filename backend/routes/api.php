<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/stream', function (Request $request) {
    $fileName = $request->query('title');
    $path = storage_path('app/' . $fileName . '.mp4');

    if (!file_exists($path)) {
        abort(404);
    }

    $stream = function () use ($path) {
        $stream = fopen($path, 'r');
        while (!feof($stream)) {
            echo fread($stream, 2048);
        }
        fclose($stream);
    };

    return response()->stream($stream, 200, [
        'Content-Type' => 'video/mp4',
        'Content-Length' => filesize($path),
        'Accept-Ranges' => 'bytes',
        'Content-Range' => 'bytes 0-' . (filesize($path) - 1) . '/' . filesize($path),
    ]);
});
