const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './vendor/drystack/resources/**/*.blade.php',
    './vendor/drystack/resources/**/*.js'
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: colors.blue,
        secondary: colors.yellow,
        neutral: colors.gray,
        success: colors.green,
        alert: colors.red,
        warning: colors.yellow,
      },
      fontFamily: {
        'sans': 'Arial, Helvetica, sans-serif'
      }
    }

  },
  variants: {
    extend: {},
  },
  plugins: [],
}
