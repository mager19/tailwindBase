
module.exports = {
    plugins: [
        require('postcss-import'),
        require("autoprefixer"),
        require("tailwindcss")("./tailwind.config.js"),
        require('postcss-preset-env'),
        require('postcss-simple-vars'),
        require('postcss-nested'),
        require("postcss-rem"),
        require('precss'),
    ]
}