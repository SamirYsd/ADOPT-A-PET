<?php
session_start();
//First checks if the username has been submitted and then we store the username and password in variables. 
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    // We then read the file in order to read and turn each line into arrays
    $file = file("Accounts.txt",FILE_IGNORE_NEW_LINES);
    $success = false;
    // We then check each arrays and split them with their delimiters ":" and check if the user's input matches the passwords and usernames in the Accounts.txt file
    foreach($file as $line) {
        $user_details = explode(':', $line);
        //If there's a match, we then create and set the username to a session variable.
        if ($user_details[0] == $username && $user_details[1] == $pass) {
            $success = true;
            $_SESSION["login"] = $username;
            $username = $user_details[0];
            $pass = $user_details[1];
            break;
        }
        else{
            $success = false;
        }
    }
    // If a session variable login exists, we let the user access to the giveaway page and redirect them to the page. 
    if (isset($_SESSION["login"])) { 
        header("Location: Giveaway.php");
        exit();
    } else {
        //If it doesn't work we display a message and let them retry.
        echo "<script> alert('Invalid username or password, please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <meta charset="UTF-8">
    <title>Find</title>
    <script src="date.js"></script>
    <script src="inputvalidator.js"></script>
    
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div>
    <h1>Log in <br></h1>
    <h3>Before accessing this file, please log in. If you do not have an account, please sign up by clicking on the option "Create An Account" on the side menu.</h3>
    <form action="login.php" method="post">
        <p><label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        </p>
        <br><br>
        <p><label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        </p>
        <br><br>
        <input type="submit" name="submit" value="Log in">
    </form>

    </div>
    <div style="padding-top: 20%;">
    </div>

    <ul>
        <li class="h">
            <a href="Home.php">Home Page </a> 
            </li>
        <li class="h">
            <a href="CreateAccount.php">Create an account</a>
        </li>
        <li class="h">
            <a href = "Find.php">Find a Dog/Cat</a>
            </li>
        <li class="h">
            <a href="DogCare.php">Dog Care</a>
        </li>
        <li class="h">
            <a href="CatCare.php">Cat Care</a>
        </li>
        <li class="h">
            <a href="login.php">Have a Pet to Give Away</a>
        </li>
        <li class="h">
            <a href="Contact.php">Contact Us</a>
        </li>
        <li class="h">
            <a href="logout.php">Log out</a>
        </li>
    </ul>

    
    <div style="font-size: small;">
        <p>Images were taken from <a href="https://www.canva.com" style="display: inline; color: #50646e;">"https://www.canva.com"</a> and <a href="https://www.petbacker.com/blog/how-to/tips-on-how-to-make-a-dog-and-cat-become-friends" style="display: inline; color: #50646e;">"https://www.petbacker.com/blog/how-to/tips-on-how-to-make-a-dog-and-cat-become-friends"</a>.</p>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>