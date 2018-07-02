jQuery(function($){    //←wordpressでのjqueryは、この形
 var active="active",interval=5000;
 var index1=0, index2=0, timerId=null;
//	var tabs=$("#thumbBtn > .sample-cell"), $content=$("#view > p"), $cap=$("#img_desc > li");
 var $tabs1=$("#thumbBtn li"), $content=$("#view > p"), $cap=$("#img_desc div");
 var $tabs2=$("#thumbBtn2 li");
//***************************************************************************************
//li要素からｸﾗｽactiveを削除
//$("セレクタ").メソッド(パラメータ)の形 each(メソッド)
 $tabs1.each(function(){$(this).removeClass(active);});//thisにそれぞれのli要素が入る
 $tabs2.each(function(){$(this).removeClass(active);});//thisにそれぞれのli要素が入る
//ﾒｲﾝ画像のp要素を隠す
 $content.hide();
//ｷｬﾌﾟｼｮﾝのli要素を隠す
 $cap.hide();
//ｻﾑﾈｲﾙの最初のli要素にｸﾗｽactiveを追加
//初期の画像は0(最初の絵)を指定
 $tabs1.eq(0).addClass(active);
 $tabs2.eq(0).addClass(active);
 $content.eq(0).fadeIn(50);
 $cap.eq(0).fadeIn(50);
 //***************************************************************************************
//ｲﾍﾞﾝﾄ時の関数定義	
//クリックされたらactiveというクラスを付与、
//画像切り替え、タイマーをリセット
 $tabs1.dblclick(function(){// $tabs1=$("#thumbBtn li")
if($(this).hasClass("active")) return;
//	if(timerId) clearInterval(timerId),timerId=null;
 change1($tabs1.index(this));//ﾒｿｯﾄが下にある。↓
//	setTimer();
 return false;//処理の終了：いわゆるbreak
});

//***************************************************************************************
//頭にfunctionが付くのでユーザ定義関数で、どこかで呼び出し設定あり        
//切り替え
function change1(t_index){//index:今表示されている絵　t_index:次に表示させる絵
 $tabs1.eq(index1).removeClass(active);//今表示：tabs=$("#thumbBtn li")の選択されたliのactiveを消去
 $tabs1.eq(t_index).addClass(active);//今回選択されたliに追加
 //fadeout
 setTimeout(function(){//現在表示している画像と表を隠す
 $content.eq(index1).stop(true, true).fadeOut(20),//$content=$("#view > p")　拡大表示場所
 $cap.eq(index1).stop(true, true).fadeOut(20)//$cap=$("#$img_desc div")　表
 ;}, 50);
 //fadein
 setTimeout(function(){//選択された番号の画像と表を表示
 index1=t_index;//拡大画像が選択しているindexを退避
 $content.eq(index1).fadeIn(50),//$content=$("#view > p")　拡大表示場所
 $cap.eq(index1).fadeIn(50)//$cap=$("#$img_desc div")　表
 ;}, 200)
 }
 //***************************************************************************************
  
$tabs2.dblclick(function(){
 var url_datac = 1;
 var url_datam = 1;
 var indno = $(this).index() + 1;
 if($(this).hasClass("active")) return;
 
 $('.sample-cell1 > img').each(function(){//ファイル内のclass="sample-cellそれぞれに
   $(this).attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no'
           + indno + '/mediano' + indno + '-' + url_datac++ + '.jpg');
 });
 
  $('.sample-main > img').each(function(){//ファイル内のclass="sample-cellそれぞれに
   $(this).attr('src', 'http://vccw.test/wp-content/uploads/scroll_media/no'
           + indno + '/mediano' + indno + '-' + url_datam++ + '.jpg');
 });
  change2($tabs2.index(this));//選択されたobjectのインデックスを引数にして
 
 //li要素からｸﾗｽactiveを削除
//$("セレクタ").メソッド(パラメータ)の形 each(メソッド)
 $tabs1.each(function(){$(this).removeClass(active);});//thisにそれぞれのli要素が入る
 //初期の画像は0(最初の絵)を指定
 $tabs1.eq(0).addClass(active);
 index1 = 0;
 return false;//処理の終了：いわゆるbreak
});
 //***************************************************************************************
 function change2(t_index){//index:今表示されている絵　t_index:次に表示させる絵
// $tabs2.eq(index2).removeClass(active);//今表示値：tabs=$("#thumbBtn2 li")の選択されたliのactiveを消去
 $tabs2.removeClass(active);
 $tabs2.eq(t_index).addClass(active);//今回選択されたliに追加
 //fadeout
 /*
 setTimeout(function(){
 $content.eq(index1).stop(true, true).fadeOut(20),  //$content=$("#view > p")　拡大表示場所
 $cap.eq(index1).stop(true, true).fadeOut(20)       //$cap=$("#$img_desc div")　表
 ;}, 50);
 */
$content.eq(index1).stop(true, true).fadeOut(10);  //$content=$("#view > p")　拡大表示場所
$cap.eq(index1).stop(true, true).fadeOut(10);       //$cap=$("#$img_desc div")　表
 
 //fadein
 setTimeout(function(){
 index2=t_index;//拡大画像が選択しているindexを退避
 $content.eq(0).fadeIn(50),
 $cap.eq(0).fadeIn(50)
 ;}, 100)
 }
 
});

