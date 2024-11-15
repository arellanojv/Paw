/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      sm: "576px",
      // => @media (min-width: 576px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "992px",
      // => @media (min-width: 992px) { ... }

      xl: "1200px",
      // => @media (min-width: 1200px) { ... }

      xxl: "1400px",
      // => @media (min-width: 1400px) { ... }
    },
    extend: {
      colors: {
        black: "#000000",
        white: "#FFFFFF",
        red: "#FF0000",
        ColorMonYellow: "#F7DBA7",
        ColorDarkBlue: "#003459",
        ColorDarkBlue40: "#0078CD",
        ColorDarkBlue60: "#00528C",
        ColorDark: "#191919",
        ColorBlack: "#0A102F",
        ColorBlue: "#3147FF",
        ColorOffWhite: "#FAF9F5",
        ColorPurple: "#A259FF",
        ColorBluePurple: "#7949F6",
        ColorYellow: "#FFC900",
        ColorViolet: "#4B2AAD",    
        ColorAtomicTangerine: "#FF9966",
        ColorLime: "#C1FF00",
        ColorLunarGreen: "#324438",
        ColorAlmond: "#EBDECE",
        ColorCorn: "#F4B905",
        ColorOil: "#221F1A",
        ColorPaleGold: "#FFD874",
        ColorEggSour: "#FFF4D9",
        ColorDenimDarkBlue: "#2D2B92",
        ColorCaribbeanGreen: "#15CF92",
        ColorMidnightMoss: "#010D09",
        ColorHoneySuckle: "#E9FF97",
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
