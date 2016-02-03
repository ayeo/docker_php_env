Nospor Docker
=============

Blog post link http://nospor.pl/docker-zaprzegamy-kontenery-do-pracy.html

![screen](http://q.i-systems.pl/file/83f832ae.png)

Instalacja Dockera
==================

Obecnie instalacja sporwadza się do pobrania paczki z [docker.com](https://www.docker.com/products/docker-toolbox)

Uruchomienie
============

- Dodajemy hosty w /etc/hosts

```bash
192.168.99.100 isklep.php56
192.168.99.100 isklep.php70
```
- Pobieramy projekt i w jego katalogu uruchamiamy
 
```
ssh://git@gitlab.i-systems.pl:10210/misc/docker-nospor.git docker
cd docker
docker-compose up -d
```

- Sprawdzamy działanie

```
http://isklep.php70:8080 //php 7.0
http://isklep.php56:8080 //php 5.6
```