wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
};


window.addEventListener('scroll', function() {
 navbarScroll();
});
function navbarScroll() {
  var y = window.scrollY;
  if (y > 10) {
    var navbar = document.getElementsByClassName('navbar')[0];
      navbar.classList.add('small');

  } else if (y < 10) {
      var navbar = document.getElementsByClassName('navbar')[0];
     navbar.classList.remove('small');
  }
}


$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 100000000000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});


$('.portfolio-item').isotope({
itemSelector: '.item',
layoutMode: 'fitRows'
});
$('.portfolio-menu ul li').click(function(){
$('.portfolio-menu ul li').removeClass('active');
$(this).addClass('active');
          
var selector = $(this).attr('data-filter');
$('.portfolio-item').isotope({
  filter:selector
});
return  false;
});
$(document).ready(function() {
var popup_btn = $('.popup-btn');
    popup_btn.magnificPopup({
    type : 'image',
    gallery : {
    enabled : true
    }
});
});