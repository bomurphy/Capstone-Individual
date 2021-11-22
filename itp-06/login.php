<?php
$con=mysqli_connect("db.luddy.indiana.edu", "i494f21_bomurphy","my+sql=i494f21_bomurphy", "i494f21_bomurphy");

if (!$con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else 
	{echo "Established Database Connection " ;}
;

$email = mysqli_real_escape_string($con, $_POST['login_email']);
$pass = mysqli_real_escape_string($con, $_POST['login_pass']);

$userSql = "SELECT email, password_1 FROM users";
$userResult = mysqli_query($con, $userSql);

	while ($users = mysqli_fetch_row($userResult)) {
		foreach($users as $user) {
			echo $user['email'];
		}
    }
	

// $userResult = $con-query($userSql);
// if (mysqli_num_rows($result) > 0) {
 

// }


?>