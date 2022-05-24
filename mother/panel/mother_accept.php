<?php
if(isset($_POST['id'])){
	$id=$_POST['id'];
  
 	$conn=mysqli_connect('localhost','root','','m&bc');
    $update_nic_query="UPDATE mother_allocation_rqst SET accept_or_not='1' WHERE id='$id'";
    mysqli_query($conn,$update_nic_query);


    mysqli_close($conn);

	
 }else{
	// header("Location: index.html");
 }
?>