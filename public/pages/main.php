<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car</title>
  <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
  <div class="wrapper">
    <?php require("./components/header.php"); ?>
    <main class="main_container--cards">
      <?php foreach ($datos as $vehiculo): ?>
        <div class="vehicle-card">
          <div class="vehicle-image">
            <img src="<?= htmlspecialchars($vehiculo['Img']) ?>" alt="<?= htmlspecialchars($vehiculo['Marca'] . ' ' . $vehiculo['Modelo']) ?>">
          </div>
          <div class="vehicle-info">
            <h2 class="vehicle-title"><?= htmlspecialchars($vehiculo['Marca'] . ' ' . $vehiculo['Modelo']) ?></h2>
            <p class="vehicle-year">Año: <?= htmlspecialchars($vehiculo['Año']) ?></p>
            <p class="vehicle-price"><?= $vehiculo['Precio'] ?></p>
            <p class="vehicle-stock">Stock disponible: <?= htmlspecialchars($vehiculo['Stock']) ?></p>
            <p class="vehicle-description"><?= htmlspecialchars($vehiculo['Descripcion']) ?></p>
            <button class="vehicle-button">Ver Detalles</button>
          </div>
        </div>
      <?php endforeach; ?>

    </main>

  </div>
  <?php require("./components/footer.php"); ?>

</body>

</html>