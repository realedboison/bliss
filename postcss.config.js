module.exports = {
  plugins: [
    require('tailwindcss'),
    require('@fullhuman/postcss-purgecss')({
      content: [
        './build/**/*.html',
        './build/**/*.js',
        './build/**/*.php',
      ],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
    }),
  
  ]
}
