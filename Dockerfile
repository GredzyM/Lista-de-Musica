# Usa imagen oficial PHP con apache
FROM php:8.2-apache

# Instala dependencias necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código fuente al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala dependencias PHP de Laravel
RUN composer install --no-dev --optimize-autoloader

# Da permisos correctos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar apache en foreground
CMD ["apache2-foreground"]
