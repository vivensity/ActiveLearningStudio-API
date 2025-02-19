#!/bin/bash

php /var/www/html/artisan config:cache
php /var/www/html/artisan storage:link
if [[ ! -e /var/www/html/storage/oauth-private.key || ! -e /var/www/html/storage/oauth-public.key ]]; then php /var/www/html/artisan passport:install; fi

php /var/www/html/artisan migrate --force

sh /var/www/newrelic-php5-10.0.0.312-linux/newrelic-install install

h5p_branch=$(printenv H5P_BRANCH);
git clone -b $h5p_branch https://github.com/ActiveLearningStudio/H5P.Distribution.git /tmp/h5p-dist

cd /var/www/html && git --no-pager log -10 > /var/www/html/public/log.txt
cp -rf /tmp/h5p-dist/* /var/www/html/storage/app/public/h5p/
chmod 777 -R /var/www/html/storage &
touch /var/www/html/health.ok

apache2ctl -D FOREGROUND
