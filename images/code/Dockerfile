FROM ubuntu:14.04

MAINTAINER ayeo <me@ayeo.pl>

ADD src/ /tmp
ADD init.sh /init.sh

VOLUME /var/www

RUN chmod 777 /init.sh 

CMD /init.sh


