<?php
/* What's the Problem? 
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
