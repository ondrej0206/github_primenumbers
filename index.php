<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Generátor prvočísel</title>
</head>
<body>    
    <header>
        <h2>Vítejte u generátoru prvočísel.</h2>
        <p>Chcete vědět, jaká prvočísla obsahuje konkrétní číslo?</p><br>
    </header>
    <main>
        <p>Napiště do políčka celé kladné číslo:</p>
        <form action="index.php" method ="post">
            <input type="number" name ="cislo" min = "1" step = "1">
            <input type="submit" name="submit" value = "Odeslat">
        </form> <br>

        <?php
        include "assets/class.php";
        if(isset($_POST["submit"])) {
            $n = $_POST["cislo"];              
            $kalkulacka = new PrimeNumberCalculator();
            $kalkulacka -> getPrimeNr($n);
        }
        ?>

    </main>
 
    <footer></footer>
</body>
</html>