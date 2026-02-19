# diogoaguiar.pt

Personal website — static HTML, Tailwind CSS, Alpine.js.

## Setup

```bash
npm install
```

## Development

```bash
npm run dev
```

Watches `src/app.css` and rebuilds on changes. Open `index.html` directly in the browser.

## Build

```bash
npm run build
```

Compiles and minifies Tailwind CSS to `dist/app.css`.

## Deployment

Automated via GitHub Actions on every push to `main`:

1. Installs dependencies
2. Builds CSS
3. Deploys to GitHub Pages at [diogoaguiar.pt](https://diogoaguiar.pt)
