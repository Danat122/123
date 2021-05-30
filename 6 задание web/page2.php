<?php
 //page 2

 session_start(); 
 $_SESSION['pages'][] = $_SERVER['PHP_SELF'];
 if(isset($_POST[name])) {
 $_SESSION[name]=strip_tags(trim($_POST[name]));
 }
?>
<form action="page3.php" method="post">
Введите Фамилию: <br> <br>
<input type="text" name="surname"> <br><br>
<input type="submit" value="Далее">
</form>