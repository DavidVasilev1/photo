/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./_includes/**/*.html', './_layouts/**/*.html', './pages/**/*.html', './_posts/*.md', './*.html'],
  theme: {
    extend: {
      fontFamily: {
        'oxygen': ['Oxygen', 'sans-serif']
      }
    }
  },
  variants: {},
  plugins: [require('@tailwindcss/typography'), require("daisyui")],
  daisyui: {
    themes: ["light", "dark", "cupcake", "bumblebee", "emerald", "corporate", "synthwave", "retro", "cyberpunk", "valentine", "halloween", "garden", "forest", "aqua", "lofi", "pastel", "fantasy", "wireframe", "black", "luxury", "dracula", "cmyk", "autumn", "business", "acid", "lemonade", "night", "coffee", "winter"]
  }
};