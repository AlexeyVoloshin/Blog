## **Контроллеры**

**Создание REST-контроллера**

`php artisan make:controller RestTestController --resource`

**Контроллеры приложения**

###### Базовый(родительский) контроллер блога

`php artisan make:controller Blog/BaseController`

###### Контроллер статей блога

`php artisan make:controller Blog/PostController --resource`