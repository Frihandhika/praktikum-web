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
<select name="anime">
<option value="One Piece"
<?php
if ($_POST['anime'] == 'One Piece'){
echo 'selected="selected"';
}
?>/>One Piece
<option value="Naruto"
<?php
if ($_POST['anime'] == 'Naruto'){
echo 'selected="selected"';
}
?>/>Naruto
<option value="Hunter X Hunter"
<?php
if ($_POST['anime'] == 'Hunter X Hunter'){
echo 'selected="selected"';
}
?>/>Hunter X Hunter
<option value="Bakuman"
<?php
if ($_POST['anime'] == 'Bakuman'){
echo 'selected="selected"';
}
?>/>Bakuman
<option value="SNK"
<?php
if ($_POST['anime'] == 'SNK'){
echo 'selected="selected"';
}
?>/>SNK
<option value="SAO"
<?php
if ($_POST['anime'] == 'SAO'){
echo 'selected="selected"';
}
?>/>SAO
</select>
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