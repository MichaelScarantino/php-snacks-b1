<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $name = $_GET['name'];
    $mail = $_GET['email'];
    $age = $_GET['age'];

    // Verifica la lunghezza della stringa $name
    $name_len = strlen($name);
    // Verifica se $age è un numero
    $age_is_num = is_numeric($age);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php if(strpos($mail, '@') === false || strpos($mail, '.') === false || $name_len < 3 || !$age_is_num) {?>
        <div>Accesso negato</div>
    <?php } else { ?>
        <div>Accesso riuscito</div>
    <?php }; ?>

</body>
</html>