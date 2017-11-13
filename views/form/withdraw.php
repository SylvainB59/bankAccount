<h4>retrait</h4>

<div>
	<form action="" method="POST">

		<p>Choisissez le compte à débiter :</p>
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountId" value="'.$account->getId().'" id="'.$account->getId().'">
	<label for="'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>
		<p>
			<label for="amount">Quelle somme souhaitez-vous retirer ? </label>
			<input type="text" name="amount" id="amount">€
		</p>
		<input type="submit" name="validWithdraw" value="Confirmer">
	</form>
</div>
