<?php 
// khoi tao session
session_start();
// gan gia tri cho SESSION
$_SESSION['myUserName'] = 'apple.luong1905';
$_SESSION['myPhone']    = '0988794607';




// goi gia tri SESSION
echo $_SESSION['myUserName'];
echo "<br>";
echo $_SESSION['myPhone'];



?>