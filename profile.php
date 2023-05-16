<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <head>
        <meta charset="utf-8">
        <meta name="width=device-width, initial-scale=1.0" content="Sign-up page">
        <meta name="HandheldFriendly" content="True">
        <title> Profile page </title>
        <!-- CSS sheet for the profile page -->
        <link rel="stylesheet" href="Styles/sign-up.css">
        <!-- JavaScript sheet for the profile page -->
        <script src="Javascript/profile.js"></script>

    </head>


    <body class="profile">
        <header>
        <!-- logo -->
        <!-- Picture taken from https://www.flaticon.com -->
        <a href="index.html">
            <img class="img1" src="assets/updated-logo.png" alt="Picture of logo for the web application">
        </a>
        <br>
            <!-- link to the welcome page -->
        <a href="sign-up.php">
        <!-- Picture taken from https://www.flaticon.com -->
        <img class="img2" src="assets/back-arrow.png" alt="back button">
        </a>
    </header>
            <?php

            //Connecting to mySQL database on igor
            $conn = mysqli_connect("igor.gold.ac.uk", "esimo001", "password", "esimo001");

            // Checking connection to mysql
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            // Getting all the form data(input)
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $city = $_REQUEST['city'];
            $university = $_REQUEST['university'];
            $hobbies = $_REQUEST['hobbies'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $password = $_REQUEST['password'];

            // Inserting into table Profile
            $sql = "INSERT INTO Profile VALUES ('$name', '$age','$city','$university','$hobbies','$email','$phone','$password')";

            if(mysqli_query($conn, $sql)){
                echo "<h1>Profile</h1>";

                echo nl2br("
                <b>Name: </b>$name\n 
                <b>Age: </b>$age\n 
                <b>City: </b>$city\n 
                <b>University: </b>$university\n 
                <b>Hobbies: </b>$hobbies\n 
                <b>Email: </b>$email\n 
                <b>Phone: </b>$phone\n 
                ");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
            ?>
    </body>
</html>