<?php
    echo "holaaa probando 1";
    $myfile = fopen("info.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("info.txt"));
    fclose($myfile);
?>