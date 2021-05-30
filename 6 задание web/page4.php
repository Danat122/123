<?php

// page 4

session_start();

$_SESSION ['pages'] [] = $_SERVER['PHP_SELF'];


if(isset($_SESSION[name]) && isset ($_SESSION[surname]) && isset ($_SESSION[age])) 

{ 
echo "Your name $_SESSION[name] $_SESSION[surname] <br>"; 
echo "Ваш возраст $_SESSION[age] лет";
}



if(isset($_SESSION['pages']))

{ 
print '<h3> Список посещенных страниц</h3>'; 

print '<ol>';

foreach ($_SESSION['pages'] as $page)

{
echo '<li>', $page, '</li>';
}

print '</ol>';
}

?>