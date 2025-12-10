import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"],
  theme: {
    extend: {
      colors: {
        cafe: "#5D4037",
        crema: "#FFFFFF",
        verdeMarron: "#3E6B48" // Botones “verde marrón”
      },
      boxShadow: {
        suave: "0 4px 10px rgba(0,0,0,0.08)"
      },
      fontFamily: {
        sans: ["Arial", "ui-sans-serif", "system-ui"]
      }
    }
  },
  plugins: [],
}
