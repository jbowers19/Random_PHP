<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Contact Me</h1>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])) {

        $body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";

        $body = wordwrap($body, 70);

        mail('jeff.bowers48@gmail.com', 'Contact Form Submission', $body, "From: {$_POST['email']}");

        echo '<p><em>Thank You for contacting me, i will reply at some point</em></p>';

        $_POST = [];
        
    } else {
        echo '<p style="font-weight: bold; color: #c00">Please fill out the form completely.</p>';
    }
}

?>

<form action="contact.php" method="post">
    <p>Name: <input type="text" name="name" size="30" maxlength="60" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></p>
    <p>Email Address: <input type="email" name="name" size="30" maxlength="80" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>"></p>
    <p>Comments: <textarea name="comments" rows="5" col="30"><?php if(isset($_POST['comments'])) echo $_POST['comments']; ?></textarea></p>
    <p><input type="submit" name="submit" value="Send"></p>

</form>
</body>
</html>