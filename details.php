<?php
session_start();

if(!isset($_SESSION['access_token'])){
    header('Location: login.php');
    exit();
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class='bgimg'>
    <div class='social' align='center'>

        <img src="<?php echo $_SESSION['userData']['picture']['url'];?>" height="<?php echo $_SESSION['userData']['picture']['height'];?>" width="<?php echo $_SESSION['userData']['picture']['width'];?>"><br>

        <h3 style="color:white;">Name : <?php echo $_SESSION['userData']['name'];?> </h3>

        <h3 style="color:white;">Email : <?php echo $_SESSION['userData']['email'];?> </h3>
        

            <form action="" method="POST">
                <input type="submit" name="logout" value="Logout" class="button">
            </form>
    </div>

</body>
</html>









