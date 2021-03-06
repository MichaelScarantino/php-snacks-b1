<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Green or Gray</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Container -->
    <div class="container">
        <!-- Main content -->
        <div class="main-content">
            <!-- Rectangle gray -->
            <div class="rectangle gray">
                <!-- Rectangle content -->
                <div class="rectangle-content">
                    <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
                        <?php $this_theachers = $db['teachers'][$i]; ?>
                        <div> <?php echo $this_theachers['name']; ?> <?php echo $this_theachers['lastname']; ?></div>
                    <?php }; ?>
                </div>
            </div>
            <!-- Rectangle green -->
            <div class="rectangle green">
            <!-- Rectangle content -->
                <div class="rectangle-content">
                    <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
                        <?php $this_theachers = $db['pm'][$i]; ?>
                        <div> <?php echo $this_theachers['name']; ?> <?php echo $this_theachers['lastname']; ?></div>
                    <?php }; ?>
                </div>
            </div>
        </div>

    </div>

</body>
</html>