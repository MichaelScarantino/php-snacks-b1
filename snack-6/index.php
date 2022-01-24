<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $students = [
        [
            'name' => 'Michael',
            'lastname' => 'Scarantino',
            'vote' => [6,8,10,5]
        ],
        [
            'name' => 'Paolo',
            'lastname' => 'Sicari',
            'vote' => [9,4,10,7]
        ],
        [
            'name' => 'Susanna',
            'lastname' => 'Del Monte',
            'vote' => [10,10,8,9]
        ],
        [
            'name' => 'Francesca',
            'lastname' => 'Rosano',
            'vote' => [4,6,4,8]
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Array</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php for($i = 0; $i < count($students); $i++) { ?>
        <?php $this_student = $students[$i]; ?>
        <div><?php echo $this_student['name']; ?> <?php echo $this_student['lastname']; ?> Voto medio: <?php $average = array_sum($this_student['vote']) / count($this_student['vote']); echo $average; ?> </div>
    <?php }; ?>
</body>
</html>