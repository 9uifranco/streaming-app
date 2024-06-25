# Streaming App

## How to Host It

1. **Boot Ubuntu**: Ensure your Ubuntu system is up and running.

2. **Connect to the Internet**: Make sure your system is connected to the internet.

3. **Install Dependencies**: Open a terminal and install these dependencies:
    ```sh
    sudo apt-get update -y
    sudo apt-get install -y apt-transport-https ca-certificates curl software-properties-common git
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
    sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
    sudo apt-get update -y
    sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin docker-buildx-plugin
    ```

4. **Clone the Project**: Clone the project from GitHub:
    ```sh
    git clone https://github.com/9uifranco/streaming-app.git
    cd streaming-app
    ```


5. **Enable and Start Docker Service**:
    ```sh
    sudo systemctl enable docker
    sudo systemctl start docker
    ```

6. **Build and Start the Docker Containers**:
    ```sh
    docker compose up --build -d
    ```