<?php
session_start();
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
    <br><br><br>
    <h1>Find a dog/cat</h1>
    <p style="margin-left: 25px;">Ready to find the perfect pet for you? Please fill out the following form so we can find the perfect match!</p>

    <img src="images/Dog_Cat_(find).png" alt="Dog(find)" id="picture">
    <form id="form" onsubmit="checkInput()" action="" method="post">
        <fieldset>
            
           
            <legend>ADOPT-A-PET</legend>
            <p>
                Preferred animal:
            <label for="cat">
                <input type="radio" name="animal" id="cat" value="Cat">
                Cat
    
            </label>
            <label for="dog" >
                <input type="radio" name="animal" id="Dog" value="Dog">
                Dog
    
            </label>
            
            <p>
                Breed 
                <select name="breed" id="select1">
                    <option>Choose here</option>
                    <option>Labrador</option>
                    <option>German Shepherd</option>
                    <option>Poodle</option>
                    <option>Yorkshire</option>
                    <option>Boxer</option>
                    <option>Shih Tzu</option>
                    <option>Golden Retriever</option>
                    <option> ------CAT BREEDS------</option>
                    <option>Abyssinian</option>
                    <option>Shorthair</option>
                    <option>Ragdoll</option>
                    <option>British Shorthair</option>
                    <option>Persian</option>
                    <option>Sphynx</option>
                    <option>Doesn't matter</option>
                </select>
            </p>
            <p>
                Preferred age 
                <select name="age" id="select2">
                    <option>Choose here</option>
                    <option>Junior</option>
                    <option>Adult</option>
                    <option>Senior</option>
                    <option> Doesn't matter</option>
                </select>
            </p>
    
            <p>
                Preferred gender:
            <label for="female">
                <input type="radio" name="gender" id="female" value="Female">
                Female
    
            </label>
            <label for="male" >
                <input type="radio" name="gender" id="male" value = "Male">
                Male
    
            </label>
            <label for="gender" >
                <input type="radio" name="gender" id="gender" value = "Doesntmatter">
                Doesn't matter
    
            </label>
    
            </p>
            <p>
                Please enter any criterias that you have regarding the cat's behavior.
            <label for="requirements">
                <input type="radio" name="requirements" id="requirements1" value = "cf">
                Cat Friendly
            </label>

            <label for="requirements">
                <input type="radio" name="requirements" id="requirements2" value = "df">
                Dog Friendly
            </label>

            <label for="requirements">
                <input type="radio" name="requirements" id="requirements3" value = "scf">
                Small children Friendly
            </label>
           </p>
           <p>Thank your for taking the time to fill out the form!</p>
    <input type="submit" name="submit"
            value="Submit"/>
    <input type="reset"
        value="Clear"/>
    
            
    
        </fieldset>

       
    </form>
    <br><br>

    <?php
// Check if file has been subimitted and then store each user's input in variables in order to then check for equality.
if(isset($_POST["submit"])){ 
$animal = $_POST["animal"];
$breed = $_POST["breed"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$requirement = $_POST["requirements"];
$getsAlongWith = "";
if($requirement == "cf"){
$getsAlongWith = "Cats";
}
if($requirement == "df"){
    $getsAlongWith = "Dogs";
    }


// Reading from file and each line becomes an array that we'll split in 4 different fields that we'll eventually compare with the user's input. 
$file = file("AvailablePets.txt",FILE_IGNORE_NEW_LINES);
foreach($file as $pet) {
    $petDetails = explode(":", $pet); 
    
  
    
    
  } 
  if(($petDetails[1] == $breed) || ($petDetails[2] == $gender) || ($petDetails[3] == $age) || ($petDetails[4] == $requirement) ) {  //Check if there's a match?> 
<p>
    <?php 
    echo "There's a match! Here's the details about your perfect pet: <br> ";
    echo "Breed: $breed <br> ";
    echo "Gender: $gender <br>";
    echo "Age : $age <br>";
    echo "Gets along with: $getsAlongWith <br>";
    echo 'Please consult the available animals page in order to find the corresponding pet: <a href="Browse.php" style="color: black;"> Browse pets. </a>';
  }
  else{
    ?>
<p>
    <?php
    echo 'There is no match unfortunetly but you could still look in the available pets page to see if one of them could be a match: <a href="A2_Q7(browse).php" style="color: black;"> Browse pets. </a>'; ?>
</p>
  <?php
  }
    }
  ?>
</p>

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
        <p>Images were taken from <a href="https://www.canva.com" style="display: inline; color: #50646e;">"https://www.canva.com"</a> and <a href="https://www.petbacker.com/blog/how-to/tips-on-how-to-make-a-dog-and-cat-become-friends" style="display: inline; color: #50646e;">"https://www.petbacker.com/blog/how-to/tips-on-how-to-make-a-dog-and-cat-become-friends"</a>.</p>
    </div>
    <?php include 'footer.php'; ?>
   

</body>
</html>