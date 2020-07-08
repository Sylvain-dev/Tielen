

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="adminStyle.css">

<?php
include_once '../config/Database.php';
include_once '../models/AdminModel.php';

$AdminModel = new AdminModel();

$messages = $AdminModel->getAllMessages();


?>
<h1>Administration des messages</h1>
<p><strong> <a href="indexUsers.php">Gérer Utilisateurs  </a></strong> </p>
<p><strong> <a href="../view/loginform.php">Retour page d'acceuil </a></strong> </p>
<table class="table table-bordered table-hover table-sm">
    <thead class="thead bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Auteur</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($messages as $msg){ ?>
    <tr>
        <td><?= $msg['id'] ?></td>
        <td><?= $msg['userName'] ?></td>
        <td><?= $msg['message'] ?></td>
        <td><a href="delete.php">Effacer Message </td>     
    <?php
}


?>
</tbody>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</table>