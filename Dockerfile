FROM php:8.1.6-apache

RUN apt-get update && apt-get install -y libicu-dev libpq-dev \
    && apt-get install libldap2-dev -y \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libzip-dev \
    && apt-get install -y poppler-utils \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-configure ldap \
    && docker-php-ext-install ldap \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install pdo_mysql

#remote vpn issue, use the smnvpn.cf.ac.uk (admin) VPN 
RUN apt-get update && apt-get install -y ldap-utils
RUN apt-get update && apt-get install -y iproute2

# Required for monitor to work
RUN apt-get update && apt-get install -y git

#Install composer
# Install no checks, not as safe for dev/prod, most probebly ok for CI
#RUN curl -sS https://raw.githubusercontent.com/composer/getcomposer.org/cb19f2aa3aeaa2006c0cd69a7ef011eb31463067/web/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.16
# Install with Integrity check, Example taken from https://hub.docker.com/_/composer
ENV COMPOSER_HOME /tmp
ENV COMPOSER_VERSION 2.1.0

RUN set -eux; \
    curl --silent --fail --location --retry 3 --output /tmp/installer.php --url https://raw.githubusercontent.com/composer/getcomposer.org/cb19f2aa3aeaa2006c0cd69a7ef011eb31463067/web/installer; \
    php -r " \
    \$signature = '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5'; \
    \$hash = hash('sha384', file_get_contents('/tmp/installer.php')); \
    if (!hash_equals(\$signature, \$hash)) { \
    unlink('/tmp/installer.php'); \
    echo 'Integrity check failed, installer is either corrupt or worse.' . PHP_EOL; \
    exit(1); \
    }"; \
    php /tmp/installer.php --no-ansi --install-dir=/usr/bin --filename=composer --version=${COMPOSER_VERSION}; \
    composer --ansi --version --no-interaction; \
    rm -f /tmp/installer.php; \
    find /tmp -type d -exec chmod -v 1777 {} +
RUN composer -V

#set our application folder as an environment variable
ENV APP_HOME /var/www/html

#change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#change the web_root to cakephp /var/www/html/webroot folder
RUN sed -i -e "s/html/html\/webroot/g" /etc/apache2/sites-enabled/000-default.conf

# enable apache module rewrite
RUN a2enmod rewrite

#change ownership of our applications
RUN chown -R www-data:www-data $APP_HOME

# Add unzip package for safer package install
RUN apt-get install -y unzip

#create image folder, will be mounted by shell script
RUN apt-get install -y cifs-utils 
RUN mkdir /tmp/SIMS_PICS
RUN chown -R www-data:www-data /tmp/SIMS_PICS

#install wkhtmltopdf (PDF generation) 
RUN apt-get update \
    && apt-get install -y \
    curl \
    libxrender1 \
    libfontconfig \
    libxtst6 \
    xz-utils \
    fontconfig \
    xfonts-75dpi \
    xfonts-base
RUN curl "https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.buster_arm64.deb" -L -o "/tmp/wkhtmltox_0.12.6-1.buster_arm64.deb"
RUN dpkg -i /tmp/wkhtmltox_0.12.6-1.buster_arm64.deb
RUN apt-get update

#reports location
RUN mkdir /tmp/REPORTS
RUN mkdir /tmp/UPLOADS
RUN chown -R www-data:www-data /tmp/REPORTS
RUN chown -R www-data:www-data /tmp/UPLOADS

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug\
    && echo xdebug.mode=coverage > /usr/local/etc/php/conf.d/xdebug.ini
