// JavaScript Document

// SCROLL TO TOP ANIMATION
	$(document).ready(function () {
		$('a.btn-top').click(function () {
			$('html,body').animate({scrollTop:0},'slow');return false;
		});
	});

// LEFT NAVIGATION SLIDE OUT
	$(document).ready(function () {
	  $('[data-toggle=offcanvas]').click(function () {
		$('.row-offcanvas').toggleClass('active')
	  });
	});
	

// TOP NAVIGATION MOBILE HIDE/SHOW BUTTON	
	$(document).ready(function () {
	  $('.navbar-toggle').click(function () {
		var text = $(this).html() == '<div class=\"menu-icon\"><span class=\"sr-only\">Toggle navigation close</span>MENU <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></div>' ? '<div class=\"menu-icon\"><span class=\"sr-only\">Toggle navigation open</span>MENU <span class=\"glyphicon glyphicon-menu-hamburger\" aria-hidden=\"true\"></span></div>' : '<div class=\"menu-icon\"><span class=\"sr-only\">Toggle navigation close</span>MENU <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></div>';
		  $('element').slideToggle();
		  $(this).html(text);
	  });
	});
	

	
	
// SET PUSHMENU CONTENT HEIGHT	
	
	$(document).ready(function () {
      if ($(".primary-navigation-push").css("position") == "absolute" ){
		var bodyHeight = $( document ).height();
		$('#push-right').height( bodyHeight);
	  }
	});
	
	$(window).resize(function(){
      if ($(".primary-navigation-push").css("position") == "absolute" ){
		var bodyHeight = $( document ).height();
		$('#push-right').height( bodyHeight);
	  }
	});
	

// PLAY WITH COLLAPSABLE ICONS
	
  $('#collapseExample').on('hidden.bs.collapse', function () {
	 $('.btn-close').addClass('hide')
  })
  
  $('#collapseExample').on('show.bs.collapse', function () {
	 $('.btn-close').removeClass('hide')
  })		


// NEWS COMPONENTS	
	
    $(function () {
        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
