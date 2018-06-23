<?php 
//khoi tao cookie
$myName = "Canh";
setcookie("myName", $myName, time() + 15);
//goi gia tri cookie
echo $_COOKIE['myName'];

//xoa cookie
setcookie("myName", "Canh", time() - 10);

echo $_COOKIE['myName'];

// $myName = "Canh";
// //
// ///
// ///
// echo $myName;
?>