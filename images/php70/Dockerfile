FROM ubuntu:14.04

MAINTAINER ayeo <me@ayeo.pl>

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php    

RUN apt-get update 
RUN apt-get install -y --force-yes php7.0 php7.0-fpm php7.0-mysql

EXPOSE 9000

CMD php-fpm7.0 -c /etc/php7/fpm --fpm-config /etc/php7/fpm/php-fpm.conf -F