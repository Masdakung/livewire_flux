import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // refresh: [
            //     `resources/views/**/*`,
            //     'routes/**',
            //     'app/**',
            //     'lang/**',
            // ],
            // refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        // host: '0.0.0.0',
        // port: '8001',
        // hmr: {
        //     host: 'localhost',
        //     protocol: 'ws',
        // },
        // watch: {
        //     usePolling: true,
        // }
    }
});