FROM php:8:3-apache

# Setup Debian
RUN apt-get -y update && apt-get -y upgrade && ACCEPT_EULA=Y && apt-get install -y \
    unzip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libmemcached-dev \
    libzip-dev \
    libgeoip-dev \
    libxml2-dev \
    libxslt-dev \
    libtidy-dev \
    libssl-dev \
    zlib1g-dev \
    libpng-dev \
    libwebp-dev \
    libgmp-dev \
    libyaml-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libaio1 \
    libldap2-dev \
    libonig-dev \
    apt-file \
    wget \
    vim \
    gnupg \
    gnupg2 \
    zip \
    git \
    gcc \
    g++ \
    librdkafka-dev \
    autoconf \
    libc-dev \
    libc-client-dev \
    pkg-config \ 
    libkrb5-dev \
    iputils-ping \
    && rm -r /var/lib/apt/lists/* \
    && pecl install redis \
    && pecl install apcu \
    && pecl install memcached \
    && pecl install timezonedb \
    && pecl install yaml \
    && pecl install rdkafka \
    && pecl install apfd \
    && docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install gd calendar gmp ldap sysvmsg pcntl bcmath tidy gettext intl pdo_mysql mysqli simplexml xml xsl xmlwriter zip opcache exif sockets imap \
    && docker-php-ext-enable redis yaml apcu memcached timezonedb rdkafka apfd \
    && printf "log_errors = On \nerror_log = /dev/stderr\n" > /usr/local/etc/php/conf.d/php-logs.ini

# Apache settings
# COPY etc/apache2/conf-enabled/host.conf /etc/apache2/conf-enabled/host.conf
# COPY etc/apache2/apache2.conf /etc/apache2/apache2.conf
# COPY etc/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled/000-default.conf

# # PHP settings
# COPY etc/php/production.ini /usr/local/etc/php/conf.d/production.ini

# Composer
RUN mkdir -p /usr/local/ssh
# COPY etc/ssh/* /usr/local/ssh/
RUN a2enmod proxy && \
    a2enmod proxy_http && \
    a2enmod proxy_ajp && \
    a2enmod rewrite && \
    a2enmod deflate && \
    a2enmod headers && \
    a2enmod proxy_balancer && \
    a2enmod proxy_connect && \
    a2enmod ssl && \
    a2enmod cache && \
    a2enmod expires && \
    # Run apache on port 8080 instead of 80 due. On linux, ports under 1024 require admin privileges and we run apache as www-data.
    sed -i 's/Listen 80/Listen 8080/g' /etc/apache2/ports.conf && \
    chmod g+w /var/log/apache2 && \
    chmod 777 /var/lock/apache2 && \
    chmod 777 /var/run/apache2 && \
    echo "<?php echo phpinfo(); ?>" > /var/www/html/phpinfo.php

# COPY var/www/html/index.php /var/www/html/index.php

COPY . /var/www/html
EXPOSE 8080
