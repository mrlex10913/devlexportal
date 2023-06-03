/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "480px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
            },
            spacing: {
                big: "48rem",
            },
        },
        fontFamily: {
            nunito: ["Nunito", "sans-serif"],
        },
    },
    plugins: [],
};
