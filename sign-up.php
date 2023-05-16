<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <head>
        <meta charset="utf-8">
        <meta name="width=device-width, initial-scale=1.0" content="Sign-up page">
        <meta name="HandheldFriendly" content="True">
        <title> Sign up page </title>
        <!-- CSS sheet for the profile page -->
        <link rel="stylesheet" href="Styles/sign-up.css">
        <!-- JavaScript sheet for the profile page -->
        <script src="Javascript/profile.js"></script>
        <script src="Javascript/password.js"></script>


    </head>
    
    

    <!-- body -->
    <body class="profile">
        <!-- header -->
        <header>
            <!-- logo -->
            <!-- Picture taken from https://www.flaticon.com -->
            <a href="index.html">
                <img class="img1" src="assets/updated-logo.png" alt="Picture of logo for the web application">
            </a>
            <br>
                <!-- link to the welcome page -->
            <a href="index.html">
            <!-- Picture taken from https://www.flaticon.com -->
            <img class="img2" src="assets/back-arrow.png" alt="back button">
            </a>
        </header>
        <!-- page title -->
        <h1> Create a profile </h1>
        <!-- form -->
        <form action="profile.php" method="post">              
    <!-- Name label -->
        <label for="Name">Name:</label>
        <!-- Name text field -->
        <input type="text" name="name" id="Name" required>
    <br>
    <br>
    <!-- Age label -->
        <label for="Age">Age:</label>
        <!-- Age text field -->
        <input type="number" name="age" id="Age" required>
    <br>
    <br>
    <!-- City label -->
        <label for="City"> City:</label>
        <!-- City text field -->
        <input type="text" name="city" id="City" required>
    <br>
    <br>
    <!-- University label -->
        <label for="University"> University: </label>
        <!-- University text field -->
        <input type="text" name="university" id="University" required>
    <br>
    <br>
    <!-- Hobbies/Interest label -->
        <label for="Hobbies"> Hobbies/Interests: </label>
        <!-- Hobbies/Interest text field -->
        <input type="text" name="hobbies" id="Hobbies">
    <br>
    <br>
    <!-- E-mail label -->
        <label for="emailAddress"> E-mail: </label>
        <!-- Email text field -->
        <input id="emailAddress" type="email" placeholder="jbond@email.com" name="email" minlength="5" required>
    <!-- value="email" -->
    <br>
    <br>
    <!-- Phone number label -->
        <label for="phoneNumber"> Phone number: </label>
        <!-- Phone number field -->
        <input id="phoneNumber" type="number" name="phone" required>
    <br>
    <br>
    <!-- Password label -->
        <label for="password"> Password: </label>
        <!-- Password text field -->
        <input id="password" type="password" required name="password" >
        <input id="profilePasswordToggle" type="checkbox" onclick="togglePass()">

        <!-- value="password" -->
        <!-- checkbox for users to make password visibile/invisible -->
    <br>
    <br>
    <!-- Submit button -->
    <!-- Checking to see password is common - button -->
        
        <input type="submit" value="Submit" onclick="fnCheckForRestrictedWords();">
        <!-- end of form -->
        </form>
    
        
        
        
    </body>
</html>