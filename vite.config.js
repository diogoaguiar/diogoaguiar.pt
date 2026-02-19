import { resolve } from 'path';
import tailwindcss from '@tailwindcss/vite';
import i18nHtml from './plugins/i18n.js';

export default {
    plugins: [i18nHtml(), tailwindcss()],
    build: {
        rollupOptions: {
            input: {
                main: resolve(import.meta.dirname, 'index.html'),
                en: resolve(import.meta.dirname, 'en/index.html'),
            },
        },
    },
};
