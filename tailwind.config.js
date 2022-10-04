/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'perpus': "url('/perpus3.png')"
            },
            colors: {
                'primary': colors.indigo['600'],
                'primary-focus': colors.indigo['500'],
            }
        },
    },
    plugins: [],
}
