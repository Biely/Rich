$(function(){
	$("#back-top").hide();  
  
              // fade in #back-top  
	  $(function () {  
	    $(window).scroll(function () {  
	      if ($(this).scrollTop() > 100) {  
	        $('#back-top').fadeIn();  
	      } else {  
	        $('#back-top').fadeOut();  
	      }  
	    });  

	    // scroll body to 0px on click  
	    $('#back-top').click(function () {  
	      $('body,html').animate({  
	        scrollTop: 0  
	      }, 'fast');  
	      return false;  
	    });  
	  }); 

	  $('.myoscar').hover(function(){
			//alert("121");
			$(this).find("h2").css("color","#ffffff")
			$(this).find("p").css("color","#ffffff")

		}, function() {
			$(this).find("h2").css("color","#000000")
			$(this).find("p").css("color","#000000")
	});
	
	$('.main-category-item').hover(function(){
			//alert("121");
			$(this).find(".fibg").animate({opacity:'0.9'}, 300);

		}, function() {
			$(this).find(".fibg").animate({opacity:'0'}, 300);
	}); 

	/*$('.list-item').height($('.block-list').height()-10);*/
	$('.hot .hot-item').height($('.hot .hot-item').width());

	$('.count0').hover(function(){
			//alert("121");
			$(this).css("background","rgb(52, 156, 227)");
		}, function() {
			$(this).css("background","rgb(237, 23, 75)");
	}); 
	$('.count2').hover(function(){
			//alert("121");
			$(this).css("background","rgb(237, 23, 75)");
		}, function() {
			$(this).css("background"," rgb(245, 130, 1)");
	}); 
	$('.count5').hover(function(){
			//alert("121");
			$(this).css("background","rgb(237, 23, 75)");
		}, function() {
			$(this).css("background"," rgb(22, 22, 22)");
	}); 
	$('.count7').hover(function(){
			//alert("121");
			$(this).css("background","rgb(22, 22, 22)");
		}, function() {
			$(this).css("background"," rgb(72, 188, 1)");
	}); 
	$('.count8').hover(function(){
			//alert("121");
			$(this).css("background","rgb(237, 23, 75)");
		}, function() {
			$(this).css("background"," rgb(52, 156, 227)");
	}); 
	$('.count10').hover(function(){
			//alert("121");
			$(this).css("background","rgb(52, 156, 227)");
		}, function() {
			$(this).css("background"," rgb(237, 23, 75)");
	}); 
});