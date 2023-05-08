<?php
    session_start();
    session_unset(); 
    session_destroy(); 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <meta charset="UTF-8">
    <title>home</title>
    <script src="date.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    

   <div>
    <br><br><br>
    <h1>Goodbye! You have been succesfully logged out.</h1>
    <br>
    
    <p>If you wish to login again, please visit  <a href = "Giveaway.php" style="color: blue;text-decoration: underline; display: inline;"> Have a Pet to Give Away  </a> </p>
    <p>We thank you for choosing ADOPT-A-PET Montreal and feel free to <a href = "Contact.php" style="color: blue;text-decoration: underline; display: inline;"> Contact Us  </a>  for more informations! </p>
    
    <img src="images/dog-cat-sofa.jpg" alt="sofa" id="sofa">


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

    
    
    
    <div style="font-size: small;">
        <p>Images were taken from <a href="https://www.canva.com" style="display: inline; color: #50646e;">"https://www.canva.com"</a> and <a href="https://kb.rspca.org.au/knowledge-base/how-should-i-introduce-my-new-dog-or-puppy-to-the-family-cat/" style="display: inline; color: #50646e;">"https://kb.rspca.org.au/knowledge-base/how-should-i-introduce-my-new-dog-or-puppy-to-the-family-cat/"</a>.</p>
    </div>
    <?php include 'footer.php'; ?>

</body>
</html>