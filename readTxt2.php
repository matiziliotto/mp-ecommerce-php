<?php
    $myfile = fopen("info2.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("info.txt"));
    fclose($myfile);
?>