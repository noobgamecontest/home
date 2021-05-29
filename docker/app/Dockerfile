FROM php:8.0-fpm

ARG WWWUSER
ARG WWWGROUP

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Clear cache
RUN apt-get -y autoremove \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Get latest Composer
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

# Install Yarn
RUN curl -sL https://deb.nodesource.com/setup_15.x | bash - \
	&& apt-get install -y nodejs \
	&& curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
	&& echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
	&& apt-get update \
	&& apt-get install -y yarn \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Create app'owner
RUN groupadd --force -g $WWWGROUP heracles
RUN useradd --create-home --shell /bin/bash --no-user-group --gid $WWWGROUP --uid $WWWUSER heracles
