FROM php:7.4-fpm

ENV MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD}
ENV MYSQL_DATABASE=${MYSQL_DATABASE}
ENV MYSQL_USER=${MYSQL_USER}
ENV MYSQL_PASSWORD=${MYSQL_PASSWORD}
ENV MYSQL_HOST=${MYSQL_HOST}
ENV MYSQL_PORT=${MYSQL_PORT}
ENV BASE_URL=${BASE_URL}
ENV VERSI_APP=${VERSI_APP}


COPY ./php.ini-development /usr/local/etc/php/php.ini-development
COPY ./php.ini-production /usr/local/etc/php/php.ini-production
COPY ./ /var/www
RUN cd /var/www
# RUN chmod -R 0777 /var/www/writable


# WORKDIR /var/www

RUN apt-get update && \
    apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    libsodium-dev \
    zlib1g-dev \
    libzip-dev \
    # libreoffice \
    g++ \
    g++ \
    libreoffice-base default-jre
# libreoffice-base default-jre

RUN docker-php-ext-install \
    bz2 \
    intl \
    bcmath \
    opcache \
    calendar \
    pdo_mysql \
    mysqli \
    sodium \
    zip \
    gd

RUN docker-php-ext-enable \
    bz2 \
    intl \
    bcmath \
    opcache \
    calendar \
    pdo_mysql \
    mysqli \
    sodium \
    zip \
    gd

RUN curl -s$ https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# CMD ["composer create-project codeigniter4/appstarter ."]

# RUN docker-php-ext-install pdo_mysql
# RUN docker-php-ext-install mysqli

#RUN mv env .env

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 9000
CMD ["php-fpm"]