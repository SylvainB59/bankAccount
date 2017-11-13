<h4>dépot</h4>

<div>
	<form action="" method="POST">

		<p>Choisissez le compte à créditer :</p>
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountId" value="'.$account->getId().'" id="'.$account->getId().'">
	<label for="'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>
		<p>
			<label for="amount">Combien avez-vous crédité ? </label>
			<input type="text" name="amount" id="amount">€
		</p>
		<input type="submit" name="validDeposit" value="Confirmer">
	</form>
</div>
