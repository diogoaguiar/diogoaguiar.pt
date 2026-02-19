# Project Notes

- This is a **public repository**. Never commit secrets, credentials, API keys, or any sensitive information.

# Stack

- Static single-page site: `index.html`
- **Tailwind CSS v4** via standalone CLI (`@tailwindcss/cli`)
- **Alpine.js** via CDN (for mobile menu toggle)
- Deployed to **GitHub Pages** at diogoaguiar.pt

# Structure

- `index.html` — the entire site
- `src/app.css` — Tailwind source (imports, theme, custom styles)
- `dist/app.css` — compiled CSS output (gitignored, built by CI)
- `favicon.ico`, `favicon.svg`, `apple-touch-icon.png`, `robots.txt` — static assets at root
- `CNAME` — GitHub Pages custom domain

# Development

- `npm run dev` — watch mode for CSS
- `npm run build` — production CSS build
- Open `index.html` directly in a browser to preview

# Conventions

- All content is inlined in `index.html`
- Icons are inlined SVGs from Heroicons
- No build step for HTML or JS — only CSS needs compilation
