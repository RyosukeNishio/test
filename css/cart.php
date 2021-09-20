<?php
	header('Content-type: text/css');
	
	include "../set/head_conf.php";
?>
@charset "utf-8";

/*----------------------------- 
ショッピングカート・レビュー
----------------------------- */

h2.title_line01{
	background:url(../images/common/sub-title.jpg) no-repeat;
	width:675px;
	height:40px;
	color:#000066;
	padding:20px 0 0 60px;
	font-size:24px;
	margin:0 0 40px 0;
    text-align:left;
}

/*--ページ内容全体--*/
#shop{
	margin-top:20px;
	<?php
		if(strcmp($cnf['site_float_menu'],"右")==0){
			$float="left";
		}else{
			$float="right";
		}
	?>
	float:<?php print $float;?>;
	width: <?php print $cnf['contents_width'];?>px;
	height:auto;
	color:#333333;
	font-size:90%;
}
#form_s{
	<?php $width = $cnf['contents_width'] - 40;?>
	width: <?php print $width;?>px;
	text-align:center;
	margin:0 auto 50px auto;
}



#form_s li {
	font-size:13px;
	line-height:150%;
}

#alpha h3.title-review
{
	margin:5px 0 10px 0;
	font-size:14px;
    border-left:5px solid #66931C;
    padding:5px 0 5px 10px;
}


#alpha div.review-list
{
	width:570px;
	float:right;
	margin:0 0 5px 0;
	font-size:100%;
	line-height:140%;
	padding-left:10px;
}

#alpha div.review-list_k
{
	width:570px;
	float:right;
	padding-left:30px;
	color:#000080;
}

#alpha div.review-list p
{
	margin:0;
}

#alpha div.review-list p.name
{
	font-size:140%;
	font-weight:bold;
	border-bottom:1px solid #ecb94c;
	font-family: "ＭＳ Ｐ明朝","ＭＳ 明朝",serif;
	margin:0 0 15px 0;
	line-height:180%;
}

#alpha div.review-list span.review-navi
{
	display:block;
	font-size:80%;
	font-weight:normal;
	float:right;
}

ul.pager{
	list-style:none;
	text-align:center;
	margin-bottom:30px;
}
	ul.pager li{
		display:inline;
		font-size:80%;
	}
	
	ul.pager li span, ul.pager li a{
		display: inline-block;
		width: 50px;
		padding: 5px;
		background: #EEEEEE;
		border: #FFFFFF solid 2px;
	}
	
/*----------------------------- 
ナビゲーションテキストボックス
----------------------------- */
.shop_step{
	text-align:center;
	margin:20px auto 20px auto;
}

.shop_step img{
	width:130px;
} 
.shop_text{
	text-align:left;
	margin:15px 0;
}
.shop_text_waku{
	background:#FFFFE8;
	border:1px  #999 solid;
	text-align:left;
	margin:20px auto 20px auto;
	padding:15px;
}
	#form_s .shop_text_waku p{
		margin:0 0 0 0;
	}
	
.shop_text_waku_c{
	background:#FFFFE8;
	border:1px  #999 solid;
	text-align:center;
	margin:20px 40px;
	padding:15px;
}
.shop_comment{
	text-align:left;
	margin:15px;
}

.member_text{
	text-align:center;
	margin:20px 0;
}
	#alpha .member_text p{
		text-align:center;
	}
.member_text_waku{
	background:#FFFFE8;
	border:1px  #999 solid;
	text-align:center;
	margin:20px 40px;
}	
/*----------------------------- 
カートテーブル・複数送付先情報　テーブル
----------------------------- */
table.cart{
	<?php $width = $cnf['contents_width'] - 40;?>
	width: <?php print $width;?>px;
	border:solid 1px #999999;
	border-collapse: collapse;
	margin:0 auto 10px auto;
	background:#FFF;
}

/*-- 商品の振り分け画面 --*/
table.cart2{
	<?php $width = $cnf['contents_width'] -50;?>
	width: <?php print $width;?>px;
	border:solid 1px #999999;
	border-collapse: collapse;
	margin:0 auto 30px auto;
	background:#FFF;
}
	
	table.cart th,
	table.cart2 th
	{
		font-size:12px;
		line-height:120%;
		padding: 5px;
		font-weight: bold;
		border:solid 1px #999999;
		text-align: center;
	}

		table.cart th.h,
		table.cart2 th.h
		{
			height:20px;
			font-size:12px;
			padding: 5px;
			font-weight: bold;
			border:solid 1px #999999;
			text-align: center;
		}
		table.cart th.title,
		table.cart2 th.title
		{
			line-height:160%;
			padding:5px 10px;
			vertical-align:middle;
			border-bottom:solid 1px #999999;
			background:#CADDFF;
			font-size:16px;
			color:#004080;
		}
	table.cart td,
	table.cart2 td
	{
		padding:10px;
		font-size:12px;
		text-align: center;
		border:solid 1px #999999;
	}
	
		table.cart td.zip,
		table.cart2 td.zip
		{
			padding:5px;
			height:20px;
			font-size:12px;
			text-align: center;
			border-bottom:solid 1px #999999;
			border-right:solid 1px #ffffff;
		}

/*----------------------------- 
ボタンボックス
----------------------------- */
.btn_box_right{
	margin:10px auto 30px auto;
	text-align:left;
	width: 300px;
	float:right;
}

.btn_box_left{
	margin:10px auto 30px auto;
	text-align:right;
	width: 300px;
	float:left;
}

#form_u .btn_box_right{
	margin:10px auto 30px auto;
	text-align:left;
	width: 260px;
	float:right;
}

#form_u .btn_box_left{
	margin:10px auto 30px auto;
	text-align:right;
	width: 260px;
	float:left;
}

.btn_box_center{
	margin: 10px auto 30px auto;
	clear:both;
	text-align:center;
}

.shop_text_r{
	text-align:right;
}

.member_text_r{
	margin:10px auto 30px auto;
	<?php $width = $cnf['contents_width'] - 80;?>
	width: <?php print $width;?>px;
	text-align:right;
}

/*----------------------------- 
お届け先情報入力画面
商品の振り分け画面
----------------------------- */
.shop_text_waku_bg{
	
	text-align:center;
	padding:20px;
	border:solid 1px #999999;
	background-color:#FCFCFC;
	margin:0 auto 50px auto;
}

.shop_text_waku_bg_title{
	text-align:left;
	font-size:16px;
	margin-bottom:25px;
	border-bottom:double;
}


/*----------------------------- 
お客様情報入力フォーム　画面
----------------------------- */
.formtable2_text{
	<?php $width = $cnf['contents_width'] - 80;?>
	width: <?php print $width;?>px;
	text-align:left;
	margin:40px auto 10px auto;
}
	#form_s .formtable2_text p,
	#form_u .formtable2_text p{
			margin:0;
		}
		
table.formtable2 {
	margin:10px auto 30px auto;
	<?php $width = $cnf['contents_width'] - 50;?>
	width: <?php print $width;?>px;
	border-top:solid 1px #999999;
	border-left:solid 1px #999999;
	border-collapse: collapse;
}
table.formtable2 th{
	width:150px;
	line-height:160%;
	padding:10px 10px;
	vertical-align:middle;
	border-bottom:solid 1px #999999;
	border-right:solid 1px #999999;
	background:#EEEEEE;
	font-size:13px;
}

table.formtable2 td{
	line-height:160%;
	padding:10px 10px;
	vertical-align:top;
	border-right:solid 1px #999999;
	border-bottom:solid 1px #999999;
	text-align:left;
	font-size:13px;
}

table.formtable2 td.col3{
	text-align:center;
}

#content table.formtable2 td.col3{
	text-align:center;
}


#form_s table.formtable2 td.hisu,
#form_u table.formtable2 td.hisu
{
	width:25px;
	paddng:10px 0;
	color:#FF0000;
	background:#EEEEEE;
	vertical-align:middle;
	font-size:10px;
	text-align:center;
}

table.formtable2 caption,
table.cart2 caption{
	border:solid 1px #999999;
	border-bottom:solid 0px #999999;
	background:#EEEEEE;
	font-size:14px;
	font-weight:bold;
	line-height:160%;
	padding:10px 10px;
}

div.table_inner{
	width: 450px;
	margin:0 auto;
}

/*----------------------------- 
会員ログイン画面
----------------------------- */
.member_box,
.member_box2
{
border:1px solid #999999;
	text-align:left;
	margin:0 10px 30px 10px;
    font-size:13px;
}
.member_box{
	
	<?php $width = $cnf['contents_width'] /2 - 50;?>
	width: <?php print $width;?>px;
	height:370px;
}
.member_box2{
	<?php $width = $cnf['contents_width'] /2 - 50;?>
	width: <?php print $width;?>px;
	height:auto;
}
.member_box_title{
	background:#999999;
	color:#FFF;
	padding:5px;
	font-weight:bold;
	text-align:center;
    font-size:16px;
}
.member_box_text{
	margin:10px;
}

.formbox{
	background:#EEEEEE;
	padding:15px;
	text-align:center;
	border:1px solid #999999;
}



/*----------------------------- 
お支払い・配送方法選択画面
----------------------------- */
.la {
	display: -moz-inline-box;　/* Firefox2 に対応 */
	display: inline-block;
	width:100px;
	text-align:left;
	margin:2px 3px 2px 0;
	color:#613917;
}

/*----------------------------- 
会員エラー画面
----------------------------- */
.err_text{
	margin-left:auto;
	margin-right:auto;
	text-align:left;
	width: 560px;
}



/*----------------------------- 
パスワードリマインダ
----------------------------- */
.reminder_box{
	margin-right:30px;
	padding:10px;
	width:230px;
	margin-bottom:20px;
	float:left;
	background-color:#D7EBFF;
}

/*----------------------------- 
会員ページのメニュー
----------------------------- */
.member_menu{
	background:#EEE;
	border:#999 1px solid;
	color:#039;
	margin:0 auto 30px auto;
	padding:10px;
	text-align:left;
}
#form_u .member_menu h3{
	border-bottom:#999 1px solid;
	color:#039;
	padding:0 0 5px 0;
	margin:0 auto 10px auto;
}
.point{
	width:300px;
	float:right;
	text-align:right;
	font-size:12px;
	/*color:#0000FF;*/
}
.member_menu a{
	color:#039;
	text-decoration:none;
}
.member_menu a:hover{
	color:#C36;
	text-decoration:underline;
}
.member_menu ul{
	list-style:none;
}
.member_menu ul li{
	background:url(../images/shop/ico_arrow42r_7.gif) no-repeat left center;
	text-align:left;
	float:left;
	color:#039;
	width:190px;
	padding:5px 0 5px 18px;
}

/*----------------------------- 
お買い物ガイド
----------------------------- */
.guidebox
{
	padding:20px 0 0 0;
	margin:0 auto 0 10px;
	text-align:left;
}

#guide{
	text-align:left;
}

/*----------------------------- 
   レビュー
----------------------------- */

/*--カテゴリータイトル--*/
.cat_title_review{
	height:135px;
	overflow:hidden;
}

h3.title-review {
	clear:both;
	color:#666;
	text-align:left;
	padding:25px 0 0 0;
	
}
	h3.title-review  a{
		color:#933;
	}
.img-box-review {
	float:left;
	padding:15px 0 25px 15px;
	text-align:left;
}
.review-list {
	padding:15px 15px 25px 15px;
	text-align:left;
}
	.review-list p a{
			color:#333;
			text-decoration:none;
		}

.hoshi{
	color:#F60;
}

table.formtable2.review th{
	width:100px;
}

div.item_plain p{
	margin-bottom:20px;
}


/*--------------------
　　　会員規約
----------------------*/

div.guide table.pms
	{ 
	font-size:12px;
	letter-spacing:1px;
	border:0!important;
	line-height:200%;
	padding:0!important;
}



div.guide table.pms tr
	{ 
	border:0!important;
	margin:0!important;
}

div.guide table.pms td
	{ 
	border:0!important;
	padding-bottom:15px;
	margin:0!important;
	text-align:left!important;
}

div.guide table.pms td.space
	{ 
	width:1px!important;
}

div.guide table.pms td.title{
	width:40px!important;
	text-align:left!important;
}

div.guide table.pms td.title_r{
	width:20px!important;
	text-align:right!important;
	padding-right:10px!important;
}

hr.b{
	border:0;
	border-bottom:1px solid #000;
}

/*----------------------------- 
ボタン・インプット
----------------------------- */
.s_btn01{
	width: 190px; 
	height:30px;
}
.s_btn02{
	width: 150px; 
	height:30px;
}
.s_btn03{
	width: 50px; 
	height:25px;
}
.btn_bg{
	text-align:center;
	padding:20px;
}

/*　フォーム　*/
.i_text{
	width:150px;
}
.i_text02{
	width:107px;
}
.i_text03{
	width:20px;
}
.i_btn{
	width:100px;
	height:30px;
}
.i_btn2{
	width:180px;
	height:30px;
}
.i_btn2n{
	width:180px;
	height:30px;
	background: #F9C;
}
.i_btn3{
	width:100px;
}
.i_btn5{
	width:40px;
	margin:0;
	padding:0;
}
.text1{
width:200px;
}
/*　ime-mode 設定　*/
input.ime1 { sime-mode: auto; }
input.ime2 { ime-mode: active; }
input.ime3 { ime-mode: disabled; }
textarea.ime4 { ime-mode: inactive; }
input.ime5 {ime-mode: inactive;}

.err{
	background:pink;
}

/*----------------------------- 
カード関係
----------------------------- */

table.card{
    margin:0 0 20px 0;
    border:0!important;   
	text-align:left; 
}


table.card th{
	background:#fdfde7;
    border:0!important; 
}


table.card td{
	padding:10px;
	text-align:left; 
    border:0!important; 
}


div.card_list_box{
	text-align:left;
    font-size:14px;
    margin:0 0 0 0;
    
}

div.card_list_box input.carddel{
	margin:100px 0 0 20px;
    
}


div.card_list_box dl{
	margin:10px 0 0 0;
    padding:10px;
    clear:both;
	box-sizing:border-box;
}

div.card_list_box dl dt{
	width:70px;
	padding:10px 0;
	box-sizing:border-box;
	float:left;
	border-bottom:1px dotted #ccc;
}

div.card_list_box dl dd{
	padding:10px 0 10px 70px;
	border-bottom:1px dotted #ccc;
	box-sizing:border-box;
}

div.card_list_box span.chuui{
	font-size:12px;
    color:#ff0000;
 }
   
/*----------------------------- 
お知らせ
----------------------------- */

.shop_text_waku2{
	width:600px;
	background:#FFFFE8;
	border:1px  #999 solid;
	text-align:left;
	margin:10px auto;
	padding:10px;
}

.shop_text_waku2 p span.url a{
	color:#0076bc!important;
}

