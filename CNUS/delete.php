<?php 
include "config-agent.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `agentrqform` WHERE User_ID='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "<script>alert('Record Deleted successfully')</script>";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>