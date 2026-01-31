<?php require "includes/header.php";?>

<main>
    <h2>Contact Us</h2>
    
    <form action="process.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" id= "first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id= "last_name" name="last_name" required>

        <label for="email">Email</label>
        <input type="email" id= "email" name="email" required>

        <label for="Message">Send Us Your Message</label>
        <input type="text" id= "message" name="message" required>

        <button type="submit">Submit</button>

    </form>

</main>

<?php require "includes/footer.php";?>