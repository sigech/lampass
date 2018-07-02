jQuery(function($){
// スライドコンテンツを後ほど操作するための配列 (グローバル変数)
var flickitySyncer = [];

// ページ内の[.my-gallery]のエレメントを取得する
var elms = document.getElementsByClassName( "lp-gallery" ) ;

// [elms]全てに、ループ処理でFlickityを適用する
for( var i=0,l=elms.length; l>i; i++ )
{
	flickitySyncer[i] = new Flickity( elms[i] , {   contain: true,
                                                        wrapAround: true,
                                                        prevNextButtons: false,
                                                        freeScroll:true,
                                                        autoPlay: true,
                                                        pageDots:false
                                                    } ) ;
}
});
