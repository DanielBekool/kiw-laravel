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
    extend: {
      colors: {
        lightblue: 'var(--color-lightblue)',
        heading: 'var(--color-heading)',
        bodytextkiw: '#797979',
        transit: 'var(--color-transit)',
        transparent: 'var(--color-transparent)',
        border: 'var(--color-border)',
        overlayblack: 'var(--color-overlayblack)',
        bordertransparent: 'var(--color-bordertransparent)',
        whiteTransparent: 'var(--white-transparent)',
        black: 'var(--color-black)',
        purple: 'var(--color-purple)',
      },
    },
  },
  plugins: [
    require('mary-ui/plugin'), // Run Mary UI Tailwind
  ],
}
