import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Mona Sans', ...defaultTheme.fontFamily.sans],
            },

            keyframes: {
                scale_in: {
                    '0%' : {transform:'scale(1.1)'},
                },
                fade_in: {
                    '0%' : {opacity: 0},
                    '25%' : {opacity: 0},
                    '100%' : {opacity: 1},
                },
            },
            animation: {
                scale_in: '.6s .1s scale_in backwards',
                fade_in: 'fade_in .4s ease'
            }
        },
    },

    plugins: [
        forms,
        require('tailwind-hamburgers')
    ],
};
