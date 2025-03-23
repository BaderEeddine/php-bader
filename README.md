# PHP MVC framework

Minimalistic custom framework

#### Related core package : https://github.com/amha-osama/php-mvc-core

##
# Installation:
1. Download the archive or clone the project using git
2. Create `.env` file from `.env.example`
   
   ```
    mv .env.example .env
   ```
3. Run `composer`
   ```
    composer installe
   ```
5. Make sure you have docker installed. To see how you can install docker on Windows
6. Navigate to the project root directory and run

   ```
    docker-compose up -d
   ```  
7. open php may admin in browser : http://localhost:8081/
8. Run migrations by executing
   ```
    php vendor/bin/phinx migrate
   ```
9. Go to the `public`
10. Start php server by running command
    ```
    php -S localhost:8080
    ```
10. Open in browser : http://localhost:8080/
