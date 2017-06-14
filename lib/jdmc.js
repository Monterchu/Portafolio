// menu responsive
var bm = document.getElementById('bm');
var mr = document.getElementById('mr');

bm.addEventListener('click', menuResposive);

function menuResposive() {
  mr.classList.toggle('ma');
}
function showMenu() {
  mr.classList.add('ma');
}
function hideMenu() {
  mr.classList.remove('ma');
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
var bLazy = new Blazy({
    selector: 'img'
});
// /LeasyLoading
