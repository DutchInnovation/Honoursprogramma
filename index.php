<!-- write a page template in html -->
<!DOCTYPE html>
<html>
<head>
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

