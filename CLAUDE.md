# Project Notes

- This is a **public repository**. Never commit secrets, credentials, API keys, or any sensitive information.

# Stack

- Static multi-page site built with **Vite**
- **Tailwind CSS v4** via `@tailwindcss/vite`
- **Alpine.js** via CDN (for mobile menu toggle)
- **Handlebars** templates with i18n (PT + EN)
- Deployed to **GitHub Pages** at diogoaguiar.pt

# Structure

- `index.html` — Vite entry stub (PT)
- `en/index.html` — Vite entry stub (EN)
- `src/template.html` — Single Handlebars template (source of truth)
- `src/app.css` — Tailwind source (imports, theme, custom styles)
- `src/i18n/pt.json` — Portuguese translations
- `src/i18n/en.json` — English translations
- `plugins/i18n.js` — Custom Vite plugin for i18n template rendering
- `vite.config.js` — Vite configuration
- `public/` — Static assets (CNAME, favicons, robots.txt, webmanifest)
- `dist/` — Build output (gitignored)

# Development

- `npm run dev` — Vite dev server with hot reload
- `npm run build` — Production build to `dist/`
- `npm run preview` — Preview production build locally

# Conventions

- All translatable content uses Handlebars placeholders (`{{t.keyName}}`) in `src/template.html`
- Translation strings live in `src/i18n/*.json` files
- Icons are inlined SVGs from Heroicons
- Static assets go in `public/` (copied verbatim to `dist/` by Vite)
