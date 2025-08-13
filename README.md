Here are the steps to clone and run a Laravel application:

## 1. Prerequisites
Make sure you have these installed:
- **PHP** (version 8.1 or higher for Laravel 10+)
- **Composer** - PHP dependency manager
- **Git** - for cloning repositories
- **Database** - MySQL, PostgreSQL, or SQLite
- **Web server** - Apache/Nginx (or use Laravel's built-in server)

## 2. Clone the Repository
```bash
# Clone the Laravel project
git clone https://github.com/Harithamolvh/laravel-rest-api-backend.git

# Navigate into the project directory
cd laravel-rest-api-backend
```

## 3. Install PHP Dependencies
```bash
# Install Composer dependencies
composer install
```

## 4. Set Up Environment Configuration
```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```


## 5. Run the Application
```bash
# Start Laravel development server
php artisan serve

# The app will be available at http://127.0.0.1:8000
```

