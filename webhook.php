<?php
    
    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

    switch($_POST["type"]) {
        case "payment":
            http_response_code(200);
            // $payment = MercadoPago\Payment.find_by_id($_POST["id"]);

            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al payment";
            fwrite($myfile, $txt);
            fclose($myfile);

            break;
        case "plan":
            http_response_code(201);
            // $plan = MercadoPago\Plan.find_by_id($_POST["id"]);

            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al plan";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "subscription":
            http_response_code(202);
            // $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);

            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al subscription";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "invoice":
            http_response_code(203);
            // $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);

            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al invoice";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "test":
            http_response_code(204);
            // $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);

            $myfile = fopen("info.txt", "w");
            $txt = "Entro al test";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
    }
?>