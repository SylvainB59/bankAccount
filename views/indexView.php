<?php

include('views/templates/header.php');

?>

<!-- aside for basic banking operations -->
<aside>
	<form action="" method="POST">
		<input type="submit" name="deposit" value="versement">
		<input type="submit" name="withdraw" value="retrait">
		<input type="submit" name="transfer" value="virement">
	</form>
</aside>

<!-- main section -->
<section>
	<!-- open a new account -->
	<form action="" method="POST">
		<input type="submit" name="" value="Créer un nouveau compte">
	</form>

	<!-- show existing account -->
<?php

// foreach($accounts as $accoutn)
// {
	
// }

?>
	
</section>

<?php

include('views/templates/footer.php');

?>
