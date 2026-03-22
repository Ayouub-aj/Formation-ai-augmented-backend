<?php
session_start();

//step tracking

    if(isset($_GET['step'])){
        $step = $_GET['step'];
    }
    else
        $step = 1;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($step == 1){
            $_SESSION['username'] = $_POST['username'];
            header("location: ?step=2");
            exit();
        }
        if($step == 2){
            $_SESSION['language'] = $_POST['language'];
            header("location: ?step=3");
            exit();
        }
    }
?>

<!-- //rendering html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>multi-step form</title>
</head>
<body>

<?php if($step == 1){ ?>

    <h2>Page1: what is your username? </h2>
    <form method="post" action="?step=1">
        <input type="text" name = "username" placeholder="enter your username!">
        <button type="submit">Next</button>
    </form>

<?php } else if($step == 2){ ?>

    <h2>Page2: what is your favorite language?</h2>
    <form method="post" action="?step=2">
        <input type="text" name = "language" placeholder="python/c/php">
        <button type="submit">Next</button>
    </form>

<?php } else if($step == 3){
    if($_SESSION['username'] == "" || $_SESSION['language'] == ""){
        header("location: ?step=1");
        exit();    
    }

    $user = $_SESSION['username'];
    $language = $_SESSION['language'];

    echo "<h2>Hello " . $user . " you like: " . $language . "</h2>";
    session_destroy();
?>
    <a href="?step=1">Start again!</a>
    

<?php } ?>

</body>
</html>