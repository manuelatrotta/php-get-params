 //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .teachers {
        background-color: grey;
      }
      .pm {
        background-color: green;
      }
    </style>
    <title>snack_3</title>
  </head>
  <body>
    <div class="teachers">
      <?php for ($i=0; $i <count($db["teachers"]) ; $i++) {
            echo $db["teachers"][$i]["name"]." ".$db["teachers"][$i]["lastname"];
          } ?>
    </div>
    <div class="pm">
      <?php for ($i=0; $i <count($db["pm"]) ; $i++) {
            echo $db["pm"][$i]["name"]." ".$db["pm"][$i]["lastname"];
          } ?>
    </div>

  </body>
</html>
