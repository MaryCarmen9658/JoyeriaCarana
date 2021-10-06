<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="" method="POST">
        <center>
        <h3 class="titulo"></h3>
        </center>
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>REGISTER</h2>
        <p>NAME: <br>
        <input type="text" name="name" placeholder="Enter your name" ></p>
        <p>LAST NAME: <br>
        <input type="password" name="lastname" placeholder="Enter your last name"></p>
        <p>ADDRESS: <br>
        <input type="password" name="address" placeholder="Enter your address"></p>
        <p>PHONE: <br>
        <input type="password" name="phone" placeholder="Entre your phone"></p>
        <p id="u">ID CARD: <br>
        <input type="password" name="idcard" placeholder="Enter your Id Card"></p>
        <p class="center"><input type="submit" value="Register"></p>
    </form>
</body>
</html>