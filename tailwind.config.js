const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './source/**/*.md', './source/**/*.php', './source/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
