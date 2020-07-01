<?php

namespace Website\Controllers;

/**
 * Class EmailController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class EmailController {

	public function sendTestEmail(  ){

		$mailer = getSwiftMailer();

		$message = createEmailMessage('Test@email.com', 'Dit is een test', 'De Tester', '19959@ma-web.nl');

		$message->setBody('Dit is de inhoud van mijn test bericht');

		$mailer->send($message);
	}
	public function sendEmail(){
		$naam = $_POST['fullname'];
		$email = $_POST['email'];
		$onderwerp = $_POST['subject'];
		$bericht = $_POST['message'];

		$ontvanger = "fabian.et.je@hotmail.com";

		// echo $naam.' '.$email.' '.$onderwerp.' '.$bericht; 
		contactMe($naam, $email, $onderwerp, $bericht, $ontvanger);
	}

}

