$(function(){

//  $(window).on('scroll', function() {
//  if ($(this).scrollTop() > 92) {
//    $('#header').addClass('fixed');
//    } else {
//      $('#header').removeClass('fixed');
//    }
//  });

  // ボタンの大きさ変化
  $(".btn").hover(function(){
    $(this).switchClass('btn', 'btn_ano', 100);
  },
  function(){
  $(this).switchClass('btn_ano', 'btn', 50);
  });

  $(".btn").on("click", function(){
    $(this).children('a').trigger('click');
  });

    //写真変化
  $(".photo1").hover(function(){
    if($(this).attr('src') == 'photo1_on.jpg'){
      $("#balloon-4-bottom-left").show();
    } else {
      $(this).hide().attr('src', $(this).attr('src').replace('_off', '_on')).fadeIn(1000);
      $("#balloon-4-bottom-left").show();
      }
  },
  function(){
    if(!$(this).hasClass('currentPage')){
      //$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
      $("#balloon-4-bottom-left").hide();
    }
  }
  );

  $(".photo2").hover(function(){
    if ($(this).attr('src') == 'photo2_on.jpg') {
      $('#balloon-4-top-left').show();
    } else{
      $(this).hide().attr('src', $(this).attr('src').replace('_off', '_on')).fadeIn(1000);
      $('#balloon-4-top-left').show();
      }
  },
  function(){
    if(!$(this).hasClass('currentPage')){
      //$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
      $('#balloon-4-top-left').hide();
    }
  }
  );

  $(".photo3").hover(function(){
    if ($(this).attr('src') == 'photo3_on.jpg') {
      $('#balloon-4-top-left-3').show();
    } else {
      $(this).hide().attr('src', $(this).attr('src').replace('_off', '_on')).fadeIn(1000);
      $('#balloon-4-top-left-3').show();
      }
  },
  function(){
    if(!$(this).hasClass('currentPage')){
      //$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
      $('#balloon-4-top-left-3').hide();
    }
  }
  );
  //写真ここまで




});