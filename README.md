
<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# Blog Post Management System

This **Blog Post Management System** is a Laravel-based web application designed to manage blog posts efficiently while ensuring secure authentication and role-based access control (RBAC). The application features user-friendly dashboards for role-specific actions and robust API functionality for seamless interaction.

---

## Key Features

- **Authentication**:
  - User authentication powered by Laravel Sanctum.
  - Secure login and access to role-restricted routes.
- **Role-Based Access Control (RBAC)**:
  - Admin, Editor, and Viewer roles.
  - Role-based permissions enforced through middleware.
- **Blog Management**:
  - CRUD functionality for blog posts (Create, Read, Update, Delete).
  - Relationships between blog posts and users.
- **Role-Specific Dashboards**:
  - Separate dashboards for Admin and Editor roles.
- **Pre-Seeded Data**:
  - Database seeded with sample users and roles for testing.
- **API Validation**:
  - Postman used for endpoint and authentication flow testing.

---

## Getting Started

### Prerequisites

- **PHP** >= 8.0
- **Composer**
- **MySQL** or any preferred database
- **Node.js** and npm (optional for front-end scaffolding)

---

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/YazanM23/blog-posts
   cd blog-posts
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Set up environment variables**:
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

6. **Install Sanctum**:
   ```bash
   php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
   php artisan migrate
   ```

7. **Start the application**:
   ```bash
   php artisan serve
   ```

---

## Pre-Seeded Users

The application includes pre-seeded users for testing role-based access control:

- **Admin**: `admin@example.com` / `password`
- **Editor**: `editor@example.com` / `password`
- **Viewer**: `viewer@example.com` / `password`

---

## API Testing

- **Postman**: Import the Postman collection provided in the `/tests` folder to test API endpoints. Ensure authentication tokens are included for restricted routes.

---

## Project Structure

- **Routes**:
  - `routes/web.php` for web routes.
  - `routes/api.php` for API routes.
- **Controllers**: Located in `app/Http/Controllers`.
- **Middleware**: Custom RBAC middleware implemented in `app/Http/Middleware`.
- **Database**:
  - Migrations in `database/migrations`.
  - Seeders in `database/seeders`.

---

## Contributing

Contributions are welcome! Follow these steps to contribute:

1. **Fork the repository**.
2. **Create a new branch** for your feature/bugfix.
3. **Submit a pull request**.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Contact

For queries or feedback, reach out:

- **Name**: Yazan
- **Email**: yazan@example.com
