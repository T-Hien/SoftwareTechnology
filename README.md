[https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a

https://chatgpt.com/share/669a230b-8eb2-4d10-ad8e-ba2d22cbc71b

https://chatgpt.com/share/db0dc257-a2d5-47a3-b758-90073c472651

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
