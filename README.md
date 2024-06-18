https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////

docker-compose up -d
Starting wordpress ... 
Starting wordpress ... error
Starting nginx     ... 

Starting nginx                    ... error

Recreating 8d1f01f33c72_wordpress ... error
path '/var/www/nginx/conf': mkdir /var/www: read-only file system

ERROR: for 8d1f01f33c72_wordpress  Cannot start service wordpress: error while creating mount source path '/var/www/html': mkdir /var/www: read-only file system

ERROR: for nginx  Cannot start service nginx: error while creating mount source path '/var/www/nginx/conf': mkdir /var/www: read-only file system

ERROR: for wordpress  Cannot start service wordpress: error while creating mount source path '/var/www/html': mkdir /var/www: read-only file system
ERROR: Encountered errors while bringing up the project.




//////////////////////////////
version: "3.9"

services:
  wordpress:
    container_name: wordpress
    image: wordpress:php8.3
    restart: always
    environment:
      WORDPRESS_DB_HOST: mysql
      WORDPRESS_DB_USER: wordpress_user
      WORDPRESS_DB_PASSWORD: Thuhien@352636
      WORDPRESS_DB_NAME: wordpress_db
    volumes:
      - ./html:/var/www/html


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

volumes:
  db_data:
  wordpress_data:
