#!/bin/bash

# Update and install Docker
echo "Updating system and installing Docker..."
sudo apt-get update -y
sudo apt-get install -y docker.io docker-compose git

# Enable Docker service
sudo systemctl enable docker
sudo systemctl start docker

# Build and start the Docker containers
echo "Building and starting Docker containers..."
docker-compose up --build -d

echo "Setup complete! Your application should be running."