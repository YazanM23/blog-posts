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

## Key Features

- **Authentication**:
  - User authentication powered by Laravel Sanctum/Passport.
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

## Getting Started

### Prerequisites

- PHP >= 8.0
- Composer
- MySQL or any preferred database
- Node.js and npm (optional for front-end scaffolding)

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/YazanM23/blog-posts
   cd blog-posts
   
1. Clone the repository:
   ```bash
   git clone https://github.com/YazanM23/blog-posts
   cd blog-posts
  
3. Set up environment variables:
   ```bash
  cp .env.example .env
  
4. Generate application key:
    ```bash
 php artisan key:generate
  


