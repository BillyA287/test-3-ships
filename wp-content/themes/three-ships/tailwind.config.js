/** @type {import('tailwindcss').Config} */

module.exports = {
    content: ["./**/*.php"],
    mode: 'jit',
   purge:[
    "./**/*.php"
   ],
   
    theme: {
      gridTemplateColumns: {
        '12': 'repeat(12, minmax(0, 1fr))',
        // 14 column grid
        '14': 'repeat(14, minmax(0, 1fr))',
      },
      screens: {
        'sm': '325px',
        // => @media (min-width: 325px) { ... }
  
        'md': '560px',
        // => @media (min-width: 560px) { ... }
  
        'lg': '767px',
        // => @media (min-width: 767px) { ... }
  
        'xl': '950px',
        // => @media (min-width: 767px) { ... }
  
      },
      
    },
    plugins: [],
  }
  
  