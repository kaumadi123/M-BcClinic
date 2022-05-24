<?php
if(isset($_POST['lecname'])){
	$name = $_POST['lecname'];
	$id = $_POST['lecid'];
	$conn=mysqli_connect('localhost','root','','shit website');
		$id= (int)$id;
		$query="INSERT INTO `lec_allocation` VALUES('$id','$name');";
		if(mysqli_query($conn,$query)){
			echo json_encode('true');
		}else{
			echo json_encode('false');
		}
	
}else{
	header("Location: index.html");
}
	
?>