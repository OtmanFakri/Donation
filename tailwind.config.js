/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
    ],
  theme: {
      extend: {
          colors: {
              sky: colors.sky,
              aliceblue: '#f0f8ff',
              mainBG : "#F4F5F8",
              mainGreen:'#39D192',
              

          },
      },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}

