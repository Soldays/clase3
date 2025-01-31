<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Compra de boletos</title>
</head>
<body>
    <h1>Compra de boletos</h1>
    <h2> Formulario de ventas</h2>
    <form class="boletos" action="guardar.php" method="post">
        <label for="ticket">Ticket</label>
        <input type="number" id="ticket" name="ticket" maxlength="6" required></input><br>
        <br>
        <label for="pelicula">Pelicula</label>
        <input for="pelicula" id="pelicula" name="pelicula" maxlength="6" required></input><br><br>

        <button class="submit" type="submit">enviar boletos</button>
    </form>
</body>
</html>