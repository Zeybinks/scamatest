<?php
session_start();

use Phppot\Captcha;
use Phppot\Contact;

require_once "isk.php";
$captcha = new Captcha();
if (count($_POST) > 0) {
    $userCaptcha = filter_var($_POST["captcha_code"], FILTER_SANITIZE_STRING);
    $isValidCaptcha = $captcha->validateCaptcha($userCaptcha);
    if ($isValidCaptcha) {
        
        $_SESSION['authorized'] = true;
        
        header('Location: ../index.php');
        
    } else {
        $error_message = "Incorrect";
    }
}

if($_SESSION['suspect'] == true){
?>
<html>
<head>
     <meta name="viewport" content="width=device-width"/>
<title>Vérification anti robot</title>
<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
</head>
<center><body>
    <h2>Vérification anti robot</h2>
    <form name="frmContact" method="post" action="">
       
                <td>Code : <span id="error-captcha"
                    class="demo-error"><?php if(isset($error_message)) { echo $error_message; } ?></span>
                    <input name="captcha_code" type="text"
                    class="demo-input captcha-input">
                </td>
                <td><br /> <input type="submit" name="submit"
                    value="Submit" class="demo-btn"></td>
            </tr>
        </table>
<?php if(isset($success_message)) { ?>
<div class="demo-success"><?php echo $success_message; ?></div>
<?php } ?>
</form>
</body></center>
</html>
<?php

}
else{
   header("HTTP/1.0 404 Not Found");
  die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}

?>