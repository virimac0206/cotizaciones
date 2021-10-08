<!DOCTYPE html>
<html lang="es">

<head>
    <script async
            src="https://www.googletagmanager.com/gtag/js?id=<?php echo Comun::env("ID_SEGUIMIENTO"); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '<?php echo Comun::env("ID_SEGUIMIENTO"); ?>');
    </script>

    
    <title>Cotizador </title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/font-awesome.min.css">
    <style>
        /*Estilos tomados de https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/*/
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
            /*line-height: 60px; !* Vertically center the text there *!*/
            background-color: #f5f5f5;
        }
    </style>
    <script src="<?php echo BASE_URL ?>/js/vue.js"></script>
    <script src="<?php echo BASE_URL ?>/js/cotizaciones.js"></script>
</head>

<body>

