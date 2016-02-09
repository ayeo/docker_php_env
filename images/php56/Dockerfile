FROM ubuntu:14.04

MAINTAINER ayeo <me@ayeo.pl>

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php5-5.6

RUN apt-get update 
RUN apt-get install -qy --force-yes \
	php5-fpm \
	php5-mysql \
	php5-mcrypt \
	php5-intl \
	php5-curl \
	php5-gd \
	php5-xsl


EXPOSE 9000    

CMD php5-fpm -c /etc/php5/fpm --fpm-config /etc/php5/fpm/php-fpm.conf -F