FROM phusion/baseimage

MAINTAINER nospor <nospor@gmail.com>

RUN add-apt-repository ppa:ondrej/php5-5.6
RUN apt-get update 
RUN apt-get install -qy --force-yes \
	python-software-properties \
	php5-fpm \
	php5-mysql \
	php5-mcrypt \
	php5-intl \
	php5-curl \
	php5-gd \
	php5-xsl

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 9000    

CMD php5-fpm -c /etc/php5/fpm --fpm-config /etc/php5/fpm/php-fpm.conf -F