<?php
    $myfile = fopen("info1.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("info1.txt"));
    fclose($myfile);
?>