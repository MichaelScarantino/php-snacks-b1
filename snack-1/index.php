<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
        $basket_match = [
            [
                'home_team_name' => 'Boston Celtics',
                'away_team_name' => 'Brooklyn Nets',
                'home_team_points' => 91,
                'away_team_points' => 112
            ],
            [
                'home_team_name' => 'New York Knicks',
                'away_team_name' => 'Philadelphia 76ers',
                'home_team_points' => 87,
                'away_team_points' => 93
            ],
            [
                'home_team_name' => 'Toronto Raptors',
                'away_team_name' => 'Chicago Bulls',
                'home_team_points' => 103,
                'away_team_points' => 96
            ],
            [
                'home_team_name' => 'Cleveland Cavaliers',
                'away_team_name' => 'Detroit Pistons',
                'home_team_points' => 94,
                'away_team_points' => 61
            ],
            [
                'home_team_name' => 'Milwaukee Bucks',
                'away_team_name' => 'Golden State Warriors',
                'home_team_points' => 101,
                'away_team_points' => 99
            ]
        ];    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Match</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php for( $i = 0; $i < count($basket_match); $i++ ) { ?>
        <?php $this_basket_match = $basket_match[$i]; ?>
        <div>
            <?php echo $this_basket_match['home_team_name']; ?> - <?php echo $this_basket_match['away_team_name']; ?> | <?php echo $this_basket_match['home_team_points']; ?>-<?php echo $this_basket_match['away_team_points']; ?>
        </div>
    <?php }; ?>
</body>
</html>