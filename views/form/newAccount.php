<h4>nouveau compte</h4>

<div class="banking">
	<form action="" method="POST">
		<div class="row">
			<article class="col-12 col-md-8 col-lg-6 mx-auto bg-light selectAccount">
				<p>
					<label for="accountName">Intitulé du compte</label>
					<input type="text" name="accountName" id="accountName">
				</p>
				<p>
					<label for="balance">Quel montant versez-vous pour l'ouverture</label>
					<input type="number" name="balance" id="balance" min="50" max="250" placeholder="50">
					<span>( min 50€ / maxi 250€ )</span>
				</p>
				<input type="hidden" name="userId" value="<?php echo $_SESSION['userId']; ?>">
				<input type="submit" name="validNewAccount">
			</article>
		</div>
	</form>
</div>
