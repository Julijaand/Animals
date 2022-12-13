<?php

function printr($data) {
	echo '<pre>'; print_r($data); echo '</pre>';
}


require_once('config.php');
session_start();
$_SESSION['last_message_id'] = 0;

require_once(__DIR__ . '/classes/animal.php');
require_once(__DIR__ . '/classes/db.php');

// if (isset($_GET['logout'])) {
// 	user::logout();
// }

require_once(__DIR__ .'/components/header.php');
require_once(__DIR__ .'/components/sidebar.php');
require_once(__DIR__ .'/components/content.php');
require_once(__DIR__ .'/components/footer.php');


?>