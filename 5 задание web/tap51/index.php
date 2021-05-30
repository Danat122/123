<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
</head>
<body>

    <form method="post">
    <p><label>Страна: </label>
   <select name="country" name="country">
       <option value="1">Турция</option>
        <option value="2">Египет</option>
        <option value="3">Италия</option>
    </select></p>

    <p><label>Kоличество дней:</label>
    <input type="text" name="days"/></p>

    <p><label>Cкидка 5%</label>
    <input type="checkbox" name="ch"/></p>

    <input type="submit" value="Вывести стоимость">
</form>

<?php



if (isset($_POST['country']) &&is_numeric($_POST['days'])){
   $n = 0;
   $m = "без учета 5% скидки";
   if (isset($_POST['ch'])==true){
       $n = 400 /100 *5;
       $m = "со скидкой 5%";
   }
   if ($_POST['country']==1){
       $a = $_POST['days'];
       $a *= 400 - $n;
       echo "стоимость $a ".$m;
   }
   if ($_POST['country']==2){
       $a = $_POST['days'];
       $a *= 400 - $n;
       $b = $a/100 *10;
       $c = $a + $b;
       echo "стоимость $c ".$m;
   }
   if ($_POST['country']==3){
       $a = $_POST['days'];
       $a *= 400 - $n;
       $b = $a/100 *12;
       $c = $a + $b;
       echo "стоимость $c ".$m;
   }
} 
?>


</body>
</html>





