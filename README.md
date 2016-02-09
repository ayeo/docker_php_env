# Docker PHP environment

![screen](http://q.i-systems.pl/file/9dfcc6f8.png)

### Description

Containers set for comprehensive php application runtime environment. It consists of:

- nginx
- php5.6
- php7.0
- mysql
- source code (sample application)

There are 5 seperate containers able to speak to each other. Setting up whole environment is as simple as
run just one command. Each container is based on Ubuntu 14.04
 
This configuration derives from [Nospor's blog](http://nospor.pl/docker-zaprzegamy-kontenery-do-pracy.html). Thank you very much :)


### Setup

- Add to /etc/hosts

```
# OSX
192.168.99.100 ayeo.php56
192.168.99.100 ayeo.php70

# Linux
127.0.0.1 ayeo.php56
127.0.0.1 ayeo.php70
```

- Get config and run

```
git clone --- docker
cd docker
docker-compose up -d
```

- Check if everyting works properly

```
//php 7.0
http://ayeo.php70:8080 

//php 5.6
http://ayeo.php56:8080 
```