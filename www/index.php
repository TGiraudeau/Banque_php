<?php

require_once __DIR__ . "/../src/init.php";

$page = 'home';
if (isset($_GET['page'])) {
	if (in_array($_GET['page'], $pages)) {
		$page = $_GET['page'];
	}
}
//oui
include_once __DIR__ . "/../src/templates/pages/$page.php";
include_once __DIR__ . "/../src/templates/template.php";
// include_once __DIR__ . "/../src/templates/partials/head.php";
// echo $page_conten t;
// include_once __DIR__ . "/../src/templates/partials/footer.php";
