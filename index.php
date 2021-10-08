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

    <div class="sneckDue">
        <?php   
            // $nome = $_GET['nome'] . ' ' . $_GET['mail'] . ' ' . $_GET['age'];
            // echo $nome . ' ' . $mail . ' ' . $age . '<br>';

            $nome = $_GET['nome'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
            echo 'Nome:' . ' ' . $nome . ' ' . '<br>' . 'Mail:' . ' ' . $mail . ' ' . '<br>' . 'Età:' . ' ' . $age . '<br>';

            if (empty($mail) && empty($nome) && empty($age)) {
                echo 'Inserire un nome una mail e l\'età' . '<br>';
            } 
            
            elseif ((strlen($nome) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age)))  {
                echo 'accesso riuscito';
            } else {
                echo 'accesso negato';
            }

        ?>
    
    
    </div>

 
    
</body>
</html>



