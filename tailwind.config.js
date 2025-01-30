/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ["Poppins"],
                Old_standar: ["Old Standar TT"],
            },
            colors: {
                blue_lsa: {
                    50: "#0072FE",
                },
                green_lsa: {
                    50: "#F8FFE8",
                    100: "#F1FFCA",
                    200: "#BAFE00",
                    300: "#229D00",
                },
                gray_lsa: {
                    50: "#D9D9D9",
                    100: "#EDEDED",
                    200: "#8B8B8B",
                },
            },
        },
    },
    plugins: [],
};
