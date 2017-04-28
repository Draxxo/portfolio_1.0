<?php
$envoi = 0;
if(isset($_POST['nom']) && isset($_POST['objet']) && isset($_POST['email']) && isset($_POST['message'])){
	if(!empty($_POST['nom']) && !empty($_POST['objet']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$destinataire = "prevost.alexis@hotmail.fr";
		$sujet = $_POST['objet'];
		$message = "Nom & prénom : " .$_POST['nom']. ",\nEmail : ".$_POST['email']."\n\n".$_POST['message']. "\r\n";
		$entete = 	'From: '.$destinataire ."\r\n".
        			'Reply-To: '.$_POST['email'] ."\r\n".
					'X-Mailer: PHP/'.phpversion();
		
		if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
			$envoi = 2;
		} else {
			if (mail($destinataire,$sujet,$message,$entete)){
				$envoi = 1;   
			}
		}
	} 
}
header('Location: index.php?envoi='.$envoi.'#contact');
?>