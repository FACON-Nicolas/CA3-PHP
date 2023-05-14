module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
    theme: {
        extend: {
            width: {
                '128': '32rem',
            },
            spacing: {
                '128': '32rem',
            }
        }
    },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
