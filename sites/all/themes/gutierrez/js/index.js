(function ($) {

  Drupal.behaviors.homepage = {
    attach: function (context, settings) {

      $('.dropdown').addClass('tooltip-white');

      $('.page-background', context).css('height', $(window).height());
       $(document).scroll(function()
        {
          if ($('body').hasClass('front')) {
            var scroll = $(this).scrollTop();
            if (scroll >= 550) {
              $(".test").slideDown();
              $(".top-bar").css({"position": "fixed"});
              $(".top-bar").addClass('open');
              $(".open").find(".dropdown").attr("style","background: #fff");
              $('ul#main-menu a, ul.title-area a').css({'color': '#000'});
              $('.dropdown').css({'border-color' : '#000'});
              $('.dropdown').removeClass('tooltip-white');
              $('.dropdown').addClass('tooltip-black');

            } else {
              $(".test").hide();
              $(".top-bar").removeClass('open')
              $(".top-bar").css({"position": "absolute", "top": "0px"});
              $(".not-front .top-bar").css({"position": "relative", "top": "0px"});
              $(".dropdown").css({"background": "none"});
              $('ul#main-menu a, ul.title-area a').css({'color': '#fff'});
              $('.dropdown').css({'border-color' : '#fff'});
              $('.dropdown').removeClass('tooltip-black');
              $('.dropdown').addClass('tooltip-white');
            }
          }
        })

       //Popular Article Effect

       // $(".post-article img").hover( function(){
       //      $(this).find(".views-field-title, .views-field-created").show();
       //      $(".views-field-title, .views-field-created").addClass('container');
       //    },
       //    function(){
       //         $(this).find(".views-field-title, .views-field-created").hide();
       //    });

       //Add Div Slicer
       $('.slice').remove();
       $('.slicer').remove();
       $('.liner').remove();
       $('.slicer-full').remove();
       $('.tweet').remove();
       $('.faceb').remove();
       $('.marker').remove();

       $('.views-row').after('<div class="slicer"></div>');
       

       $('.block-title').after('<center><div class="liner"></div></center>');


       $('.front .l-main').after('<div class="row large-12 l-slice"><div class="slicer-full"></div></div>');

       $('.no-sidebars .l-main').after('<div class="row large-12"><div class="slicer-full"></div></div>');
       $('.main .views-field-created').prepend('<span class="slice">/</span>');

       //Add Twitter Icons

       $('.main .views-field-tweets').prepend('<span class="tweet"><img src="/sites/all/themes/gutierrez/images/twit.png"</span>');
       $('.main .views-field-field-city .field-content').prepend('<img class="marker" src="/sites/all/themes/gutierrez/images/marker.png">');
       //Add Facebook Icons

       $('.main .views-field-fb-likes').prepend('<span class="faceb"><img src="/sites/all/themes/gutierrez/images/fb.png"</span>');


       $(".toggle-topbar").click( function(){
            if($('.toggle').is(':hidden')){
              $('.toggle').show();
            }
            else{
              $('.toggle').hide();
            }
           $(function () {

            $('.toggle > ul > li > a').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                var $parentli = $(this).closest('li');
                $parentli.siblings('li').find('ul:visible').hide();
                $parentli.find('> ul').stop().toggle();
            });

        });
            $(document).click(function() {
                $(".toggle ul li ul").hide();

            });

          });

       $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({
                    scrollTop: -10
                }, 800);
                return false;
            });

        });
            
    }
  };



})(jQuery);