$(function() {

var langsrc="https://www.frdrillgroup.com/template/pc/default/images/flag/";
	var lang=$('html').attr("lang");
	if (lang){
	    $('.header-lang .box img').attr("src",langsrc+lang+".png");
	    $('.header-lang .box em').html(lang);
	};


var lang=$('html').attr("lang");
if (lang){
$('.header-lang .box img').attr("src",langsrc+lang+".png");
$('.header-lang .box em').html(lang);
};

    

	if($(document.body).width() < 768) {

		$(".mo-header-menu").click(function(){

			$(".mo-leftmenu").toggleClass("menu-transitioning");

		});

		$(".mo-leftmenu .tit span").click(function(){

			$(".mo-leftmenu").removeClass("menu-transitioning");

		});

		$(".mo-header-search").click(function(){

			$(".mo-search").toggle();

		});

		$(".down-btn").on('click',function(){

			$(this).parent('li').toggleClass("active");

			$(this).siblings('ul').slideToggle();

			return false;

		});

		$('.sidemenu h3').click(function(){

			if( $(this).siblings('ul').is(':hidden') ) {

				$(this).addClass('active').siblings('ul').slideDown(); 

			} else{

				$(this).removeClass('active').siblings('ul').slideUp();

			}

		});

		$('.left_nav h3').click(function(){

			if( $(this).siblings('ul').is(':hidden') ) {

				$(this).addClass('active').siblings('ul').slideDown(); 

			} else{

				$(this).removeClass('active').siblings('ul').slideUp();

			}

		});

	};

    

    $(".header-lang").hover(function(){

	    $(this).find("ul").show();

	},function(){

	    $(this).find("ul").hide();

    });

    

    $(".search").hover(function(){

        $(this).addClass("searchon");

	},function(){

	    $(this).removeClass("searchon");

    });



    $(window).scroll(function() {

		if( $(window).width() > 768 ) {

			if($(this).scrollTop() >=200) {

				$('#gotop').fadeIn();	

			} else {

				$('#gotop').fadeOut();

			}

		}

	});

	$('#gotop').click(function(){

	   $('html, body').animate({scrollTop:0}, 'slow');

	});



    $('.indexD .topnews').hover(function(){
		$(".txt", this).stop().animate({height:'170px'},{queue:false,duration:300});
	}, function() {
		$(".txt", this).stop().animate({height:'83px'},{queue:false,duration:300});
	});

	

	$('.qlist ul li').click(function(){

	    if( $(".txt",this).is(':hidden') ) {

		    $('.qlist ul li').removeClass('active').find(".txt").slideUp();

		    $(this).toggleClass('active').find(".txt").slideDown(); 

	    }

    });

	

    $('.sidemenu ul li').click(function(){

	    if( $("dl",this).is(':hidden') ) {

		    $('.sidemenu ul li').removeClass('active').find("dl").slideUp();

		    $(this).toggleClass('active').find("dl").slideDown(); 

	    }

    });

    

    $(".faq ul li .tit").click(function(){

        $(this).siblings(".con").slideToggle();

    });

    

    $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');

    $('.book').click(function() {$body.animate({scrollTop: $('.inquirShow').offset().top-70},'slow')});



});



$(".c_sub").click(function(){



	if($(".c_name").val()==''||$(".c_email").val()==''||$(".c_cnt").val()==''||$(".yzm").val()==''){

		alert("Please fill in the fields marked with (*)!");

		return false;

	}

	if (!(/^[0-9a-zA-Z|\-|\.|\_]{2,50}[@]{1}[0-9a-zA-Z|\-]{2,50}[\.]{1}[0-9a-zA-Z|\-\.]{2,50}$/.test($(".c_email").val()))){

		alert('The E-mail format is incorrect!');	

		return false

	}

});



$(".fsubmit").click(function(){

		if($(".fname").val()==''||$(".fmail").val()==''||$(".fquestion").val()==''){

			alert('Please fill in the fields marked with (*)!');	

			return false;	

		}	

		if (!(/^[0-9a-zA-Z|\-|\.|\_]{2,50}[@]{1}[0-9a-zA-Z|\-]{2,50}[\.]{1}[0-9a-zA-Z|\-\.]{2,50}$/.test($(".fmail").attr("value")))){

			alert('The E-mail format is incorrect!');

			$(".fmail").click();

			$(".fmail").focus();

			return false		

		}

	});