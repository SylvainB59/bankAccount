<?php

include('views/templates/header.php');

?>

<!-- aside for basic banking operations -->
<aside>
	<form action="" method="POST">
		<div class="row">
		<input class="col-4 col-lg-3" type="submit" name="deposit" value="Versement">
		<input class="col-4 col-lg-3" type="submit" name="withdraw" value="Retrait">
		<input class="col-4 col-lg-3" type="submit" name="transfer" value="Virement" 
		<?php 
		if($nbUserAccount<2){echo 'disabled="disabled"';} ?>>
		<input class="col-6 col-md-4 col-lg-3" type="submit" name="close" value="Fermer un compte">
		</div>
	</form>
</aside>

<!-- main section -->
<section>
	<!-- open a new account -->
	<form action="" method="POST">
		<input type="submit" name="newAccount" value="Créer un nouveau compte">
	</form>

	<!-- account's owner -->
	<h3>Compte(s) de M. <?php echo $user->getUserName().' '.$user->getUserFirstName();?> </h3>

	<!-- show existing account -->
	<div class="row">
<?php

foreach($accounts as $account)
{
?>
		<div class="col-8 row mx-auto my-2 py-2 bg-light">
			<p class="col-8 col-lg-9"><?php echo $account->getAccountName(); ?></p>
			<p class="col-4 col-lg-3 border" style="background-color: white;"><?php echo $account->getBalance(); ?> €</p>
		</div>
<?php
}

?>
	</div>
	
</section>

<?php

include('views/templates/footer.php');

?>
