<?php 
include "config-agent.php";

//write the query to get data from agentrqform table

$sql = "SELECT * FROM agentrqform";

//execute the query

$tdata = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>

<style>
body {
	
	background: linear-gradient(140deg, rgba(9,90,121,1) 0%, rgba(23,157,163,1) 50%, rgba(12,147,84,1) 100%);
	font-family:'Trebuchet MS';
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #179da3}

th {
	border-radius:2px;
	box-shadow: 0px 0px 3px 0px black;
	background-color: #095a79;
	color: white;
}
</style>
</head>
<body>
	<div class="container">
		<h2>Records</h2>
<table class="table">
	<thead>
		<tr>
		<th>Agent name</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone number</th>
		<th>Selected Date</th>
		<th>Services</th>
		<th>Details</th>
		<th>User-ID</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($tdata->num_rows > 0) {
				//output data of each row
				while ($row = $tdata->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Agent_Name']; ?></td>
					<td><?php echo $row['First_name']; ?></td>
					<td><?php echo $row['Last_name']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['M_number']; ?></td>
					<td><?php echo $row['Selected_Date']; ?></td>
					<td><?php echo $row['Services']; ?></td>
					<td><?php echo $row['Details']; ?></td>
					<td><?php echo $row['User_ID']; ?></td>
					<td><a class="btn btn-info" href="update-agent.php?id=<?php echo $row['User_ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete-agent.php?id=<?php echo $row['User_ID']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>