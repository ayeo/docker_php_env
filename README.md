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

After run, new directory will appears named `www`. It consists the application source. Every modification to this coude affects running application so it allows to developers to work. If `www` directory is not empty exisitng files will NOT be overwritten due to remain local changes untouched.


### Setup

- Add to `/etc/hosts`

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
git clone git@github.com:ayeo/docker_php_env.git docker
cd docker
docker-compose up -d
```

- Check if everyting works properly

	- PHP 7.0 `http://ayeo.php70:8080`
	- PHP 5.6 `http://ayeo.php56:8080`

### Docker bahs aliases

Helpfull docker aliases. Add to `~/.bash_profile`

```
dstop() { docker stop $(docker ps -a -q); }
drm() { docker rm $(docker ps -a -q); }
drmi() { docker rmi $(docker images -q); }
dexec() { docker exec -i -t $1 bash; }
dip() { docker inspect $(docker ps -q) | grep IPA; }
dup() { docker-compose up -d; }
dps() { docker ps; }
```