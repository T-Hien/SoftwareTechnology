https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
https://azdigi.com/blog/kien-thuc-website/wordpress/cai-da-wordpress-docker-compose-nginx-apache-ssl/

///////////////

ERROR: for nginx  Cannot start service nginx: error while creating mount source path '/var/lib/docker/volumes/wordpress_data': mkdir /var/lib/docker: read-only file system

Lỗi triển khai CI/CD trên github actions: Run ssh -o StrictHostKeyChecking=no \
option requires an argument -- p
usage: ssh [-46AaCfGgKkMNnqsTtVvXxYy] [-B bind_interface]
           [-b bind_address] [-c cipher_spec] [-D [bind_address:]port]
           [-E log_file] [-e escape_char] [-F configfile] [-I pkcs11]
           [-i identity_file] [-J [user@]host[:port]] [-L address]
           [-l login_name] [-m mac_spec] [-O ctl_cmd] [-o option] [-p port]
           [-Q query_option] [-R address] [-S ctl_path] [-W host:port]
           [-w local_tun[:remote_tun]] destination [command [argument ...]] chạy lệnh - name: Deploy application
        run: |
          ssh -o StrictHostKeyChecking=no \
              ${{ secrets.SERVER_USERNAME }}@${{ secrets.SERVER_SSH_HOST }} \
              -p ${{ secrets.SERVER_PORT }} << 'EOF'
            cd /var/www/html/wordpress  # Đường dẫn tới WordPress trên máy chủ
            git pull origin main  # Lấy mã nguồn mới nhất từ repository
            sudo systemctl restart nginx  # Khởi động lại NGINX để áp dụng thay đổi
            sudo systemctl restart php8.3-fpm  # Khởi động lại PHP-FPM
          EOF



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
