<?php
if (isset($_GET['kies'])) {
	if (is_numeric($_GET['kies'])) {
		if ($_GET['kies'] > 0) {
			if ($_GET['kies'] < 4) {
				if (!isset($_COOKIE['chosen'])) {
					setcookie("chosen", $_GET['kies'], time()+3600);
				} else {
					setcookie("chosen",$_GET['kies']);
				}
			}
		}
	}
	header("location: cart.php");
	die();
}
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
		<br /><br />
		<form method="get">
			<input type="number" name="kies" min="1" max="3" placeholder="kies uw product om te te voegen"><br />
			<input type="submit" value="Add">
		</form>
		<br /><br /><br />
		<h1>Jouw lijstje:</h1>
		<?php
		if (isset($_COOKIE['chosen'])) {
			$aa = $_COOKIE['chosen'];
			if ($aa == 1) {
				echo "Skateboard<br />";
			}
			if ($aa == 2) {
				echo "Basketbal<br />";
			}
			if ($aa == 3) {
				echo "Skeelers<br />";
			}
		}
		?>
    </body>
</html>