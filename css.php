<?php
include "vendors/scssphp/scss.inc.php";

$scss = $_REQUEST['scss'];
$html = $_REQUEST['html'];
$compiler = new scssc();
$css = $compiler->compile($scss);
header("Content-type: text/plain");
echo $css;