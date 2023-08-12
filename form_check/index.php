<?php
	ini_set("display_errors",false);
	
	session_start();
//	print_r($_SESSION);
	$value = $_SESSION["form"];
	$error = $_SESSION["error"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<title>メールフォーム</title>
<style>
.Form {
  margin-top: 80px;
  margin-left: auto;
  margin-right: auto;
  max-width: 720px;
}
@media screen and (max-width: 480px) {
  .Form {
    margin-top: 40px;
  }
}
.Form-Item {
  border-top: 1px solid #ddd;
  padding-top: 24px;
  padding-bottom: 24px;
  width: 100%;
  display: flex;
  align-items: center;
}
@media screen and (max-width: 480px) {
  .Form-Item {
    padding-left: 14px;
    padding-right: 14px;
    padding-top: 16px;
    padding-bottom: 16px;
    flex-wrap: wrap;
  }
}
.Form-Item:nth-child(5) {
  border-bottom: 1px solid #ddd;
}
.Form-Item-Label {
  width: 100%;
  max-width: 248px;
  letter-spacing: 0.05em;
  font-weight: bold;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label {
    max-width: inherit;
    display: flex;
    align-items: center;
    font-size: 15px;
  }
}
.Form-Item-Label.isMsg {
  margin-top: 8px;
  margin-bottom: auto;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label.isMsg {
    margin-top: 0;
  }
}
.Form-Item-Label-Required {
  border-radius: 6px;
  margin-right: 8px;
  padding-top: 8px;
  padding-bottom: 8px;
  width: 48px;
  display: inline-block;
  text-align: center;
  background: #ff7f7f;
  color: #fff;
  font-size: 14px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label-Required {
    border-radius: 4px;
    padding-top: 4px;
    padding-bottom: 4px;
    width: 32px;
    font-size: 10px;
  }
}
.Form-Item-Input {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 48px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #f5f5f5;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Input {
    margin-left: 0;
    margin-top: 18px;
    height: 40px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Item-Textarea {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 216px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #f5f5f5;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Textarea {
    margin-top: 18px;
    margin-left: 0;
    height: 200px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Btn {
  border-radius: 6px;
  margin-top: 32px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 280px;
  display: block;
  letter-spacing: 0.05em;
  background: #7fbfff;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
}
@media screen and (max-width: 480px) {
  .Form-Btn {
    margin-top: 24px;
    padding-top: 8px;
    padding-bottom: 8px;
    width: 160px;
    font-size: 16px;
  }
}
	
</style>

<script>


</script>
</head>
<body>
<form action="./confirm.php" method="POST" enctype="multipart/form-data">
<div class="Form">
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名（text）</p>
    <input name="name" type="text" class="Form-Item-Input" placeholder="例）山田太郎">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号（tel）</p>
    <input name="tel" type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス（email）</p>
    <input name="mail" type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容（textarea）</p>
    <textarea name="message" class="Form-Item-Textarea"></textarea>
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">サーチ（search）</p>
    <input name="search" type="search" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">パスワード（password）</p>
    <input name="password" type="password" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">datetime（datetime）</p>
    <input name="datetime" type="datetime" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">日時（date）</p>
    <input name="date" type="date" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年月（month）</p>
    <input name="month" type="month" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年周（week）</p>
    <input name="week" type="week" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">時分（time）</p>
    <input name="time" type="time" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">年月日時分（datetime-local）</p>
    <input name="datetime-local" type="datetime-local" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">数字（number）</p>
    <input name="number" type="number" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">長さ（range）</p>
    <input name="range" type="range"   min="1" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">カラー（color）</p>
    <input name="color" type="color" class="Form-Item-Input">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg">ファイル（file）</p>
    <input name="file" type="file" class="Form-Item-Input">
  </div>
  

  <div class="Form-Item">
  <p class="Form-Item-Label isMsg">性別（radio1）</p>
	<label><input id="sex_1" name="sex" type="radio" value="1" >男性</label>　
	<label><input id="sex_2" name="sex" type="radio" value="2" >女性</label><br>
	<span name="err_sex"></span>
  </div>
  
  <div class="Form-Item">
		<p class="Form-Item-Label isMsg">年代（radio2）</p>
		<input id="age_1" name="age" type="radio" value="1" ><label for="sex1_1">～10代</label>　
		<input id="age_2" name="age" type="radio" value="2" ><label for="sex1_2">20代</label>　<br>
		<input id="age_3" name="age" type="radio" value="3" ><label for="sex1_3">30代</label>　<br>
		<input id="age_4" name="age" type="radio" value="4" ><label for="sex1_4">40代</label>　<br>
		<input id="age_5" name="age" type="radio" value="5" ><label for="sex1_5">50代</label>　<br>
		<input id="age_6" name="age" type="radio" value="6" ><label for="sex1_6">60代～</label><br>
		<span name="err_sex1"></span>
  </div>
  
  <div class="Form-Item">
		<p class="Form-Item-Label isMsg">興味がある言語（checkbox）</p>
	<input id="lang_1" name="lang[]" type="checkbox" value="1" ><label for="lang_1">PHP</label>　<br>
	<input id="lang_2" name="lang[]" type="checkbox" value="2" ><label for="lang_2">Java</label>　<br>
	<input id="lang_3" name="lang[]" type="checkbox" value="3" ><label for="lang_3">Kotlin</label>
  </div>

  <div class="Form-Item">
		<p class="Form-Item-Label isMsg">都道府県（select）</p>
								<select name="pref"><option value="-1">選択してください</option><option value="01">北海道</option><option value="02">青森県</option><option value="03">岩手県</option><option value="04">宮城県</option><option value="05">秋田県</option><option value="06">山形県</option><option value="07">福島県</option><option value="08">茨城県</option><option value="09">栃木県</option><option value="10">群馬県</option><option value="11">埼玉県</option><option value="12">千葉県</option><option value="13">東京都</option><option value="14">神奈川県</option><option value="15">新潟県</option><option value="16">富山県</option><option value="17">石川県</option><option value="18">福井県</option><option value="19">山梨県</option><option value="20">長野県</option><option value="21">岐阜県</option><option value="22">静岡県</option><option value="23">愛知県</option><option value="24">三重県</option><option value="25">滋賀県</option><option value="26">京都府</option><option value="27">大阪府</option><option value="28">兵庫県</option><option value="29">奈良県</option><option value="30">和歌山県</option><option value="31">鳥取県</option><option value="32">島根県</option><option value="33">岡山県</option><option value="34">広島県</option><option value="35">山口県</option><option value="36">徳島県</option><option value="37">香川県</option><option value="38">愛媛県</option><option value="39">高知県</option><option value="40">福岡県</option><option value="41">佐賀県</option><option value="42">長崎県</option><option value="43">熊本県</option><option value="44">大分県</option><option value="45">宮崎県</option><option value="46">鹿児島県</option><option value="47">沖縄県</option><option value="48">その他</option></select>							</td>

  </div>

  
  <input id="sub" type="submit" class="Form-Btn" value="送信する">
</div>
</form>
</body>
</html>