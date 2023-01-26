<?php

$name = $_POST['name'];
$group = $_POST['group'];
$gender = $_POST['gender'];
$age = $_POST['age'];

if (empty($name))
{    header( "Location: name.html" ); 
} elseif (empty($group)){
    header( "Location: group.html" ); 
} elseif (empty($gender)){
    header( "Location: gender.html" ); 
} elseif (empty($age)){
    header( "Location: age.html" ); 
} else {
if (isset($_POST)) {
    date_default_timezone_set('UTC');
    $today = date("Y-m-d");
    $old = $today - $_POST['age'];
    if ($_POST['gender'] == "men"){
        $pensia = 65 - $old;
    }
    else{
        $pensia = 63 - $old;
    }
    if($pensia <= 0){
        $pensia = "Ты уже на пенсии, дурашка";
    }
    print("Имя: " . $_POST['name']);
    print("<br>Группа: " . $_POST['group']);
    print("<br>Возраст: " . $old);
    print("<br>Через сколько выйдет на пенсию: " . $pensia);
}
}
?>