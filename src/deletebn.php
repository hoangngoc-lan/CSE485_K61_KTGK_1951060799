<?php 
$patientid=$_GET['patientid'];

$conn=mysqli_connect('localhost','root','','patient');
	if(!$conn){
		die("Không thể kết nối");
	}
	$sql="DELETE FROM patient WHERE patientid =$patientid";
	$result = $conn->query($sql);
	if($result){
	header("location:chitiet.php");
	}
	else{
		echo "Lỗi";
	}




 ?>