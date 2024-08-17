/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
],
  plugins: [],

  theme: {
    extend: {
        colors: {
            'button': '#953326',
            'dark': '#211E1C',
        },
    },
},


}

