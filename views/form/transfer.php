<h4>transfert</h4>

<div>
	<form action="" method="POST">
		<div class="row">
		<article class="col">
			<p>Choisissez le compte à déiter :</p>
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountIdToWithdraw" value="'.$account->getId().'" id="withdraw'.$account->getId().'">
	<label for="withdraw'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>
		</article>
		<article class="col">
			<p>Choisissez le compte à créditer :</p>
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountIdToDeposit" value="'.$account->getId().'" id="deposit'.$account->getId().'">
	<label for="deposit'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>			
		</article>
		</div>
		<p>
			<label for="amount">Combien voulez-vous transférer ? </label>
			<input type="text" name="amount" id="amount">€
		</p>
		<input type="submit" name="validTransfer" value="Confirmer">
	</form>
</div>
