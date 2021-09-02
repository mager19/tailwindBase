module.exports = {
    mode: 'jit',
    purge: {
        enabled: true,
        content: ['./*.php', './*/*.php', './assets/**/*.js'],
    },
    theme: {
        extend: {
            colors: {
                'dark-1': '#031b4c',
                'dark-2': '#2b426f',
                'dark-3': '#4f658f',
                'light-1': '#f6f9fd',
                'light-2': '#e7ebf3',
                'light-3': '#92a8d1',
                'primary': '#07358f',
                'secondary': '#e8ac42',
                'primary--lighter': '#3275f5',
                'primary--medium': '#B7CFFF',
                'secondary--darker': '#c68f2c',
                'black': '#000',
                'white': '#fff'
            },
            fontFamily: { inter: 'Inter' },
            fontSize: {
                'base': '16px',
                'caption': ['0.875rem', {
                    lineHeight: '1.5rem'
                }],
                'overline': ['1.125rem', {
                    letterSpacing: '0.1em',
                    lineHeight: '1rem',
                }],
                'button': ['1.125rem', {
                    letterSpacing: '-0.03em',
                    lineHeight: '1.688rem',
                }],
                'lead': ['1.125rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '1.875rem',
                }],
                'body': ['1rem', {
                    lineHeight: '1.625',
                }],
                'title1': ['4rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '5.625rem',
                }],
                'title2': ['3rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '4.188rem',
                }],
                'title3': ['2.25rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '3.188rem',
                }],
                'title4': ['1.5rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '2.125rem',
                }],
                'title5': ['1.125rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '1.563rem',
                }],
                'title6': ['1rem', {
                    letterSpacing: '-0.02em',
                    lineHeight: '1.5ren',
                }],
            },
        }
    },
    plugins: [
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
