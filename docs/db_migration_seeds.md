**Создаем БД blog-1**

`CREATE SCHEMA 'blog-1' DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`

**Создаем модели и миграции**

`php artisan make:model Models/BlogCategory -m`

`php artisan make:model Models/BlogPost -m`

**Создаем сиды**

`php artisan make:seeder UsersTableSeeder`

`php artisan make:seeder BlogCategoriesTableSeeder`

###### **Запуск сидов**

`php artisan db:seed`

`php artisan db:seed --class=UserTableSeeder`

`php artisan migrate:refresh --seed`

**Создаем фабрики**

`php artisan make:factory BlogPostFactory`