<?php

$con=mysqli_connect("db.luddy.indiana.edu", "i494f21_bomurphy","my+sql=i494f21_bomurphy", "i494f21_bomurphy");

if (!$con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else 
	{echo "Established Database Connection " ;}

    $username1 = jdoe;
    $username2 = ajohn;
    
    $password1 = abcde;
    $password2 = colts;

    $username = $_POST['form_username'];
    $password = $_POST['form_password'];
    echo "<br>";
    echo $username;
    echo '<br>';
    echo $password;

    $sql = "SELECT id, food FROM food";

    $result = $con->query($sql);

    
    if ($username == $username1 && $password == $password1) {
        echo "<br>";
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Food</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["food"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results <br>";
        }
    }
    else if ($username == $username2 && $password == $password2) {
        echo "<br>";
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Food</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["food"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results <br>";
        }
    }
    else if ($password != $password1 || $password != $password2) {
        echo "<br>";
        echo "Invalid Username or Password";
        echo "<br>";
        echo "Return To Login";
    } else {
        echo "broke";
    }

// if(isset($_POST['connect'])) {

//     $username1 = jdoe;
//     $username2 = ajohn;
    
//     $password1 = abcde;
//     $password2 = colts;

//     $username = $_POST['form_username'];
//     $password = $_POST['form_password'];

//     $cipher = 'AES-128-CTR';
//     $option = 0;
//     $encryption_iv = '1234567890123456';

//     $encryption1 = openssl_encrypt($password, $cipher, $password1, $option, $encryption_iv);
//     $encryption2= openssl_encrypt($password, $cipher, $password2, $option, $encryption_iv);

//     echo "Encrypted data: " .$encryption1;
// }





?>