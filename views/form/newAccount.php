<h4>nouveau compte</h4>

<form action="" method="POST">
	<p>
		<label for="accountName">Intitulé du compte</label>
		<input type="text" name="accountName" id="accountName">
	</p>
	<p>
		<label for="balance">Quel montant versez-vous pour l'ouverture</label>
		<input type="number" name="balance" id="balance" min="50" max="250" placeholder="50">
		<span>( min 50€ / maxi 250€ )</span>
	</p>
	<input type="text" name="userId" value="<?php echo $_SESSION['userId']; ?>">
	<input type="submit" name="validNewAccount">
</form>
