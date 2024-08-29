/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        //"./resources/**/*.js",
        "./resources/**/*.css",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'], // Añade la fuente Inter
            },
            colors: {
                teal: {
                50: '#a7ffeb',
                100: '#84ffff',
                200: '#18ffff',
                300: '#6fffd2',
                400: '#64ffda',
                500: '#73ffba',
                600: '#1de9b6',
                },
                cyan: {
                    900: '#004d40',
                },
            },
            fontSize: {
                'xs': '12px', // Tamaño de fuente 12px
            },
            borderRadius: {
                'main-radius': 'var(--main-radius)', // Radio de borde personalizado
            },
            padding: {
                'main-padding': 'var(--main-padding)', // Padding personalizado
            },
        },
    },
    plugins: [],
}