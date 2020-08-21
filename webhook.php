<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $myfile = fopen("info1.txt", "w") or die("Unable to open file!");
        /*
        $data = array(
            "id" => $_POST['id'],
            "type" => $_POST['type']
        );
        $txt = json_encode($data);
        */
        $txt = file_get_contents('php://input');
        fwrite($myfile, $txt);
        
        fclose($myfile);
        
        $myfile2 = fopen("info2.txt", "w") or die("Unable to open file!");
        $txt2 = "Entro al POST y paso despues de escribir el primer archivo.";
        fwrite($myfile2, $txt2);
        fclose($myfile2);
    }
    else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $myfile = fopen("info2.txt", "w") or die("Unable to open file!");
        $txt = json_encode($_GET);
        fwrite($myfile, $txt);
        fclose($myfile);
    }

    $myfile = fopen("info.txt", "w") or die("Unable to open file!");
    $txt = json_encode($_REQUEST);
    fwrite($myfile, $txt);
    fclose($myfile);

    http_response_code(200);
    
    /*
    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
    MercadoPago\SDK::setPublicKey("APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626");
    MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    switch($_POST["type"]) {
        case "payment":
            $payment = new MercadoPago\Payment();
            $data = $payment->find_by_id($_POST["id"]);

            break;
        case "plan":
            $plan = new MercadoPago\Plan();
            $data = $plan->find_by_id($_POST["id"]);

            break;
        case "subscription":
            $subscription = new MercadoPago\Subscription();
            $data = $subscription->find_by_id($_POST["id"]);

            break;
        case "invoice":
            $invoice = new MercadoPago\Invoice();
            $data = $invoice->find_by_id($_POST["id"]);

            break;
    }
    */
?>
