<?php
ob_start();
var_dump($_POST);
$buf = ob_get_contents();
ob_end_clean();
$fp = fopen('php://stdout', 'r+');
fwrite($fp, $buf);
