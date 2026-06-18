FROM php:8.3-fpm

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        $PHPIZE_DEPS \
        git \
        unzip \
        libzip-dev \
        default-mysql-client \
        ca-certificates \
        curl \
    && docker-php-ext-install pdo_mysql zip \
    && (pecl channel-update pecl.php.net \
        && pecl install redis-6.1.0 \
        && docker-php-ext-enable redis \
        || echo "Skipping redis PHP extension because PECL is unavailable") \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY docker/php/entrypoint.sh /usr/local/bin/laravel-entrypoint
RUN chmod +x /usr/local/bin/laravel-entrypoint

EXPOSE 9000

ENTRYPOINT ["laravel-entrypoint"]
CMD ["php-fpm"]
