<h4>Retrait</h4>
<?php
if(isset($_POST['account']))
{
	$account = $_POST['account'];
	echo 'Il vous rest'.$account->getBalance().' € sur votre compte';
}
?>
<div class="banking">
	<form action="" method="POST">

		<p>Choisissez le compte à débiter :</p>
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
			<label for="amount">Quelle somme souhaitez-vous retirer ? </label>
			<input type="text" name="amount" id="amount">€
		</p>
		<input type="submit" name="validWithdraw" value="Confirmer" class="px-3">
	</form>
</div>
