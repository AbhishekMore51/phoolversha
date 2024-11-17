/*= ------- Global Variables ------- =*/
var document_width;
var document_height;
var header_height;
var footer_height;
var main_content_height;
var mobile_nav_status_disp = false;
var mobile_filter_status_disp = false;
var mobile_filter2_status_disp = true;

/*= ------- Doc Load Function ------- =*/
$(window).load(function () {
  /*= Call Default Functions which need document to be loaded completely =*/
  load_functions();

  /*= Remove Loader =*/
  $(".loader-overlay").fadeOut("200");

  /*= Welcome block script =*/

  /*
	if(!sys_session)
	{
		var welcome_overlay_width = 60 * document_width / 100;
		if(welcome_overlay_width > 340)
			welcome_overlay_width = 340;
		var marginright = welcome_overlay_width / 2;
		
		$('.welcome-overlay .animate-logo-block.block-1').delay(700).animate({
			width: welcome_overlay_width,
			marginRight: '-'+marginright
		}, 1400, function(){
			$('.welcome-overlay').delay(3000).fadeOut(700, function(){
				//$('body').css('position', 'static');
				$('body').addClass('body-static');
				$('.header-block').animate({
					"opacity": 1
				}, 700);
			});
		});
	}
	*/

  $("body").css("position", "static");

  $(window).trigger("scroll");
});

/*= ------- Doc Ready Function ------- =*/
$(function () {
  /*= Welcome Script =*/
  if (!sys_session) $(".welcome-overlay").show();

  /*= Call ready function =*/
  ready_functions();

  /*= On empty clicks return false =*/
  $("a").click(function () {
    if ($(this).attr("href") == "" || $(this).attr("href") == "#") return false;
  });

  /*= On Window Resize =*/
  $(window).resize(function () {
    ready_functions();
    load_functions();
  });

  // Upside Arrow
  const $backToTop = $("#backToTop"); // Cache the button

  // Show/Hide the button based on scroll position
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 300) {
      $backToTop.fadeIn(); // Show the button when scrolled down 300px
    } else {
      $backToTop.fadeOut(); // Hide the button when at the top
    }
  });

  // Scroll to the top when the button is clicked
  $backToTop.find("a").on("click", function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    $("html, body").animate({ scrollTop: 0 }, 300); // Smooth scroll to the top in 300ms
  });
  // Upside Arrow

  /* Mobile nav script */

  /*
	$(".nav-button-block").click(function () {
    var element = $(".navigation-block");
    var animate_width = element.find(".navigation").outerWidth();

    $(element)
      .fadeIn(100)
      .find(".navigation")
      .animate(
        {
          right: 0,
        },
        300,
        function () {
          $(".navigation-block .inner").click(function (e) {
            if (e.target == this) {
              $(element)
                .find(".navigation")
                .animate(
                  {
                    right: "-" + animate_width,
                  },
                  200,
                  function () {
                    element.fadeOut(100, function () {
                      $(element).unbind(e);
                    });
                  }
                );
            }
          });

          // Close mobile nav on close-button click
          $(".navigation-block .close-button").click(function (e) {
            $(element)
              .find(".navigation")
              .animate(
                {
                  right: "-" + animate_width,
                },
                200,
                function () {
                  element.fadeOut(100, function () {
                    $(element).unbind(e);
                  });
                }
              );
          });
        }
      );
  });
	*/
});

/*= ------- Default Functions to run after document is ready and on resize ------- =*/
function ready_functions() {
  /*= Get Window Width and Height =*/
  document_width = $(window).width();
  document_height = $(window).outerHeight();
  //alert(document_width);

  // Mobile nav - show block when doc size greater thn 620
  if (document_width > 768 && mobile_nav_status_disp) {
    $(".header-block .header-block-1 .navigation-block").show(100);
    mobile_nav_status_disp = false;
  } else if (document_width <= 768 && !mobile_nav_status_disp) {
    $(".header-block .header-block-1 .navigation-block").hide(100);
    mobile_nav_status_disp = true;
  }

  // Mobile Filter - show block when doc size greater thn 768 (For Event Page)
  /*
	if(document_width > 960 && mobile_filter2_status_disp)
	{
		$('.event .right-block').show(100);
		mobile_filter2_status_disp = false;
	}
	else if(document_width <= 960 && !mobile_filter2_status_disp)
	{
		$('.event .right-block').hide(100);
		mobile_filter2_status_disp = true;
	}
	*/

  // Page Specific Functions to run after document is and on resize
  page_ready_functions();
}

/*= ------- Default Functions to run after document loads and on resize ------- =*/
function load_functions() {
  /*= Header, footer and main content height =*/
  header_height = $(".header-block").outerHeight();
  footer_height = $(".footer-block").outerHeight();
  main_content_height = document_height - header_height - footer_height;
  $(".main-content").css("min-height", main_content_height);

  /*= Call Align vertical center function =*/
  vertical_center();

  /*= Page Specific Functions to run after document loads and on resize =*/
  page_load_functions();
}

/*= Call Align vertical center function =*/
function vertical_center() {
  $(".vertical-center").each(function () {
    var this_height = $(this).outerHeight();
    $(this).css({ top: "50%", "margin-top": -(this_height / 2) });
  });
}

/*------ Add more functions here -------*/
