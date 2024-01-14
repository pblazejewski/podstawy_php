<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Podstawy php</title>
    <script defer src="script.js"></script>
</head>
<!-- Inkrementacja -->


<body>
<?php 
    echo 
    "<form>
    <input type='text' placeholder='Imie'name='text' class='imie-input'>
    <div class='ogolny-div'>
        <div class='pierwszy-div'>
            <input type='email' placeholder='Email' name='email' id='email'>
             <input type='date' name='date' id='date'>
        </div>
        <div class='drugi-div'>
            <div class='email'>
                <input type='checkbox' class='checkbox' id='disabled_email'><label>Nie mam Email</label>
            </div>
            <div class='data'>
            <input type='radio' class='radio' id='current_date'><label>Dzisiejsza</label>
            </div>
        </div>
    </div>
    <div class='trzeci-div'>
        <button type='submit'>Resetuj</button>
        <button type='reset'>Wyślij</button>
    </div>
    </form>";
?>


</body>
</html>