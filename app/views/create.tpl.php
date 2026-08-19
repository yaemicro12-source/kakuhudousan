<!DOCTYPE html>
<html lang="ja">
<body>
<h1><?=name_house ?></h1>
</header>
<main>
<img src ='<?=img_house?>'>
<form>
<form>
    <p>物件名を入力してください</p>
    <textarea type='input' name = 'titel'></textarea>

    <p><br>駅徒歩分数を入力してください</p>
    <textarea type='input' name = 'time_house'></textarea>

    <p><br>賃料を入力してください</p>
    <textarea type='input' name = 'rent_house'></textarea>
    
    <p><br>住所を入力してください</p>
    <textarea type='input' name = 'address_house'></textarea>

    <p><br>物件説明を入力してください</p>
    <textarea type='input' name = 'content'></textarea>

    <button type='send'>登録する</button>
</form>
<p>
    <?=content_house?>
</p>
</main>
</body>
</html>