<?php

$page_title = "Login - MonSite.com";

// ob_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaine de caracteres.
ob_start();
?>

<div class="fill">
<h1>Login</h1>

<form action="/actions/login.php" method="post">
	<div>
		<label for="email">Email</label>
		<input type="text" id="email" name="email">
	</div>
	<div>
		<label for="password">Mot de passe</label>
		<input type="password" id="password" name="password">
	</div>
	<div>
		<label for="phone">Phone</label>
		<input type="number" id ="phone" name="phone">
	</div>
	<button type="submit">Login</button>
</form>
</div>


<?php

// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();
?>