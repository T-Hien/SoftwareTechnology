name: CI/CD Workflow

on:
  push:
    branches: [ "master" ]
  pull_request:
    branches: [ "master" ]
  workflow_dispatch:

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Install dependencies
        run: sudo apt-get update && sudo apt-get install -y nginx php-cgi sshpass

      - name: Configure and Start PHP-CGI
        run: |
          php-cgi -b 127.0.0.1:9000 &

      - name: Configure and Start Nginx
        run: |
          sudo cp ./nginx/nginx.conf /etc/nginx/nginx.conf
          sudo systemctl restart nginx

      - name: Deploy to remote server
        env:
          SSH_PRIVATE_KEY: ${{ secrets.SSH_PRIVATE_KEY }}
          SERVER_HOST: ${{ secrets.SERVER_HOST }}
          SERVER_PORT: ${{ secrets.SERVER_PORT }}
          SERVER_USERNAME: ${{ secrets.SERVER_USERNAME }}
        run: |
          mkdir -p ~/.ssh
          echo "$SSH_PRIVATE_KEY" > ~/.ssh/id_rsa
          chmod 600 ~/.ssh/id_rsa
          ssh-keyscan -H $SERVER_HOST >> ~/.ssh/known_hosts
          ssh -o StrictHostKeyChecking=no $SERVER_USERNAME@$SERVER_HOST -p $SERVER_PORT <<EOF
            cd /var/www/html/wordpress
            git pull origin master
            sudo systemctl restart nginx
            sudo systemctl restart php7.4-fpm
          EOF

      - name: Test WordPress Admin Login
        run: |
          curl -s http://localhost/wp-admin | grep "WordPress"

