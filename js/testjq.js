jQuery(function($){    //←wordpressでのjqueryは、この形
  
//画像のプリロードなのでどこに記述してもOK
  for(var i = 1; i <= 5; i++) {
   $('<img>').attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no' + i + '/mediano' + i + '-1.jpg')
 .appendTo('body').hide();
  }
   for(var i = 1; i <= 5; i++) {
   $('<img>').attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no' + i + '/mediano' + i + '-2.jpg')
 .appendTo('body').hide();
  }
  for(var i = 1; i <= 5; i++) {
   $('<img>').attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no' + i + '/mediano' + i + '-3.jpg')
 .appendTo('body').hide();
  }
 for(var i = 1; i <= 5; i++) {
   $('<img>').attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no' + i + '/mediano' + i + '-4.jpg')
 .appendTo('body').hide();
  }
 for(var i = 1; i <= 5; i++) {
   $('<img>').attr('src',
 'http://vccw.test/wp-content/uploads/scroll_media/no' + i + '/mediano' + i + '-5.jpg')
 .appendTo('body').hide();
  }
   
 });

