$(document).ready(function () {
  registerSW();
  async function registerSW() {
    if ('serviceWorker' in navigator) {
      try {
        await navigator.serviceWorker.register('./sw.js', { scope: '/' });
      } catch (e) {
        console.log(`SW registration failed`);
      }
    }
  }
  $("#toTop").click(function () {
    $('body, html').animate({ scrollTop: 0 }, 'slow');
  });

  $('.dropify').dropify({
    tpl: {
        message:'<div class="dropify-message"><span class="file-icon"></span> <p>drag and drop or click to <span>browse</span> your files <br/> Max 1 MB</p></div>',
    }
});
$(".radio-custom input[type='radio']+span:after").after({"width":"13px","height":"13px","border-radius":"15px","top": "0px","left": "0px","position": "absolute","background-color":"#f5ac00","content": "''","display": "block","visibility": "visible","border": "2px solid white"});
// start add to favorite effect
$('.most-popular-slider').on('breakpoint', function() {
  $('.most-popular-slider .fav-iocn').click(function(e) {
    $(this).find('span').toggleClass("active");
  }); 
});  
$('.fav-iocn').click(function(e) {
$(this).find('span').toggleClass("active");
e.preventDefault();
}); 
// end add to favorite effect
// start help details filter
$(".help-details .answer-data .fltr-top").click(function(){
  $(".answer-data .accordian-data").slideToggle()
})
// end help details filter
// start customer popup
// $(".login-btn").click(function(){
//   $("#signup-modal").fadeOut();
//   $(".modal-backdrop").fadeOut();
// });
// $("#login-modal .have-account .create-account-btn").click(function(){
//   $("#login-modal").fadeOut();
// });
var swiper1 = new Swiper(".swiper1", {
  slidesPerView: 1,
  spaceBetween: 20,
  // init: false,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1"
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar1"
  },
  breakpoints: {
    567: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 4,
    }
  }
});
var swiper2 = new Swiper(".most-popular-things .swiper2", {
  slidesPerView: 1,
  spaceBetween: 20,
  // init: true,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1"
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar1"
  },
  breakpoints: {
    567: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    }
  }
});
var swiper2 = new Swiper(".swiper3", {
  slidesPerView: 1,
  spaceBetween: 20,
  // init: true,
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1"
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar1"
  },
  breakpoints: {
    567: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 3,
    }
  }
});
// end customer popup
// start scroll links in details page
$(".StickyMenuDetails ul li.activityLink a").click(function(){
  $('html, body').animate({
    scrollTop: $(".package-option").offset().top -100
    }, 2000);
});
$(".StickyMenuDetails ul li.descriptionLink a").click(function(){
  $('html, body').animate({
    scrollTop: $("#Description").offset().top -100
    }, 2000);
});
$(".StickyMenuDetails ul li.ItineraryLink a").click(function(){
  $('html, body').animate({
    scrollTop: $("#Itinerary").offset().top -90
    }, 2000);
});
$(".StickyMenuDetails ul li.IncludedLink a").click(function(){
  $('html, body').animate({
    scrollTop: $("#Included").offset().top -100
    }, 2000);
});
$(".StickyMenuDetails ul li.InstructionsLink a").click(function(){
  $('html, body').animate({
    scrollTop: $("#Instructions").offset().top -100
    }, 2000);
});
$(".StickyMenuDetails ul li.ReviewsLink a").click(function(){
  $('html, body').animate({
    scrollTop: $("#Reviews").offset().top -100
    }, 2000);
});
// end scroll links in details page
$('[data-toggle="tooltip"]').tooltip();
// start banner image height
(function(){
    var leftHeight = $(".landing-page .banner .left-section").innerHeight();
    $(".landing-page .banner .right-section img").css("height",leftHeight)
}())
$(window).resize(function(){
  var leftHeight = $(".landing-page .banner .left-section").innerHeight();
  $(".landing-page .banner .right-section img").css("height",leftHeight)
});
// end banner image height
// start filter toggle in search page
$(".show-listing .left-sidebar .filter-group .fltr-top").click(function(){
  $(this).siblings(".filter-links").slideToggle();
  $(this).children("p").children(".fa-angle-down").toggle();
  $(this).children("p").children(".fa-angle-up").toggle();
});
$(".filter-container .filter-container-top.fltr-top").click(function(){
      $(".filter-group").slideToggle()
});
  
$(".search-page .mother-list li").click(function() {
  var checkBoxes = $(this).siblings(".child-list").find("input");
  checkBoxes.prop("checked", !checkBoxes.prop("checked"));
});   
$(".search-page .mother-list").click(function(){
    $(".search-page .mother-list input").change(function(){
      if ($(this).is(':checked')) {
        $(this).parent().parent().siblings(".search-page .child-list").slideDown();
      }
      else{
        $(this).parent().parent().siblings(".search-page .child-list").slideUp();
      }
});
});
$(".search-page .mother-list li label").click(function(){
  $(this).children(".fa-angle-down").toggle();
  $(this).children(".fa-angle-up").toggle();
});
// end filter toggle in search page
// start select adult number in details page
$(".drop-select-number .top-selcet").click(function(){
    $(".drop-select-number .bottom-select").toggle();

});

$(".outer.adult-select .input-group .input-group-button-right").click(function(){
      var adultNumberplus = parseInt($(".outer.adult-select .input-group .input-number").val()) +1 ;
      var adultPrice =parseInt($(".package-option .content .select-time .middle-data p span.adult-price").html());
      var adultPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.adult-total").html()) + adultPrice;
      var childPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.child-total").html());
      var totalPackagePrice = (adultPriceTotal + childPriceTotal);
      var adultTotal = (adultNumberplus * adultPrice);
      $(".package-option .accordion-set .left-se .price h5 span.total-packge").html(totalPackagePrice);
      $(".package-option .content .select-time .right-data p span.adult-total").html(adultTotal);
      $(".drop-select-number .top-selcet .adult-span").html(adultNumberplus);
      $(".package-option .content .select-time .middle-data p span.adult-span").html(adultNumberplus);
});
$(".outer.adult-select .input-group .input-group-button-left").click(function(){
      var adultNumberMinus = parseInt($(".outer.adult-select .input-group .input-number").val()) -1 ;
      var adultPrice =parseInt($(".package-option .content .select-time .middle-data p span.adult-price").html());
      var adultPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.adult-total").html())- adultPrice;
      var childPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.child-total").html());
      var totalPackagePrice = (adultPriceTotal + childPriceTotal);
      var adultTotal = (adultNumberMinus * adultPrice);
      $(".package-option .accordion-set .left-se .price h5 span.total-packge").html(totalPackagePrice);
      $(".package-option .content .select-time .right-data p span.adult-total").html(adultTotal);
      $(".drop-select-number .top-selcet .adult-span").html(adultNumberMinus);
      $(".package-option .content .select-time .middle-data p span.adult-span").html(adultNumberMinus);
});
$(".outer.child-select .input-group .input-group-button-right").click(function(){
      var childNumberplus = parseInt($(".outer.child-select .input-group .input-number").val()) +1 ;
      var childPrice =parseInt($(".package-option .content .select-time .middle-data p span.child-price").html());
      var adultPriceTotal = parseInt($(".package-option .content .select-time .right-data p span.adult-total").html());
      var childPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.child-total").html()) + childPrice;
      var totalPackagePrice = (adultPriceTotal + childPriceTotal);
      var childTotal = (childNumberplus * childPrice);
      $(".package-option .accordion-set .left-se .price h5 span.total-packge").html(totalPackagePrice);
      $(".package-option .content .select-time .right-data p span.child-total").html(childTotal);
      $(".drop-select-number .top-selcet .child-span").html(childNumberplus);
      $(".package-option .content .select-time .middle-data p span.child-span").html(childNumberplus);
});
$(".outer.child-select .input-group .input-group-button-left").click(function(){
      var childNumberMinus = parseInt($(".outer.child-select .input-group .input-number").val()) -1 ;
      var childPrice =parseInt($(".package-option .content .select-time .middle-data p span.child-price").html());
      var adultPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.adult-total").html());
      var childPriceTotal =  parseInt($(".package-option .content .select-time .right-data p span.child-total").html()) -
      childPrice;
      var totalPackagePrice = (adultPriceTotal + childPriceTotal);
      var childTotal = (childNumberMinus * childPrice);
      $(".package-option .accordion-set .left-se .price h5 span.total-packge").html(totalPackagePrice);
      $(".package-option .content .select-time .right-data p span.child-total").html(childTotal);
      $(".drop-select-number .top-selcet .child-span").html(childNumberMinus);
      $(".package-option .content .select-time .middle-data p span.child-span").html(childNumberMinus);
});
// end select adult number in details page
// start focus effect in accodian in details page
$(".accordion-set .title-ac").click(function(){
  $(".accordion-set").css("border-color","#ededed");
  $(".sl-btn").css({"background-color":"#fff","color":"#0085cd"})
  $(this).parent(".accordion-set").css("border-color","#0085cd");
  $(this).find(".sl-btn").css({"background-color":"#0085cd","color":"#fff"})
  $(".package-option .accordion-set.soldout-accordion .right-se .sl-btn").css({"background-color":"#fff","color":"#7d7d7d"});
  $(".accordion-set.soldout-accordion").css("border-color","#ededed");
});
// end focus effect in accodian in details page
// start slider width in mobile
  var windowWidth = $(window).width() -30;
  $(".swiper0").width(windowWidth);
  $(window).resize(function(){
    var windowWidth = $(window).width() -30;
    $(".swiper0").width(windowWidth);
  })
// end slider width in mobile
// start effect in checkout page
$(".same-pickup input").change(function(){
  if ($(this).is(':checked')) {
    $(".checkout-page .last-section").hide();
    $(".checkout-page .last-line").hide();
  }
  else{
    $(".checkout-page .last-section").show();
    $(".checkout-page .last-line").show();
  }
});
$(".traveler-details .custom-check input").change(function(){
  if ($(this).is(':checked')) {
    $(".traveler-details .traveler-form").hide();
  }
  else{
    $(".traveler-details .traveler-form").show();
  }
});
// end effect in checkout page
// start show more in landing page
$(".show-more").click(function(){
    $(this).siblings(".more-section").toggle();
    $(this).siblings(".more-section").children(".fa-angle-up").toggle();
    $(this).siblings(".more-section").children(".fa-angle-down").toggle();
});
// ///////////////////////////////////
$(".show-more").click(function(){
  $(this).children(".more-section").toggle();
  $(this).children(".fa-angle-down").toggle();
  $(this).children(".fa-angle-up").toggle();
 });
// end show more in landing page
// start yellow section height
if($(window).width()<= 767){
  var imageHeight = $(".hm-corporate .box-outer .corp-box img").outerHeight();
  var dataHeight = $(".hm-corporate .box-outer .box .bottom-text").innerHeight();
  var yellowHeight = imageHeight + dataHeight
  $(".hm-corporate .right-box").height(yellowHeight);  
}
$(window).resize(function(){
  if($(window).width()<= 767){
    var imageHeight = $(".hm-corporate .box-outer .corp-box img").outerHeight();
    var dataHeight = $(".hm-corporate .box-outer .box .bottom-text").innerHeight();
    var yellowHeight = imageHeight + dataHeight
    $(".hm-corporate .right-box").height(yellowHeight);  
  }
  else{
    $(".hm-corporate .right-box").css("height","498.4px");  
  }
});
if($(window).width()<= 767){
  var image_Height = $(".experience-dubai .box-outer .corp-box img").outerHeight();
  var data_Height = $(".experience-dubai .box-outer .box a .bottom-text").innerHeight();
  var yellow_Height = image_Height + data_Height + 42
  $(".experience-dubai .box-outer .box.left-box").height(yellow_Height);
}
$(window).resize(function(){
  if($(window).width()<= 767){
      var image_Height = $(".experience-dubai .box-outer .corp-box img").outerHeight();
      var data_Height = $(".experience-dubai .box-outer .box a .bottom-text").innerHeight();
      var yellow_Height = image_Height + data_Height + 42
      $(".experience-dubai .box-outer .box.left-box").height(yellow_Height);
  }
  else{
    $(".experience-dubai .box-outer .box.left-box").css("height","498.4px");  
  }
});
// end yellow section height
// start langauge effect
$('.main-header .logo-menu .right-side ul li:nth-of-type(1)').click(function(){
  $('.language-dropdown').slideToggle(400)
});
// end langauge effect
// start focus effect input in 404 page
$(".error-page .input-group input").focus(function(){
    $(this).css({"border":"1px solid #ededed","border-left":"none"});
    $(this).parent(".input-group").css({"box-shadow":"0 1px 12px 0 rgba(0, 0, 0, 0.12), 0 0 12px 0 rgba(0, 0, 0, 0.08)","border":"1px solid #ededed"});
    $(this).siblings(".input-group-prepend").children(".input-group-text").css("border","1px solid #ededed")
});
$(document).click(function (e) {
  if (!$(e.target).hasClass("input-group") 
  && $(e.target).parents(".sr-box").length === 0) 
  {
      $(".sr-box .input-group").css("box-shadow","none");
  }
  }); 
// end focus effect input in 404 page
//initialize swiper when document ready
    var mySwiper0 = new Swiper ('.swiper0', {
      scrollbar: {
        el: '.swiper-scrollbar0',
      },
    });
  // start floating video 
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >=400) {
    $(".mfp-iframe-scaler iframe").css({"position":"fixed","bottom":"10px","right":"10px","width":"360px","height":"360px","display":"block","top":"initial","left":"initial","z-index":"999999"});
  }
  else{
    $(".mfp-iframe-scaler iframe").css({"position":"absolute","top":"-10px","left":"0px","width":"100%","height":"100%","display":"block"});
  }
});
  // end floating video 
  // start enter promo code effect
  $(".toggle-div").click(function(){
      $(this).hide();
      $(".input-promo-code").show();
  });
  $(".input-promo-code .input-group-append button").click(function(){
      $(".input-promo-code").hide();
      $(".toggle-div").show();
  });
  // end enter promo code effect
  // set catergory checked prperty when user checked on it 
  var grd = function(){
    $(".category-select").click(function() {
      var previousValue = $(this).children('input').attr('previousValue');
      var name = $(this).children('input').attr('name');
      if (previousValue == 'checked') {
        $(this).children('input').removeAttr('checked');
        $(this).children('input').attr('previousValue', false);
      } else {
        $(".category-select input[name="+name+"]:radio").attr('previousValue', false);
        $(this).children('input').attr('previousValue', 'checked');
      }
    });
  };
  grd('1');
  // end set catergory checked prperty when user checked on it 
  // start filter most popular things in dubai
  $(document).ready(function(){
    $('.most-popular-things .filter-link a').click(function(e){
      e.preventDefault();
      var getHref = $(this).attr('href');      
      var linkCategory = getHref.replace(/^#/, '');
      $('.most-popular-things .filter-link a').removeClass('active-item');
      $(this).addClass('active-item');
      if(linkCategory == 'all'){
        $('.most-popular-things .most-popular-slider .items').fadeIn();        
      } else {
        $('.most-popular-things .most-popular-slider .items').show();
        $('.most-popular-things .most-popular-slider .items a').attr("tabindex","0");
        $('.most-popular-things .most-popular-slider .items').not('[data-category="'+linkCategory+'"]').fadeOut();
      }
    })
  });
  // end filter most popular things in dubai
  $('.alert-warning .fa-times').click(function(){
    $(this).parent('.alert-warning').fadeOut();
  })
  // start home dropdown 
  $('.whatWeDo-dropdown .dp-menu').click(function(){
      $('.whatWeDo-dropdown .home-dropdown').toggle(500);
      $(".language-dropdown").hide();
  });
  // end home dropdown 
  // start disapear dropdown when click in any space 
  $(document).click(function (e) {
    if (!$(e.target).hasClass("home-dropdown") 
    && $(e.target).parents(".whatWeDo-dropdown").length === 0) 
    {
        $(".whatWeDo-dropdown .home-dropdown").hide();
    }
  }); 
  $(document).click(function (e) {
    if (!$(e.target).hasClass("language-dropdown") 
    && $(e.target).parents(".language-btn").length === 0) 
    {
        $(".language-dropdown").hide();
    }
  });  
  // end disapear dropdown when click in any space 
  // start autocomplete effect
  $('.main-header .logo-menu .middle .serach-box input').keyup(function(){
    $(this).siblings('.autocomplete-sec').toggle();
    $(this).toggleClass('border-effect');
  });
  $('.mbrs .sr-box .input-group input').keyup(function(){
    $(this).parent().children('.autocomplete-sec').toggle();
    $(this).parent('.input-group').toggleClass('border-effect');
  });
  $('.mobile-menu .searchform input[type="text"]').focus(function(){
    $('.mobile-autocomplete-sec').toggle();
  });
  $('.error-page .input-group input').keyup(function(){
    $(this).parent().siblings('.autocomplete-sec').toggle();
  });
  // start autocomplete search in mobile
  var docHeight = $( document ).height();
  $('.mb-search .search_close').click(function(){
    $('.mobile-autocomplete-sec').hide();
  });
  // end autocomplete search in mobile
  $('.mobile-autocomplete-sec').css("height",docHeight);
  // end autocomplete effect
  // start select effect in radio btn
  $('.radio-select .category-select').click(function(){
      $('.radio-select .category-select').removeClass('border-effect');
      $(this).toggleClass('border-effect');
  });
  // end select effect in radio btn
  // start hide cokkies 
  $('.cookies .fa-times').click(function(){
    $('.cookies').fadeOut(800)
  });
  // end hide cookie
  var getURL = window.location.href;
  var currentPage = getURL.substring(getURL.lastIndexOf('/') + 1);
  $('.top-menu .left-side a[href="'+ currentPage +'"]').addClass('active');

   var ua = window.navigator.userAgent;
	var isIE = /MSIE|Trident/.test(ua);

	if (isIE) {
		//IE specific code goes here
		$('body').addClass('ie-browser');
	} 
    
  $('#preloader').fadeOut();

  var options = {
    animateThreshold: 30,
    scrollPollInterval: 0
}
$('.aniview').AniView(options);

// validations
// start error page validation
$("#error-form").validate({
  rules: {
    error_input:"required"
  },
  messages: {
    error_input:"please enter input"
  }
});
// end error page validation
$("#flightRroundForm").validate({
  rules: {
    datepicker_r1 : "required",
    datepicker_r2 : "required",
    flyfromRound : "required",
    flytoRound : "required",
  },
  messages: {
    datepicker_r1 : "please pick a Departure date",
    datepicker_r2 : "please pick a Return date",
    flyfromRound : "Please choose a From location",
    flytoRound : "Please choose a To location",
  }
});

$("#flightOneWayForm").validate({
  rules: {
    datepicker_o1 : "required",
    datepicker_o2 : "required",
    flyFromOneway : "required",
    flyToOneway : "required",
  },
  messages: {
    datepicker_o1 : "please pick a Departure date",
    flyFromOneway : "Please choose a From location",
    flyToOneway : "Please choose a To location",
  }
});

$("#flightMultiForm").validate({
  rules: {
    dateStart : "required",
    dateEnd : "required",
    flyFromMulti : "required",
    flyToMulti : "required",
  },
  messages: {
    dateStart : "please pick a Departure date",
    dateEnd : "please pick a Return date",
    flyFromMulti : "Please choose a From location",
    flyToMulti : "Please choose a To location",
  }
});

$("#ActivityForm").validate({
  rules: {
    activity_city : "required",
    activity_type : "required",
    act_date_from : "required",
    act_date_to : "required",
  },
  messages: {
    activity_city : "please select one",
    activity_type : "please select one",
    act_date_from : "please pick a date",
    act_date_to : "please pick a date",
  }
});

$("#HolidayForm").validate({
  rules: {
    holi_location : "required",
    holi_type : "required",
    holi_from : "required",
    holi_to : "required",
  },
  messages: {
    holi_location : "please select one",
    holi_type : "please select one",
    holi_from : "please pick a date",
    holi_to : "please pick a date",
  }
});

$("#HotelForm").validate({
  rules: {
    hotel_location : "required",
    hotel_checkin : "required",
    hotel_checkout : "required",
  },
  messages: {
    hotel_location : "please select one",
    hotel_checkin : "please pick a date",
    hotel_checkout : "please pick a date",
  }
});

$("#FlyHotelRoundForm").validate({
  rules: {
    flyhotelRound_from : "required",
    flyhotelRound_to : "required",
    flyhotelRound_type : "required",
    flyhotelRound_dep : "required",
    flyhotelRound_return : "required",
  },
  messages: {
    flyhotelRound_from : "please select one",
    flyhotelRound_to : "please select one",
    flyhotelRound_type : "please select one",
    flyhotelRound_dep : "please pick a date",
    flyhotelRound_return : "please pick a date",
  }
});

$("#FlyHotelOneForm").validate({
  rules: {
    flyhotelOne_from : "required",
    flyhotelOne_to : "required",
    flyhotelOne_type : "required",
    flyhotelOne_date : "required",
  },
  messages: {
    flyhotelOne_from : "please select one",
    flyhotelOne_to : "please select one",
    flyhotelOne_type : "please select one",
    flyhotelOne_date : "please pick a date",
  }
});

$("#FlyHotelMultiForm").validate({
  rules: {
    flyhotelMulti_from : "required",
    flyhotelMulti_to : "required",
    flyhotelMulti_type : "required",
    dateStart : "required",
    dateEnd: "required",
  },
  messages: {
    flyhotelMulti_from : "please select one",
    flyhotelMulti_to : "please select one",
    flyhotelMulti_type : "please select one",
    dateStart : "please pick a date",
    dateEnd : "please pick a date",
  }
});

$("#visaForm").validate({
  rules: {
    visa_pass : "required",
    visa_citizen : "required",
    visa_living : "required",
    visa_type : "required",
  },
  messages: {
    visa_pass : "please fill",
    visa_citizen : "please select one",
    visa_living : "please select one",
    visa_type : "please select one",
  }
});



  $('.huge-menu li a[data-lang]').on('click', function(e){
      e.preventDefault();
      var getLang = $(this).attr('data-lang');
      $('.dp-menu span.site-lang').text(getLang);
  });

  $('.huge-menu li a[data-currency]').on('click', function(e){
    e.preventDefault();
    var getCurrency = $(this).attr('data-currency');
    $('.dp-menu span.site-currency').text(getCurrency);
});
});


jQuery(document).ready(function ($) {

  $('.activity-page .serach-box .s-ip').click(function () {
    $('.MultiSearchBox').addClass('SrOpen');
    $('.MultiSearchBox').show();
    $('<div class="multiSearchBg"></div>').appendTo('.main-header');
    $('body').addClass('search-visible');
  });

  $('.activity-page .serach-box .s-ip').on("change paste keyup", function () {
    if ($(this).val() == '') {
      $('.MultiSearchBox').show();
    } else {
      $('.MultiSearchBox').hide();
    }
  });



  $(document).on('click', '.multiSearchBg', function () {
    $('.MultiSearchBox').removeClass('SrOpen');
    $('.MultiSearchBox').hide();
    $('body').removeClass('search-visible');
    $(this).remove();
  });

  $('.MenuLeft li').hover(
    function (event) {
      // The mouse has entered the element
      if (!$(this).hasClass('active')) {
        var getPos = $(this).index() + 1;
        var getRightContent = $('.RightBar .itemsBox:nth-child(' + getPos + ')');
        if (!$(getRightContent).hasClass('visible')) {
          $('.RightBar .itemsBox').not($(getRightContent)).removeClass('visible');
          $(getRightContent).addClass('visible');
          $('.MenuLeft li').not($(this)).removeClass('active');
          $(this).addClass('active');
        }
      }
    },
    function (event) {
      // The mouse has left the element
      event.stopPropagation();
    }
  );

  $('.counter span').counterUp({
     delay: 5,
    time: 2000
  });
  $('.view-map').magnificPopup({
    disableOn: 0,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
  $('.huge-menu a').on('click', function (e) {
    e.preventDefault();
    if (!$(this).hasClass('active')) {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

    }
  });


});
jQuery(document).ready(function () {
  jQuery('header nav ul > li.menu-item-has-children').prepend('<span class="sub-menu-icon trans"></span>');
  jQuery(function () {

    var pull = jQuery('#pull');
    menu = jQuery('nav > ul');
    menuHeight = menu.height();

    jQuery(pull).on('click', function (e) {
      e.preventDefault();
      menu.slideToggle();
      jQuery(".nav-icon").toggleClass('close');
    });

    jQuery(window).resize(function () {
      var w = jQuery(window).width();
      if (w > 300 && menu.is(':hidden')) {
        menu.removeAttr('style');
      }
    });
  });
  $('.corporate-register-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,

  });
  
  $('.corporate-enquiry-form').magnificPopup({
    type: 'inline',
    preloader: false,
    closeBtnInside: true,
    closeOnBgClick: false,

  });

  $('.forgot-pass-link a').click(function (e) {
    e.preventDefault();
    $('.login-content').addClass('hide-login');
    $('.forgot-pass-content').show();
  });

  $('a.back-to-login').click(function (e) {
    e.preventDefault();
    $('.login-content').removeClass('hide-login');
    $('.forgot-pass-content').hide();
  });

});

function newFunction() {
  const reader = new FileReader();
  reader.readAsDataURL(sourceImage);
}

function bindMenuHover() {
  var w = jQuery(window).width();
  if (w > 991) {
    jQuery("nav li").hover(function () {

      jQuery(this).children(".sub-menu").stop(true, true).fadeIn();

    }, function () {

      jQuery(this).children(".sub-menu").hide();

    }
    );

  } else {
    jQuery("nav li").unbind('mouseenter mouseleave')
  }
}

jQuery(document).ready(function () {
  // bindMenuHover();
  jQuery("nav li .sub-menu-icon").click(function (e) {
    jQuery(this).toggleClass("open");
    jQuery(this).parents('li').children(".sub-menu").slideToggle();
    e.preventDefault();
  });


  jQuery(".sub-menu").hover(function () {
    jQuery(this).parents("li").find("a").addClass("navActive2");
    jQuery(this).children("li").find("a").removeClass("navActive2");
  },
    function () {
      jQuery(this).parents("li").find("a").removeClass("navActive2");
      jQuery(this).children("li").find("a").removeClass("navActive2");
    });
});

jQuery(window).resize(function () {
  bindMenuHover();
});



$(document).ready(function () {
  $('#responsive-menu-button').sidr({
    name: 'sidr-main',
    source: '#navigation',
    onOpen: function () {
      $("#responsive-menu-button").toggleClass('ion-navicon');
      $("#responsive-menu-button").toggleClass('ion-android-close');
    },
    onClose: function () {
      $("#responsive-menu-button").toggleClass('ion-navicon');
      $("#responsive-menu-button").toggleClass('ion-android-close');
    },
    onOpenEnd: function () {
      // main menu drop down
      $('.sidr-class-menu li').each(function () {
        if ($(this).hasClass('sidr-class-menu-item-has-children')) {
          $(this).append('<span class="menu-click ion-android-add"></span>');
        }
      });
    },
  });

  $('#sidr-id-menuClose').click(function (e) {
    e.preventDefault();
    $.sidr('close', 'sidr-main');
  });


  $(".sidr-class-dp-menu").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("sidr-class-sub-menu");
    $(this).parent('li').siblings().find("ul.sidr-class-sub-menu").slideUp();
    $(this).parent('li').siblings().find(".sidr-class-dp-menu").removeClass("sidr-class-sub-menu");
    $(this).parent('li').find("ul.sidr-class-sub-menu").slideToggle();

  });

  $('.mb-sr').click(function () {
    $(this).parent().find('.searchform').addClass('search-form-open');
  });

  $('.search_close ').click(function () {
    $(this).parent().removeClass('search-form-open');
  });

  $('.tour-slider').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,

  });
  $('.landing-page .menu-slider,.things-to-do-page .menu-slider').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    slidesToShow: 7,
    arrows: true,
    responsive: [
        {
        breakpoint: 1200,
            settings: {
                slidesToShow: 6,
            }
        },
        {
        breakpoint: 960,
            settings: {
                slidesToShow: 4,
            }
        },
        {
        breakpoint: 840,
            settings: {
                slidesToShow: 4,
        }
        },
        {
        breakpoint: 640,
            settings: {
                slidesToShow: 3,
        }
        },
        {
        breakpoint: 520,
            settings: {
                slidesToShow: 2,
        }
        },
    ]
  }); 
  // $('.menu-slider').slick({
  //   dots: false,
  //   infinite: false,
  //   speed: 1000,
  //   slidesToShow: 6,
  //   arrows: true,
  //   responsive: [
  //       {
  //       breakpoint: 1200,
  //           settings: {
  //               slidesToShow: 6,
  //           }
  //       },
  //       {
  //       breakpoint: 960,
  //           settings: {
  //               slidesToShow: 4,
  //           }
  //       },
  //       {
  //       breakpoint: 840,
  //           settings: {
  //               slidesToShow: 4,
  //       }
  //       },
  //       {
  //       breakpoint: 640,
  //           settings: {
  //               slidesToShow: 3,
  //       }
  //       },
  //       {
  //       breakpoint: 520,
  //           settings: {
  //               slidesToShow: 2,
  //       }
  //       },
  //   ]
  // });
  // start social contacts 
  $('.social-contacts-wrapper .icons-section .container1').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows:false,
    autoplay:true,
    autoplaySpeed:1000
  });
  $('.social-contacts-wrapper .icons-section .container1').click(function(){
      $(".social-contacts-wrapper .links-section").toggle(500);
  });
  // end social contacts 

});


$(document).ready(function () {
  $(".accordion-set > .title-ac").on("click", function () {
    var titleBlock = $(this).closest('.title-ac');
    if ($(titleBlock).hasClass("active")) {
      $(titleBlock).removeClass("active");
      $(titleBlock)
        .siblings(".content")
        .slideUp(200);
      $(".accordion-set > .title-ac i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
    } else {
      $(".accordion-set > .title-ac i")
        .removeClass("fa-angle-up")
        .addClass("fa-angle-down");
      $(titleBlock)
        .find("i")
        .removeClass("fa-angle-down")
        .addClass("fa-angle-up");
      $(".accordion-set > .title-ac").removeClass("active");
      $(titleBlock).addClass("active");
      $(".content").slideUp(200);
      $(titleBlock)
        .siblings(".content")
        .slideDown(200);
    }
  });

  $('.bar span').hide();



  setTimeout(function () {
    $('.bar span').fadeIn('slow');
  }, 1000);



  $('.input-group-button-right').click(function () {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    $input.val(val + 1);
    $(".accordion-set").css("display",);
  });

  var lowestNumb = '';
  $('.input-group-button-left').click(function () {
    var $input = $(this).parents('.input-number-group').find('.input-number');
    var val = parseInt($input.val(), 10);
    if ($(this).hasClass('adult-count')) {
      lowestNumb = 1;
    } else {
      lowestNumb = 0;
    }

    if (val !== lowestNumb) {
      $input.val(val - 1);
    }

  });

  $('.top-deals-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  }); 
  $('.details-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });

  $('.partners-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 1000,
    swipeToSlide: true,
   // variableWidth: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 558,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }

    ]
  });

  $('.review-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });


  // $('.best-place-slider').slick({
  //   dots: false,
  //   arrows: true,
  //   infinite: true,
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 2000,
  //   speed: 500,
  //   swipeToSlide: true,
  //   responsive: [
  //     {
  //       breakpoint: 1000,
  //       settings: {
  //         slidesToShow: 3,
  //         slidesToScroll: 1
  //       }
  //     },

  //     {
  //       breakpoint: 680,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1
  //       }
  //     },

  //     {
  //       breakpoint: 530,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }

  //   ]
  // });
    // start most popular things in dubai slider
    // $('.error-page .most-popular-slider,.cart-page .most-popular-slider,.success-page .most-popular-slider').slick({
    //   dots: false,
    //   arrows: true,
    //   infinite: true,
    //   slidesToShow: 4,
    //   slidesToScroll: 1,
    //   autoplay: false,
    //   autoplaySpeed: 2000,
    //   speed: 500,
    //   swipeToSlide: true,
    //   responsive: [
    //     {
    //       breakpoint:992,
    //       settings: {
    //         slidesToShow:2,
    //         slidesToScroll: 1
    //       }
    //     },
    //     {
    //       breakpoint:767,
    //       settings: {
    //         slidesToShow:1,
    //         slidesToScroll: 1
    //       }
    //     },
    //   ]
    // });
    // end most popular things in dubai slider    
  // start most popular things in dubai slider
  
  $('.most-popular-slider').slick({
    dots: false,
    arrows: true,
    infinite:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: false,
    responsive: [
      {
        breakpoint:992,
        settings: {
          slidesToShow:2,
          slidesToScroll: 1,
          infinite:true
        }
      },
      {
        breakpoint:767,
        settings: {
          slidesToShow:1,
          slidesToScroll: 1,
          infinite:true
        }
      },
    ]
  });
  // end most popular things in dubai slider
  $('.visa-types').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 500,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 680,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 530,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }

    ]
  });
  

});

$(document).ready(function () {

  var endDateStart = new Date();
  var endPicker = $('.endDate').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.startDate').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      endDateStart = date;
      $('.endDate').datepicker({
        minDate: endDateStart
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });


  var endDateStartHotel = new Date();
  var endPickerHotel = $('.hotelEnd').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.hotelStart').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      endDateStartHotel = date;
      $('.hotelEnd').datepicker({
        minDate: endDateStartHotel
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  var ActivityEndDate = new Date();
  var endPickerAct = $('.ActivityEnd').datepicker({
    autoClose: true,
    minDate: new Date(),
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.ActivityStart').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      ActivityEndDate = date;
      $('.ActivityEnd').datepicker({
        minDate: ActivityEndDate
      });
    },
    onHide: function (dp, animationCompleted) {
      $('#overlay').trigger('click');
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

  $('.Availability').datepicker({
    minDate: new Date(),
    autoClose: true,
    onSelect: function onSelect(fd, date) {
      ActivityEndDate = date;
    },
    onShow: function (dp, animationCompleted) {
      if (!animationCompleted) {
      } else {
        var datepickerPos = $('.datepickers-container .datepicker.active').offset().top - $(window).height() + $('.datepickers-container .datepicker.active').height() + 30;
        $("body, html").animate({ scrollTop: datepickerPos }, 'fast');
      }
    },
  });

});


var $things = $('#Reviews');

$things.waypoint(function (direction) {
  if (direction === 'down') {
    $('.histo .bar').each(function () {
      var barwidth = $(this).attr('data-width');
      $(this).animate({ width: barwidth }, 2000);
    });
  }
}, {
    offset: '100%'
  });
$(document).ready(function () {
  $('.top-dp li a').on("click", function () {
    $('.drop-down').toggleClass();
  });
});

$(document).on('click', '.switch-btn span', function () {
  $(this).parents('.location-select').toggleClass('rotated');
  var getFromLocation = $(this).parents('.location-select').find('.fly-from option:selected').val();
  var getToLocation = $(this).parents('.location-select').find('.fly-to option:selected').val();

  $(this).parents('.location-select').find('select.fly-to').val(getFromLocation);
  $(this).parents('.location-select').find('.search_test.fly-to')[0].sumo.reload();

  $(this).parents('.location-select').find('select.fly-from').val(getToLocation);
  $(this).parents('.location-select').find('.search_test.fly-from')[0].sumo.reload();
});


$(document).ready(function () {
  $('.logo-menu ul li a').click(function (e) {
    var getLink = $(this).attr('href').split('#')[1];
    if ($('#' + getLink).length) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $('#' + getLink).offset().top - 10
      }, 1000);
      return false;
    }
  });

  $('.StickyFiltterTop li a').click(function(e){
    e.preventDefault();
    var currLink = $(this);
    $('.StickyFiltterTop li a').not(currLink).removeClass('active');
    $(currLink).addClass('active');
  });

});
// Lazyload script

var lazy = [];
// registerListener('load', setLazy);
// registerListener('load', lazyLoad);
registerListener('scroll', lazyLoad);
registerListener('resize', lazyLoad);
function setLazy() {
  // document.getElementById('listing').removeChild(document.getElementById('viewMore'));
  // document.getElementById('nextPage').removeAttribute('class');

  lazy = document.getElementsByClassName('lazy');
}
function lazyLoad() {
  for (var i = 0; i < lazy.length; i++) {
    if (isInViewport(lazy[i])) {
      if (lazy[i].getAttribute('data-src')) {
        lazy[i].src = lazy[i].getAttribute('data-src');
        lazy[i].removeAttribute('data-src');
      }
    }
  }

  cleanLazy();
}
function cleanLazy() {
  lazy = Array.prototype.filter.call(lazy, function (l) { return l.getAttribute('data-src'); });
}
function isInViewport(el) {
  var rect = el.getBoundingClientRect();

  return (
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
function registerListener(event, func) {
  if (window.addEventListener) {
    window.addEventListener(event, func)
  } else {
    window.attachEvent('on' + event, func)
  }
}

// Lazyload script end
function initMap() {
  var nam = {lat:29.971274, lng: 30.950121};
  var map = new google.maps.Map(document.getElementById('map2'), {
    zoom:5,
    center: nam
  });
  var marker = new google.maps.Marker({
    position: nam,
    map: map
  });
}
