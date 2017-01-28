<?php require '../header.php'; ?>
<p>追加登録</p>
<form action="gs-kadai-insert-output.php" method="post">
名前<input type="text" name="name"><br>
性別<input type="text" name="gender"><br>
誕生日<input type="text" name="birday"><br>
E-mail<input type="text" name="emailadress"><br>
<input type="submit" value="追加">

</form>
<?php require '../footer.php'; ?>
