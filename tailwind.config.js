/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        lora: ['Lora', 'sans-serif'],
        mulish: ['Mulish', 'sans-serif'],
        nunito: ['Nunito', 'sans-serif'],
      },
      colors: {
        // mainColor: '#1feab6',
        mainColor: '#1cecb7',
      },
      
    },
  },
  plugins: [],
}