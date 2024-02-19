<?php 

$matches = [
    [
        "teamHome" => "Tortona", 
        "teamAway" => "Sassari", 
        "Home" => 79, 
        "Away" => 62
    ],
    [
        "teamHome" => "Venezia", 
        "teamAway" => "Pistoia", 
        "Home" => 96, 
        "Away" => 69
    ],
    [
        "teamHome" => "Milano",
        "teamAway" => "Brindisi",
        "Home" => 69,
        "Away" => 55
    ],
    [
        "teamHome" => "Brindisi",
        "teamAway" => "Treviso", 
        "Home" => 82, 
        "Away" => 85
    ],
    [
        "teamHome" => "Cremona", 
        "teamAway" => "Napoli", 
        "Home" => 90, 
        "Away" => 83
    ],
    [
        "teamHome" => "Bologna", 
        "teamAway" => "Scafati", 
        "Home" => 94, 
        "Away" => 67
    ],
    [
        "teamHome" => "Brescia", 
        "teamAway" => "ReggioEmilia", 
        "Home" => 96, 
        "Away" => 63
    ],
    [
        "teamHome" => "Varese", 
        "teamAway" => "Pesaro", 
        "Home" => 91, 
        "Away" => 80
    ]
];

$giornata = 20

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./lba.png">
    <title>SNACK 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container-fluid">
        <header class="text-center">
            <picture>
                <img src="./lba.png" alt="LBA">
            </picture>
            <h1>Lega Basket - Serie A</h1>
        </header>
        <main>
            <section>
                <h5>Calendario <?php echo $giornata ?><sup>a</sup> Giornata</h5>
                <ul>
                    <?php foreach ($matches as $match) : ?>
                        <li>
                            <?php echo $match["teamHome"] . " - " . $match["teamAway"] . " | " . $match["Home"] . "-" . $match["Away"]?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>


    </div>
</body>

</html>