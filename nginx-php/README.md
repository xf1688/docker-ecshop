# What is nginx-php?

nginx-php is a traditionally packaged version of nginx with php-fpm installed on a single container. This allows for horizontally scalable versions of a PHP based application.

# How to use this image
# First:
In the root directory of the Dockerfile folder run the command such as :
	`` docker build -t wilf/phpfpm-nginx . ``
This command will build a image. -t define the name of the image,you can write your name,Don't forget .


# Single Site (Recommended)
When build done,run this command start container：

     docker run --name nginx-phpfpm -d -p 127.0.0.1:10001:80  -v /Users/wilf/Documents/php/code:/var/www/html wilf/phpfpm-nginx

nginx-phpfpm is the container name ,wilf/phpfpm-nginx as noted above,/Users/wilf/Documents/php/code is your local code, when run done
visit 127.0.0.1:10001 you can see your project have run well

# You can  only run start.sh script 
