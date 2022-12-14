import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js','resources/css/font-awesome.min.css','/resources/css/aos.css','resources/css/owl.carousel.min.css','resources/css/owl.theme.default.min.css','resources/js/app.js','resources/js/jquery.min.js','/resources/js/aos.js','resources/js/owl.carousel.min.js','resources/js/smoothscroll.js','resources/js/custom.js'
            ],
            refresh: true,
        }),
    ],
});
