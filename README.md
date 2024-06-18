https://chatgpt.com/share/3b89dd1c-12d1-439f-8fb2-b5642ac5764a
docker-compose up -d
docker-compose up -d
Creating network "www_default" with the default driver
Pulling nginx (nginx:latest)...
latest: Pulling from library/nginx
2cc3ae149d28: Already exists
a97f9034bc9b: Pull complete
9571e65a55a3: Pull complete
0b432cb2d95e: Pull complete
24436676f2de: Pull complete
928cc9acedf0: Pull complete
ca6fb48c6db4: Pull complete
Digest: sha256:56b388b0d79c738f4cf51bbaf184a14fab19337f4819ceb2cae7d94100262de8
Status: Downloaded newer image for nginx:latest
Creating www_db_1 ... 
Creating nginx    ... 
Creating nginx    ... error

ERROR: for nginx  Cannot start service nginx: driver failed programming external connectivity on endpoint nginx (18bd723551a4992746d6100e7e641cb3647bc9ffec4db69Creating www_db_1 ... done
 address already in use

ERROR: for nginx  Cannot start service nginx: driver failed programming external connectivity on endpoint nginx (18bd723551a4992746d6100e7e641cb3647bc9ffec4db691ee210c9aaa485097): Error starting userland proxy: listen tcp4 0.0.0.0:80: bind: address already in use
ERROR: Encountered errors while bringing up the project.
