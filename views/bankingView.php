<?php

include('views/templates/header.php');

?>
<aside>
	<form action="" method="POST">
		<input type="submit" name="index" value="<-- Back" class="px-3">
	</form>
</aside>

<section>
<?php

// Load the correspondig form
if(isset($_POST['newAccount']))
{
	include('views/form/newAccount.php');
}
elseif(isset($_POST['deposit']))
{
	include('views/form/deposit.php');
}
elseif(isset($_POST['withdraw']))
{
	include('views/form/withdraw.php');
}
elseif(isset($_POST['transfer']))
{
	include('views/form/transfer.php');
}
elseif(isset($_POST['close']))
{
	include('views/form/closeAccount.php');
}
else
{
	header('location: index.php');
}
?>
</section>
<?php

include('views/templates/footer.php');

?>
