# ─────────────────────────────────────────────
# Stage 1 – builder: prepare WordPress files
# ─────────────────────────────────────────────
FROM php:8.2-cli AS builder

WORKDIR /var/www/html

COPY . .

# Remove files not needed in the runtime image
RUN rm -rf \
    wp_dump.sql \
    *.tar.gz \
    Default.html \
    robot.txt \
    docker/ \
    .git/ \
    .gitignore \
    wp-config.php

# ─────────────────────────────────────────────
# Stage 2 – runtime: Apache + PHP + WordPress
# ─────────────────────────────────────────────
FROM php:8.2-apache AS runtime

# Install system libs and PHP extensions required by WordPress
RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libwebp-dev \
        libzip-dev \
        libonig-dev \
        libxml2-dev \
        libicu-dev \
        curl \
        unzip \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install -j"$(nproc)" \
        gd \
        mysqli \
        pdo \
        pdo_mysql \
        zip \
        opcache \
        exif \
        intl \
        mbstring \
        xml \
    && apt-get purge -y --auto-remove \
    && rm -rf /var/lib/apt/lists/*

# PHP settings tuned for WordPress (uploads, memory, execution time)
RUN { \
    echo "upload_max_filesize=256M"; \
    echo "post_max_size=256M"; \
    echo "memory_limit=256M"; \
    echo "max_execution_time=300"; \
    echo "max_input_vars=5000"; \
} > /usr/local/etc/php/conf.d/wordpress.ini

# OPcache settings
RUN { \
    echo "opcache.enable=1"; \
    echo "opcache.memory_consumption=128"; \
    echo "opcache.interned_strings_buffer=8"; \
    echo "opcache.max_accelerated_files=10000"; \
    echo "opcache.revalidate_freq=2"; \
} > /usr/local/etc/php/conf.d/opcache.ini

# Enable Apache modules
RUN a2enmod rewrite headers

# Copy prepared WordPress files from builder
COPY --from=builder --chown=www-data:www-data /var/www/html /var/www/html

# Inject wp-config driven by environment variables at runtime
COPY --chown=www-data:www-data wp-config.docker.php /var/www/html/wp-config.php

# Writable directories for WordPress
RUN chown -R www-data:www-data \
        /var/www/html/wp-content/uploads \
        /var/www/html/wp-content/cache \
    || true

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=5s --start-period=30s \
    CMD curl -sf http://localhost/ || exit 1
