module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Inter var', 'sans'],
        },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
      require('@tailwindcss/ui')({
          layout: 'sidebar',
      }),
      require('@tailwindcss/typography'),
  ]
}
