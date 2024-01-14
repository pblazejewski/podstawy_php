<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy php</title>
</head>
<!-- Inkrementacja -->


<body>
<?php


    $on_off = 1;
    $date_on_off = 0;
    $default = 1;

    if($date_on_off==0){
        $default=0;
    }

 
    echo 
    "<form>
    <input type='text' placeholder='Imie'name='text'>
    <div>
    <input type='email' placeholder='Email' name='email'>
    <input type='date' name='date'>
    <input type='radio'>
    <input type='checkbox'>
    </div>
    <button type='submit'>Resetuj</button>
    <button type='reset'>Wyślij</button>

    </form>";
?>

</body>
</html>