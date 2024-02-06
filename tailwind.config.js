/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: '#ffea29',
        secondary: '#1f1f1f',

        darkest: ' #0C0404',
        lightest: '#fff',
        
        lightGray:'#F5F7FB',
        midGray:'#DBDEF3',
        darkGray:'#888DA7',
        darkestGray:'#4a4f6b',

        pinkWashed: '#fbe7eb',
        yellowWashed: '#fffda8', 
        blueWashed: '#aec9e5', 
        orangeWashed:'#ffc88a',  

        borderColor: '#343434',
        crimson: '#dc143c',
    
        greenCard: '#005727',
        blueCard: '#014b9a',
        redCard:  '#b00124',
        purpleCard: '#280154',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}