<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="left-side">
        <h1 class="title">Bloemenbuurt <br> Whatsapp</h1>
    </div>
    <div class="right-side">
        <!-- ... (your existing HTML) ... -->
<div class="inlog-container">
    <h1 class="title">right side</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required> <br>
        <input type="password" name="password" placeholder="Password" required><br>
        <a href="aanvragen.php" type="button"> Aanvraag </a> <br>
    </form>
</div>
<!-- ... (your existing HTML) ... -->

        <img src="Flowers.png" alt="Image" class="bottom-right-image">        
    </div>

</body>
</html>
=======
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
>>>>>>> Stashed changes

    * {
        font-family: 'RocaOne-Rg';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: rgb(238, 236, 222);
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

    .bag {
        display: block;
        margin-left: auto;
        margin-right: 35%;
        width: 300px;
        height: 350px;
    }

</style>
<body>
    <strong><h1 class="title">Buurtbag Aanvragen</h1></strong>
    <strong><p class="paragraph">Unieke kans om de Buurtbag aan te vragen</p></strong>
    <p class="paragraph">De Buurtbag zit vol leuke goodies en is gehuld in een trendy tas met een geografische code die trots laat zien dat jullie thuis zijn in Dedemsvaart.<br>
                        Deze tas is niet zomaar een tas; het is een speciale manier om nieuwe gezichten te verwelkomen en de gemeenschapsbanden te versterken. <br><br>
                        Dus, of je nu nieuw bent in de buurt of hier al langere tijd woont, de Buurtbag is er voor jou! <br>
                    Aarzel niet om je Buurtbag aan te vragen en ontdek de verrassingen die op je wachten. Samen maken we de Bloemenbuurt een nog warmere en gezelligere plek!</p>
    <!-- Generate a button with the text "Aanvragen" and link it to a page -->
    <div class="btn-container">
        <a href="aanvragen.php" class="btn">Aanvragen</a>
    </div>
    <div>
        <img class="bag" src="bag.png" alt="Buurtbag">
    </div>
</body>
</html>