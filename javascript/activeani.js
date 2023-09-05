const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('header .menu a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
    console.log(link);
  }
})
