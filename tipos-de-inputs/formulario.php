<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por GET</title>
</head>
<body>

<form action="./server.php" method="post" enctype="multipart/form-data">

    <!-- Input simple-->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <!-- Arreglos -->
    <label for="personas">Personas:</label>
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">
    <input type="text" name="personas[]">

    <!-- Arreglos asociativos -->
    <label>Nombre de la Persona:</label>
    <input type="text" name="persona[nombre]">
    <label>Correo de la Persona:</label>
    <input type="email" name="persona[email]">
    <label>Edad de la Persona:</label>
    <input type="number" name="persona[edad]">

    <!-- Checkbox -->
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3">

    <!-- Radios -->
    <label for="mexico">México</label>
    <input type="radio" name="pais" value="México" id="mexico">

    <label for="colombia">Colombia</label>
    <input type="radio" name="pais" value="Colombia" id="colombia">

    <label for="peru">Perú</label>
    <input type="radio" name="pais" value="Perú" id="peru">

    <!-- Multiples archivos-->
    <label for="galeria">Carga tus imágenes</label>
    <input type="file" multiple name="galeria[]" id="galeria">

    <button type="submit">Mandar formulario</button>

</form>


</body>
</html>