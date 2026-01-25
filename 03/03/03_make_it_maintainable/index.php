<?php
/* 2.) Add a short comment indicating one thing you learned from this lab that 
you will apply in Course Project Phase One 
One thing i learned in this lab was that i need to take each section of the HTML to craete a new php page in order to make it easily mainatanable. At first I thought i just needed the one page but I needed to add header.php and footer.php because the original HTML included those sections. Now that I understand the reasoning and logic behind it I will easily remember for the next project.

What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
*/

$items = ["Home", "About", "Contact"];
?>
<?php require "header.php"; ?>


<h1>Welcome</h1>


<?php require "nav.php";?>


<?php require "footer.php"; ?>
