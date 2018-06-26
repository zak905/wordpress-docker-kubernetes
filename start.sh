sed -i -e "$ a env[WORDPRESS_SITE_URL] = http://$WORDPRESS_SITE_URL" /etc/php/7.0/fpm/pool.d/www.conf && \
sed -i -e "$ a env[WORDPRESS_HOME_URL] = http://$WORDPRESS_HOME_URL" /etc/php/7.0/fpm/pool.d/www.conf && \
sed -i -e "$ a env[WORDPRESS_DB_USER] = $WORDPRESS_DB_USER" /etc/php/7.0/fpm/pool.d/www.conf && \
sed -i -e "$ a env[WORDPRESS_DB_PASSWORD] = $WORDPRESS_DB_PASSWORD" /etc/php/7.0/fpm/pool.d/www.conf && \
sed -i -e "$ a env[WORDPRESS_DB_HOST] = $WORDPRESS_DB_HOST" /etc/php/7.0/fpm/pool.d/www.conf && \
service php7.0-fpm stop && service php7.0-fpm start && \
nginx-debug -g "daemon off;"