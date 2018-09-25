<?php 
//khai bao mot doi tuong
class User{

	//thuoc tinh cua doi tuong
	var $name;
	var $old = 30;

	// phuong thuc cua doi tuong
	function getName(){
		echo "My name is Canh";
	}
	// phuong thuc cua doi tuong
	function getOld(){
		return $this->old;
	}
} 
// khoi tao doi tuong
$user = new User();

// goi phuong thuoc getName cua doi tuong User
$user->getName();
echo "<br/>";

echo $user->getOld();
echo "<br/>";

//ke thua trong huong doi tuong
class Student extends User{
	//da hinh huong doi tuong
	function getOld(){
		echo "25";
	}
}
// khoi tao doi tuong Student
$student = new Student();
$student->getName();
echo "<br/>";
echo $student->getOld();
?>