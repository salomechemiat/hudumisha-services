<?php 

$command = escapeshellcmd('python C:/xampp/htdocs/CFTDC/new.py');
$output = shell_exec($command);
echo $output;

?>