<?php

mysql_connect ("localhost","olek","Sanya1998");
mysql_select_db ("sanya2");
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];

if(empty($login) and empty($password)){
echo "Zarejestrujsie";
}
else{
echo "Hej, ".$login." | <a href='exit.php'>Wyjscie</a><br>dla logowanych";
}