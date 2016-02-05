FROM phusion/baseimage

MAINTAINER nospor <nospor@gmail.com>

RUN add-apt-repository ppa:nginx/stable
RUN apt-get update 
RUN apt-get install -yq \
	python-software-properties \
	nginx

RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN rm /etc/nginx/sites-enabled/default

EXPOSE 80

CMD service nginx start