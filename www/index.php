<?php

require_once __DIR__ . "/../src/init.php";

$page = 'home';
if (isset($_GET['page'])) {
	if (in_array($_GET['page'], $pages)) {
		$page = $_GET['page'];
	}
}

include_once __DIR__ . "/../src/templates/pages/$page.php";
include_once __DIR__ . "/../src/templates/template.php";

$nom ='';
	$stmh = $db->prepare('SELECT user FROM bank WHERE id = 0');
	$stmh->execute();
 