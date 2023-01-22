<?php
// Define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        //check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/")) {
            $nameErr = "Only letters and white space allowed";
        }//end if preg match
    }//end else

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    //check if e-mail adress is wel formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }//end if filter_var
}//end else test input

if (empty($_POST["website"])) {
    $website = "";
} else {
    $website = test_input($_POST["website"]);
    //check if URL address syntax is valid (this regular expression allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
    }
}//end else website

if (empty($_POST["comment"])) {
    $comment = "";
} else {
    $comment = test_input($_POST["comment"]);
}//end else comment

if (empty($_POST["gender"])) {
    $comment = "Gender is required";
} else {
    $comment = test_input($_POST["gender"]);
}//end else gender

}
?>