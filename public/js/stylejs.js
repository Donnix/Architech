// $(window).on('load', function(){



//     /* Hide Loader  */



//     $('.loader').fadeOut(200);



//     /* Wow Init */



//     if ($('.wow').length > 0) {
//       var wow = new WOW({
//           offset: 150,          
//           mobile: false
//         }
//       );
//       wow.init();
//     }

//     if ($('.simscrl').length > 0) {
//       $('.simscrl').slimScroll({
//           color: '#e9304f',
//           height: '320px',
//           opacity: .9,
//           railColor: '#e7e7e7',
//           railOpacity: 1,
//           alwaysVisible: true,
//           railVisible: true
          
//         });
//     }

//   });


// NAVBAR
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.padding = "20px";
  } else {
    document.getElementById("navbar").style.padding = "31px";
  }
}
// END NAVBAR


// DROPDOWN
// $(document).ready(function(){
//     $(".dropdown").hover(            
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
//             $(this).toggleClass('open');        
//         },
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
//             $(this).toggleClass('open');       
//         }
//     );
// });
// $(document).ready(function () {
// $('.navbar-collapse .dropdown').hover(function () {
//         $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
//     }, function () {
//         $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
//     });
// });
// END DROPDOWN


// PROJECT
$(document).ready(function() {
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
});
// END PROJECT


// COUNTER
$(document).ready(function() {
$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 20000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});
});
// END COUNTER


// SLIDER
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
// END SLIDER




wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    // wow.init();
    // document.getElementById('moar').onclick = function() {
    //   var section = document.createElement('section');
    //   section.className = 'section--purple wow fadeInDown';
    //   this.parentNode.insertBefore(section, this);
    // };