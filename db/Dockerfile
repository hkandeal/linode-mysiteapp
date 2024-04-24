FROM arm64v8/mysql

ARG database
ARG password

RUN echo ${database}
RUN echo ${password}

ENV MYSQL_DATABASE=${MYSQL_DATABASE} \
    MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD} \
    MYSQL_USER=${MYSQL_USER} \
    MYSQL_PASSWORD=${MYSQL_PASSWORD}

ADD ./db/init.sql /docker-entrypoint-initdb.d
EXPOSE 3306