/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/views/welcome.blade.php",
    "./resources/views/login.blade.php",
    "./resources/views/signup.blade.php",
    "./resources/views/admin/index.blade.php",
    "./resources/views/admin/students/index.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

