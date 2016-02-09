#!/bin/bash

DIR="/var/www"

if [ "$(ls -A $DIR)" ]; then
	echo "Mounted volume is not empty";
else
    cp -R /tmp/* var/www/
    echo "Source code has been copied";
fi


#todo: use supervisiord
while :
do	
	echo "Working"
	sleep 5
done