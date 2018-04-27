<?php

$file_line = file('counter.txt')[0];
echo $file_line;

$myfile = fopen("counter.txt", "w") or die("Unable to open counter file!");
$txt = ($file_line + 1);
fwrite($myfile, $txt);
fclose($myfile);

?>