<?php
include "vendors/scssphp/scss.inc.php";

$scss = $_REQUEST['scss'];
$html = $_REQUEST['html'];
$compiler = new scssc();
$css = $compiler->compile($scss);
header("Content-type: text/html");
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Result</title>
	<style type="text/css"><?php echo $css ?></style>
</head>
<body>
<?php echo $html; ?>
</body>
</html>
