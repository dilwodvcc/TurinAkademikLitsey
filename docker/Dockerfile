FROM php:8.3-fpm

WORKDIR /var/www

# Zaruriy kutubxonalar va PHP kengaytmalarini o'rnatish
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libxslt-dev \
    libpq-dev \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        gd \
        zip \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer-ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Foydalanuvchi uchun ruxsatlar
COPY .. /var/www
WORKDIR /var/www
RUN composer install --prefer-dist --no-interaction --optimize-autoloader

# Laravel uchun ilova kalitini generatsiya qilish
RUN php artisan key:generate

# Foydalanuvchi va fayl ruxsatlarini sozlash
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www
RUN chmod -R 777 /var/www
