<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <meta charset="UTF-8">
    <title>Giveaway</title>
    <script src="date.js"></script>
    <script src="inputAndEmailValidator.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

   <div>
    <br><br><br>
    <h1>Have a pet to give away</h1>
    <p>
    <?php
    echo "Hello ". $_SESSION['login'] . "! <br><br>";
    echo "We understand that giving away a pet away is a huge and difficult decision. We assure our clients that we will support our clients and make sure that the process will go smoothly in order to find the perfect new family to their pet. Please complete the following form with the required informations regarding your pet.<br>";
    echo "Thank you for submitting the form! We will get back to you as soon as possible.";
    ?>
    </p>
    <br>
<form action="" onsubmit="Validate()" method ="post">
    <fieldset>
        
        <p>
            Cat or dog:
        <label for="catordog1">
            <input type="radio" name="catordog" id="catordog1" value="Dog">
            Cat

        </label>
        <label for="catordog2" >
            <input type="radio" name="catordog" id="catordog2" value="Cat">
            Dog

        </label>

        </p>

       
        <p>
            Please enter the pets breed
            <select name="breed" id="breed">
                <option >Choose here</option>
                <option>Abyssinian</option>
                <option>Shorthair</option>
                <option>Ragdoll</option>
                <option>British Shorthair</option>
                <option>Persian</option>
                <option>Sphynx</option>
                <option>Other</option>
                <option >Mixed</option>
                <option>-------DOG BREED------</option>
                <option>Labrador</option>
                <option>German Shepherd</option>
                <option>Poodle</option>
                <option>Yorkshire</option>
                <option>Boxer</option>
                <option>Shih Tzu</option>
                <option>Golden Retriever</option>
                <option>Beagle</option>
                <option>Other</option>
                <option>Mixed</option>
            </select>
        </p>
        <p>
            Animal gender:
        <label for="gender1">
            <input type="radio" name="gender" id="gender1" value="Female">
            Female

        </label>
        <label for="gender2" >
            <input type="radio" name="gender" id="gender2" value="Male">
            Male

        </label>

        </p>

        <p>
            Gets along with other dogs?:
        <label for="dogfriendly1">
            <input type="radio" name="dogfriendly" id="dogfriendly1" value="DogFriendly">
            Yes

        </label>
        <label for="dogfriendly2" >
            <input type="radio" name="dogfriendly" id="dogfriendly2" value="NotDogFriendly">
            No

        </label>

        </p>

        <p>
            Gets along with other cats?:
        <label for="catfriendly1">
            <input type="radio" name="catfriendly" id="catfriendly1" value="CatFriendly">
            Yes

        </label>
        <label for="catfriendly2" >
            <input type="radio" name="catfriendly" id="catfriendly2" value="NotCatFriendly">
            No

        </label>

        </p>

        <p>
            Suitable for a family with small children? :
        <label for="childfriendly">
            <input type="radio" name="childfriendly" id="childfriendly" value="ChildFriendly">
            Yes

        </label>
        <label for="childfriendly2" >
            <input type="radio" name="childfriendly" id="childfriendly2" value="NotChildFriendly">
            No

        </label>

        </p>

        <p>Please write down other important informations about your pet:</p>
        <textarea name="brag" id="brag" cols="70" rows="10"></textarea>

        <p><label for="fname">Owner's First Name:</label>
        <input type="text" name="fname" id="fname">
        </p>
        
        <p><label for="lname"> Owner's Last Name:</label>
        <input type="text" name="lname" id="lname">
        </p>
        <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        </p>
       
       <p>Thank your for taking the time to fill out the form!</p>
        <input type="submit"
            value="Submit" name="submit"/>
        <input type="reset"
            value="Clear"/>


        

    </fieldset>
</form>
    <br><br>
    <?php
      if(isset($_POST['submit'])){ //Check if the file has been submitted
        $file = fopen("GiveAway.txt","r");
        $lastLine = ""; 
        // We try to read only the last line of the file, once we reach the end of file we should be able to read it and store it in a variable.
        while(!feof($file)){
            $lastLine = fgets($file);

        }
        //If the file is empty, it means there's no record yet, therefore the counter will be set to one for the first input.
        if($lastLine == false){
            $count = 1;
        }
        // if the file isn't empty, we read what the last counter is and add 1 to it for the next user input that'll be stored in that file. 
        else{
        $last = explode(":",$lastLine);
        $count = $last[0];
        $count = $count +1;
        }
        fclose($file);

        $username = $_SESSION['login'];
        $animal = $_POST['catordog'];
        $breed = $_POST['breed'];
        $gender = $_POST['gender'];
        $DogFriendly = $_POST['dogfriendly'];
        $CatFriendly = $_POST['catfriendly'];
        $ChildFriendly = $_POST['childfriendly'];
        $moreinfo = $_POST['brag'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
    
    
        //Opening file and writing the informations in it. 
        $file = fopen("GiveAway.txt","a");
        $str = $count . ":" . $username . ":" . $animal . ":" . $breed . ":" . $gender . ":" . $DogFriendly . ":" . $CatFriendly . ":" . $ChildFriendly . ":" . $moreinfo .":" . $fname . ":" . $lname . ":" . $email . "\n";
        fwrite($file,$str);
        fclose($file);
    
        } ?>


    

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
        <p>Image modified and taken from <a href="https://www.canva.com" style="display: inline; color: #50646e;">"https://www.canva.com"</a>.</p>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>