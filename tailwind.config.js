/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'litin-blue-dark': '#005691',  // Azul del logo
        'litin-blue-vivid': '#009df3', // Azul brillante
        'litin-red': '#e31d2b',         // Rojo del logo
        'litin-bg': '#fcfcfd',         // Blanco suave
        'litin-surface': '#ffffff',
      },
    },
  },
  plugins: [],
}