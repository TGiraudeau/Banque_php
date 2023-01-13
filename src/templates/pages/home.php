<?php
$page_title = "Accueil - Banque.com";

ob_start();
?>
<div class="fill"><h1>La banque du futur</h1></div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaine de caracteres et l'enregistrer dans la variable
$page_content = ob_get_clean();

// Script de la page home
ob_start();
?>
<script>
</script>
<?php
$page_scripts = ob_get_clean();
