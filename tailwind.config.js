const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    theme: {
        boxShadow: {
            xs: '0 0 0 1px rgba(0, 0, 0, 0.05)',
            sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            default: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
            md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
            '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
            '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
            focus: '0 0 0 3px rgba(66, 153, 225, 0.5)',
            left: 'box-shadow: 5px 0 5px -5px #333'
        },
        none: 'none',
        extend: {
            fontFamily: {
                sans: defaultTheme.fontFamily.sans,
                display: ['Ubuntu'],
                paragraph: ['Roboto']
            },
            colors: {
                danger: {
                    300: '#fca5a5',
                    400: '#f87171',
                    500: '#ef4444',
                    600: '#dc2626',
                    700: '#b91c1c'
                },
                success: colors.green,
                warning: colors.yellow,
                primary: {
                    DEFAULT: '#4465f0',
                    blue: '#4465F0',
                    dark: '#11193C',
                    white: '#11193C',
                    yellow: '#f6ad55',
                    green: '#38a169',
                    500: '#4465f0',
                    600: '#5774ea',
                    700: '#5774ea',
                },
                gray: {
                    default: '#F7F8F9',
                    400: '#9ca3af'
                },
                amber: {
                    300: '#fcd34d',
                    400: '#fbbf24'
                },
                rose: {
                    300: '#fda4af',
                    400: '#fb7185',
                    500: '#f43f5e'
                }
            },

        },
    },
    variants: {
        extend: {
            outline: ['hover', 'active'],
            backgroundColor: ['checked'],
            borderColor: ['checked'],
        }
    },
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    options: {
        defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
        safelist: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
