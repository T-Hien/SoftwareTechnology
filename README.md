[https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a

https://chatgpt.com/share/669a230b-8eb2-4d10-ad8e-ba2d22cbc71b

https://chatgpt.com/share/db0dc257-a2d5-47a3-b758-90073c472651
https://chatgpt.com/share/13378dae-45ab-425d-83ac-53d584b2f400

https://chatgpt.com/share/13378dae-45ab-425d-83ac-53d584b2f400


https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////

git push -u origin main 
Username for 'https://github.com': T-Hien
Password for 'https://T-Hien@github.com': 
To https://github.com/T-Hien/SoftwareTechnology.git
 ! [rejected]          main -> main (fetch first)
error: failed to push some refs to 'https://github.com/T-Hien/SoftwareTechnology.git'
hint: Updates were rejected because the remote contains work that you do not
hint: have locally. This is usually caused by another repository pushing to
hint: the same ref. If you want to integrate the remote changes, use
hint: 'git pull' before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.


sudo git add .
error: 'nginx/' does not have a commit checked out
fatal: adding files failed
 sudo sshd -t -f /etc/ssh/sshd_config
/etc/ssh/sshd_config: line 39: Bad configuration option: AllowUser
/etc/ssh/sshd_config: terminating, 1 bad configuration options



======CMD======
cd /var/www/html/wordpress
git pull origin main
sudo systemctl restart nginx
sudo systemctl restart php8.3-fpm
./deploy.sh

/*****/



======END======
2024/06/19 03:15:28 ssh: handshake failed: ssh: unable to authenticate, attempted methods [none publickey], no supported methods remain
Error: Process completed with exit code 1.



//////////////////////////////

version: "3.9"

services:
  wordpress:
    container_name: wordpress
    image: wordpress:php8.3
    restart: always
    environment:
      WORDPRESS_DB_HOST: localhost
      WORDPRESS_DB_USER: wordpress_user
      WORDPRESS_DB_PASSWORD: Thuhien@352636
      WORDPRESS_DB_NAME: wordpress_db
    volumes:

      - ./wordpress/wp-config.php:/var/www/html/wp-config.php


  mysql:
    container_name: mysql
    image: mysql:5.7
    restart: always
    environment:
      MYSQL_DATABASE: wordpress_db
      MYSQL_USER: wordpress_user
      MYSQL_PASSWORD: Thuhien@352636
      MYSQL_ROOT_PASSWORD: 352636
    volumes:
      - db_data:/var/lib/mysql

  nginx:
    container_name: nginx
    image: nginx:latest
    restart: unless-stopped
    ports:
      - 8889:80
    volumes:
      - ./nginx/conf:/etc/nginx/sites-enabled/wordpress
      - ./wordpress:/var/www/html/wp-config.php


volumes:
  db_data:
  wordpress_data:


  ///////////
  name: CI/CD Pipeline for WordPress with Nginx and Reverse Proxy

on:
  push:
    branches:
      - main  # Thay đổi trên nhánh main sẽ kích hoạt workflow
  pull_request:
    branches:
      - main  # Pull request vào nhánh main cũng sẽ kích hoạt workflow

jobs:
  build:
    runs-on: ubuntu-latest

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Install PHP, Nginx, MySQL, and other dependencies
        run: |
          sudo apt-get update
          sudo apt-get install -y php-fpm nginx mysql-server php-mysql unzip

        
      - name: Configure Nginx
        run: |
          cd nginx\sites-enabled\wordpress
          start nginx
    

      - name: Start PHP-FPM and Nginx
        run: |
          sudo service nginx start

      - name: Download WordPress
        run: |
          wget -q https://wordpress.org/latest.zip
          unzip -qq latest.zip -d wordpress

      - name: Configure WordPress
        run: |
          sudo cp -r wordpress/* /var/www/html/
          sudo chown -R www-data:www-data /var/www/html/
          sudo find /var/www/html/ -type d -exec chmod 755 {} \;
          sudo find /var/www/html/ -type f -exec chmod 644 {} \;
          sudo mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php
          sudo sed -i 's/database_name_here/wordpress/' /var/www/html/wp-config.php
          sudo sed -i 's/username_here/root/' /var/www/html/wp-config.php
          sudo sed -i 's/password_here/password/' /var/www/html/wp-config.php
          sudo sed -i 's/localhost/127.0.0.1/' /var/www/html/wp-config.php

      - name: Test WordPress
        run: |
          curl -s localhost

  deploy:
    runs-on: ubuntu-latest
    needs: build

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Install Nginx for Reverse Proxy
        run: |
          sudo apt-get update
          sudo apt-get install -y nginx

      - name: Configure Reverse Proxy
        run: |
          sudo cp nginx/nginx.conf /etc/nginx/nginx.conf
          sudo cp nginx/default /etc/nginx/sites-available/default
          sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

      - name: Start Nginx Reverse Proxy
        run: |
          sudo service nginx start
