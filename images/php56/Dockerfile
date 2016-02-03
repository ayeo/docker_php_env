FROM phusion/baseimage
MAINTAINER nospor <nospor@gmail.com>

CMD ["/sbin/my_init"]
RUN apt-get update && \
    apt-get install -y python-software-properties
RUN sudo add-apt-repository ppa:ondrej/php5-5.6    
RUN apt-get update && \
    apt-get install -y --force-yes php5-fpm php5-mysql php5-mcrypt php5-intl php5-curl php5-gd php5-xsl

EXPOSE 9000    

RUN mkdir -p /etc/service/php-fpm
ADD start.sh /etc/service/php-fpm/run
RUN chmod +x /etc/service/php-fpm/run


RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*