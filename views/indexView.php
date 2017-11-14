<?php

include('views/templates/header.php');

?>

<!-- aside for basic banking operations -->
<aside class="mainAside">
	<form action="" method="POST">
		<div class="row no-gutters">
		<input class="col-4" type="submit" name="deposit" value="Versement">
		<input class="col-4" type="submit" name="withdraw" value="Retrait">
		<input class="col-4" type="submit" name="transfer" value="Virement" 
		<?php if($nbUserAccount<2){echo 'disabled="disabled"';} ?>>
		<input class="col-6" type="submit" name="newAccount" value="Nouveau compte">
		<input class="col-6" type="submit" name="close" value="Fermer un compte">
		</div>
	</form>
</aside>

<!-- main section -->
<section>

	<!-- account's owner -->
	<h3>Compte(s) de M. <?php echo $user->getUserName().' '.$user->getUserFirstName();?> </h3>

	<!-- show existing account -->
	<div class="row no-gutters accounts">
<?php

foreach($accounts as $account)
{
?>
		<div class="col-12 col-md-8 row mx-auto my-2 py-2">
			<p class="offset-1 col-7 col-lg-8"><?php echo $account->getAccountName(); ?></p>
			<p class="offset-6 offset-lg-7 col-5 col-lg-4 border"><?php echo $account->getBalance(); ?> €</p>
		</div>
<?php
}

?>
	</div>
	
</section>

<?php

include('views/templates/footer.php');

?>
