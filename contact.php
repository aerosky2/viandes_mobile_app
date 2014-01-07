<?php
extract($_POST);
if(isset($nom) && !empty($nom)){
	$to= 'cbvmmb@gmail.com';
	$subject='Votre application "le porc dans tous ses états"';
	$message2 = "Nom: ".$nom ;
	mail($to,$subject,$message2);
	echo"ok";}
}?>