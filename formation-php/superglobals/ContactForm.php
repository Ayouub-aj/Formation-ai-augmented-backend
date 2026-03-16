<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method = post action = "" >

    <label><b> Name: </b></label>
    <input type = "text" name = "name" placeholder="enter your name" ><br>
    <label><b> Email: </b></label>
    <input type = "text" name = "email" placeholder="enter your email"><br><br>
    <label><b> Message: </b></label>
    <textarea type = "text" name = "message" placeholder="enter a message"></textarea>

    <button type="submit">OK</button>  
</form>

<div style="margin-top: 20px; line-height: 1.6;">

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        
        if(isset($name) && isset($email) && isset($message)){
            echo $name ."<br>";
            echo $email . "<br>";
            echo $message . "<br><br>";

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<b style='color: red;'> Email ERROR!<b><br>";
        }
            else
                echo "<b style='color: green ;'>Form submitted successfully! <br>";
        }
    }
?>

</div>


</body>
</html>