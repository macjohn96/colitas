<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Colitas</title>
        <meta name="description" content="Pagina oficial de Colitas, web para adopcion de animales">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
		    <?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'header.css')) ?>
	    </style>
        <link rel="shorcut icon" type="image/png" href="/logo.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>
    <body>
        <div class="header">
            <img alt="logotipo Colitas" src="<?php echo (__DIR__ . DIRECTORY_SEPARATOR . 'logo.png') ?>">
            <div class="titulo">
                <h1>Colitas</h1>
                <span>Tu app de adopción de animales</span>
            </div>
        </div>