<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
<title>Data Seleksi Prefilling</title>
</head>
 
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Anime Favorit
<input type="checkbox" name="anime[]" value="One Piece"
<?php
if ($_POST['anime'] == 'One Piece'){
echo 'checked="checked"';
}
?>/>One Piece
<input type="checkbox" name="anime[]" value="Naruto"
<?php
if ($_POST['anime'] == 'Naruto'){
echo 'checked="checked"';
}
?>/>Naruto
<input type="checkbox" name="anime[]" value="Hunter X Hunter"
<?php
if ($_POST['anime'] == 'Hunter X Hunter'){
echo 'checked="checked"';
}
?>/>Hunter X Hunter
<input type="checkbox" name="anime[]" value="Bakuman"
<?php
if ($_POST['anime'] == 'Bakuman'){
echo 'chekced="chekced"';
}
?>/>Bakuman
<input type="checkbox" name="anime[]" value="SNK"
<?php
if ($_POST['anime'] == 'SNK'){
echo 'chekced="chekced"';
}
?>/>SNK
<input type="checkbox" name="anime[]" value="SAO"
<?php
if ($_POST['anime'] == 'SAO'){
echo 'chekced="chekced"';
}
?>/>SAO
<br />
<input type="submit" name="Pilih" value="Pilih" />
</form>
<?php
if (isset($_POST['Pilih'])) {
$film = $_POST['anime'];
echo "Anime Favorit Anda adalah:
<font color = blue><b>$film</b></font>";
}
?>
</body>
</html>