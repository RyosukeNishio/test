<?php
	header('Content-type: text/css');
	
	include "../set/head_conf.php";
?>

@charset "UTF-8";

/*----------------------------- 
動的スタイルシート
記事詳細ページ
----------------------------- */

#kijibasic hr{
	clear:both;
	border: 0;
	border-top:1px solid #CCCCCC;
	margin:25px 0;
}



/*-- コンテンツ部分 --*/
#kijibasic {
	width: <?php print $cnf['kiji_contents_width'];?>px;
	margin: 0 auto;
}

#kijibasic p{
	margin-bottom:15px;
}

#kijibasic div#banner_img{
	margin-bottom:20px;
}

/*-- カテゴリバナー --*/
#cate_img_kiji {
	margin-bottom:20px;
}


/*-- ブログコンテンツ --*/
#blog_contents{
	<?php
		$contents_width = $cnf['kiji_contents_width'] - $cnf['contents_menu_width']-20;
		if(strcmp($cnf['float_menu'],"右")==0){
			$float="left";
		}else{
			$float="right";
		}
	?>
    width:<?php print $contents_width;?>px;
    float:<?php print $float;?>;
    margin:0 5px 10px 0;
	text-align:left;
}

/*-- ブログコンテンツ 幅広--*/
#blog_contents_w{
	
}

/*-- ブログメニュー --*/
#blog_menu {
	text-align:left;
	width: <?php print $cnf['contents_menu_width'];?>px;
    <?php
		if(strcmp($cnf['float_menu'],"右")==0){
			$float="right";
		}else{
			$float="left";
		}
	?>
    float:<?php print $float;?>;
    margin:10px 0 10px 0;
}

/*-- h2 ブログタイトル --*/

#kijibasic h2.line01{
	clear:both;
	margin:15px 0;
	border-bottom:3px solid <?php print $cnf['deep_color'];?>;
}


#kijibasic h2.line02{
	clear:both;
	margin:15px 0;
	border-bottom:3px solid <?php print $cnf['deep_color'];?>;
}


/*-- 更新日 --*/
#kijibasic div.date{
	float:right;
	display:block;
    font-size:13px;
    text-align:right;
    color:#666666;
    font-weight:bold;
	margin-right:15px;
	margin-top:10px;
}

/*-- 一覧へ戻るリンク --*/
#kijibasic .back_link{
	text-align:center;
    font-size:14px;
	margin-top:50px;
}

/*----------------------------- 
画像１～３
パターン２種　
----------------------------- */
#kijibasic .imgbox_typeB{
	margin:15px 0;
}

#kijibasic .imgbox_typeB img{
	float:left;
    margin:0 20px 20px 0;
}

/*----------------------------- 
ブログメニュー
----------------------------- */

#kijibasic .blog_box
{
	width:<?php print $cnf['contents_menu_width'];?>;
	border:1px solid #CCCCCC;
	margin:10px 0 10px 0;
}

#kijibasic .blog_box h3{
	margin:0;
	padding:5px;
	background-color: #ffffff;
	border: 0px;
	font-size:14px;
	line-height:120%;
	text-align:left;
	color:#530E09;
	border-bottom: 1px solid #CCCCCC;
} 

#kijibasic .blog_box ul{
	margin:0 0 10px 0;
	list-style:disc;
    list-style-position:inside;
	padding:5px 5px 0 5px;
	font-size:14px;
}

#kijibasic .blog_box ul li{
	<?php $width = $cnf['contents_menu_width'] - 20; ?>
	width:<?php print $width;?>px;
	color:<?php print $cnf['deep_color'];?>;
	margin:0 0 5px 0;
	border-bottom:1px dotted <?php print $cnf['deep_color'];?>;
	padding: 2px 10px 3px 5px;
}

#kijibasic .blog_box ul li a{
	text-decoration:none;
	color:#333;
}

#kijibasic .blog_box ul li a:hover{
	text-decoration:underline;
	color:#0000FF;
}


/*----------------------------- 
動的スタイルシート
記事一覧ページ
----------------------------- */
#kijibasic h3{
	margin:5px 0 10px 0;
	font-size:14px;
    border-left:5px solid <?php print $cnf['deep_color'];?>;
    padding:5px 0 5px 10px;
	
}

#kijibasic h3 a{
	color:#666666;
	text-decoration:none;
}

#kijibasic h3 a:hover{
	color:#800000;
	text-decoration:underline;
}

#kijibasic .kiji_item{
	font-size:100%;
	margin:0 10px 20px 0;
	border-bottom:dotted 1px <?php print $cnf['deep_color'];?>;
}

#kijibasic .kiji_item img{
	margin:0 10px 10px 0;
}

#kijibasic .blog_next a{
	display:block;
	text-align:center;
    background:<?php print $cnf['deep_color'];?>;
    color:#FFFFFF;
    padding:3px;
    font-size:12px;
    text-decoration:none;
    font-weight:bold;
    width:120px;
    float:right;
    margin:20px 0;
}

#kijibasic .pager{
	text-align:center;
}

#kijibasic div.mt50{
	margin-top:50px;
}

#kijibasic div.mt50 img{
	margin:5px;
}

#kijibasic div.mb50{
	margin-bottom:30px;
}


#kijibasic div.mb50 img{
	margin:5px;
}

#kijibasic .kiji_item_herf{
	width:315px;
	border:1px solid #CCCCCC;
	padding:5px;
	margin-right:20px;
	background-color: #FFF3DD;
	float:left;
	height:120px;
	overflow:hidden;
	margin-bottom:10px;
}

#kijibasic .kiji_item_herf2{
	width:315px;
	border:1px solid #CCCCCC;
	padding:5px;
	margin-right:5px;
	background-color: #FFF3DD;
	float:left;
	height:45px;
	overflow:hidden;
	margin-bottom:10px;
}

#kijibasic .kiji_item_herf img{
	margin:0;
}



#kijibasic .kiji_item_herf h3{
	margin:5px 0 10px 90px;
	font-size:14px;
    border-left:5px solid <?php print $cnf['deep_color'];?>;
    padding:2px 0 2px 5px;
}

#kijibasic .kiji_item_herf a{
	text-decoration:none;
}

#kijibasic .kiji_item_herf a:hover{
	text-decoration:underline;
	color:#FF0080;
}

#kijibasic div.kiji_item_herf div.blog_next{
	text-align:right;
}

#kijibasic div.kiji_item_herf div.blog_next a{
	text-decoration:none;
}

#kijibasic div.kiji_item_herf div.blog_next a:hover{
	text-decoration:underline;
	color:#FF0080;
}


/*----------------------------- 
よくある質問
----------------------------- */

ul.faq_list{
	margin:20px 0;
}

ul.faq_list li{
	margin:0 0 10px 10px;
	border-bottom:1px dotted #CCC;
	padding:0 0 5px 15px;
	list-style:none;
	background: url(../images/base/yajirushi.jpg) no-repeat 0px 0.5em;
}

ul.faq_list li span.q{
	font-weight:bold;
	color:#004000;
}

ul.faq_list li span.q a:hover{
	color:#FF0000;
}

ul.faq_list li a{
	text-decoration:none;
	color:#333333;
}

ul.faq_list li a:hover{
	color:#FF0000;
}

/*-- h2 ブログタイトル --*/
#kijibasic h2.q_line01{
	height:47px;
	width:785px;
	margin:0 0 10px 0;
	background: url(../images/kiji/q_title.jpg) no-repeat;
	padding:6px 0 0 60px;
	font-size:120%;
}


div.a_box{
	width:700px;
	margin-left:65px;
}


/*記事一覧ページ*/
#kijibasic section:after,
 #kijibasic article .thumb:after{
    content: ".";
    display: block;
    clear: both;
    height: 0px;
}
#kijibasic article {
	width: 350px;
    text-align: left;
    margin: 0 0 30px 0;
    padding: 0 0 20px 0;
    position: relative;
	float:left;
	border:1px solid #B8DEEF;
}
#kijibasic article:nth-of-type(even){
	float:right;
	margin-right:15px;
}
#kijibasic article:nth-of-type(even):after{
	clear:both;
}
#kijibasic article .thumb {
    width: 350px;
    height: 173px;
    margin: 0 0 20px 0;
    position: relative;
    background-color: #eee;
}
#kijibasic article .thumb a {
    width: 350px;
    height: 173px;
    display: block;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover !important;
}
#kijibasic article .cat_name {
    width: 240px;
    font-size: 13px;
    padding: 0 20px;
    margin: 0 0 10px 0;
    line-height: 12px;
    color: #77ADBB;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
#kijibasic article h3 {
    padding: 0 20px !important;
    margin: 0 0  10px!important ;
    font-size: 20px;
    line-height: 1.25 !important;
    min-height: 62px;
	font-weight:600 !important;
	border:none !important;
}
#kijibasic article h3 a {
	color:#0B90D0 !important;
    text-shadow: 2px 2px 2px rgba(0,0,0,0.1);
}
#kijibasic article .extract {
    line-height: 20px;
    padding: 0 20px;
    margin: 0 0 10px 0;
	height: 100px;
	overflow: hidden;
}
#kijibasic article .readMore {
    width: auto;
    text-align: right;
    padding: 0 20px;
}
#kijibasic article .readMore a {
    display: inline-block;
    padding: 0 1em;
    color: #fff;
    background: #00aaee;
    border-radius: 3px;
    line-height: 36px;
}
#kijibasic article span.cat_icon {
    display: block;
    position: absolute;
    top: -12px;
    right: -12px;
}
#kijibasic article span.cat_icon {
    background-color: #775d48;
	border-radius:50%;
	padding:6px;
}
#kijibasic article span.cat_icon::before {
	content: '';
	display: inline-block;
    background: url(../images/sp/common/cat_ico5.png) no-repeat contain;
	width:30px;
	height:30px ;
	background-size: contain;
	vertical-align: middle;
}

/*カテゴリによって変更*/
/*--汚れ別--*/
#kijibasic .cat_list24 span.cat_icon {
    background-color: #c9b86a;
}
#kijibasic article.cat_list24 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico24.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list25 span.cat_icon {
    background-color: #5970d3;
}
#kijibasic article.cat_list25 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico25.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list26 span.cat_icon {
    background-color: #c99b6a;
}
#kijibasic article.cat_list26 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico26.png) no-repeat;
	background-size: contain;
}

#kijibasic .cat_list27 span.cat_icon {
    background-color: #6abbc9;
}
#kijibasic article.cat_list27 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico27.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list28 span.cat_icon {
    background-color: #77bb99;
}
#kijibasic article.cat_list28 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico28.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list29 span.cat_icon {
    background-color: #dd95c4;
}
#kijibasic article.cat_list29 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico29.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list30 span.cat_icon {
    background-color: #7782bb;
}
#kijibasic article.cat_list30 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico30.png) no-repeat;
	background-size: contain;
}
/*--場所別--*/
#kijibasic .cat_list11 span.cat_icon {
    background-color: #93c572;
}
#kijibasic article.cat_list11 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico11.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list15 span.cat_icon {
    background-color: #ed8957;
}
#kijibasic article.cat_list15 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico15.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list31 span.cat_icon {
    background-color: #c96f6a;
}
#kijibasic article.cat_list31 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico31.png) no-repeat;
	background-size: contain;
}
#kijibasic .cat_list32 span.cat_icon {
    background-color: #79b0e7;
}
#kijibasic article.cat_list32 span.cat_icon::before {
    background: url(../images/sp/common/cat_ico32.png) no-repeat;
	background-size: contain;
}

/*きれいッ粉が選ばれる理由4*/
#contents #kijibasic .point4{
	
}
/*#contents #kijibasic .point4 h3{
	color:#ec8c2e;
	font-size:24px !important;
	border-left:none !important;
	font-weight:700;
	text-align:center;
	line-height:1.4;
	margin-bottom:30px;
	border-bottom:2px solid #ec8c2e;
}
*/
#contents #kijibasic .point4 h3{
	display:block;
	width:100%;
	text-align:center !important;
	border-left:none !important;
	margin:0 0 25px;
}
#contents #kijibasic .point4 .pl_col3{
	width:33%;
	float:left;
}
#contents #kijibasic .point4 .pl_col3:nth-of-type(2){
	text-align:center;
}
#contents #kijibasic .point4 .pl_col3:nth-of-type(2) img{
	width:100%;
	margin-top:140px;
}
#contents #kijibasic .point4 .pl_col3:nth-of-type(3){
	float:right;
}

#contents #kijibasic .point4 div.o_waku{
	width:240px;
	height:243px;
	border:1px solid #ec8c2e;
	border-radius:10px;
	box-sizing:border-box;
	margin-bottom:35px;
}
#contents #kijibasic .point4 div.o_waku a{
	display:block;
}
#contents #kijibasic .point4 div.o_waku a:hover{
	text-decoration:none;
	filter:alpha(opacity=80);
    -moz-opacity: 0.8;
    opacity: 0.8;
}
#contents #kijibasic .point4 div.o_waku h4{
	background:#ec8c2e;
	color:#fff;
	text-align:center;
	font-size:22px;
	padding:10px;
}
#contents #kijibasic .point4 div.o_waku p{
	margin-top:12px;
}
#contents #kijibasic .point4 div.o_waku .o_link{
	width:100px;
	margin:0 auto;
	background:url(../images/common/arw_og.png) no-repeat  0 50%;
	font-size:14px;
	padding-left:20px;
}