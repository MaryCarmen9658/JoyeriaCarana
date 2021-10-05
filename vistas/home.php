<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li><?php echo $user->getNombre() ?> <?php echo $user->getApellido() ?></li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
        <ul>
            <li><?php echo $user->getProfesion() ?></li>
        </ul>
    </div>
	<br>
    <section>
        <p>Perido:
            <input type="radio" id="Unidad1" name="Unidad" value="Unidad1">
            <label for="Unidad1">Unidad 1</label>
			<input type="radio" id="Unidad2" name="Unidad" value="Unidad2">
            <label for="Unidad2">Unidad 2</label>
            <input type="radio" id="Unidad3" name="Unidad" value="Unidad3">
            <label for="Unidad3">Unidad 3</label>
        </p>
        <p>Grupo:
            <input type="radio" id="IDGS7A" name="Grupo" value="IDGS7A">
            <label for="IDGS7A">IDGS 7A</label>
			<input type="radio" id="IDGS7B" name="Grupo" value="IDGS7B">
            <label for="IDGS7B">IDGS 7B</label>
            <input type="radio" id="IDGS7C" name="Grupo" value="IDGS7C">
            <label for="IDGS7C">IDGS 7C</label>
        </p>
        <a href="vistas/horario.php"><input type="button" value="Ver calificaciones" /></a>
    </section>
</body>
</html>