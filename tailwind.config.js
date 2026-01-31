import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                teal: {
                    1: "#066D95",
                    2: "#009F91",
                },
                dark: {
                    1: "#292929",
                },
                red: {
                    1: "#FB3640",
                },
                light: {
                    1: "#F6F7F8",
                },
                yellow: {
                    1: "#F6C557",
                },
            },
            maxWidth: {
                1440: "1440px",
            },
            boxShadow: {
                1: "0px 16px 24px 0px rgba(41, 41, 41, 0.02)",
                2: "3px 9px 25px 8px rgba(0, 0, 0, 0.08)",
            },
            fontFamily: {
                itc: ["ITC Souvenir"],
                "mark-pro": ["Mark Pro"],
            },
            lineHeight: {
                '12': '48px',
            }
        },
    },
    plugins: [forms],
};
