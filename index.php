<?php

if(isset($_POST['deposit']) OR isset($_POST['withdraw']) OR isset($_POST['transfer']))
{
	include('controlleurs/banking.php');
}
else
{
	include('controlleurs/index.php');
}


?>
