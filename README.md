# Docker Nginx PHP 
Local env. setup for prototyping in PHP

## Setup includes

* PHP8.0-fpm (Opcache)
* Latest Xdebug  
* Latest Composer
* pdo, git, zip, curl, ca-cert, sqlite3, postgresql-client, mc, nano

## Prerequisites 

* You need to have Docker already installed
* Nginx is set to use port 80, make sure this port is available. You can change it by editing .env
 
## Installation 

* Download this repository
* All Docker files are stored in the /docker folder
* Copy .env.example to .env. This file is required during a build.  
* To start you need to call ```docker-compose -d --build```, it will take few mins to download dependencies and build new images.

## Troubleshooting

* Getting Error:
  WARNING: The NGINX_HTTP variable is not set. Defaulting to a blank string.
  ERROR: The Compose file './docker-compose.yaml' is invalid because:
  services.dnp-nginx.ports contains an invalid type, it should be a number, or an object
    
* Solution:
  Create .env file using provided template .env.example
  ```
  cp .env.example .env
  ```
