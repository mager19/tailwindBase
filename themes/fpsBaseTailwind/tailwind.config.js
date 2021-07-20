module.exports = {
    mode: 'jit',
    purge: {
        enabled: true,
        content: ['./*.php', './assets/**/*.js'],
    },
    theme: {
        extend: {
            colors: {
                dark:{
                    1 : '#031b4c',
                    2 : '#2b426f',
                    3 : '#4f658f',
                },
                light:{
                    1 : '#f6f9fd',
                    2 : '#e7ebf3',
                    3 : '#92a8d1',
                },
                'primary'           : '#07358f',
                'secondary'         : '#e8ac42',
                'primary--lighter'  : '#3275f5',
                'primary--medium'   : '#B7CFFF',
                'secondary--darker' : '#c68f2c'
            },
            fontFamily: { inter: 'Inter' }
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
        function ({ addComponents }) {
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '540px',
                    },
                    '@screen md': {
                        maxWidth: '720px',
                    },
                    '@screen lg': {
                        maxWidth: '960px',
                    },
                    '@screen xl': {
                        maxWidth: '1140px',
                    },
                }
            })
        }
    ]
}
