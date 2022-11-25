<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <div class="container">
            <?php

            $hotels = [
                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
                    'distance_to_center' => 10.4
                ],
                [
                    'name' => 'Hotel Futuro',
                    'description' => 'Hotel Futuro Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 2
                ],
                [
                    'name' => 'Hotel Rivamare',
                    'description' => 'Hotel Rivamare Descrizione',
                    'parking' => false,
                    'vote' => 1,
                    'distance_to_center' => 1
                ],
                [
                    'name' => 'Hotel Bellavista',
                    'description' => 'Hotel Bellavista Descrizione',
                    'parking' => false,
                    'vote' => 5,
                    'distance_to_center' => 5.5
                ],
                [
                    'name' => 'Hotel Milano',
                    'description' => 'Hotel Milano Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 50
                ],

            ];



            // for ($i = 0; $i < count($hotels); $i++) {
            
            //     foreach ($hotels[$i] as $key => $value) {
            
            //         echo $key;
            //         echo $value;
            //         echo "<br />";
            //     }
            
            //     echo '------------------------------------------------------------------------------------------------------------';
            //     echo "<br />";
            // }
            

            ?>


            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to Center</th>
                    </tr>
                </thead>

                <tbody>


                    <?php
                    for ($i = 0; $i < count($hotels); $i++) { ?>

                    <tr>

                        <th scope="row">
                            <?php echo $i ?>
                        </th>

                        <?php foreach ($hotels[$i] as $key => $value) { ?>

                        <td>
                            <?php

                            if ($value === true) {
                                echo 'Yes';
                            } else if ($value === false) {
                                echo 'Not';
                            } else {
                                echo $value;
                            }
                            ?>
                        </td>

                        <?php } ?>

                    </tr>

                    <?php } ?>

                </tbody>

            </table>

    </main>

</body>

</html>