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






// TEXT ONLY BOOTSTRAP CAROUSEL FIX
    setCarouselHeight('#carousel-example-text');

    function setCarouselHeight(id)
    {
        var slideHeight = [];
        $(id+' .item').each(function()
        {
            // add all slide heights to an array
            slideHeight.push($(this).height());
        });

        // find the tallest item
        max = Math.max.apply(null, slideHeight);

        // set the slide's height
        $(id+' .carousel-content').each(function()
        {
            $(this).css('height',max+'px');
        });
    }

// PAUSE ALL CAROUSELS
  $(function () {
	  $('.carousel').carousel({
		  pause: true,
		  interval: false,
	  });
	});

// BOOTSTRAP NEW BOX COMPONENT - http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/
	
    $(function () {
        $("#newsdemo").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
	

// MIX IT UP DYNAMIC GRID COMPONENT - FULLWIDTH - mixitup.kunkalabs.com/


$(function(){

  var layout = 'grid', // Store the current layout as a variable
      $container = $('#Container'), // Cache the MixItUp container
      $changeLayout = $('#ChangeLayout'); // Cache the changeLayout button
  
  // Instantiate MixItUp with some custom options:
  
  $container.mixItUp({
    animation: {
      animateChangeLayout: true, // Animate the positions of targets as the layout changes
      //animateResizeTargets: true, // Animate the width/height of targets as the layout changes
      //effects: 'fade rotateX(-40deg) translateZ(-100px)'
    },
    layout: {
      containerClass: 'grid' // Add the class 'list' to the container on load
    }
  });
  
  
  $changeLayout.on('click', function(){
    
    if(layout == 'grid'){
      layout = 'list';
      
      $changeLayout.text('grid'); // Update the button text
      
      $container.mixItUp('changeLayout', {
        containerClass: layout // change the container class to "grid"
      });
    
    } else {
      layout = 'grid';
      
      $changeLayout.text('list'); // Update the button text
      
      $container.mixItUp('changeLayout', {
        containerClass: layout // Change the container class to 'list'
      });
    }
  });
  
});



// MIX IT UP DYNAMIC GRID COMPONENT - NORMAL WIDTH - mixitup.kunkalabs.com/

