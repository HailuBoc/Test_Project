# Laravel Project

A fully initialized Laravel framework project with complete directory structure, configuration files, and ready-to-use components.

## Requirements

- PHP 8.1 or higher
- Composer (optional for this minimal setup)
- Node.js & npm (for frontend assets)
- MySQL/PostgreSQL (or SQLite for development)

## Quick Start

1. Environment setup:
```bash
cp .env.example .env
php artisan key:generate
```

2. Start development server:
```bash
php artisan serve
```

3. (Optional) Build frontend assets:
```bash
npm install
npm run dev
```

The application will be available at `http://localhost:8000`

## Project Structure

```
├── app/
│   ├── Console/          # Console commands
│   ├── Exceptions/       # Exception handlers
│   ├── Http/
│   │   ├── Controllers/  # Route controllers
│   │   ├── Kernel.php    # HTTP kernel
│   │   └── Middleware/   # HTTP middleware
│   ├── Models/           # Eloquent models
│   └── Providers/        # Service providers
├── bootstrap/            # Framework bootstrap
├── config/               # Configuration files
├── database/
│   ├── migrations/       # Database migrations
│   └── seeders/          # Database seeders
├── public/               # Web root
├── resources/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript
│   └── views/            # Blade templates
├── routes/               # Route definitions
├── storage/              # Logs, cache, uploads
├── tests/                # Test files
└── vendor/               # Dependencies

```

## Configuration Files

- `config/app.php` - Application configuration
- `config/database.php` - Database connections
- `config/cache.php` - Cache configuration
- `config/logging.php` - Logging configuration
- `config/mail.php` - Mail configuration
- `config/queue.php` - Queue configuration
- `config/session.php` - Session configuration
- `config/filesystems.php` - Filesystem configuration

## Key Files

- `.env` - Environment variables
- `artisan` - CLI entry point
- `composer.json` - PHP dependencies
- `package.json` - Node dependencies
- `vite.config.js` - Frontend build configuration
- `phpunit.xml` - Testing configuration

## Available Artisan Commands

```bash
php artisan serve              # Start development server
php artisan migrate            # Run database migrations
php artisan tinker             # Interactive shell
php artisan make:model         # Create a new model
php artisan make:controller    # Create a new controller
php artisan make:migration     # Create a new migration
php artisan make:middleware    # Create a new middleware
php artisan make:provider      # Create a new provider
```

## Frontend Development

```bash
npm install                    # Install dependencies
npm run dev                    # Start Vite dev server
npm run build                  # Build for production
```

## Testing

```bash
php artisan test               # Run tests
php artisan test --filter=TestName  # Run specific test
```

## Directory Permissions

Ensure these directories are writable:
- `storage/`
- `bootstrap/cache/`

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
# Commit 8 - 2022-01-04 22:17:38
# Commit 45 - 2022-04-29 12:39:45
# Commit 8 - 2022-01-06 18:45:06
