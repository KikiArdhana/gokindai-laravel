import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
<<<<<<< HEAD


// tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    colors: {
      // Configure your color palette here
    }
  }
}
=======
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
