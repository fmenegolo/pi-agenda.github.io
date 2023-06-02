# Define a imagem base
FROM php:7.4-apache

# Instala a extensão pdo_mysql
RUN docker-php-ext-install pdo_mysql

# Copie todo o conteúdo do diretório atual para o diretório de trabalho do contêiner
COPY . /var/www/html

# Habilite o módulo de reescrita do Apache
RUN a2enmod rewrite

# Reinicie o servidor Apache
RUN service apache2 restart
