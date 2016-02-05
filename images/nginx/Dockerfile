FROM phusion/baseimage
MAINTAINER nospor <nospor@gmail.com>


RUN add-apt-repository ppa:nginx/stable
RUN apt-get update 
RUN apt-get install -qy --force-yes \
	python-software-properties \
	nginx

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN rm /etc/nginx/sites-enabled/default

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]