<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/main.css">
  <title>Car</title>
</head>

<body>
  <div class="wrapper">
    <?php require("./components/header.php"); ?>
    <main>
      <form action="/supermercado/public/insertcar" method="post">
      <h1>Insertar Nuevo Carro</h1> 
        <input name="Marca" placeholder="Marca" type="text">
        <input name="Modelo" placeholder="Modelo" type="text">
        <input name="Año" placeholder="Año" type="text">
        <input name="Precio" placeholder="Precio" type="text">
        <input name="Stock" placeholder="Stock" type="text">
        <textarea name="Descripcion" id="Descripcion"></textarea>
        <input name="Img" placeholder="Img" type="text">
        <input class="button" type="submit" value="ENVIAR">
      </form>
    </main>
  </div>
  <?php require("./components/footer.php"); ?>

</body>

</html>