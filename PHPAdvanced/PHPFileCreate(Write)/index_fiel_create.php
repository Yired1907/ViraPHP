<?php
// w hoặc a
$myfile = fopen("text.txt", "a") or die("Unable to open file!");
$txt = "Quí Nguyễn\n";
fwrite($myfile, $txt);
$txt = "Yiredd\n";
fwrite($myfile, $txt);
fclose($myfile);
