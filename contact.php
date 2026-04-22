<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Shopez | Contact</title>
</head>
<body>
    <?php require 'Templates/nav.php'; ?>
    <main>
        <center><strong><h1>Contact Shopez</h1></strong></center>
        <form action="sendmail.php" method="post">
            <input type="text" name="Name" id="Name"  placeholder="Enter Full Name" required>
            <input type="email" name="Email" id="Email" placeholder="Enter Email"  required>
            <input type="text" name="Subject" id="Subject" placeholder="Enter Subject"  required>
            <textarea name="Message" id="Message" cols="30" rows="10" placeholder="Enter Your Message Here ..."  required></textarea>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
<script src="js/menu.js"></script>
</html>