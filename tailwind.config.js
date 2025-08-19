/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*/*blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-purple': '#3C096C',
      },
    },
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
}
