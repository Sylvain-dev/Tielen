<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="adminStyle.css">


<?php
include_once '../config/Database.php';
include_once '../models/AdminModel.php';

$AdminModel = new AdminModel();

$messages = $AdminModel->getAllUsers();

?>

<h1>Administration des utilisateurs</h1>
<p><strong> <a class="gererMessages" href="index.php">Gérer les messages</strong> </p>
<p><strong> <a href="../view/loginform.php">Retour page d'acceuil</strong> </p>

<table class="table table-bordered table-hover table-sm">
    <thead class="thead bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">E-mail</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    
    
    <?php
foreach($messages as $msg){ ?>
    <tr>
        <td><?= $msg['id'] ?></td>
        <td><?= $msg['userName'] ?></td>
        <td><?= $msg['mail'] ?></td>
        <td><a href="">Effacer utilisateurs </td>     
    <?php
}

?>
</tbody>