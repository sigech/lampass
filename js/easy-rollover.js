jQuery(function($){
$('a img').each(function(){
        var img = $(this);
        //attr()は、HTML要素の属性を取得したり設定することができるメソッド
        var src_off = img.attr('src');  //srcを取得
        //正規表現で検索
        var src_on = src_off.replace(/^(.+)_off(\.[^\.]+)$/, '$1_on$2');
        //imgのsrcの書き換え
        $('<img />').attr('src', src_on);

    //上記の変数(var)を展開した形でhoverを定義
        img.hover(function(){ //hover(over, out)
            img.attr('src', src_on);
        },function(){
            img.attr('src', src_off);
        });
    });

     
});

