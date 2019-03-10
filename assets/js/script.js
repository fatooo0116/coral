(function($){

    /*  Front End  Loading */
    setTimeout(function(){
      $("#loading").addClass("hide");
      setTimeout(function(){
          $("#loading").css("display","none");
          //  $("#home_mask").hide();
      },700);
    },500);


/*
$("body").niceScroll({
  cursorborder: "0px solid #fff",
  cursorcolor: "#000"
});
*/

// $("body").getNiceScroll(0).doScrollTop(0, 10);

  $('html, body').scrollTop(0);

  $(document).ready(function(){








    $('html, body').scrollTop(0);
    $("#backtop").on("click",function(){
      $('html,body').animate({ scrollTop: 0 }, 'slow');
    });







    $(window).scroll(function(){
      var s =    $(this).scrollTop() ;

      if(s > 300){
          $("#backtop").addClass("enable");
      }else{
        $("#backtop").removeClass("enable");
      }
    });



    if($("#home_mask").length>0){

      if($.cookie('lang_cookie')=="1"){
          $("#home_mask").hide();
      };

      setTimeout(function(){
        $("#home_mask").addClass("loaded");

        $("#home_mask .cover .menu ul li a").on("click",function(e){
            if($(this).hasClass('current-lang')){
              $("#home_mask").hide();
            }
            $.cookie('lang_cookie', '1');
        });

      },300);
    }


    var current = "";
    $("#Header_creative .menu-toggle").on("click",function(e){
      $("#Header_creative").toggleClass("menu_open");
      e.preventDefault();
    //  current = $("#Header_creative nav#poki-navi .box_table .box_inner .menu-menu-1-container ul#primary-menu li.current-menu-item");
    });


    $('#Header_creative .search-form  input[type="search"]').focus(function(){
      $(".search_form").addClass("focus");
    });

    $('#Header_creative .search-form  input[type="search"]').focusout(function(){
      $(".search_form").removeClass("focus");
    });





    $("#poki-navi ul li.open_contact").on("click",function(){
      $("body").addClass("contact");
      $("#primary-menu li.open_contact").addClass("current-menu-item").siblings().removeClass("current-menu-item");
    });

    $("#contactus a.cclose").on("click",function(){
      $("body").removeClass("contact");
    });


    if($("#gallery").length>0){
      inView.offset(200);
      inView('.aniPic').on('enter', function(e){
        // console.log(e);
        $(e).find("a").addClass("visible");
      });


      $("#content #gallery .row .item a").each(function(){
        var me = this;
          $(me).addClass('pause');

          $(me).on("mouseenter",function(){
              $(this).removeClass('pause');
          });
          $(me).on("mouseleave",function(){
             $(this).addClass('pause');
          });
      });

    }


    if($("#main_home").length>0){
      inView.offset(0);
      inView('.section').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });

    }






    if($("#about").length>0){
      inView('#about').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }

    if($("#cerification").length>0){
      inView('#cerification').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }

    if($("#main_site").length>0){
      inView('#main_site').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }



    if($("#basic_coral").length>0){
      inView('#basic_coral').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }

    if($("#basic_coral  .flexslider").length>0){
      inView('#basic_coral  .flexslider').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }



    if($("#portfolio-single").length>0){
      inView('#portfolio-single').on('enter', function(e){
        // console.log(e);
        $(e).addClass("visible");
      });
    }





    if($("body.home").length>0){

        $('.preview_img').each(function(){
          var me = this;
          $(this).find(".flexslider").flexslider({
            animation: "slide",
            start: function(e){
              var text = (Number(e.cloneOffset))+' / '+ e.count;
              $(me).find(".pic_num").text(text);
              console.log(text);
            },
            before:function(e){
              var text = (Number(e.animatingTo)+1)+' / '+ e.count;
              $(me).find(".pic_num").text(text);
              console.log(text);
            }
          });
        });
    }else{

    //  if($("#portfolio-single").length>0){
        $('.flexslider img').imagesLoaded( function() {

          console.log("xxx");

          $('.flexslider').flexslider({
            animation: "slide",
            start: function(e){
              var text = (Number(e.cloneOffset))+' / '+ e.count;
              $("#portfolio-single .preview_img .pic_num").text(text);
            },
            before:function(e){
              console.log(e);
              var text = (Number(e.animatingTo)+1)+' / '+ e.count;
              $("#portfolio-single .preview_img .pic_num").text(text);
            }
          });

          setTimeout(function(){
            $("body").trigger("resize");
          },200);

        });
    //  }
    }


    $("[data-fancybox]").fancybox({
      thumbs          : false,
      hash            : false,
      loop            : true,
      keyboard        : true,
      toolbar         : false,
      animationEffect : false,
      arrows          : true,
      clickContent    : false
    });

  });
})(jQuery);
