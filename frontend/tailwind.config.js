/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: "#000",
            white: "#fff",
            primarybuu: "#0966D5",
            secondarybuu: "#008080",
            neutralbuu: "#616161",
        },
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
    ],
};
