# Project Setup Guide

This guide explains how to set up and run the project on your local environment.

---

### 1. Clone the repository
```bash
git clone https://github.com/hasibjey/niceshop.git
cd niceshop
```
Clones the repository to your machine and enters the project directory.

### 2. Install PHP dependencies
```bash
composer install
```
Installs the required PHP packages listed in composer.json.

### 3. Update PHP dependencies
```bash
composer update
```
This will update all PHP packages to the latest versions allowed by your composer.json.

### 4. Install Node.js / frontend dependencies
```bash
npm install
```
Installs frontend libraries and build tools (Tailwind, Vite, Alpine, etc.).

### 5. Set up environment configuration
```bash
cp .env.example .env
php artisan key:generate
```
Creates a .env file from the example and generates an app key.
Edit .env to configure database credentials, app URL, and mail settings.

### 6. Run database migrations and seeders
```bash
php artisan migrate
```
Creates database tables and inserts initial data (divisions, districts, upazilas, etc.).

### 7. Start the Laravel development server
```bash
php artisan serve
```
Runs the backend. By default, you can access it at http://127.0.0.1:8000.

### 8. Build and run frontend assets
```bash
npm run dev
```
Compiles and watches frontend assets (CSS/JS) for changes, with hot reload.

### 7. Start the Laravel development server
```bash
php artisan serve
```


## Notes

- App structure
    - app/Models/ → Eloquent models (Product, Category, Discount, etc.)
    - database/seeders/ → Seeder files for divisions, districts, upazilas
    - resources/js/ → JavaScript (cart, common functions, Alpine components)
    - resources/css/ → Tailwind CSS files
    - routes/web.php → Web routes

- Production build
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

- Troubleshooting
  - SQL connection errors → check .env DB settings (DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD).
  - Clear cache after .env changes:
    ```bash
    php artisan config:clear
    php artisan cache:clear
    ```
  - CSS/JS not updating → restart npm run dev.
 

I can also create a **ready-to-download `README.md` file** for you with this content so you just place it in your project.Do you want me to do that?

