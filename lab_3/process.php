<?php 
require "includes/header.php"; 

//Sanitize the data 
 
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

//validation serverside 
$errors = []; 

//REQUIRED FEILDS
if ($firstName === null || $firstName === '') {
    $errors[] = "First Name is Required."; 
}

if ($lastName === null || $lastName === '') {
    $errors[] = "Last Name is Required."; 
}

//require email and validate proper format 
if ($email === null || $email === '') {
    $errors[] = "Email is Required"; 
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email must be a valid email"; 
}
// Message 
if ($message === null || $message === '') {
    $errors[] = "Message is Required."; 
} elseif (strlen($message) < 3 || strlen($message) > 250) {
    $errors[] = "Message must be between 3 and 250 characters."; 
}
?>

<main>

<?php


//if there are errors, display to user and exit the script 
if(!empty($errors)) {
    echo "<ul>";
foreach ($errors as $error) {
    echo "<li>" . $error . "</li>"; //concatenation
}
echo "</ul>";
echo "</main>"; 
//closes before exiting so doesnt break html structure
//stop the script from executing  
exit; 
}
//Email Variables
$to ="info@bakery.com";
$subject = "Contact Form Submission from " . $firstName . " " . $lastName;
 ?>

<!-- echo the data the user submitted -->
    <?php echo "<h2> Thank you for your message " . $firstName . "</h2>"; ?>


<!--send email using mail function -->
<?php mail($to, $subject, $message); ?> 

<?php require "includes/footer.php"; ?>