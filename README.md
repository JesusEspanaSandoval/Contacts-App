# Contacts App
## Local setup
```bash
composer install
php artisan key:generate
```

Start you mysql instance and create a DB with the "contacts_app" name
```sql
CREATE DATABASE contacts_app;
```

And now migrate after that start the project
```bash
php artisan migrate
php artisan serve
```