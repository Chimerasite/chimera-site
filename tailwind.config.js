import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                primary: ['Changa'],
            },
            colors: {
                baby: {
                    300: '#c4deff',
                    500: '#9DC9FF',
                },
                midnight: {
                    300: '#6683A6',
                    500: '#01316B',
                },
            }
        },
    },

    plugins: [forms],
};
