FROM php:8.2-apache

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar módulos de Apache (opcional, por si usas .htaccess)
RUN a2enmod rewrite
