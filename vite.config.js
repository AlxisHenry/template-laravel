import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/scss/app.scss',
            'resources/js/app.js',
            'resources/js/components/navbar.js',
            'resources/js/components/auth.js',
            'resources/js/components/auth/auth.sign-up.js'
        ]),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    refresh: true,
    server: {
        host: "dev.local",
        port: 8001
    }
});
