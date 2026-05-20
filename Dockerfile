FROM php:8.2-apache 

# Instalar extensión para conectar a MariaDB
RUN docker-php-ext-install mysqli

# Crear tu usuario y darle permisos sobre la carpeta web
RUN useradd -m cpergar696
RUN chown -R cpergar696:cpergar696 /var/www/html

# Cambiar al usuario sin privilegios
USER cpergar696
