<?php
$python = "C:\Anaconda\python.exe";
$pyscript = "a.py";
$cmd = "$python $pyscript amar";
exec("$cmd", $output);
print_r($output);
?>