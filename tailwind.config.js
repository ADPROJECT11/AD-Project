import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                script: ["Segoe Script", ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            "pigment-indigo": {
                100: "#FDF2FF",
                200: "#EFB4FD",
                300: "#CF71EF",
                400: "#9930C8",
                500: "#4F007D",
                600: "#3B0067",
                700: "#2A0052",
                800: "#1B003C",
                900: "#0F0026",
            },
            "aqua-green": {
                100: "#F2FFFD",
                200: "#BCFFF2",
                300: "#84FCDE",
                400: "#4DF5C1",
                500: "#17E89B",
                600: "#08B86D",
                700: "#028747",
                800: "#005728",
                900: "#00260F",
            },
            gray: {
                100: "#FCFAFC",
                200: "#EFECF0",
                300: "#E3DFE4",
                400: "#D6D1D8",
                500: "#C9C4CC",
                600: "#9F9AA3",
                700: "#757179",
                800: "#4C4950",
                900: "#242226",
            },
            white: "#FFFFFF",
        },
    },

    plugins: [require("flowbite/plugin"), forms],
};
