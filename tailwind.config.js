/ @type {import('tailwindcss').Config} */
module.exports = {
  content:[
    './views//.{html,php,js}', // Include all HTML files
    './views/**/.{html,php,js}', // Include all PHP files in the views folder
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}