<?php
    $payment_id = $_GET['collection_id'];
    $collection_status = $_GET['collection_status'];
    $external_reference = $_GET['external_reference'];

    echo $payment_id."<br>".$collection_status."<br>".$external_reference;
?>