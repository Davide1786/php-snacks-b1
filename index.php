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
        // Creiamo un array contenente le partite di basket di un’ipotetica tappa
        // del calendario.

        $team = [

        // Ogni array avrà una squadra di casa e una squadra ospite,
        // punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.

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

    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

        for ($i = 0; $i < count($team); $i++) {
            // var_dump($team[$i]);
            echo $team[$i]['squadraCasa'] . ' ' . '-' . ' ' . $team[$i]['squadraOspite'] . ' ' . '|' . ' ' . $team[$i]['ptCasa'] . '-' . $team[$i]['ptOspite'] . '<br>' ;
        }
        ?>
        
    </div>

    <br>
    <br>
    <br>

    <div class="sneckDue">
        <?php   
            // $nome = $_GET['nome'] . ' ' . $_GET['mail'] . ' ' . $_GET['age'];
            // echo $nome . ' ' . $mail . ' ' . $age . '<br>';
        
            // Passare come parametri GET name, mail e age

            $nome = $_GET['nome'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            // verificare che name sia più lungo di 3 caratteri,
            // che mail contenga un punto e una chiocciola e che age sia un numero.

            echo '<p><b>Inserisci un nome (minimo 3 caratteri)</b> <br> Nome:' . ' ' . $nome . ' ' . '<br>' . '<b>Inserisci una mail (deve contenere una @ e .)</b> <br>' . ' ' . 'Mail:' . ' ' . $mail . ' ' . '<br>' . '<b>Inserisci l\'età . (numero)</b> <br>' . 'Età:' . ' ' . $age . '</p><br>';

            // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

            if (empty($mail) && empty($nome) && empty($age)) {
            } 
            elseif ((strlen($nome) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age)))  {
                echo 'accesso riuscito';
            } else {
                echo 'accesso negato';
            }
        ?>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="sneckUnoBonus">
        <?php 

        $myArray=[
            "Reggiana",
            "Cantù",
            "Dinamo Sassari",
            "Reyer Venezia",
            "Olimpia Milano",
            "N.B. Brindisi",
            "Fortitudo Bologna",
            "Trieste",
            ""
        ];

        $random_keys=array_rand($myArray, 8);
        $item0 = $myArray[$random_keys[0]];
        $item1 = $myArray[$random_keys[1]];
        $item2 = $myArray[$random_keys[2]];
        $item3 = $myArray[$random_keys[3]];
        $item4 = $myArray[$random_keys[4]];
        $item5 = $myArray[$random_keys[5]];
        $item6 = $myArray[$random_keys[6]];
        $item7 = $myArray[$random_keys[7]];

#       echo $a[array_rand($a)];

        #$a[rand(0, count($a) - 1)];

            // var_dump($a);

         
        $team = [
            [
                "squadraCasa" => $item0,
                "squadraOspite" => $item1,
                "ptCasa" => rand(1, 100),
                "ptOspite" => rand(1, 100),
            ],
            [
                "squadraCasa" => $item2,
                "squadraOspite" => $item3,
                "ptCasa" => rand(1, 100),
                "ptOspite" => rand(1, 100),
            ],
            [
                "squadraCasa" => $item4,
                "squadraOspite" => $item5,
                "ptCasa" => rand(1, 100),
                "ptOspite" => rand(1, 100),
            ],
            [
                "squadraCasa" => $item6,
                "squadraOspite" => $item7,
                "ptCasa" => rand(1, 100),
                "ptOspite" => rand(1, 100),
            ],
        ];
        

        for ($i = 0; $i < count($team); $i++) {
            // var_dump($team[$i]);
            echo $team[$i]['squadraCasa'] . ' ' . '-' . ' ' . $team[$i]['squadraOspite'] . ' ' . '|' . ' ' . $team[$i]['ptCasa'] . '-' . $team[$i]['ptOspite'] . '<br>' ;
        }

        
        ?>
    </div>

  

 
    
</body>
</html>



