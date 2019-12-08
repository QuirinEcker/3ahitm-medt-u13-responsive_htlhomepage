<?php
/* header theme */
?>
<?php
/* check current page */
$path = '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$filename = substr(basename($_SERVER['PHP_SELF']), 0, strlen(basename($_SERVER['PHP_SELF'])) - 4);
?>
<!doctype html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTL Leonding</title>
        <meta name="description" content="Offline Teaser of HTL Leonding">
		<link rel="stylesheet" type="text/css" href="<?php echo $path ?>/public/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	</head>
	<body id="<?php echo $filename ?>">
		<div id="wrapper"><!-- wrapping content, closed in footer.php -->
			<header class="row">
				<div class="column">
					<a href="index.php"><h1>HTL Leonding</h1></a>
				</div>
			</header>