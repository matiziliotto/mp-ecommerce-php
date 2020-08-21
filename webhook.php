<?php
    http_response_code(200);
    
    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);

            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al payment";
            fwrite($myfile, $txt);
            fclose($myfile);

            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al plan";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al subscription";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            $myfile = fopen("informacionDePagoExitoso.txt", "w");
            $txt = "Entro al invoice";
            fwrite($myfile, $txt);
            fclose($myfile);
            break;
        case "test":
                $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                $myfile = fopen("informacionDePagoExitoso.txt", "w");
                $txt = "Entro al test";
                fwrite($myfile, $txt);
                fclose($myfile);
                break;
    }

?>