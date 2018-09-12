
//########################## 1111 Window Resize START ##########################


//AUTO scrolltop START.....

jQuery(function () {
  jQuery('html, body').animate({
    scrollTop: jQuery('body').offset().top
  }, 1200);
  return false;
});

//AUTO scrolltop END.....


jQuery(window).resize(function () {
  if (jQuery(window).width() <= 768) {
    // alert('mobile enter');

  } else {
    // alert('Desktop');

  }
});


//########################## 1111 Window Resize CLOSE ##########################


//########################## 2222 Document Ready START #########################

jQuery(document).ready(function () {

  // 1 wow js start
    new WOW().init();
  // 1 wow js end

  // 2 menu mobile start
  jQuery('a.mobile_menu').click(function () {
    jQuery(".headerCenter").toggleClass('active');
  });

  jQuery('.sliderDiv,.section1Inner').click(function () {
    jQuery(".headerCenter").removeClass('active');
  });
  // 2 menu mobile end


  //3 stopPropagation login nikon start

  jQuery(".headerCenter").click(function () {
    event.stopPropagation();
    // alert("clicked inside sidenav.");
  });

  //3 stopPropagation login nikon end

  // 4 NIKON Login upload page image show and hide START

  // 4 NIKON Login upload page image show and hide CLOSE


});



jQuery(document).ready(function() {

  // 1 background slider homepage nikon.
  jQuery("#owl_demo_homepage").owlCarousel({
    loop:true,
    margin:10,
    autoPlay: true,
    items:1,
    responsiveClass:true,
    navigation:false,
    slideSpeed:400,
    paginationSpeed:400,
    pagination:false,
    singleItem:true,
    nav:true,
    dots:true,
    pagination: true,
    autoplayHoverPause:false,
    touchDrag:true,
    autoplayTimeout:400,
    responsive:{
      0:{
        items:1,
      },
      600:{
        items:1,
      },
      1000:{
        items:1,
      }
    }
  });

  // 2 camere slider homepage nikon

  jQuery("#owl_demo_camera").owlCarousel({
    loop:true,
    margin:0,
    autoPlay: true,
    items:1,
    responsiveClass:true,
    navigation:false,
    slideSpeed:400,
    paginationSpeed:400,
    pagination:false,
    singleItem:true,
    nav:true,
    dots:true,
    pagination: true,
    autoplayHoverPause:false,
    touchDrag:true,
    autoplayTimeout:400,
    responsive:{
      0:{
        items:1,
      },
      767:{
        items:1,
        dots: true,
        pagination: true,
      },
      1000:{
        items:1,
      }
    }
  });
});


// 1 home slick slider CLOSE






//Conditions for Mobile and Desktop START....
if (jQuery(window).width() <= 767) {
  // alert('mobile enter');

  jQuery(window).on("load", function () {
    setTimeout(function () {

    }, 50);
  });

} else {

  // alert('Desktop enter');
  //1
  jQuery(window).on("load", function () {
    setTimeout(function () {

      // Equal height after theme NIKON START...
      jQuery.fn.equalheightaftertheme = function () {
        var max_height = 0;
        jQuery(this).each(function () {
          max_height = Math.max(jQuery(this).height(), max_height);
          // console.log(max_height+"_LOAD");
        });
        jQuery(this).each(function () {
          jQuery(this).height(max_height);
        });
      };

      jQuery('.theme_Div').equalheightaftertheme();

      // Equal height after theme NIKON CLOSE

    }, 50);
  });
}
//Conditions for Mobile and Desktop CLOSE....

//########################## 2222 document ready CLOSE ##########################


//#################### 3333 window scroll START ##########################

  jQuery(window).scroll(function () {

    if (jQuery(window).width() <= 767) {
      // alert('mobile 768');


    } else {
      // alert('Desktop ');


    }

  });


//#################### 3333 window scroll CLOSE ##########################


//#################### 4444 window LOAD START ########################## 


jQuery(window).on("load", function () {
  setTimeout(function () {

  $(".wow").css({'visibility': 'visible', 'opacity': '1'});

  }, 50);
});


//#################### 4444 window LOAD CLOSE ##########################


//#################### 5555 Scroll to Top CLICK START ##########################

// ===== Scroll to Top ==== 
jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    jQuery('#return_to_top').fadeIn(200); // Fade in the arrow
  } else {
    jQuery('#return_to_top').fadeOut(200); // Else fade out the arrow
  }
});
jQuery('#return_to_top').click(function () { // When arrow is clicked
  jQuery('body,html').animate({
    scrollTop: 0 // Scroll to top of body
  }, 500);
});

//#################### 5555 Scroll to Top CLICK CLOSE ##########################


// #### customscrollbar side_menu start #### 



 // #### customscrollbar side_menu close #### 


//  d750 slider

$(document).ready(function() {
 
  $("#d750-camera").owlCarousel();
 
});



jQuery('#d750-camera').owlCarousel({
    loop:true,
    margin:10,
    autoPlay: true,
    items: 4,
    responsiveClass:true,
    navigation:false,
    slideSpeed:400,
    paginationSpeed:400,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:false
      }
  }
});
