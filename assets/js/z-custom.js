console.log('ok!');
$('#menu-main-menu').parent().attr('id', 'navbarCollapse');
$('#menu-main-menu').addClass('navbar-nav ml-auto');
$('.navbar-nav li').addClass('nav-item');
$('.navbar-nav li a').addClass('nav-link');

$('.entries-container .post.type-post').addClass('col-xs-12 col-md-6');


$('.main-banners-container').slick({
  infinite: true,
  dots: true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1
});

$('.productos-destacados-container').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 3,
	slidesToScroll: 3,
	prevArrow: '<button type="button" class="slick-prev icon-flecha-izq"></button>',
	nextArrow: '<button type="button" class="slick-next icon-flecha-der"></button>',
	responsive: [
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});