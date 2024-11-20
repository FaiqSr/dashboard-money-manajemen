/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        sourGummy: "Sour Gummy, sans-serif",
        MonsieurLD: "Monsieur La Doulaise, sans-serif",
      },
    },
  },
  plugins: [],
};
