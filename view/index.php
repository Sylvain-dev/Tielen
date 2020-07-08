<?php
     //session_start();
?>

<!DOCTYPE html PUBLIC>

<head>
    <link type="text/css" rel="stylesheet" href="view/newStyle.css">
    <title>Tielen</title>
</head>

<body>

   
   <h2> Bonjour <?php echo $_SESSION['users']['name'] ?></h2>

     <!-- bouton deconnexion -->
    <form action="server/log_out.php">
		<input type="submit" id="logout"  value="Deconnexion">
	</form>

        <div id="chatbox">
            <ul>
            <?php
                foreach($data['content']['messages'] as $msg){
            ?>
                <li>
                    <div class="dateMsgSent hiddden" idUser="<?= $msg->getId()?>" dateSent="<?= $msg->getDate() ?>"></div>
                    A <?= substr($msg->getDate(), -8) ?> : <?= $msg->getName()?>  à dit : <?= $msg->getContent() ?> 
                </li>
            <?php
                }
            ?>
            </ul>
        </div>
        
        <form name="message" method="POST" action="">
            <input type="text" name="id_user" value=<?= '"' . $_SESSION['users']['id'] . '"';?> hidden>
            <input name="content" placeholder="Ecrivez votre message" type="text" id="content" size="63" required />
            <input name="submit" type="submit" id="envoyer" value="Envoyer" />
        </form>

            </div>
            <script src="js/call_ajax.js"></script>
   
            </body>


</html>