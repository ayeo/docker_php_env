# Nospor Docker

![screen](http://q.i-systems.pl/file/83f832ae.png)

### Budowa i działanie

Zestaw kontenerów tworzących jedno działające środowisko uruchomieniowe aplikacji. 
Składa się z:

- nginx
- php5.6
- php7.0 (do wyboru)
- mysql

Mamy więc 4 kontenery, które potrafią ze sobą rozmawiać i współpracować. 
Uruchomienie całego środowiska wymaga uruchomienia jednej komendy. Wstępna
konfiguracja Dockera na swojej maszynie jest bardzo prosta i ogranicza się do
instalacji paczki.

Obecna wersja bazuje na konfiguracji [Nospora](http://nospor.pl/docker-zaprzegamy-kontenery-do-pracy.html).

### Plan

Docelowo będziemy tu mieli uruchomiony nasz sklep (release) razem z bazą i kodem.
W dalszej kolejności pojawią się konfiguracje całych infrastruktur produckcyjnych
sklepów. Stworzenie lokalnej kopii 51015 1:1 (varnish, redis, php (custom) wiele 
workerów, mysql, nginx, load balancer itd) będzie w pełni automatyczne. 
Automatyczny będzie również
proces aktualizacji kontenerów na sererach testowych i produckyjnych

### Instalacja Dockera na maszynie lokalnej

Obecnie instalacja sporwadza się do pobrania paczki z [docker.com](https://www.docker.com/products/docker-toolbox)

### Uruchomienie środowiska

- Dodajemy hosty w /etc/hosts

```
192.168.99.100 isklep.php56
192.168.99.100 isklep.php70
```
- Pobieramy projekt i w jego katalogu uruchamiamy

```
git clone ssh://git@gitlab.i-systems.pl:10210/misc/docker-nospor.git docker
cd docker
docker-compose up -d
```

- Sprawdzamy działanie

```
http://isklep.php70:8080 //php 7.0
http://isklep.php56:8080 //php 5.6
```

### Uwagi

Wszelkie uwagi mile widziane ;)