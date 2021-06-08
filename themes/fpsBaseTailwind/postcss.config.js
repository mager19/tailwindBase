module.exports = {
    plugins: [
        require("tailwindcss")("./tailwind.config.js"),
        require('postcss-import'),
        require('postcss-mixins'),
        require('postcss-nested'),
        require("postcss-rem"),
        require('precss'),
        require("autoprefixer"),
    ]
}