<?php
if (isset($_POST['city'])) {
	$currrent_date = date("Y-m-d");//getting current date
	$alloc_date = date('Y-m-d', strtotime($currrent_date . ' + 2 days'));//adding two dates to current date

	$city = $_POST['city'];
	$group_ltr = $_POST['group_ltr'];

	$conn = mysqli_connect('localhost', 'root', '', 'm&bc');

	$select_nic_query = "SELECT nic FROM mother_register WHERE City='$city' and group_ltr='$group_ltr'";
	$result = mysqli_query($conn, $select_nic_query);


	while ($row = mysqli_fetch_assoc($result)) {
		$nic = $row['nic'];

		$query = "INSERT INTO `mother_allocation_rqst`(`mother_nic`, `alloc_date`, `date`, `accept_or_not`,`group_ltr`,`city`) 
	VALUES ('$nic','$alloc_date','$currrent_date',0,'$group_ltr','$city')";
		if (mysqli_query($conn, $query)) {
			echo json_encode('true');
		} else {
			echo json_encode('false');
		}
	}
	mysqli_close($conn);
} else {
	header("Location: index.html");
}
