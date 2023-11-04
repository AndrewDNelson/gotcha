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
                'scale-in': {
                    '0%' : {transform:'scale(1.1)'},
                },
                'slide-down': {
                    '0%' : {
                        transform:'translateY(-100%)',
                        opacity: 0,
                    },
                },
                'slide-up': {
                    '0%' : {
                        transform:'translateY(100%)',
                        opacity: 0,
                    },
                },
            },
            animation: {
                'scale-in': '.6s .1s scale-in backwards',
            },
            screens: {
                'xs': '390px', // min-width
            },
        },
    },

    plugins: [
        forms,
        require('tailwind-hamburgers')
    ],
};
