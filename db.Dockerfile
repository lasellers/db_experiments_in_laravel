# sudo docker build -t deil_db -f db.Dockerfile .

# sudo docker exec -it deil_db /bin/bash
# mysql -uroot -ppassword
# show databases;
# use deil;
# show tables;

FROM bitnami/mariadb:latest

ENV ALLOW_EMPTY_PASSWORD=yes
ENV MARIADB_USER=${MYSQL_USER}
ENV MARIADB_PASSWORD=${MYSQL_PASSWORD}
ENV MARIADB_DATABASE=${MYSQL_DATABASE}
ENV MARIADB_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD}

# copy everything from ./db/sql
COPY *.* /docker-entrypoint-initdb.d/
