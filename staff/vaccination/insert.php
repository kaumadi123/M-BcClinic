<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $mother_nic = $_POST['mother_nic'];
     $v_name = $_POST['v_name'];
   //   $manufacturer = $_POST['manufacturer'];
     $dose_num = $_POST['dose_num'];
     $given_date = $_POST['given_date'];
     $age_given = $_POST['age_given'];	
     
     $sql ="INSERT INTO `vaccine`(`mother_nic`, `v_name`, `dose_num`, `given_date`, `age_given`) 
     VALUES ('$mother_nic','$v_name','$dose_num','$given_date','$age_given')";
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
