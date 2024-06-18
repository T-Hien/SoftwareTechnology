name: Deploy to Server

on:
  push:
    branches:
      - main
jobs:
  deploy:
    runs-on: ubuntu-latest
    
    steps:
      - name: Checkout code
        uses: actions/checkout@v2

      - name: Debug SSH connection 
        run: | 
          ssh -o StrictHostKeyChecking=no -o PasswordAuthentication=no -i /home/hien/.ssh/id_rsa ${{secrets.SERVER_USERNAME}}@${{ secrets.SERVER_SSH_HOST }} -p ${{ secrets.SERVER_SSH_PORT }} 'echo "SSH connection successful"'
      
      - name: Check key
        uses: webfactory/ssh-agent@v0.5.3
        with:
            ssh-private-key: ${{ secrets.SERVER_SSH_KEY }}
      
      - name: Ping remote server
        run: |
            ping -c 4 ${{ secrets.SERVER_SSH_PORT }}
      - name: Check SSH
        run: |
            nc -zv ${{ secrets.SERVER_SSH_PORT }} 22

      - name: Check SSH Username
        run: |
            echo "Current user $(whoami)"
            echo "User enviroment variable: ${{ secrets.SERVER_USERNAME}}"

      - name: Install SSH client
        run:  sudo apt-get install -y openssh-client

      - name: Deploy via server
        run: |
            ssh -o StrictHostKeyChecking=no ${{ secrets.SERVER_USERNAME}}@${{ secrets.SERVER_SSH_PORT}} <<EOF
            cd /var/www/html/wordpress
            git pull origin main
            sudo systemctl restart nginx
            sudo systemctl restart php8.3-fpm
            EOF
