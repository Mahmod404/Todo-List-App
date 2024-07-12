# Todo-List-App
This is a Todo List application built with Laravel 11. The application allows users to create, read, update, and delete their tasks. It includes user authentication and has functionalities for viewing tasks by their status and due date.

## Features

- User Authentication
- CRUD operations for tasks
- Status and due date for tasks
- View tasks by status (pending, completed) and due date (today)
- Search functionality

## Requirements

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL or any other database supported by Laravel

## Installation

Follow these steps to set up and run the application:

### 1. Clone the Repository

```sh
git clone https://github.com/yourusername/todo-list-app.git
cd todo-list-app
```

### 2. Install Dependencies

```sh
composer install
npm install
npm run dev
```

### 3. Set Up Environment Variables

Copy the `.env.example` file to `.env` and set your database credentials and other environment variables.

```sh
cp .env.example .env
```

Edit the `.env` file to configure your database and other settings:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Generate Application Key

```sh
php artisan key:generate
```

### 5. Run Database Migrations

```sh
php artisan migrate
```

### 6. Seed the Database

If you have seeders set up, you can seed the database with initial data:

```sh
php artisan db:seed
```

### 7. Serve the Application

```sh
php artisan serve
```

The application will be available at `http://127.0.0.1:8000`.
