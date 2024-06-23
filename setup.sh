#!/bin/bash

# Enable Docker service
sudo systemctl enable docker
sudo systemctl start docker

# Build and start the Docker containers
echo "Building and starting Docker containers..."
docker compose up --build -d

echo "Setup complete! Your application should be running."