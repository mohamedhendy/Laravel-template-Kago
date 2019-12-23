#!/usr/bin/env bash

# Modify apache(www-data) uid and gid to match mounted volume owner
usermod -u $(stat -c "%u" /var/www) www-data
groupmod -g $(stat -c "%g" /var/www) www-data

# configure apache
a2dissite '*'    > /dev/null
a2ensite www     > /dev/null
apache2ctl start > /dev/null

# run forever
touch /var/log/apache2/{error,access}.log
tail -f /var/{log/apache2/{error,access},www/storage/logs/laravel}.log
# tail -f /dev/null | while read line; do continue; done
