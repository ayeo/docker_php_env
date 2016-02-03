FROM phusion/baseimage
MAINTAINER author <author@email.pl>

CMD ["/sbin/my_init"]
RUN apt-get update && \
    apt-get install -y python-software-properties
RUN sudo add-apt-repository ppa:ondrej/php    
RUN apt-get update && \
    apt-get install -y --force-yes php7.0-fpm php7.0-mysql

EXPOSE 9001    

RUN mkdir -p /etc/service/php-fpm
ADD start.sh /etc/service/php-fpm/run
RUN chmod +x /etc/service/php-fpm/run


RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*