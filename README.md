https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////

ERROR: for nginx  Cannot start service nginx: error while creating mount source path '/var/lib/docker/volumes/wordpress_data': mkdir /var/lib/docker: read-only file system

Run echo "$GITHUB_ACTION_PATH" >> $GITHUB_PATH
Run entrypoint.sh
Will download drone-ssh-1.7.4-linux-amd64 from https://github.com/appleboy/drone-ssh/releases/download/v1.7.4
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed

  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0
  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0

100 5580k  100 5580k    0     0  29.4M      0 --:--:-- --:--:-- --:--:-- 29.4M
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
