<?php
include_once("../src/db/connection.php");

class Cars
{
  private $connection;
  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }
  public function index()
  {



    $sql = "select * from vehiculos";
    $stmt = $this->connection->prepare($sql);
    $stmt->execute();

    // Obtener resultados
    $resultado = $stmt->get_result();

    // Obtener todos los registros
    $datos = $resultado->fetch_all(MYSQLI_ASSOC);


    include("./pages/main.php");
  }

  public function newcar()
  {
    include("./pages/newcar.php");
  }

  public function createcar($datos)
  {

    $sql = "INSERT INTO vehiculos (Marca, Modelo, Año, Precio, Stock, Descripcion, Img) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";


    if ($stmt = $this->connection->prepare($sql)) {
      // Vincular parámetros
      // s = string, i = integer, d = double
      $stmt->bind_param(
        "sssssss",
        $datos['marca'],
        $datos['modelo'],
        $datos['año'],
        $datos['precio'],
        $datos['stock'],
        $datos['descripcion'],
        $datos['img']
      );

      // Ejecutar la consulta
      if ($stmt->execute()) {
        echo "Datos insertados correctamente";
        header("Location: /supermercado/public/");

      } else {
        echo "Error al insertar datos: " . $stmt->error;
      }
    }
  }
}
