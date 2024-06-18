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

      - name: Install SSH client
        run: sudo apt-get install -y openssh-client

      - name: Add SSH key
        uses: webfactory/ssh-agent@v0.5.3
        with:
          ssh-private-key: ${{ secrets.SERVER_SSH_KEY }}

      - name: Verify SSH connection
        run: ssh -o StrictHostKeyChecking=no -i ~/.ssh/id_rsa ${{ secrets.SERVER_USERNAME }}@${{ secrets.SERVER_HOST }} -p ${{ secrets.SERVER_PORT }} 'echo "SSH connection successful"'

      - name: Deploy to server
        run: |
          ssh -o StrictHostKeyChecking=no -i ~/.ssh/id_rsa ${{ secrets.SERVER_USERNAME }}@${{ secrets.SERVER_HOST }} -p ${{ secrets.SERVER_PORT }} <<EOF
          cd /var/www/html/wordpress
          git pull origin main
          sudo systemctl restart nginx
          sudo systemctl restart php8.3-fpm
          EOF
