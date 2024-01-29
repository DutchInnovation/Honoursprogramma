<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buurtbag Aanvragen</title>
    <link rel="stylesheet" href="style.css">
    <!-- Link Bootstrap if needed -->
</head>
<style>
    @font-face {
        font-family: 'RocaOne-Rg';
        src: url('RocaOne-Rg.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    * {
        font-family: 'RocaOne-Rg';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: rgb(238, 236, 222);
        background-repeat: no-repeat;
        background-image: url("bikes.png");
    }

    .title, .paragraph {
        color: rgb(21, 102, 105);
        text-align: center;
        font-size: 75px;
        margin-top:150px;
    }

    .paragraph {
        font-size: 20px;
        margin: 20px;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn {
        font-family: 'RocaOne-Rg', sans-serif;
        font-weight: 800;
        font-size: 25px;
        color: #fff;
        background-color: #156669;
        padding: 10px 30px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        text-transform: lowercase;
        transition: 525ms;
    }

    .btn:hover {
        padding: 10px 19px;
        transform: translateY(-5px);
        background-color: #156669;
        color: #ffffff;
    }


</style>
<body>
    <strong><h1 class="title">Bedankt voor je bestelling</h1></strong>
    <strong><p class="paragraph">Bedankt voor het aanvragen van de Buurtbag!</p></strong>
    <p class="paragraph">We waarderen je betrokkenheid bij de bloemenbuurt. <br>Binnenkort ontvang op het opgegeven adres.<br>
    Als je nog vragen hebt, neem dan gerust contact met ons op <strong>info@buurtbag.nl</strong></p>

    <!-- Generate a button with the text "Aanvragen" and link it to a page -->
    
    
</body>
</html>