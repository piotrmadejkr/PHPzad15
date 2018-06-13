<?php include('settings.php'); ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<style type="text/css">
body {
    display: flex;
    justify-content: center;
    align-items: center;
}
.kwadrat {
    border: 2px black solid;
    width: 230px;
    height: 230px;
    position: relative;
    top: 200px;
    right: 250px;
    border-radius: <?php echo $stopnie; ?>px;
}
.yellow {
    background: yellow;
}
.red {
    background: red;
}
.green {
    background: green;
}
.blue {
    background: blue;
}
.specjalny {
    background: purple;
}
 </style>
    <title>kąty i kolory</title>
</head>
<body>
<form method="post">
<input type="number" name="stopnie" placeholder="podaj stopnie kątów" required>
<input type="number" name="iloscKwadratow" placeholder="podaj ilość kwadratów" required>
<input type="number" name="specjalny" placeholder="wybierz kwadrat specjalny" required>
<br>podaj kolor kwadratu
<select name="kolor">
    <option value="yellow">zółty</option>
    <option value="red">czerwony</option>
    <option value="green">zielony</option>
    <option value="blue">niebieski</option>
</select>
<input type="submit">
</form>
<!-- <div class="kwadrat <?php echo $kolor;  ?>">
</div>  tutaj jest tylko jeden -->

<?php
// ----------------------- tutaj wyswietlamy kwadrat razy kilka
    

// ------------------------- dodajemy opcje zaznaczania konkretnego kwadratu


bierzKwadrata($kolor, $iloscKwadratow, $specjalny);

?>





</body>   
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>





