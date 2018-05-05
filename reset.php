<?php

// Go to this page in your broswer to reset the counter

$myfile = fopen("counter.txt", "w") or die("Unable to open counter file!");
$txt = "0";
fwrite($myfile, $txt);
fclose($myfile);

?>