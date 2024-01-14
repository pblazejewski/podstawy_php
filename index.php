<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy php</title>
</head>

<body>
<?php
// $typ = "email";

// $Label_and_Input = 
// "<label for='eo'>Label and input</label>
// <input type=$typ id='eo'/>
// ";

//     if($typ == "email") {
//         echo $Label_and_Input;
//     } else {
//         echo "Nope";
//     }

    $on_off = 1;
    $date_on_off = 0;
    $default = 1;

    if($date_on_off==0){
        $default=0;
    }

    echo 
    "<form action=''>
    <input type='text' placeholder='Tekst'name='text'>
    <input type='email' placeholder='Email' name='email'>
    <input type='date'".($default==1 ? "value='2024-01-14'": ""). ($date_on_off == 1 ? "" : "disabled="). "
    ". ($on_off == 1 ? "<button>eeo</button>" : "<button type=reset>reset</button>"). "
    </form>";


?>

</body>
</html>
