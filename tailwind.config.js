/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: ['./src/**/*.html', './src/**/*.js'],
    content: ["./src/**/*.{html,js}"],
    theme: {
      extend: {
        fontFamily: {
          'lato': ['Lato', 'sans-serif']
        }
      },
    },
    plugins: [
      require('@tailwindcss/aspect-ratio'),
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
    ],
  }