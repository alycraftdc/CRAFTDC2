function inViewport (el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  if (el) {
    var rect = el.getBoundingClientRect();
    var where = 1-(rect.top/window.innerHeight);
    return where;  
  } else {
    return false;
  }
  
}

function doAnimate() {
  var els = ['#pursuit *','#focus *','#services *','#expertise *','#team *','#footer *','#clients*','#work','#contact*'];
  _.each(els, function(el) {
    var $el = $(el);
    if ($el) {
      var dist = inViewport($el);
      if (dist > 0) {
        $el.addClass('scale-up');
        $el.removeClass('scale-down');
      }
    }
  })
}
new Image().src = "/wp-content/themes/craft_services/assets/images/video-still2.jpg";
$(function() {
  var video = document.getElementById('hero-video');
  if (video) video.addEventListener('ended',videoStopHandler,false);
  function videoStopHandler(e) {
      if(!e) { e = window.event; }
      var hero = document.getElementById('hero');
      if ($(window).width() <= 1024) {
        hero.innerHTML = "<img src='/wp-content/themes/craft_services/assets/images/video-still2.jpg' style='width: 100%; height: auto;' />";
      }
  }
  if ($(window).width() <= 1024) {
    videoStopHandler();
  }
  if (Modernizr.touch) {
    $('video').prop("controls",true);
  }
  if (navigator.userAgent.match(/iPad/i) != null) {
    $(document).on("touchmove", function() {
      $('video').get(0).play();
      $(document).off('touchmove');
    });
  }
  if (Modernizr.cssanimations) {
    doAnimate();
    $(window).scroll(doAnimate)
  } else {
    $('*').css({
      opacity: 1,
      transform: "scale(1)"
    });
  }
});

// var newsrcDesktop = "see-all-btn-pink.png";
// function swapImageDesktop() {
// 	if (newsrcDesktop == "see-all-btn-pink.png") {
// 		document.images["btn"].src = "wp-content/themes/craft_services/assets/images/see-all-btn-pink.png";
// 		newsrcDesktop = "see-all-btn-pink.png";
// 	}
// 	else {
// 		document.images["btn"].src = "wp-content/themes/craft_services/assets/images/see-less-crafters-2x.png";
// 		newsrcDesktop = "see-all-btn-pink.png";
// 	}
// }
// 
// var newsrcMobile = "see-less-crafters-2x.png";
// function swapImageMobile() {
// 	if (newsrcMobile == "see-less-crafters-2x.png") {
// 		document.images["btn"].src = "wp-content/themes/craft_services/assets/images/see-less-crafters-2x.png";
// 		newsrcMobile = "see-less-crafters-2x.png";
// 	}
// 	else {
// 		document.images["btn"].src = "wp-content/themes/craft_services/assets/images/see-all-btn-pink.png";
// 		newsrcMobile = "see-less-crafters-2x.png";
// 	}
// }
// 
// $(window).resize(function() {
// 	var width = $(document).width();
// 	if (width < 768) {
// 		$('#allTeam').removeClass('in');
// 	}
// 	else {
// 		$('#allTeam').addClass('in');
// 	}
// });

$(document).ready(function() {
	$('.scroll').on('click', function(e) {
		e.preventDefault();
    e.stopPropagation();
		window.location.hash = "/";
		$('html, body').css('overflow','visible');
		
    if ( $(this.hash) && $(this.hash).length ) {
      $('html, body').animate({
        scrollTop: $(this.hash).offset().top
      }, 500);  
    } else {
      window.location =  '/'+this.hash
    }
	});
  $('.scroll2').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    window.location.hash = "/";
    $('html, body').css('overflow','visible');
    $('#sidemenu-wrapper').animate({
      width: "0"
    }, 200)
    $('#nav-hamburger').toggleClass('hidden');
    $('#nav-close').toggleClass('hidden');
    if ( $(this.hash) && $(this.hash).length ) {
      $('html, body').animate({
        scrollTop: $(this.hash).offset().top
      }, 500);  
    } else {
      window.location =  '/'+this.hash
    }
    
  });
	$(".navbar-nav li a").click(function(event) {
    if ($(window).width() <= 1024) {
      $(".navbar-collapse").collapse('hide');
    }
  });
  resizeDiv();
  $(".expand-team").click(function() {
    $('html, body').animate({
        scrollTop: $("#team").offset().top
    }, 100);
	});
	$('#ChangeToggle').click(function(e) {
    e.preventDefault();
    if ($(window).width() > 1024) {
      e.stopPropagation();
      $('#sidemenu-wrapper').css({visibility: "visible"});
      $('#nav-hamburger').toggleClass('hidden');
      $('#nav-close').toggleClass('hidden');
      if ($('#sidemenu-wrapper').width() == 0) {
        $('#sidemenu-wrapper').animate({
          width: "30%"
        }, 200)
      } else {
        $('#sidemenu-wrapper').animate({
          width: "0"
        }, 200)
      }  
    } else {
      $('#sidemenu-wrapper').css({visibility: "hidden"});
      $('#nav-hamburger').toggleClass('hidden');
      $('#nav-close').toggleClass('hidden');    
    }
    
  });
  $('.scroll').click(function() {
    $('#nav-hamburger').toggleClass('hidden');
    $('#nav-close').toggleClass('hidden');  
  });
  var $acc = $('.accordionTitle').first();
  if ($acc && $acc.length) {
    $acc.get(0).click();  
  }
});
window.onresize = function(event) {
	resizeDiv();
}
function resizeDiv() {
	vpw = $(window).width();
	vph = $(window).height() - '100';
	$('.navbar-nav').css({'max-height': vph + 'px'});
  $('#sidemenu-wrapper').animate({
    width: "0"
  }, 200);
  $('#nav-hamburger').removeClass('hidden');
  $('#nav-close').addClass('hidden');
  if ( $(".navbar-collapse").is(":visible") ) {
    $(".navbar-collapse").collapse('hide');
  }
}