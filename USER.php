

/<?php
session_start();
 
include ("bd.php");
 
if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result2 = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password' AND activation='1'",$db); 
$myrow2 = mysql_fetch_array($result2); 
if (empty($myrow2['id']))
   {
    exit("Вход на эту страницу разрешен только зарегистрированным пользователям!");
   }
}
else {
exit("Вход на эту страницу разрешен только зарегистрированным пользователям!"); }
?>
<html>
<head>
<title>Список пользователей</title>
</head>
<body>
<h2>Список пользователей</h2>
 
 
<?php
if(isset($login) AND isset($password)){
    $resultat = mysql_query("SELECT * FROM users");
    $array = mysql_fetch_array($resultat);
    
    do{
    if($array['avatar'] == ''){
        $avatar = "noAvatar.jpg";
    }else{
        $avatar = $array['avatar'];
    }
    printf("$array[login]<br><a href='page.php?id=$array[id]'><img src='".$avatar."'></a><br><br>");
 
    }
    while($array = mysql_fetch_array($resultat));
    
}else{
print <<<HERE

<a href="registration.php">Регистрация</a><a href="password.php">Восстановление пароля</a>
HERE;
}
 
?>
 
</body>
</html>

