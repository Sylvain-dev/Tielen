<?php
require_once '../bean/Users/User.php';
require_once '../config/Database.php';
require_once '../models/LoginModel.php';
require_once '../controller/UserController.php';

if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['reponse'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $reponse = $_POST['reponse'];

    $LoginController = new LoginModel();
    $LoginController->register($name, $mail, $password, $reponse);
}
?>


<!DOCTYPE html>
<html lang="fr">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,600,600i,700,700i&display=swap" rel="stylesheet">
  <style>
      body{
        background-image: url("img/bg-01.jpg");
        background-size: cover;

          }
       .retour{
        color: black;

       }   
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

​
</head>
​
​
<body>
​
   ​<strong> <a href="loginForm.php" class="retour">Retour Page de Login </a></strong>
    <h3 class="text-center m-5 text-dark ">Inscription</h3>
​
    <form method="post" action="">
        <div class="form-row d-justify-content-center">
​
            <div class="form-group col-md-6 px-5">
​
                <label for="Nom" class="bmd-label-floating">Nom</label>
                <input type="text" class="form-control" name="name" id="Nom"  placeholder="Nom" required>
​
            </div>
        </div>
        <div class="form-row ">
            <div class="form-group col-md-6 px-5 ">
                <label for="Email">E-mail</label>
                <input type="email" class="form-control " name="mail" id="Email" placeholder="E-mail" required>
            </div>
            <div class="form-group col-md-6 px-5 ">
               <label for="pet-select">Question Secrète</label>
               <select  class="form-control " name="question" id="question"  required>
                   <option value="Quelle est votre ville favorite ?">Quelle est votre ville favorite ?</option>
                   <option value="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                   <option value="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                   <option value="Quelle était le nom de votre école primaire ?">Quelle était le nom de votre école primaire ?</option>
                   <option value="Quel est le nom de votre premier animal domestique ?"> Quel est le nom de votre premier animal domestique ?</option>
                   <option value="Quel est le nom de votre jouet d’enfant préféré ?">Quel est le nom de votre jouet d’enfant préféré ?</option>
                   <option value="Quel est le nom de jeune fille de votre grand-mère ?">Quel est le nom de jeune fille de votre grand-mère ?</option>
               <input type="text" class="form-control " name="reponse" id="Reponse" placeholder="Réponse" required>
               </select>
           </div>
        </div>
        <div class="form-row d-justify-content-center">
            <div class="form-group col-md-6 px-5 ">
                <label for="Password1">Mots de passe</label>
                <input type="password" class="form-control" name="password" id="Password" placeholder="Mots de passe" required>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <button class="btn m-4 align center bg-dark text-white " type="submit" name="envoie">Inscription</button>
        </div>
    </form>
​

​
</body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>


​
</html>
