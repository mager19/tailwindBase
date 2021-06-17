module.exports = {
    plugins: [
        require('postcss-simple-vars'),
        require('postcss-import'),
        require("tailwindcss")("./tailwind.config.js"),
        require('postcss-nested'),
        require("postcss-rem"),
        require('precss'),
        require("autoprefixer"),
    ]
}