<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery -->
    <title>Pago mediante MercadoPago</title>
</head>

<body>
    <div class="col-xl-6 mx-auto pl-0 pr-0">
        <div class="card m-1 pt-3 pl-3 pr-3">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
                <div class="card-body pb-0">
                    <h5 class="card-title">Pago realizado con exito!</h5>
                    <div class="text-center mt-3 mb-3" >
                        <strong>Payment type: </strong><?php echo $_GET['payment_type']; ?><br>
                        <strong>External reference: </strong><?php echo $_GET['external_reference']; ?><br>
                        <strong>Collection id: </strong><?php echo $_GET['collection_id']; ?><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>