// scroll
$(document).on('click','#btn-menu',function(){
    return false;
})
$(document).on('click','.animation',function(){
$('html, body').animate({
       scrollTop: $('.animation1').offset().top - 50
     }, 1500);
    return false;
})
$(document).on('click','.contactoscroll',function(){
$('html, body').animate({
       scrollTop: $('.contactoscroll1').offset().top - 50
     }, 1500);
    return false;
})
// scroll


// menu responsive
var bm = document.getElementById('bm');
var bm1 = document.getElementById('bm1');
var mr = document.getElementById('mr');

bm.addEventListener('click', menuResposive);
bm1.addEventListener('click', menuResposive);

function menuResposive() {
  mr.classList.toggle('ma');
  return false
}
function showMenu() {
  mr.classList.add('ma');
  return false
  }
function hideMenu() {
  mr.classList.remove('ma');
  return false
}
// /menu responsive

// mediaqueries
var braakPoint = window.matchMedia('(max-width: 850px)');

braakPoint.addListener(mediaQuery);

function mediaQuery() {
  if (braakPoint.matches) {
    console.log('Paila');
  } else {
    console.log('Re Paila');
  }
}
// /mediaqueries


// hammer
var body = document.body;
var gestos = new Hammer(body);
gestos.on('swiperight', showMenu);
gestos.on('swipeleft', hideMenu);
// /hammer

// LeasyLoading
// var bLazy = new Blazy({
//     selector: 'img'
// });
// /LeasyLoading

// fancybox
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });

  $(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$(document).ready(function() {
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
// /fancybox


// validacion form
$(document).ready(function() {
  $('#enviar').click(function () {

    if ($('#mensaje').val() == '') {
      $('.errormensaje').html("<p>El Campo esta vacio</p>");
    }
    else {
      $('.errormensaje').html("");
    }

    if ($('#email').val() == '') {
      $('.errorcorreo').html("<p>El Campo esta vacio</p>");
    }
    else {
      $('.errorcorreo').html("");
    }

  })


});


//  /validacion form
