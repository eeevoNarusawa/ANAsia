$(function(){
  $('a[href^=#]').click(function(){
    var speed = 700;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });


  $('.sp-navi-toggle').click(function(){
    $('.sp-navi-menu').slideDown();
    $(this).hide();
  });

  $('.hide-sp-navi-toggle').click(function(){
    $('.sp-navi-menu').slideUp();
    $('.sp-navi-toggle').show();
  });

  $('.sp-navi-menu>ul>a').click(function(){
    $('.sp-navi-menu').slideUp();
    $('.sp-navi-toggle').show();
  });

  $('.container').click(function(){
    $('.sp-navi-menu').slideUp();
    $('.sp-navi-toggle').show();
  });

});
