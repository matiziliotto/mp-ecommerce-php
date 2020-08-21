<?php
    $myfile = fopen("informacionDePagoExitoso.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("informacionDePagoExitoso.txt"));
    fclose($myfile);
?>