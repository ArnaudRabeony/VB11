<?php

if (isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {extract($_POST);
$date = date("d-m-Y");
$heure = date("H:i");

if (!empty($nom) && !empty($email) && !empty($message) ) {
	$message=str_replace("\'", "'", $message);
	$destinataire="karami.pro@gmail.com";
	$sujet="Formulaire de contact - www.voyageauboutdela11.fr";
	$message="Un nouveau message est arrivé à $heure le $date : \n
	Nom : $nom \n
	Email : $email \n
	Objet : $rappel \n
	Message : $message";

			$entete="From: $nom \n Répondre à  : $email";
			mail($destinataire, $sujet, $message, $entete);
		  
		}

		else {
			echo "Vous n'avez pas rempli tous les champs";
		}

}

?>