<?php

include('views/templates/header.php');

?>
<form action="" method="POST">
	<input type="submit" name="index" value="<-- Back">
</form>
<?php


if(isset($_POST['newAccount']))
{
	echo 'nouveau compte';
}
elseif(isset($_POST['deposit']))
{
	echo 'dépot';
}
elseif(isset($_POST['withdraw']))
{
	echo 'retrait';
}
elseif(isset($_POST['transfer']))
{
	echo 'virement';
}
else
{
	header('location: index.php');
}


include('views/templates/footer.php');

?>
