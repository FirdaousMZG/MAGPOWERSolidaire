$(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 200) {
      $('.nav').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.nav').removeClass('fixed');
    }
  });

  function scrollNav() {
	$('.nav a').click(function(){
	  $(".active").removeClass("active");     
	  $(this).addClass("active");
	  
	  $('html, body').stop().animate({
		scrollTop: $($(this).attr('href')).offset().top - 160
	  }, 300);
	  return false;
	});
  }
  scrollNav();




const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});
