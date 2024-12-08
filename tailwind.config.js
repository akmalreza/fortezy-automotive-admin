import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const isProduction = process.env.NODE_ENV === 'production';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ['Montserrat', 'sans-serif'],
            },
            fontWeight: {
                normal: 400,
                semibold: 600,
                bold: 700,
            },
            colors: {
                primary: '#004225',
                secondary: '#C0C0C0',
                accent: '#FF8700',
                'dark-primary': '#1C1C1C',
            },
        },
    },

    plugins: [forms],
};
