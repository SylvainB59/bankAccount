<p>nouveau compte</p>

<form action="" method="POST">
	<p>
		<label for="name">Intitulé du compte</label>
		<input type="text" name="name" id="name">
	</p>
	<p>
		<label for="balance">Quel montant versez-vous pour l'ouverture</label>
		<input type="number" name="balance" id="balance" min="50" max="250" placeholder="50">
		<span>( min 50€ / maxi 250€ )</span>
	</p>
	<input type="submit" name="validNewAccount">
</form>
