FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install zip pdo pdo_sqlite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy existing Laravel project files
COPY . /app

# Copy environment file
COPY .env.example .env

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate Laravel application key
RUN php artisan key:generate

# Cache Laravel config, routes, views
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Expose port 8000 and run the Laravel development server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
