import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Open Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            colors: {
                primary:'#E53935',
                secondary:'#5F7D8B',
                blackButton:'#212121',
            },
        },
    },
    plugins: [],
};
