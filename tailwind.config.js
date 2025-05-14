/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './resources/**/*.{html,js,php,blade.php}',
      './vendor/mary/ui/resources/**/*.blade.php', // Mary UI Component
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('mary-ui/plugin'), // Run Mary UI Tailwind
    ],
  }
  