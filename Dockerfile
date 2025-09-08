# Use WordPress with Apache base image
FROM wordpress:6.4-apache

# Set working directory
WORKDIR /var/www/html

# Install additional PHP extensions and tools
RUN apt-get update && apt-get install -y \
    wget \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Copy theme files to WordPress themes directory
COPY . /var/www/html/wp-content/themes/arontara/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/arontara/
RUN chmod -R 755 /var/www/html/wp-content/themes/arontara/

# Create uploads directory with proper permissions
RUN mkdir -p /var/www/html/wp-content/uploads && \
    chown -R www-data:www-data /var/www/html/wp-content/uploads && \
    chmod -R 775 /var/www/html/wp-content/uploads

# Remove X-Frame-Options header to allow embedding
RUN echo 'Header unset X-Frame-Options' >> /etc/apache2/apache2.conf

# Enable Apache headers module
RUN a2enmod headers

# Set Persian locale support
ENV LANG=fa_IR.UTF-8
ENV LANGUAGE=fa_IR:fa
ENV LC_ALL=fa_IR.UTF-8

# Create a basic wp-config.php if it doesn't exist
RUN echo "<?php\n\
if (!file_exists('/var/www/html/wp-config.php')) {\n\
    \$config_content = \"<?php\\n\";\n\
    \$config_content .= \"define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress');\\n\";\n\
    \$config_content .= \"define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wordpress');\\n\";\n\
    \$config_content .= \"define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wordpress');\\n\";\n\
    \$config_content .= \"define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'localhost');\\n\";\n\
    \$config_content .= \"define('DB_CHARSET', 'utf8mb4');\\n\";\n\
    \$config_content .= \"define('DB_COLLATE', 'utf8mb4_persian_ci');\\n\";\n\
    \$config_content .= \"define('AUTH_KEY', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('SECURE_AUTH_KEY', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('LOGGED_IN_KEY', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('NONCE_KEY', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('AUTH_SALT', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('SECURE_AUTH_SALT', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('LOGGED_IN_SALT', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"define('NONCE_SALT', '\" . bin2hex(random_bytes(32)) . \"');\\n\";\n\
    \$config_content .= \"\\$table_prefix = 'wp_';\\n\";\n\
    \$config_content .= \"define('WP_DEBUG', false);\\n\";\n\
    \$config_content .= \"define('WP_LANG', 'fa_IR');\\n\";\n\
    \$config_content .= \"if (!defined('ABSPATH')) define('ABSPATH', __DIR__ . '/');\\n\";\n\
    \$config_content .= \"require_once ABSPATH . 'wp-settings.php';\\n\";\n\
    file_put_contents('/var/www/html/wp-config.php', \$config_content);\n\
}\n\
?>" > /var/www/html/init-config.php

# Custom entrypoint script
RUN echo '#!/bin/bash\n\
set -euo pipefail\n\
\n\
# Initialize wp-config.php if needed\n\
php /var/www/html/init-config.php\n\
\n\
# Start Apache\n\
exec apache2-foreground' > /usr/local/bin/custom-entrypoint.sh

RUN chmod +x /usr/local/bin/custom-entrypoint.sh

# Expose port 80
EXPOSE 80

# Set the custom entrypoint
ENTRYPOINT ["/usr/local/bin/custom-entrypoint.sh"]