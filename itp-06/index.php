<?php

$con=mysqli_connect("db.luddy.indiana.edu", "i494f21_bomurphy","my+sql=i494f21_bomurphy", "i494f21_bomurphy");

if (!$con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else 
	{echo "Established Database Connection " ;}
;

    $email = $_POST['login_email'];
    $password = $_POST['login_pass'];
    echo "<br>";
    echo $username;
    echo '<br>';
    echo $password;

    $emailData = $_GET['email'];

    $sql = "SELECT id, food FROM food";
    $sqlEmail = "SELECT email, password_1 FROM users WHERE email=.$emailData";
    $result = $con->query($sqlEmail);
    $foodResult = $con->query($sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        $getEmail = $row['email'];
    }

    if ($email == $getEmail) {
        echo "<br>";
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Food</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["food"]."</td></tr>";
            }
            echo "</table>";
        } else if ($email != $getEmail) {
            echo "User not found";
        } else {
            echo "error";
        }
    } 



    
    // if ($username == $username1 && $password == $password1) {
    //     echo "<br>";
    //     if (mysqli_num_rows($result) > 0) {
    //         echo "<table>";
    //         echo "<tr><th>ID</th><th>Food</th></tr>";
    //         while($row = $result->fetch_assoc()) {
    //             echo "<tr><td>".$row["id"]."</td><td>".$row["food"]."</td></tr>";
    //         }
    //         echo "</table>";
    //     } else {
    //         echo "0 results <br>";
    //     }
    // }
    // else if ($username == $username2 && $password == $password2) {
    //     echo "<br>";
    //     if (mysqli_num_rows($result) > 0) {
    //         echo "<table>";
    //         echo "<tr><th>ID</th><th>Food</th></tr>";
    //         while($row = $result->fetch_assoc()) {
    //             echo "<tr><td>".$row["id"]."</td><td>".$row["food"]."</td></tr>";
    //         }
    //         echo "</table>";
    //     } else {
    //         echo "0 results <br>";
    //     }
    // }
    // else if ($password != $password1 || $password != $password2) {
    //     echo "<br>";
    //     echo "Invalid Username or Password";
    //     echo "<br>";
    //     echo "Return To Login";
    // } else {
    //     echo "broke";
    // }

    