<?php

include('views/templates/header.php');

?>

<!-- aside for basic banking operations -->
<aside>
	<form action="" method="POST">
		<input type="submit" name="deposit" value="versement">
		<input type="submit" name="withdraw" value="retrait">
		<input type="submit" name="transfer" value="virement">
	</form>
</aside>

<!-- main section -->
<section>
	<!-- open a new account -->
	<form action="" method="POST">
		<input type="submit" name="newAccount" value="Créer un nouveau compte">
	</form>

	<!-- show existing account -->
	<h3>Compte(s) de M <?php echo $user->getUserName().' '.$user->getUserFirstName();?> </h3>
	<div class="row border">
<?php

foreach($accounts as $account)
{
?>
		<div class="col-8 row mx-auto text-center py-2 border">
			<p class="col-6 border"><?php echo $account->getAccountName(); ?></p>
			<p class="col-4"><?php echo $account->getBalance(); ?> €</p>
			<form action="" method="POST">
				<input type="submit" name="delete" value="Fermer">
			</form>
		</div>
<?php
}

?>
	</div>
	
</section>

<?php

include('views/templates/footer.php');

?>
