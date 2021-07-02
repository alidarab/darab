const colors = require("tailwindcss/colors");

module.exports = {
  purge: ["./*.php", "./template-parts/**/*.php"],
  darkMode: "class",
  theme: {
    fontFamily: {
      sans: "soleil, Arial, sans-serif",
    },
    colors: {
      transparent: "transparent",
      black: colors.black,
      white: colors.white,
      gray: colors.coolGray,
      sky: colors.sky,
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
