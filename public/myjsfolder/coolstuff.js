// var options = {
//   strings: ["<i>First</i> sentence.", "&amp; a second sentence."],
//   typeSpeed: 40
// }
//
// var typed = new Typed(".element", options);
// <script>
//   var typed = new Typed('#typed', {
//     stringsElement: '#typed-strings'
//   });
// </script>
function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items')

  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}
document.querySelector('.Navbar__Link-toggle')
  .addEventListener('click', classToggle);
