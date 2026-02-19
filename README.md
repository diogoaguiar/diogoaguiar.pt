# diogoaguiar.pt

Personal website built with Laravel 12, exported as a static site to GitHub Pages.

> **Note:** This repository is public. Do not commit secrets, credentials, API keys, or any sensitive information.

## Tech Stack

- **Backend:** PHP 8.5, Laravel 12, Livewire 4
- **Frontend:** Tailwind CSS 4, Flux UI (free), Vite 7
- **Testing:** Pest 4
- **Database:** SQLite (dev only)
- **Deployment:** Static export via `spatie/laravel-export` → GitHub Pages

## Setup

```bash
composer setup
```

This runs:

1. `composer install`
2. Copies `.env.example` to `.env`
3. Generates the app key
4. Runs migrations
5. `npm install`
6. `npm run build`

## Development

```bash
composer run dev
```

Starts the PHP dev server, queue listener, log viewer (Pail), and Vite dev server concurrently.

## Testing

```bash
php artisan test --compact
```

## Code Formatting

```bash
vendor/bin/pint
```

## Deployment

Deployment is automated via GitHub Actions on every push to `main`:

1. Installs PHP and Node dependencies
2. Builds frontend assets
3. Exports the site to static HTML (`php artisan site:export` → `dist/`)
4. Deploys `dist/` to GitHub Pages at [diogoaguiar.pt](https://diogoaguiar.pt)

### Manual Export

```bash
php artisan site:export
```

The exported static files are written to the `dist/` directory.
