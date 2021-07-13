<?php
 require_once('config.php');

if(isset($_SESSION['access_token']))
  {
      header('Location: details.php');
      exit();
  }

 $redirect = "YOUR URL/callback.php";
 $data = ['email'];
 $fullurl = $handler->getLoginUrl($redirect,$data);
 
 
 ?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Login</title>
    <link rel="stylesheet" href="style.css">
</head>


<body class="bgimg">

  <div class='social' align='center'>
      
      <button onclick="myFunction()">Login With Facebook</button>
        
  </div>


<script>
  function myFunction() 
    {
        window.location="<?php echo $fullurl;?>";
    }
</script>


</body>
</html>

