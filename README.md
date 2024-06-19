https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////

sudo nano /etc/ssh/sshd_config
hien@hien-VirtualBox:/SoftwareTechnology$ cd ~
hien@hien-VirtualBox:~$ chmod 700 .ssh
hien@hien-VirtualBox:~$ chmod 600 .ssh/authorized_keys
hien@hien-VirtualBox:~$ sudo systemctl restart ssh
Job for ssh.service failed because the control process exited with error code.
See "systemctl status ssh.service" and "journalctl -xeu ssh.service" for details.

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
