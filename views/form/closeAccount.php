<h4>Fermer un compte</h4>

<div class="banking">
	<form action="" method="POST">

		<p>Quel compte voulez-vous fermer ?</p>
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
		<input type="submit" name="validClose" value="Confirmer" class="px-3">
	</form>
</div>
