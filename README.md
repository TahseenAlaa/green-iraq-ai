# Green Iraq AI
Fighting climate change ideas in Iraq based on artificial intelligence.

# Installation
## Requirements
- PHP >= 8.0
- NodeJS LTS: 16.16.0 (includes npm 8.11.0)

## Installation
- Run `Composer Install` and `npm install`.
- Run `cp .env.example .env` and fill your values for (OpenAPI token, SQLite database name and path, etc.).
- Run `php artisan key:generate` to generate the encryption key.
- Run `php artisan migrate` to generate the database tables.
- Run `php artisan serve` for running the backend server.
- Run `npm run dev` for generating the assets.
- Open your browser to the URL `http://127.0.0.1:8000`.
