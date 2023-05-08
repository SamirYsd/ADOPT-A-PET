<?php
    $accountsFile = "Accounts.txt";
    //This function reads a file and checks if the username passed is equal to one of the usernames already in the file. 
    function check_username($username) {
        global $accountsFile;
        $file = fopen($accountsFile, "r");
        while (!feof($file)) {
            $line = fgets($file);
            $line = trim($line); // remove trailing newline
            $user = explode(":", $line);
            if ($user[0] == $username) {
                fclose($file);
                return true;
            }
        }
        fclose($file);
        return false;
    }
    //Checks if the username entered by the user is valid by using RegEx and checking if there's only digits and letters.
    function validate_username($username){
        return preg_match('/^[A-Za-z0-9]+$/',$username);
    }
//Checks if the password entered by the user is valid by checking the length if there's at least a digit and a letter.
    function validate_password($password){
        if(strlen($password) < 4){
            return false;
        }
        if(!preg_match('/\d/', $password)){
            return false;
        }
        if(!preg_match('/[a-zA-Z]/',$password)){
            return false;
        }
        return true;
    }
    //First checks if the user entered its username and then uses the function to validate the username and password and if the username already exists. 
    //If there's a problem, the user name will be notify because of an alert otherwise a confirmation will be sent and its credentials will be uploaded in the text file. 
    if(isset($_POST['username'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if(!validate_username($user)){
            echo "<script> alert('INVALID USERNAME!');</script>";
        }
        else if(!validate_password($pass)){
            echo "<script> alert('INVALID PASSWORD!');</script>";
        }
        else if(check_username($user)){
            echo "<script> alert('USERNAME ALREADY EXISTS!');</script>";
        }
        else{
            $file = fopen($accountsFile, "a");
            fwrite($file, $user . ":" . $pass . PHP_EOL);
            fclose($file);
            echo "<script> alert('ACCOUNT SUCCESSFULLY CREATED! YOU CAN NOW LOG IN.');</script>";

        }
    }
?>