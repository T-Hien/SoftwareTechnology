https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a

docker-compose up -d
www_db_1 is up-to-date
Recreating nginx ... 

ERROR: for nginx  'ContainerConfig'

ERROR: for nginx  'ContainerConfig'
Traceback (most recent call last):
  File "docker-compose", line 3, in <module>
  File "compose/cli/main.py", line 81, in main
  File "compose/cli/main.py", line 203, in perform_command
  File "compose/metrics/decorator.py", line 18, in wrapper
  File "compose/cli/main.py", line 1186, in up
  File "compose/cli/main.py", line 1182, in up
  File "compose/project.py", line 702, in up
  File "compose/parallel.py", line 108, in parallel_execute
  File "compose/parallel.py", line 206, in producer
  File "compose/project.py", line 688, in do
  File "compose/service.py", line 581, in execute_convergence_plan
  File "compose/service.py", line 503, in _execute_convergence_recreate
  File "compose/parallel.py", line 108, in parallel_execute
  File "compose/parallel.py", line 206, in producer
  File "compose/service.py", line 496, in recreate
  File "compose/service.py", line 615, in recreate_container
  File "compose/service.py", line 334, in create_container
  File "compose/service.py", line 922, in _get_container_create_options
  File "compose/service.py", line 962, in _build_container_volume_options
  File "compose/service.py", line 1549, in merge_volume_bindings
  File "compose/service.py", line 1579, in get_container_data_volumes
KeyError: 'ContainerConfig'
[14600] Failed to execute script docker-compose

version: '3'

services:
  
  db:
    image: mysql:5.7
    restart: always
    environment:
      MYSQL_DATABASE: wordpress_db
      MYSQL_USER: wordpress_user
      MYSQL_PASSWORD: Thuhien@352636
      MYSQL_RANDOM_ROOT_PASSWORD: '1'

  nginx:
    image: nginx:latest
    container_name: nginx
    ports:
      - "8888:80"
    volumes:
      - ./nginx.conf:/etc/nginx/sites-enabled/wordpress:ro
      - ./html:/usr/share/nginx/html:ro
    restart: always 
    networks:
      -default  

    networks:
      default:

/////////////
403 Forbidden
nginx/1.27.0
/////////
docker-compose up -d
Creating network "www_default" with the default driver
Creating nginx    ... done
Creating www_db_1 ... done

worker_processes 1;

events {
	worker_connections 1024;
}

http {
	include mime.types;
	default_type application/octet-stream;
	
	access_log /var/log/nginx/access.log;
	error_log /var/log/nginx/error.log;

	server {
		listen 80;
		listen [::]:80;
		server_name localhost;
		root /var/www/html;
		index index.php index.html index.htm index.nginx-debian.html;
		location / {

		        try_files $uri $uri/ /index.php?$args;
		        include proxy_params;
		}
		location ~ ^/database/.+\.php$ {
			proxy_pass http://10.0.2.15;    
		        proxy_set_header Host $host;
		        proxy_set_header X-Real-IP $remote_addr;
		        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
		        proxy_set_header X-Forwarded-Proto $scheme;
			proxy_redirect off;
	}
		location ~ \.php$ {
		        include snippets/fastcgi-php.conf;
		        fastcgi_pass unix:var/run/php/php8.3-fpm.sock;
		        include fastcgi_params;
		}

		location ~ /\.ht {
		
			deny all;
		}
		gzip on;
		gzip_types text/plain application/xml text/css text/js;
		gzip_vary on;
	}
}
