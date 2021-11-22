<?php
$con=mysqli_connect("db.luddy.indiana.edu", "i494f21_bomurphy","my+sql=i494f21_bomurphy", "i494f21_bomurphy");

if (!$con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else 
	{echo "Established Database Connection " ;}
;

	$fName = mysqli_real_escape_string($con, $_POST['fname']);
    $lName = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['form_email']);
	$passOne = mysqli_real_escape_string($con, $_POST['form_pass1']);
	$passTwo = mysqli_real_escape_string($con, $_POST['form_pass2']);

	if ($passOne == $passTwo) {
		$sql = "INSERT INTO users (first_name, last_name, email, password_1, password_2)
		VALUES ('$fName', '$lName', '$email', '$passOne', '$passTwo')";
	}
	if (mysqli_query($con, $sql)) 
	{echo "User added";}
else 
	{die('User already exist: ' . mysqli_error($con));}

mysqli_close($con);









		// 	$sql = "SELECT * FROM users WHERE email='$email'";
	// 	$result = mysqli_query($con, $sql);
	// 	if (!$result->num_rows > 0) {
			// $sql = "INSERT INTO users (first_name, last_name, email, password_1, password_2)
			// 		VALUES ('$fName', '$lName', '$email', '$passOne', '$passTwo')";
	// 		$result = mysqli_query($con, $sql);
	// 		if ($result) {
	// 			echo "<script>alert('User Registration Completed.')</script>";
	// 			$fName = "";
    //             $lName = "";
	// 			$email = "";
	// 			$_POST['form_pass1'] = "";
	// 			$_POST['form_pass2'] = "";
	// 		} else {
	// 			echo "<script>alert('Woops! Something Wrong Went.')</script>";
	// 		}
	// 	} else {
	// 		echo "<script>alert('Woops! Email Already Exists.')</script>";
	// 	}
		
	// } else {
	// 	echo "<script>alert('Password Not Matched.')</script>";
	// }
    // if (mysqli_query($con, $sql)) 
	//     {echo "1 record added";}
    // else 
	//     {die('sql error: ' . mysqli_error($con));}

    // mysqli_close($con);



// $fName = mysqli_real_escape_string($con, $_POST['form_fname']);
// $lName = mysqli_real_escape_string($con, $_POST['form_lname']);
//$email = mysqli_real_escape_string($con, $_POST['form_email']);
//$passTwo = mysqli_real_escape_string($con, $_POST['form_pass1']);
//$passTwo = mysqli_real_escape_string($con, $_POST['form_pass2']);

//$sql="INSERT INTO users (first_name, last_name, email, password_1, password_2) VALUES ('$fname', '$lname', '$email', '$passOne', '$passTwo')";
    
// if (mysqli_query($con, $sql)) 
// 	{echo "User added";}
// else 
// 	{die('User already exist: ' . mysqli_error($con));}

// mysqli_close($con);


?>