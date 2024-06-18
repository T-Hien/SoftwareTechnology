https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////
docker-compose up -d
Creating network "www_default" with the default driver
Creating wordpress ... error
Creating nginx     ... 
Creating mysql     ... 

ERROR: for wordpress  Cannot start service wordpress: error while creating mountCreating nginx     ... error
system

ERROR: for nginx  Cannot start service nginx: error while creating mount source Creating mysql     ... done

ERROR: for wordpress  Cannot start service wordpress: error while creating mount source path '/var/www/wordpress/wp-config.php': mkdir /var/www: read-only file system

ERROR: for nginx  Cannot start service nginx: error while creating mount source path '/var/www/wordpress': mkdir /var/www: read-only file system
ERROR: Encountered errors while bringing up the project.

///////////////
docker-compose ps
  Name                 Command                State            Ports       
---------------------------------------------------------------------------
mysql       docker-entrypoint.sh mysqld      Up         3306/tcp, 33060/tcp
nginx       /docker-entrypoint.sh ngin ...   Exit 128                      
wordpress   docker-entrypoint.sh apach ...   Exit 128    


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
