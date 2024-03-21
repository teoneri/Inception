#!/bin/bash

if [ ! -f /etc/ssl/certs/inception.crt ]; then
echo "Nginx: setting up ssl ...";
openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/inception.key -out /etc/ssl/certs/inception.crt -subj "/C=IT/ST=Florence/L=42Firenze/O=mneri/CN=mneri.42.fr";
echo "Nginx: ssl is set up!";
fi

exec "$@"