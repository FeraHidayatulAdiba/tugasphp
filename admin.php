<?php

error_reporting(0);
if(isset($_POST['login'])){
   $user =  $_POST['username'];
   $pass =  $_POST['password'];
   
   if($user == 'admin' && $pass == 'mimin'){
        header("location: profil.php");
   } else {
    $salah = " <p>username & password</p> ";
    
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-login">
            <div class="foto">
                <img src="img/ft.png" alt="Foto">
                <h1>SILAHKAN LOGIN!</h1>
                <?php echo $salah; ?>
            </div>
        
            <form action="" method="POST">
                <input type="text" placeholder="username" name="username"><br>
                <input type="password" placeholder="password" name="password"><br>
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>
