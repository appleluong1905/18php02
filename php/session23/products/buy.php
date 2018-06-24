<?php session_start();
include '../config/connectdb.php';
$id = $_GET['id'];
if(isset($_SESSION['cart'][$id])){
	$_SESSION['cart'][$id]['qtt'] = $_SESSION['cart'][$id]['qtt'] + 1;
}else{
	$_SESSION['cart'][$id]['id'] = $id;
	$_SESSION['cart'][$id]['qtt'] = 1;
}
$idProductCart = "(";
foreach ($_SESSION['cart'] as $key => $value) {
	$idProductCart = $idProductCart.$key.','; 
}
$idProductCart= substr($idProductCart,0,-1).")";

//
$sqlProduct = "SELECT * FROM products WHERE id IN $idProductCart";
$resultProduct = mysqli_query($conn,$sqlProduct);
echo "<br>";
while($row = $resultProduct->fetch_assoc()) {
	$id   = $row['id'];
	$name = $row['name'];
	$image = '../images/'.$row['image'];
	echo  $id.' - '. $row['name'];
	echo "<img src='$image' width='100'>";
	echo " <a href='delete_cart.php?id=$id'>DELETE</a>";
	echo "<br>";

}

?>