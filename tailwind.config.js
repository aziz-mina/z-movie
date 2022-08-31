module.exports = {
  theme: {
    extend: {
        width: {
            '96': '24rem',
        }
    },
    colors: {
      backg: '1f1f1f',
    },
    spinner: (theme) => ({
      default: {
        color:  '#1A202C',     // Spinner Color
        size:   '2em',         // Spinner Size
        border: '2px',      // Spinner border raduis
        speed:  '800ms',    // Spinner Speed
      },
    }),
       fontFamily: {
        'Roboto' : ['Roboto', 'sans-serif'],
    },
    darkMode: 'class',
  },
  variants: {},
  plugins: [
      require('tailwindcss-spinner')(),
  ],
}
