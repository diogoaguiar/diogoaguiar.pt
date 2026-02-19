import { readFileSync } from 'fs';
import { resolve } from 'path';
import Handlebars from 'handlebars';

export default function i18nHtml() {
    const root = resolve(import.meta.dirname, '..');
    const templatePath = resolve(root, 'src/template.html');

    const langs = {
        '/index.html': 'pt',
        '/en/index.html': 'en',
    };

    return {
        name: 'i18n-html',
        transformIndexHtml: {
            order: 'pre',
            handler(html, ctx) {
                const lang = langs[ctx.path];
                if (!lang) return html;

                const template = readFileSync(templatePath, 'utf-8');
                const data = JSON.parse(
                    readFileSync(resolve(root, `src/i18n/${lang}.json`), 'utf-8')
                );

                return Handlebars.compile(template)({ t: data });
            },
        },
        handleHotUpdate({ file, server }) {
            if (file.includes('template.html') || file.includes('i18n/')) {
                server.ws.send({ type: 'full-reload' });
            }
        },
    };
}
