<?php

$se_hablo_de_bruno= false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

<h1> Esto no se debe hacer </h1>
<?php if ($se_hablo_de_bruno) {
    
    echo "<h1>:o</h1>";
}
else {
        echo"<h1>:D</h1>";
} ?>

<h1> Esto es aceptable </h1>

<?php if($se_hablo_de_bruno) {?>
    <h1>:o</h1>
<?php } else {?>
    <h1>:D</h1>
<?php } ?>

<h1> Esto sí deberias hacerlo </h1>
<?php if($se_hablo_de_bruno): ?>
    <h1>:o</h1>
<?php else: ?>
    <h1>:D</h1>
<?php endif; ?>

</body>
</html>