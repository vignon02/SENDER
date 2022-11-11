<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SENDER SMS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/style.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark">
<header class="text-center">
    <h1>BULK SENDER SMS </h1>
</header>

<form action="" method="post" class="container col-3 text-center text-white">
    <label for="num">Numero du destinataire</label>
    <input type="text" name="" id="">
    <label for="">Nombre d'envoie</label>
    <input type="number" id="" name="">
    <label for="">Message a envoyé</label>
    <textarea name="" id="" cols="30" rows="5"></textarea>
    <input type="submit" value="Envoyer">
</form>
</div>
</body>
<?php 
if (isset($_POST['submit'])) {
    # code...
}
?>

</html>