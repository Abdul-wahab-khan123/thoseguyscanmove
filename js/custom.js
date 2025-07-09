
// AOS.init({ once: true });

// // custom-header-dropdown
// $(document).on('click', '.nav-link', function (e) {
//   console.log('here');
//   if (window.matchMedia("(max-width: 991px)").matches) {
//     if ($(this).closest('.nav-item').find('.dropdown').css('display') == 'none') {
//       $('.dropdown').css("display", "none");
//       $(this).closest('.nav-item').find('.dropdown').css("display", "block");
//     } else {
//       $('.dropdown').css("display", "none");
//     }
//   }
// });
// // custom-header-dropdown

// // toggle password
// $(".toggle-password").click(function () {
//   $(this).toggleClass("fa-eye fa-eye-slash");
//   var input = $($(this).attr("toggle"));
//   if (input.attr("type") == "password") {
//     input.attr("type", "text");
//   } else {
//     input.attr("type", "password");
//   }
// });
// // toggle password

// // slider
// $('#home-slider').owlCarousel({
//   loop: true,
//   margin: 10,
//   animateOut: 'fadeOut',
//   animateIn: 'fadeIn',
//   nav: false,
//   dots: false,
//   autoplay: true,
//   autoplaySpeed: 5000,
//   autoplayTimeout: 5000,
//   autoplayHoverPause: true,
//   mouseDrag: false,
//   smartSpeed: 250,
//   margin: 0,
//   navText: [
//     '<i class="far fa-chevron-left" aria-hidden="true"></i>',
//     '<i class="far fa-chevron-right" aria-hidden="true"></i>'
//   ],
//   responsiveClass: true,
//   responsive: {
//     0: {
//       items: 1
//     },
//     575: {
//       items: 1
//     },
//     767: {
//       items: 1
//     },
//     991: {
//       items: 1
//     },
//     1199: {
//       items: 1
//     },
//     1399: {
//       items: 1
//     }
//   }
// });
// // slider

// //Scroll event
// $(window).scroll(function () {
//   var scrolled = $(window).scrollTop();
//   if (scrolled > 200) $('.go-top').fadeIn('slow');
//   if (scrolled < 200) $('.go-top').fadeOut('slow');
// });
// //Scroll event

// //Click event
// $('.go-top').click(function () {
//   $("html, body").animate({ scrollTop: "0" }, 500);
// });
// //Click event

// // sticky-header
// window.onscroll = function () { myFunction() };

// var header = document.getElementById("myHeader");

// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// }
// // sticky-header

// // counter js start
// $.fn.jQuerySimpleCounter = function (options) {
//   var settings = $.extend({
//     start: 0,
//     end: 100,
//     easing: 'swing',
//     duration: 400,
//     complete: ''
//   }, options);

//   var thisElement = $(this);

//   $({ count: settings.start }).animate({ count: settings.end }, {
//     duration: settings.duration,
//     easing: settings.easing,
//     step: function () {
//       var mathCount = Math.ceil(this.count);
//       thisElement.text(mathCount);
//     },
//     complete: settings.complete
//   });
// };

// $('#number1').jQuerySimpleCounter({ end: parseInt($('#number1').text()), duration: 3000 });
// $('#number2').jQuerySimpleCounter({ end: parseInt($('#number2').text()), duration: 3000 });
// $('#number3').jQuerySimpleCounter({ end: parseInt($('#number3').text()), duration: 2000 });
// $('#number4').jQuerySimpleCounter({ end: parseInt($('#number4').text()), duration: 2000 });
// // counter js end

// // quantity js start
// $(document).on('click', '.quantity-left-minus', function () {
//   var sub_qty = parseInt($(this).closest('.numberone').find('input').val());
//   if (sub_qty > 1) {
//     $(this).closest('.numberone').find('input').val(sub_qty - 1);
//     $(this).closest('.numberone').find('input').trigger('change');
//   }
// });

// $(document).on('click', '.quantity-right-plus', function () {
//   var add_qty = parseInt($(this).closest('.numberone').find('input').val());
//   var max_qty = $(this).closest('.numberone').find('input').attr("max");
//   if (add_qty < max_qty) {
//     $(this).closest('.numberone').find('input').val(add_qty + 1);
//     $(this).closest('.numberone').find('input').trigger('change');
//   }
// });
// // quantity js start

// // product-detail multi img slider
// $(document).ready(function () {
//   var slider = $("#slider");
//   var thumb = $("#thumb");
//   var slidesPerPage = 4; //globaly define number of elements per page
//   var syncedSecondary = true;
//   slider.owlCarousel({
//     items: 1,
//     slideSpeed: 2000,
//     nav: false,
//     autoplay: false,
//     dots: false,
//     loop: true,
//     responsiveRefreshRate: 200
//   }).on('changed.owl.carousel', syncPosition);
//   thumb
//     .on('initialized.owl.carousel', function () {
//       thumb.find(".owl-item").eq(0).addClass("current");
//     })
//     .owlCarousel({
//       items: slidesPerPage,
//       margin: 10,
//       dots: false,
//       nav: true,
//       item: 4,
//       smartSpeed: 200,
//       slideSpeed: 500,
//       slideBy: slidesPerPage,
//       navText:
//         ['<i class="far fa-chevron-left" aria-hidden="true"></i>',
//           '<i class="far fa-chevron-right" aria-hidden="true"></i>'],
//       responsiveRefreshRate: 100
//     }).on('changed.owl.carousel', syncPosition2);
//   function syncPosition(el) {
//     var count = el.item.count - 1;
//     var current = Math.round(el.item.index - (el.item.count / 2) - .5);
//     if (current < 0) {
//       current = count;
//     }
//     if (current > count) {
//       current = 0;
//     }
//     thumb
//       .find(".owl-item")
//       .removeClass("current")
//       .eq(current)
//       .addClass("current");
//     var onscreen = thumb.find('.owl-item.active').length - 1;
//     var start = thumb.find('.owl-item.active').first().index();
//     var end = thumb.find('.owl-item.active').last().index();
//     if (current > end) {
//       thumb.data('owl.carousel').to(current, 100, true);
//     }
//     if (current < start) {
//       thumb.data('owl.carousel').to(current - onscreen, 100, true);
//     }
//   }
//   function syncPosition2(el) {
//     if (syncedSecondary) {
//       var number = el.item.index;
//       slider.data('owl.carousel').to(number, 100, true);
//     }
//   }
//   thumb.on("click", ".owl-item", function (e) {
//     e.preventDefault();
//     var number = $(this).index();
//     slider.data('owl.carousel').to(number, 300, true);
//   });

// });
// // product-detail multi img slider

// // img-zoom js strat
// $(".img_producto_container")
//   // tile mouse actions
//   .on("mouseover", function () {
//     $(this)
//       .children(".img_producto")
//       .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
//   })
//   .on("mouseout", function () {
//     $(this)
//       .children(".img_producto")
//       .css({ transform: "scale(1)" });
//   })
//   .on("mousemove", function (e) {
//     $(this)
//       .children(".img_producto")
//       .css({
//         "transform-origin":
//           ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
//           "% " +
//           ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
//           "%"
//       });
//   });

// // img-zoom js end


const boxes = document.querySelectorAll('.store-box');

boxes.forEach(box => {
    box.addEventListener('click', () => {
        boxes.forEach(b => b.classList.remove('active')); // Remove active from others
        box.classList.add('active'); // Add to clicked one
    });
});



let currentStep = 1;

function showStep(step) {
    const totalSteps = 8;
    for (let i = 1; i <= totalSteps; i++) {
        document.getElementById(`step-${i}`).style.display = i === step ? "block" : "none";
    }
}

function nextStep() {
    if (currentStep < 8) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

// Optional form submit
document.getElementById("multi-step-form").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Form submitted!");
});



function openPopup() {
    document.getElementById('popupOverlay').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
}

function openPopup() {
    document.getElementById('drop-popupOverlay').style.display = 'flex';
}

function closePopup() {
    document.getElementById('drop-popupOverlay').style.display = 'none';
}





