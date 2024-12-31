# Use the official PHP image as a base
FROM php:8.2-fpm

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
    libzip-dev

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

# Set permissions
RUN chown -R www-data:www-data /var/www /var/www/storage /var/www/bootstrap/cache /var/www/public

RUN chmod -R 777 /var/www /var/www/bootstrap/cache /var/www/storage /var/www/public

# Install composer dependencies (if composer.json exists)
# RUN if [ -f composer.json ]; then composer clear-cache && composer install && php artisan key:generate; fi

# Install npm dependencies (if package.json exists)
# RUN if [ -f package.json ]; then npm install && npm run build; fi

# Expose port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm", "-F"]
