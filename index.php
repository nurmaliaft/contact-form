<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact From</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Get In Touch</h1>
            <p>Contact us, and we will be ready to serve you!</p>
            <form action="mail.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <label for="message">Message:</label>
                <textarea name="message" cols="30" rows="10"></textarea>
                <input type="submit" value="Send message">
            </form>
        </div>
    </body>
</html>