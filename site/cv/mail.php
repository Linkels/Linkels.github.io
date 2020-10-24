<?php
	$destinataire = 'm.chaumoitre@simplon-charleville.fr';

	$expediteur = $_POST['email'];

	$objet = $_POST['subject'];

	$headers  = 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n";
	$headers .= 'To: '.$destinataire."\n";
	$headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n";

	$message = 	'<div style="width: 100%; text-align: center; font-weight: bold">  '.$_POST['name'].'!<br>
					'.$_POST['message'].'</div>';

 	if(mail($destinataire, $objet, $message, $headers))
	{
		echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
	}
	else
	{
		echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
	}
	header('Location: monformulaire.php');
?>
