# Laravel Inertia.js Vue 3 SSR Project

This project is a web application built using Laravel with Inertia.js, Vue 3, and Server-Side Rendering (SSR). This setup allows you to build a modern single-page application (SPA) using Laravel as the backend while leveraging Vue.js for the frontend, with the added benefit of SSR for improved performance and SEO.
## Photos
![image](https://github.com/user-attachments/assets/15b5e174-c6e5-498f-a06a-aad06929c7dd)
![image](https://github.com/user-attachments/assets/c0d38b68-f375-4390-9915-f49604d02a7b)
![image](https://github.com/user-attachments/assets/68430f5d-a902-4b5b-ae52-30a92b6cb0bd)

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Building for Production](#building-for-production)
- [File Structure](#file-structure)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Node.js >= 14.x
- Composer >= 2.x
- MySQL or any other supported database
- NPM or Yarn
- Redis (for SSR caching and queue management)
- [Laravel Sail](https://laravel.com/docs/8.x/sail) (optional, for Docker-based development environment)

## Installation

To install the project, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/DogukanTuncay/Larave-Inertia-Vue3-SSR-Test.git
    cd Larave-Inertia-Vue3-SSR-Test
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Create a copy of the `.env` file:**

    ```bash
    cp .env.example .env
    ```

5. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

6. **Set up your database:**

    - Update the `.env` file with your database credentials.
    - Run migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

7. **Install Inertia.js SSR dependencies:**

    ```bash
    npm install @inertiajs/server
    ```

8. **Build the assets:**

    ```bash
    npm run dev
    ```

## Configuration

### Environment Variables

Ensure your `.env` file has the following configurations:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

SSR_ENABLED=true
