<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

var_dump($_GET);

$nameLength = strlen($name);

if ($nameLength < 4 || !str_contains($email, '.') || !str_contains($email, '@') || !is_numeric($age) ) {
    echo 'Accesso Negato';
    die();
} else {
    echo 'Accesso Risucito';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>