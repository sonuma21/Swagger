# User Management API

A RESTful API backend built with Laravel 12, powering the User Management App. It handles authentication via Laravel Passport (OAuth2), user CRUD operations, and supports users favorites feature.

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| PHP | ^8.2 |
| Authentication | Laravel Passport 13 (OAuth2 / JWT) |
| Authorization | Spatie Laravel Permission |
| API Docs | L5-Swagger (Swagger/OpenAPI) |
| Code Style | Laravel Pint |

---

## Requirements

- PHP >= 8.2
- Composer
- MySQL / PostgreSQL / SQLite
- Node.js

---

## Getting Started

### Setup Process

```bash
# 1. Clone the repository
git clone <your-repo-url>
cd <project-folder>

# 2. Install PHP dependencies
composer install

# 3. Set up environment
cp .env.example .env
php artisan key:generate

php artisan migrate

# 4. Install Passport (generates OAuth keys)
php artisan passport:install

```

---

## Running the Project

```bash
# Start all services together (server + queue + vite)
composer run dev

# Or start Laravel server only
php artisan serve
```

---

## Environment Variables

Key variables to configure in your `.env`:

```env
APP_NAME=UserManagementAPI
APP_ENV=local
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_management
DB_USERNAME=root
DB_PASSWORD=

PASSPORT_PASSWORD_CLIENT_ID=
PASSPORT_PASSWORD_CLIENT_SECRET=
```

---

## Project Structure

```
app/
├── Actions/
│   ├── Auth/
│   │   ├── LoginAction.php
│   │   ├── LogoutAction.php
│   │   └── RefreshTokenAction.php
│   └── User/
│       ├── ListUserAction.php
│       ├── StoreUserAction.php
│       └── UserPaginationAction.php
├── Http/
│   ├── Controllers/Api/
│   │   ├── AuthController.php
│   │   └── UserController.php
│   ├── Requests/
│   │   ├── Auth/
│   │   │   ├── LoginRequest.php
│   │   │   └── RefreshtokenRequest.php
│   │   └── User/
│   │       ├── IndexUserRequest.php
│   │       └── StoreUserRequest.php
│   ├── Resources/
│   │   ├── LoginResource.php
│   │   ├── RefreshTokenResource.php
│   │   └── UserResource.php
│   └── Responses/
│       └── ApiResponse.php
├── Models/
│   └── User.php
routes/
└── api.php
```

---

## API Documentation (Swagger)

This project uses **L5-Swagger** to auto-generate OpenAPI docs.

```bash
# Generate Swagger docs
composer run swagger
# or
php artisan l5-swagger:generate
```

Then visit: `http://localhost:8000/api/docs`

---

## Code Style

This project uses **Laravel Pint** for consistent code formatting.

```bash
composer run pint
# or
./vendor/bin/pint
```

## License

This project is licensed under the MIT License.
