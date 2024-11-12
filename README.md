# InvenFlow
A simple, intuitive web application built with Laravel 11 for managing and organizing inventory items efficiently.This application streamlines inventory tracking, making it easy to manage item details like quantities, prices, suppliers and categories.

## Features

- **Inventory Management**: Add, view, edit, and delete inventory items with fields like name, description, quantity, price, supplier and category.
- **Item Supplier & Category Management**: Add, view, edit, and delete suppliers and categories with fields like name, contact information,  and related items.
- **Sorting and Searching**: Sort and search through inventory items based on name, quantity, or price.
- **Pagination**: View inventory items with pagination for a better user experience.

## Prerequisites

Before you begin, make sure you have the following installed:

- PHP >= 8.0
- Composer
- MySQL or any compatible database
- Node.js & npm (for front-end assets and tooling)
- Laravel 11

## Setup Instructions

1. **Clone the repository:**

   ```bash
   git clone https://github.com/kaveeshahettige/InvenFlow.git
   cd InvenFlow

2. **Install dependencies**
    composer install
    npm install

3. **Create environment configuration**
    cp .env.example .env

4. **Generate the application key**
    php artisan key:generate

5. **Set up the database**

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=invenflow

    DB_USERNAME=root

    DB_PASSWORD=yourpassword

6. **php artisan migrate**
    php artisan migrate

7. **seed the database or use the provided database**    

7. **Compile front-end assets**
    npm run dev

8. **Start the development server**
    php artisan serve

## Technologies Used

- Laravel 11 - Backend framework
- MySQL - Database
- Blade - Templating engine
- Eloquent ORM - For managing relationships between inventory items, categories, and suppliers
- Tailwind CSS -  Front-end styling




