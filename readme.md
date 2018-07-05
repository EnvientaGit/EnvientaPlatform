# ENVIENTA Platform

... desc ...

## Get started

- Download and install [composer](https://getcomposer.org/)
- In the project root folder run **composer update**
- Copy **.env.example** to **.env**
- Run **artisan key:generate**
- Create database/database.sqlite with **touch database/database.sqlite**
- Set database in **.env** to
  DB_CONNECTION=sqlite
  DB_DATABASE=database/database.sqlite
- Run **artisan config:cache**
- Run **artisan migrate:refresh**
- Run **artisan db:seed** to fill database with test data
- Run **artisan serve**
- Type **http://127.0.0.1:8000** to your browser. If everythig fine, you will see the front page of the platform.
- Let's start coding, and save the world! 

