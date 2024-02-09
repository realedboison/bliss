module.exports = {
  plugins: [
    require('tailwindcss'),
    require('@fullhuman/postcss-purgecss')({
      content: [
        './build/**/*.html',
        './build/**/*.js',
        './build/**/*.php',
        // Add any other files that contain Tailwind CSS classes
      ],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
    }),
    // Other PostCSS plugins as needed
  ]
}
