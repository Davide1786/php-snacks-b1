<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Sneck 1 -->
    <div class="sneckUno">
        <?php 
        $team = [
            [
                "squadraCasa" => 'Olimpia Milano',
                "squadraOspite" => 'Cantù',
                "ptCasa" => 80,
                "ptOspite" => 60,
            ],
            [
                "squadraCasa" => 'Dinamo Sassari',
                "squadraOspite" => 'Reggiana',
                "ptCasa" => 80,
                "ptOspite" => 80,
            ],
            [
                "squadraCasa" => 'Reyer Venezia',
                "squadraOspite" => 'N.B. Brindisi',
                "ptCasa" => 50,
                "ptOspite" => 60,
            ],
            [
                "squadraCasa" => 'Fortitudo Bologna',
                "squadraOspite" => 'Trieste',
                "ptCasa" => 100,
                "ptOspite" => 60,
            ],
        ];
        // var_dump($team);
        for ($i = 0; $i < count($team); $i++) {
            // var_dump($team[$i]);
            echo $team[$i]['squadraCasa'] . ' ' . '-' . ' ' . $team[$i]['squadraOspite'] . ' ' . '|' . ' ' . $team[$i]['ptCasa'] . '-' . $team[$i]['ptOspite'] . '<br>' ;
        }
        ?>
    </div>

 
    
</body>
</html>



