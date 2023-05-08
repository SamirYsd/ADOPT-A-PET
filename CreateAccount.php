<?php
 session_start(); //Start the session
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <meta charset="UTF-8">
    <title>Create account</title>
    <script src="date.js"></script>
    
</head>
<body>
    <?php include 'header.php'; ?>

   <div>
    <br><br><br>
    <h1>Create an account</h1>
    
    <fieldset>
    
    <form action="CreateAccount.php" method="post">
    <p>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>
    </p>
      <input type="submit" value="Create Account">
    </form>
    </fieldset>
    <p>Please enter a username that contains only digits and letters.</p> 
    <p>The password must contain one letter and one digit and be at least 4 characters long.</p>
    
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
            <a href="Find.php">Find a Dog/Cat</a>
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
    

    
    <div style="padding-top: 20%;">
    </div>
    

    <div style="font-size: small;">
        <p>Images were taken from <a href="https://www.canva.com" style="display: inline; color: #50646e;">"https://www.canva.com"</a> , <a href="https://chocolatelabradorretriever.ca" style="display: inline; color: #50646e;">"https://chocolatelabradorretriever.ca"</a>, <a href="https://www.vomhausaudax.com/available-german-shepherd-adults" style="display: inline; color: #50646e;">"https://www.vomhausaudax.com/available-german-shepherd-adults"</a>, <a href="https://blog.ultrapremiumdirect.com/focus-sur-les-races/focus-sur-le-ragdoll/" style="display: inline; color: #50646e;">"https://blog.ultrapremiumdirect.com/focus-sur-les-races/focus-sur-le-ragdoll/"</a> and <a href="https://www.vetstreet.com/cats/persian" style="display: inline; color: #50646e;">"https://www.vetstreet.com/cats/persian"</a></p>
    </div>
<?php include 'footer.php'; ?>
<?php include 'Register.php'; ?>

<img src="images/Logo.png" alt="Logo" id="Logo1">

</body>
</html>