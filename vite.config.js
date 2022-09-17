import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import { fileURLToPath, URL } from "node:url";


export default defineConfig({
    plugins: [
        vue(),
        laravel([
            'resources/css/app.css',
            'resources/js/app.ts',
        ]),
    ],
    resolve: {
        alias: {
            "@": fileURLToPath(new URL("./resources", import.meta.url)),
        },
    },
});
