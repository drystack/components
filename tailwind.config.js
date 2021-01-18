const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.html',
    './resources/js/*.js',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {},
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      indigo: colors.indigo,
      red: colors.rose,
      yellow: colors.amber,

      primary: colors.indigo,
      secondary: colors.yellow,
      neutral: colors.gray,
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
