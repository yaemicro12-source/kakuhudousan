<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>物件一覧</title>
</head>
<body>
<main>
<button><a href = serch.php>物件検索をする</a></button>
<button type = 'doropdown'value = $sarch_kategoli>
<?php for($i=0;$i<10;$i++){ ?>
    <?php require_once 'box.php?new = $i; '?>
 <?php } ?>

 <table>
    <tr><a href ='house_1.php'>1</a></tr>
    <tr><a href ='house_2.php'>2</a></tr>
    <tr><a href ='house_3.php'>3</a></tr>
</table>


</main>

</body>
</html>