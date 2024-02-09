/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: '#ffea29',
        primaryWashed: 'rgba(255,234,41,0.3)',
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
        crimsonWashed: 'rgba(220, 20, 60, 0.4)',
    
        greenCard: '#005727',
        blueCard: '#014b9a',
        redCard:  '#b00124',
        purpleCard: '#280154',
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      gridTemplateColumns: {
        'fluid-10': 'repeat(auto-fit, minmax(10rem, 1fr))',
        'fluid-15': 'repeat(auto-fit, minmax(15rem, 1fr))',
        'fluid-20': 'repeat(auto-fit, minmax(20rem, 1fr))',
        'fluid-25': 'repeat(auto-fit, minmax(25rem, 1fr))',
        'fluid-30': 'repeat(auto-fit, minmax(30rem, 1fr))',
      },
      transitionDuration: {
        '400': '0.4s',
      }
    },
  },
  plugins: [],
}