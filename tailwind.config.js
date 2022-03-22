module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            green: {
                10: '#47BF71'
            }
        }
    },
    fontFamily: {
        openSans: ['Open Sans', 'sans-serif']
    },
  },
  plugins: [],
}
