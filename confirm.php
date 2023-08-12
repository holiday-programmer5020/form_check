<?php
	session_start();
	error_reporting(E_ALL);
	ini_set("display_errors",true);

//	$images = array();
//	if(!empty($_FILES)){
//		foreach($_FILES as $file){
//			if(substr($file["type"],0,5) == "image"){
//				$images[] = $file;
//				copy($file["tmp_name"],"./tmp/".basename($file["tmp_name"]));
//			}
//		}
//	}

$sex = array(
"1"=>"男性",
"2"=>"女性"
);

$age = array(
"1"=>"～10代",
"2"=>"20代",
"3"=>"30代",
"4"=>"40代",
"5"=>"50代",
"6"=>"60代～",
);

$lang = array(
"1"=>"PHP",
"2"=>"Java",
"3"=>"Kotlin"
);


$pref = array(
"-1"=>"選択してください",
"01"=>"北海道",
"02"=>"青森県",
"03"=>"岩手県",
"04"=>"宮城県",
"05"=>"秋田県",
"06"=>"山形県",
"07"=>"福島県",
"08"=>"茨城県",
"09"=>"栃木県",
"10"=>"群馬県",
"11"=>"埼玉県",
"12"=>"千葉県",
"13"=>"東京都",
"14"=>"神奈川県",
"15"=>"新潟県",
"16"=>"富山県",
"17"=>"石川県",
"18"=>"福井県",
"19"=>"山梨県",
"20"=>"長野県",
"21"=>"岐阜県",
"22"=>"静岡県",
"23"=>"愛知県",
"24"=>"三重県",
"25"=>"滋賀県",
"26"=>"京都府",
"27"=>"大阪府",
"28"=>"兵庫県",
"29"=>"奈良県",
"30"=>"和歌山県",
"31"=>"鳥取県",
"32"=>"島根県",
"33"=>"岡山県",
"34"=>"広島県",
"35"=>"山口県",
"36"=>"徳島県",
"37"=>"香川県",
"38"=>"愛媛県",
"39"=>"高知県",
"40"=>"福岡県",
"41"=>"佐賀県",
"42"=>"長崎県",
"43"=>"熊本県",
"44"=>"大分県",
"45"=>"宮崎県",
"46"=>"鹿児島県",
"47"=>"沖縄県",
"48"=>"その他");
	
?>
<!DOCTYPE html>
<html>
<head>
<title>メールフォーム</title>
<link rel="stylesheet" href="common.css">

</head>
<body>
	<h1>以下の内容で送信してよいですか？</h1>
<div class="Form">
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
    <span name="name"><?=$_POST["name"]?></span>
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
    <span name="tel"><?=$_POST["tel"]?></span>
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
    <span name="mail"><?=$_POST["mail"]?></span>
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
    <span name="message"><?=nl2br($_POST["message"])?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">search</p>
    <span name="search"><?=$_POST["search"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">password</p>
    <span name="password"><?=$_POST["password"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">datetime</p>
    <span name="datetime"><?=$_POST["datetime"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">日時（date）</p>
    <span name="date"><?=$_POST["date"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年月（month）</p>
    <span name="month"><?=$_POST["month"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年周（week）</p>
    <span name="week"><?=$_POST["week"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">時分（time）</p>
    <span name="time"><?=$_POST["time"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年月日時分（datetime-local）</p>
    <span name="datetime-local"><?=$_POST["datetime-local"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">number</p>
    <span name="number"><?=$_POST["number"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">range</p>
    <span name="range"><?=$_POST["range"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">color</p>
    <span name="color" style="background-color:<?=$_POST["color"]?>"><?=$_POST["color"]?></span>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">file</p>
		<img src="http://holiday-programmer.net/wordpress/wp-content/uploads/2021/03/wVm-dTl-_400x400.jpg" name="file" data-name="wVm-dTl-_400x400.jpg" width="20%">
  </div>
  

  <div class="Form-Item">
  <p class="Form-Item-Label isMsg">性別（radio1）</p>
		<?php if(!empty($_POST["sex"])){ ?>
			<span name="sex"><?=$sex[$_POST["sex"]]?></span>
		<?php } ?>
  </div>
  
  <div class="Form-Item">
	<p class="Form-Item-Label isMsg">年代（radio2）</p>
		<?php if(!empty($_POST["age"])){ ?>
			<span name="age"><?=$age[$_POST["age"]]?></span>
		<?php } ?>
  </div>
  
  <div class="Form-Item">
		<p class="Form-Item-Label isMsg">興味がある言語（checkbox）</p>
		<?php if(!empty($_POST["lang"])){ ?>
			<?php foreach($_POST["lang"] as $key => $val){ ?>
				<span name="lang[]"><?=$lang[$val]?></span><br>
			<?php } ?>
		<?php } ?>
  </div>

  <div class="Form-Item">
		<p class="Form-Item-Label isMsg">都道府県</p>
		<?php if(!empty($_POST["pref"])){ ?>
			<span name="pref"><?=$pref[$_POST["pref"]]?></span>
		<?php } ?>
  </div>

  
  <input id="sub" type="submit" class="Form-Btn" value="送信する">
</div>
	<input type="button" name="back" value="戻る" onClick="location.href='./index.php'">　
	<input type="button" name="send" value="送信" onClick="location.href='./thanks.php'">

</body>
</html>