<?php 
include "config-agent.php";


	if (isset($_POST['update'])) {
		
	$aname = $_POST["A-name"];
	$fname = $_POST["F-name"];
	$lname = $_POST["L-name"];
	$uid = $_POST["User-ID"];
	$umail= $_POST["email"];
	$phonenum = $_POST["phone-number"];
	$slectdate = $_POST["date"];
	$services = $_POST["services"];
	$details = $_POST["details"];

		// write the update query
		$sql = "UPDATE agentrqform SET Agent_Name='$aname' , First_name='$fname' , Last_name='$lname' , Email='$umail' , M_number='$phonenum' , Selected_Date='$slectdate' , Services='$services' , Details='$details' , User_ID='$uid' WHERE User_ID='$user_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}



if (isset($_GET['id'])) {
	$UID = $_GET['id'];

	//  SQL to get user data
	$sql = "SELECT * FROM agentrqform WHERE User_ID='$UID'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$aname = $row['Agent_Name'];
			$fname = $row['First_name'];
			$lname = $row['Last_name'];
			$uid = $row['User_ID'];
			$umail= $row['Email'];
			$phonenum = $row['M_number'];
			$slectdate = $row['Selected_Date'];
			$services = $row['Services'];
			$details = $row['Details'];
		
		}

	?>
<!DOCTYPE html>
	<html>
		<head>
			<title>View Page</title>

<style>

.all-form{
	font-family:'Trebuchet MS';
	margin-left:350px;
	margin-bottom:60px;
	border-radius:12px;
	max-width:850px;
	width:100%;
	background: rgb(76,149,207);
	background: linear-gradient(90deg, rgba(76,149,207,1) 0%, rgba(44,164,176,1) 30%, rgba(28,189,187,1) 70%, rgba(37,158,189,1) 100%);
	box-shadow: 0px 0px 25px 10px rgba(0,0,0,0.125);
}

.all-form{
	display: flex;
	flex-wrap: nowrap;
	position:center;
	flex-wrap:wrap;
	height:550px;
	padding:20px;
	padding-top:20px;
	justify-content:space-between;
	
}

.all-form .formset2 .sbutton{
	position: relative;
	border:1px;
	width:15em;
	background-color:#008CBA;
	border :none;
	padding:.75em;
	border-radius:6px;
	font-weight:bold;
	transition: all 0.5s ease-in-out;
}

.all-form .formset2 .sbutton:hover{
		
	border-radius:10px;
	box-shadow: 0px 0px 12px 3px #66ffff;
	transition: all 0.5s ease-in-out;
}

#A-name,#F-name,#L-name,#User-ID,#email,#phone-number,#date{  
	width: 250px;
    font-size: 12px;
    background: rgba(136, 126, 126, 0.1);
    padding: 10px 10px;
	color:white;
    box-sizing: border-box;
    border: 2px solid white;
	border-radius:5px;
    margin-bottom: 15px;
  
}

#textbox{
	width: 350px;
	height:100px;
    font-size: 12px;
    background: rgba(136, 126, 126, 0.1);
    padding: 10px 10px;
	color:white;
    box-sizing: border-box;
    border: 2px solid white;
	border-radius:5px;
    margin-bottom: 10px;
	
}
.agent-info-form .formset2 .sbutton{
	position: relative;
	border:1px;
	width:15em;
	background-color:#008CBA;
	border :none;
	padding:.75em;
	border-radius:6px;
	font-weight:bold;
	transition: all 0.5s ease-in-out;
}

.agent-info-form .formset2 .sbutton:hover{
		
	border-radius:10px;
	box-shadow: 0px 0px 12px 3px #66ffff;
	transition: all 0.5s ease-in-out;

</style>
		</head>
		<body>
		<h2>Request Update Form</h2>
		<form action="" method="post" id="agentform" class="all-form" >
			
				<div class="formtext">
				
					<label for="A-name">Agent name:<br></label>
					<input type="text" id="A-name" name="A-name" value="<?php echo $aname;?>" >
					<br>
			
					<label for="F-name">First name:<br></label>
					<input type="text" id="F-name" name="F-name" value="<?php echo $fname;?>" >
					<br>
			
					<label for="L-name">Last name:<br></label>
					<input type="text" id="L-name" name="L-name" value="<?php echo $lname;?>">
					<br>
			
					<label for="User-ID">User ID:<br></label>
					<input type="text" id="User-ID" name="User-ID" pattern="[LL]{2}[0-9]{5}" value="<?php echo $uid;?>">
					<br>
			
					<label for="email">Enter your email:<br></label>
					<input type="email" id="email" name="email" value="<?php echo $umail;?>">
					<br>
			
					<label for="phone-number">Enter your Mobile number<br></label>
					<input type="tel" id="phone-number" name="phone-number" maxlength="10" pattern="[07]{2}[0-9]{8}" value="<?php echo $phonenum;?>"><br>
			
					<label for="date">Select a date (optional):<br></label>
					<input type="date" id="date" name="date" value="<?php echo $slectdate; ?>"> 
					<br>
			
			
				</div>
				<div class="formset2">
				
				<h4>Available services</h4>	
		
			
					<input type="radio" id="op1" name="services" value="Only_finacial">
					<label for="finacial"> I need finacial services</label>
					<br>
			
					<input type="radio" id="op2" name="services" value="Only_leagal">
					<label for="legal"> I need legal services </label>
					<br>
			
					<input type="radio" id="op3" name="services" value="Finacial_and_Leagal">
					<label for="both-services"> I need legal and finacial services</label>
					<br><br>
		
					<textarea rows="6" cols="45" id="textbox" name="details" placeholder="Enter details here...(optional)"value="<?php echo $details; ?>"></textarea>
					<br><br>
		
					<input class="sbutton" type="submit" value="Submit">
			
				</div>
		
			</form>

		</body>
		</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>