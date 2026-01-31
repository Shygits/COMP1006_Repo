<?php require "includes/header.php";?>

<main>

    <h2>Contact Us</h2>
    
    <form action="process.php" method="post">
    <p>
        <label for="first_name">First Name</label>
        <input type="text" id= "first_name" name="first_name" required>
    </p>

    <p>
        <label for="last_name">Last Name</label>
        <input type="text" id= "last_name" name="last_name" required>
    </p>
    
    <p>
        <label for="email">Email</label>
        <input type="email" id= "email" name="email" required>
    </p>

    <p>
        <label for ="messsage">Message</label>
        <textarea id="message" name="message" minlength= "3" maxlength= "250" required></textarea>
    </p>

        <button type="submit">Submit</button>

    </form>

</main>

<?php require "includes/footer.php";?>