# Use the official PHP image as a base
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    gnupg \
    pkg-config \
    libzip-dev \
    nano

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install composer dependencies (if composer.json exists)
RUN if [ -f composer.json ]; then composer install; fi

# Install npm dependencies (if package.json exists)
RUN if [ -f package.json ]; then npm install && npm run build; fi

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 777 /var/www/bootstrap/cache /var/www/storage

# Expose port
EXPOSE 3000

# Start PHP-FPM
CMD ["php-fpm", "-F"]
