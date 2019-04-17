This repo is created to simulate Project File Structure that resembles to some modern frameworks. This is a practice project created to practice concepts of Laracast's "the PHP Practicioner" course by Jeffrey Way. If you have any spare time and you are not the best php developer in the world, you can check it out.

Tree View:

|-app-|
|     |-controllers-|
|     |             |-PagesController.php
|     |             |-UsersController.php
|     |
|     |-models-|
|     |        |-Project.php
|     |
|     |-views-|
|     |       |-partials-|
|     |       |          |-footer.php
|     |       |          |-head.php
|     |       |          |-nav.php
|     |       |
|     |       |-about.view.php
|     |       |-contact.view.php
|     |       |-index.view.php
|     |       |-users.view.php
|     |
|     |-routes.php
|            
|-core-|
|      |-database-|
|      |          |-Connection.php
|      |          |-QueryBuilder.php
|      |
|      |-App.php
|      |-bootstrap.php
|      |-Request.php
|      |-Router.php
|
|-public-|
|        |-css-|
|              |-style.css
|
|-vendor-|
|        |-composer-|
|        |          |-autoload_classmap.php
|        |          |-autoload_namespaces.php
|        |          |-autoload_psr4.php
|        |          |-autoload_real.php
|        |          |-autoload_static.php
|        |          |-ClassLoader.php
|        |          |-installed.json
|        |          |-LICENSE
|        |
|        |-autoload.php
|
|-composer.json
|-config.php
|-index.php
|-README.md
