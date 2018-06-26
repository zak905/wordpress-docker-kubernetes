FROM nginx

RUN apt-get update

RUN apt-get install -y curl php-fpm php-mysql 

RUN mkdir -p /var/www/html

RUN curl -O https://wordpress.org/latest.tar.gz  && tar -xzf latest.tar.gz -C /var/www/html/ --strip-components 1

COPY fastcgi_params /etc/nginx/
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY wp-config.php  /var/www/html/

RUN sed -i -e 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php/7.0/fpm/php.ini
RUN sed -i -e 's/;clear_env = no/clear_env = no/g' /etc/php/7.0/fpm/pool.d/www.conf

RUN usermod -aG www-data nginx

COPY start.sh .

ENTRYPOINT ["/bin/bash", "./start.sh"]