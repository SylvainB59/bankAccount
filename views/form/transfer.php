<h4>Transfert</h4>

<div class="banking">
	<form action="" method="POST">
		<div class="row">
		<article class="col col-lg-4 mx-auto bg-light selectAccount">
			<p>Choisissez le compte à débiter :</p>
<?php
foreach($accounts as $account)
{
	echo '<p><input type="radio" name="accountIdToWithdraw" value="'.$account->getId().'" id="withdraw'.$account->getId().'">
	<label for="withdraw'.$account->getId().'">'.$account->getAccountName().' / '.$account->getBalance().'€</label></p>';
}
?>
		</article>
		<article class="col col-lg-4 mx-auto bg-light selectAccount">
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
		<input type="submit" name="validTransfer" value="Confirmer" class="px-3">
	</form>
</div>
