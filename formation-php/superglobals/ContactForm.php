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
    <input type = "text" name = "name" placeholder="enter your name" >
    <label><b> Email: </b></label>
    <input type = "text" name = "email" placeholder="enter your email">
    <label><b> Message: </b></label>
    <input type = "text" name = "message" placeholder="enter a message">

    <button type="submit">OK</button>
</form>

<div style="margin-top: 20px; line-height: 1.6;">

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(isset($_POST["name"]) && isset(($_POST["email"])) && $_POST["message"]){
            echo $_POST["name"] ."<br>";
            echo $_POST["email"] . "<br>";
            echo $_POST["message"] . "<br><br>";

            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
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