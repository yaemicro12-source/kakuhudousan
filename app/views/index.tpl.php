<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>メインページ</title>
</head>
<body>

<main>
<a href=><img src = 'head.png'></img></a>
<h2>会社について簡単に</h2>
<button><a href = all_house.php>一覧へ</a></button>
<button><a href = serch.php>物件検索をする</a></button>
<h3>新着物件</h3>
<?php for($i=0;$i<10;$i++){ ?>
    <?php require_once 'box.php?new = $i; '?>
 <?php } ?>

</main>

</body>
</html>