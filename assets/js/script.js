(function($){
  "use strict";
  var NAY = {};
  var plugin_track = 'static/plugin/';
  $.fn.exists = function () {
    return this.length > 0;
  };

  /*--------------------
      * Menu Close
  ----------------------*/
  NAY.MenuClose = function(){
    $('.navbar-nav a').on('click', function() {
      var toggle = $('.navbar-toggler').is(':visible');
      if (toggle) {
        $('.navbar-collapse').collapse('hide');
      }
    });
  }

  NAY.MenuTogglerClose = function(){
    $(".toggler-menu").on('click', function(){
      $(this).toggleClass('open');
      $('.header-left').stop().toggleClass('menu-open menu-open-desk');
    });
    $('.header-left a').on('click', function() {
      var toggle = $('.toggler-menu').is(':visible');
      if (toggle) {
        $('.header-left').removeClass('menu-open');
        $('.toggler-menu').removeClass('open');
      }
    });
  }

  /*----------------------------------------------*/
  /* Header Fixed
  /*----------------------------------------------*/
  NAY.HeaderFixd = function() {
    var HscrollTop  = $(window).scrollTop();  
    if (HscrollTop >= 100) {
      $('body').addClass('fixed-header');
    }
    else {
      $('body').removeClass('fixed-header');
    }
  }

  /*--------------------
      * One Page
  ----------------------*/
  NAY.OnePage = function(){
    $('.header-nav a[href*="#"]:not([href="#"])').on('click', function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 60,
          }, 1000);
          return false;
        }
      }
    });
  }

  /*--------------------
    * OwlSlider
  ----------------------*/
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      loop: true,
      autoplay: true,
      speed: 300,
    });
  });

  /*--------------------
      * Progress Bar 
  ----------------------*/
  NAY.ProgressBar = function(){
    $(".skill-bar .skill-bar-in").each(function () {
      var bottom_object = $(this).offset().top + $(this).outerHeight();
      var bottom_window = $(window).scrollTop() + $(window).height();
      var progressWidth = $(this).attr('aria-valuenow') + '%';
      if(bottom_window > bottom_object) {
        $(this).css({
          width : progressWidth
        });
      }
    });
  }

  /*----------------------------------------------*/
  /* Load Script
  /*----------------------------------------------*/
  var _arr  = {};
  function loadScript(scriptName, callback) {
    if (!_arr[scriptName]) {
      _arr[scriptName] = true;
      var body    = document.getElementsByTagName('body')[0];
      var script  = document.createElement('script');
      script.type = 'text/javascript';
      script.src  = scriptName;
      script.onload = callback;
      body.appendChild(script);
    } else if (callback) {
      callback();
    }
  };

  /*----------------------------------------------*/
  /* Initialize Functions on Load, Ready, Scroll, Resize
  /*----------------------------------------------*/
  $(window).on("load", function(){
    NAY.HeaderFixd();
    NAY.OnePage();
    NAY.MenuClose();
    NAY.MenuTogglerClose();
    NAY.ProgressBar();
    $('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
  });

  $(document).ready(function() {
    NAY.HeaderFixd();
    NAY.OnePage();
    NAY.MenuClose();
    NAY.MenuTogglerClose();
    NAY.ProgressBar();
  });

  $(window).on("scroll", function(){
    NAY.HeaderFixd();
    NAY.ProgressBar();
  });

  $(window).on("resize", function(){
    // Any functionality needed on window resize can be added here
  });

})(jQuery);
