module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'playfair': 'Playfair\\ Display, Helvetica, Arial, sans-serif',
     },
    extend: {
      colors: {
        primary: '#a2926b',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
