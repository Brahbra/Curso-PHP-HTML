<?php

$usuarios = array(

    array(
        "id"=>0,
        "username"=> "Mr. Michi"
    ),
    array(
        "id"=>1,
        "username"=> "Retax"
    ),
    array(
        "id"=>2,
        "username"=> "Brax"
    ),
);

$edad_pepito=12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a Javascript</title>
</head>
<body>

<script>

    let users = JSON.parse('<?= json_encode($usuarios) ?>');

    let edadPepito = <?= $edad_pepito ?>;

</script>

<script src="./index.js"></script>

</body>
</html>