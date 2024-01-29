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
/* Font face */
@font-face {
    font-family: 'RocaOne-Rg';
    src: url('RocaOne-Rg.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

/* Reset styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    background-color: rgb(238, 236, 222);
}

/* Title and paragraph styles */
.title {
    font-family: 'RocaOne-Rg';
    font-size: 40px;
    color: rgb(21, 102, 105);
    text-align: center;
    margin-top: 80px;
}

.paragraph {
    font-family: 'RocaOne-Rg';
    font-size: 20px;
    color: rgb(21, 102, 105);
    text-align: center;
    margin: 20px;
}

/* Button styles */
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

/* Bag image styles */
.bag {
    display: block;
    margin: 0 auto;
    width: 300px;
    height: 350px;
}

/* Form container styles */
.form-container {
    background-color: #156669;
    border-radius: 10px;
    padding: 40px;
    width: 80%; /* Adjusted for mobile */
    margin: 0 auto; /* Center the form on all screens */
    text-align: center;
}

/* Form styles */
form {
    display: flex;
    flex-direction: column;
    color: white;
    width: 100%;
}

label {
    margin-bottom: 5px;
}

input, select {
    margin-bottom: 15px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%; /* Full width on mobile */
}

input[type="submit"] {
    background-color: #fff;
    color: #156669;
    cursor: pointer;
}

form label, form input, form select {
    font-size: 20px; /* Adjust the font size as needed */
    font-family: 'RocaOne-Rg', sans-serif;
}

/* Media queries for responsiveness */
@media (min-width: 768px) {
    /* Adjust styles for tablets and larger screens */
    .form-container {
        width: 60%;
    }
    .title {
        font-size: 30px;
    }
}

@media (min-width: 992px) {
    /* Adjust styles for medium desktop screens */
    .form-container {
        width: 40%;
    }
    .title {
        font-size: 40px;
    }
}

@media (min-width: 1200px) {
    /* Adjust styles for large desktop screens */
    .form-container {
        width: 25%;
    }
    .title {
        font-size: 50px;
    }
}

/* ---------------------------------------------------------- */




</style>
<body>
    <strong><h1 class="title">Aanvraagpagina voor Buurtbag</h1></strong>
    <p class="paragraph">Welkom bij de Buurtbag-aanvraag voor de Bloemenbuurt!<br> We zijn verheugd dat je geïnteresseerd bent om deze speciale tas vol leuke goodies te ontvangen.<br>
    Vul alsjeblieft het onderstaande formulier in, zodat we ervoor kunnen zorgen dat de Buurtbag op de juiste plek belandt.</p>

    <div class="row"> <!-- Add this Bootstrap row -->
        <div class="col-md-6 offset-md-3"> <!-- Adjust the column size and offset as needed -->
            <div class="form-container">
            <form method="post" action="done.php">
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Adres:</label>
    <input type="text" id="address" name="address" required>

    <label for="email">E-mailadres:</label>
    <input type="email" id="email" name="email" required>

    <label for="membership">Ben je nieuw in de buurt of woon je hier al een tijdje?</label>
    <select id="membership" name="membership">
        <option value="yes">Ja Ik ben nieuw in de buurt</option>
        <option value="no">Nee Ik woon hier al een tijdje</option>
    </select>

    <input type="submit" value="Submit">
</form>

    </div>
        </div>
    </div>

    <div>
        <img class="bag" src="Flowers.png" alt="Flowers">
    </div>
</body>
</html>
