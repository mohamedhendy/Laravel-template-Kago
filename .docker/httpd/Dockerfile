FROM ubuntu:xenial

LABEL Author="Ebrahim Aboalnaga"
LABEL MAINTAINER="Ebrahim Aboalnaga <contact@aboalnaga.com>"
LABEL VERSION="0.1"

EXPOSE 80

VOLUME /var/www

########## APT caching ##########.

RUN apt-get update && apt-get -y install net-tools netcat
# Set apt-get automatic retry
RUN echo 'Acquire::Retries "5";' > /etc/apt/apt.conf.d/99AcquireRetries
# Set apt-get Apt-Cacher NG proxy
RUN if cat /dev/null | nc -zw 2 $(route -n | awk '/^0.0.0.0/ {print $2}') 3142; then \
echo "Acquire::http::Proxy http://$(route -n | awk '/^0.0.0.0/ {print $2}'):3142;" > /etc/apt/apt.conf.d/30proxy; \
fi

########## INSTALL ##########

##### noninteractive
# Fix "unable to initialize frontend" messages.
RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections

##### php repository
RUN echo "deb     http://ppa.launchpad.net/ondrej/php/ubuntu xenial main"  > /etc/apt/sources.list.d/ondrej.sources.list
RUN echo "deb-src http://ppa.launchpad.net/ondrej/php/ubuntu xenial main" >> /etc/apt/sources.list.d/ondrej.sources.list
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys E5267A6C

##### apt install
RUN apt-get update && apt-get -y install \
  apache2 libapache2-mod-php7.3 \
  php7.3-mysql php7.3-mbstring php7.3-gd php7.3-json php7.3-curl \
  php7.3-xml php7.3-imap php7.3-zip php-xdebug

##### apt clean
RUN apt-get -y autoremove && apt-get clean && rm -rf /var/lib/apt/lists/*

########## CONFIG ##########

##### php
# CLI use php version 7.3
RUN update-alternatives --set php /usr/bin/php7.3
# Enable modules
RUN phpenmod -v 7.3 tokenizer ctype dom wddx \
  mysqli mysqlnd pdo_mysql mbstring gd json curl \
  xml xmlreader xmlwriter xsl simplexml imap zip xdebug

##### apache
# Fix apache "Could not determine fully qualified domain name" message
RUN echo "ServerName localhost" > /etc/apache2/conf-available/fqdn.conf && a2enconf fqdn
# Enable modules
RUN a2dismod php7.3 'mpm_*'
RUN a2enmod php7.3 mpm_prefork ssl rewrite

########## RUN ##########
CMD ["tail", "-f", "/dev/null"]
