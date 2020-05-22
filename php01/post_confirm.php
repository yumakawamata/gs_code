<?php
<<<<<<< HEAD
<<<<<<< HEAD
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}



$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

//File書き込み
//課題は
//名前とメール変数をカンマ区切りの文字列にしてファイルに書き込みができるように
//確認のURL　localhost/php01/post.php (必ず入力画面から)
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $name.",".$mail."\r\n");//$STRでは動かない　文字列イメージ）yama,test@testjp
fclose($file);

=======
=======
>>>>>>> master
$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];
if($name==""){
    $name = "未入力です";
    $flg = 1;
}
if($mail==""){
    $mail = "未入力です";
    $flg = 1;
}
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<<<<<<< HEAD
<<<<<<< HEAD
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>
=======
お名前：<?php echo $name; ?>
EMAIL：<?php echo $mail; ?>
>>>>>>> master
=======
お名前：<?php echo $name; ?>
EMAIL：<?php echo $mail; ?>
>>>>>>> master
<?php if($flg == 0){ 
?>
    <button>登録</button>
<?php
    }
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>