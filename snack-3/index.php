<!-- ## Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Numbers Array</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        $max = 100;
        $min = 1;
        $max_n_array = 15;
        $random_array = [];

        while( count($random_array) < $max_n_array ) {
            $random_number = rand($min, $max);
            if( !in_array( $random_number, $random_array ) ) {
                $random_array[] = $random_number;
            }
        }

        var_dump($random_array);
    ?>

</body>
</html>