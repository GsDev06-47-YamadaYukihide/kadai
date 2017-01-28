<?php require '../header.php'; ?>
<table border="1" cellspacing="0" cellpadding="5"
 bordercolor="#000000" style="border-collapse: collapse">

<tr><th>id</th><th>名前</th><th>性別</th><th>誕生日</th><th>E-mailadress</th></tr>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=newlist;charset=utf8',
'staff', 'password');
foreach ($pdo->query('select * from newlist') as $row) {
echo '<tr>';
echo '<td>', $row['id'], '</td>';
echo '<td>', $row['name'], '</td>';
echo '<td>', $row['gender'], '</td>';
echo '<td>', $row['series'], '</td>';
echo '<td>', $row['birthday'], '</td>';
echo '<td>', $row['emailadress'], '</td>';
echo '</tr>';
echo "\n";
}
?>
</table>
<?php require '../footer.php'; ?>
