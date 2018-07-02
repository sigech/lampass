jQuery(function($){    //←wordpressでのjqueryは、この形
//要素を「+」で区切って記述することで、前要素の直後にある要素を選択します。
//直後の要素が１つしか選択されないことに注意してください。
//後要素を全て選択したい場合は ~（後要素）を利用します。
//(class hoverの直後のclass content)以外を隠す。← hoverがついたら隠さない
  $ (".content:not('.hover + .content')").hide(); 
  $ (".menu").mouseover(function(){
   $(".menu").removeClass("hover");
   $(this).addClass("hover");
   $(".content:not('.hover + .content')").fadeOut();
   $(".hover + .content").fadeIn();
  });
});


