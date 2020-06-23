

if(process.env.NODE_ENV === 'production') {
    module.exports = {
        plugins: [
            require('tailwindcss'),
            require('autoprefixer'),
            require('cssnano'),
            // More postCSS modules here if needed
        ]
    }
} else {
    module.exports = {
        plugins: [
            require('tailwindcss'),
            require('autoprefixer'),
            require('cssnano'),
            // More postCSS modules here if needed
        ]
    }
}