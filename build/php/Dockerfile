FROM php:7.0.4-zts

RUN apt-get update && apt-get install -y --no-install-recommends libpng12-dev zlib1g-dev libicu-dev libjpeg-dev libpq-dev libmcrypt-dev libfreetype6-dev libgd-dev libc-client-dev libkrb5-dev libbz2-dev \
   && apt-get clean && rm -rf /var/lib/apt/lists/* \
   && pecl install pthreads \
   && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr --with-freetype-dir=/usr \
   && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
   && docker-php-ext-install bz2 calendar gd mbstring imap mcrypt exif intl pdo pdo_mysql pdo_pgsql ftp zip \
   && docker-php-ext-enable pthreads

