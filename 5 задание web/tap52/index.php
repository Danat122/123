<?php

$count = 1;
if(isset($_COOKIE['count'])){ 
	$count = $_COOKIE['count'];
	$time = $_COOKIE['time'];
}
$count++;
	setCookie('count', $count);
	setCookie("time", date("H:i:s"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Посещение страницы</title>
</head>
<body>

<p>Последнее посещение</p>

<?php

if($count>2){
echo $_COOKIE['count']."<br>"; 
echo $_COOKIE['time'];
}
else {
echo 'Первое посещение';
}

?>

</body>
</html>


