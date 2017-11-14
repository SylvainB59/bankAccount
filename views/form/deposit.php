<h4>Dépot</h4>

<div class="banking">
	<form action="" method="POST">

		<p>Choisissez le compte à créditer :</p>
		<div class="row">
			<article class="col-12 col-md-8 col-lg-6 mx-auto bg-light selectAccount">
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountId" value="'.$account->getId().'" id="'.$account->getId().'">
	<label for="'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>
			</article>
		</div>
		<p>
			<label for="amount">Combien avez-vous crédité ? </label>
			<input type="text" name="amount" id="amount">€
		</p>
		<input type="submit" name="validDeposit" value="Confirmer" class="px-3">
	</form>
</div>
