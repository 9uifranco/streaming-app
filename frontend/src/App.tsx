import { useEffect, useState } from 'react'
import './App.css'

function App() {
    const [videoSrc, setVideoSrc] = useState('');

    useEffect(() => {
        setVideoSrc('http://192.168.0.24:8000/api/stream?title=ruptura-s1-e1');
    }), [];

    return (
        <>
            <div>
                <video controls width="600">
                    <source src={videoSrc} type="video/mp4" />
                    <track
                        src={'/ruptura-s1-e1.vtt'}
                        kind="subtitles"
                        srcLang="pt-br"
                        label="Português"
                        default
                    />
                    Your browser does not support the video tag.
                </video>
            </div>
        </>
    )
}

export default App
