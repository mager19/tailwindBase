module.exports = {
    plugins: [
        // require('postcss-import'),
        // require('precss'),
        // require('tailwindcss'),
        // require('autoprefixer'),
        require("tailwindcss")("./tailwind.config.js"),
        require("autoprefixer"),
    ]
}