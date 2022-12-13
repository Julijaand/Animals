<main id="main_content">
	<?php
		$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
		$get = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
		if ($url == '/gyvunu_prieglauda/') {
			require_once(__DIR__ . '/pages/home.php');
		} elseif ($url == '/gyvunu_prieglauda/animal/') {
			require_once(__DIR__ . '/gyvunu_prieglauda/pages/animal.php');
		}else {
			die(header('Location:/gyvunu_prieglauda/'));
		}
	?>
</main>