/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("daisyui")
    ],
    theme: {
        colors: {
            b_primary: '#080807',
            b_secondary: '#110F0E',
            b_tertiary: '#1C1917',
            b_blur: '#0B0A09, 1%',

            c_primary: '#FFFFFF',
            c_secondary: '#A3A3A3',
            c_tertiary: '#696663',
            c_inverse: '#0A0908',

            a_orange: '#ED712E',
            a_red: '#EB4B5B',
            a_blue: '#55A1F2',
            a_green: '#44CB93',
            a_purple: '#9D8AFE',

            bo_primary: '#161412',
            white: '#fff',
        }
    }
}
