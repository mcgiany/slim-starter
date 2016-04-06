# Slim Framework 3 Skeleton Application by mcgiany

Modificated skeleton of slim application. Contains settings for database connection. Preparation for Controllers and Middlewares with examples.
This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project mcgiany/slim-starter [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's directory.
* Ensure `logs/` is web writeable.