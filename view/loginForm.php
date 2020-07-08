<?php
session_start();

require_once '../bean/Users/User.php';
require_once '../config/Database.php';
require_once '../models/LoginModel.php';
require_once '../controller/UserController.php';


if (isset($_POST['mail']) && isset($_POST['password'])){
	$userController = new UserController();
	$userController->connectUser();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="newStyle.css" rel="stylesheet" type="text/css">
	
</head>

<body>
<form action="" method="post">
  
    
  <div class="loginbox">
    <img src="img/logo2.png" alt="Avatar" class="avatar">
  

      <label for="mail"><b>E-mail</b></label>
      <input type="text" placeholder="Saisir E-mail" name="mail" required>

      <label for="password"><b>Mot de passe</b></label>
      <input type="password" placeholder="Saisir Mot de passe" name="password" required>

      <button type="submit">connexion</button>
      <span><a href="register_form.php">Inscription</a></span>
      
      
    </form>
</div>

  
  
  
</body>

</html>