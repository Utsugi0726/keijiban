<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");


    ?>

    <div class="logo"><img src="4eachblog_logo.jpg "></div>

<header>

 <ul class="headlist">
    <li>トップ</li>
    <li>プロフィール</li>
    <li>4eachについて</li>
    <li>登録フォーム</li>
    <li>問い合わせ</li>
    <li>その他</li>
 </ul>

</header>

<main>

<div class="left">
    <h1>プログラミングに役立つ掲示板</h1>

<form method="post" action="insert.php">
    <h4>入力フォーム</h4>
        <div>
            <label>ハンドルネーム</lavel>
                <br>
                <input type="text" class="taxt" size=35 name="handlename">
        </div>

        <div>
            <label>タイトル</lavel>
                <br>
                <input type="text" class="taxt" size=35 name="title">
        </div>

        <div>
            <label>コメント</lavel>
                <br>
                <textarea cols="60" rows="7" name="comments"></textarea>
        </div>
        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>

</form>

<?php

while($row = $stmt->fetch()){
echo "<div class='comment_box1'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='naiyou'>";
echo $row['comments'];
echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
echo "</div>";
echo "</div>";

}

?>

</div>

<div class="right">
    <h2>人気の記事</h2>
    <ul>
     <li>PHPオススメ本</li>
     <li>PHP MyAdminの使い方</li>
     <li>今人気のエディタ Top5</li>
     <li>HTMLの基礎</li>
    </ul>

    
    <h2>オススメリンク</h2>
    <ul>
     <li>インターノウス株式会社</li>
     <li>XAMPPのダウンロード</li>
     <li>Eclipseのダウンロード</li>
     <li>Brancketsのダウンロード</li>
    </ul>

    <h2>カテゴリ</h2>
    <ul>
     <li>HTML</li>
     <li>PHP</li>
     <li>MySQL</li>
     <li>JavaScript</li>
    </ul>

 </div>

</main>

<footer>
    copyright©internous | 4each blog the which provides A to Z about programing.
</footer>

</body>
</html>