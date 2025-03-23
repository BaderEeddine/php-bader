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
3. Run `composer installe`
   ```
    composer installe
   ```
4. Navigate to the project root directory and run

   ```
    docker-compose up -d
   ```
5. open php may admin in browser : http://localhost:8081/
6. Run migrations by executing
   ```
    php vendor/bin/phinx migrate
   ```
