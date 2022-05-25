<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $mother_nic = $_POST['mother_nic'];
     $weight = $_POST['weight'];
   //   $manufacturer = $_POST['manufacturer'];
     $age = $_POST['age'];
     $date = $_POST['date'];
     $thriposha = $_POST['thriposha'];	
     
     $sql ="INSERT INTO `weight`(`mother_nic`, `weight`, `age`, `date`, `thriposha`) 
     VALUES ('$mother_nic','$weight','$age','$date','$thriposha')";
   //   $sql = "INSERT INTO vaccine (vaccine_ID,v_name,manufacturer,dose_num,exp_date,age_given)
   //   VALUES ('$vaccine_ID','$v_name','$manufacturer','$dose_num','$exp_date','$age_given')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='index.php'
        </SCRIPT>");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
