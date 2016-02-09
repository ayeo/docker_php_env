FROM ubuntu:14.04

MAINTAINER ayeo <me@ayeo.pl>

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:nginx/stable

RUN apt-get update 
RUN apt-get install -y nginx

RUN rm /etc/nginx/sites-enabled/default

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]