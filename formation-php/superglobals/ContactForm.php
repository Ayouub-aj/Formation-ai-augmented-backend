<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $name = "";
    $email = "";
    $message = "";
    $error = "";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email ERROR!<br>";
        }
        else
            echo "Form submitted successfully!<br>";
    }

?>
<?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method = post action = "">
    <label><b> Name: </b></label>
    <br>
    <input type = "text" name = "name" <?php echo $name;?><br><br>
    <label><b> Email: </b></label>
    <br>
    <input type = "text" name = "email" <?php echo $email;?><br><br>
    <label><b> Message: </b></label>
    <br>
    <input type = "text" name = "message" <?php echo $message;?>><br><br>

    <button type="submit">Send message</button>
</form>

</body>
</html>