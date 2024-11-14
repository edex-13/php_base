
<?php
class Router
{
  private $url;
  private $routes = [
    "main",
    "create_car"
  ];
  private $cars;

  public function __construct($url)
  {
    $this->url = $url[0];
    require_once("../src/app/controllers/cars.php");
    $this->cars = new Cars();
    $this->showpage();
  }


  private function showpage()
  {
    $this->url = $this->url == "" ? "main" : $this->url;
    if ($this->url == "main") {


      $this->cars->index();
    } elseif ($this->url == "newcar") {

      $this->cars->newcar();
    } elseif ($this->url == "insertcar") {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $datos = array(
          'marca' => trim(htmlspecialchars($_POST['Marca'])),
          'modelo' => trim(htmlspecialchars($_POST['Modelo'])),
          'año' => trim(htmlspecialchars($_POST['Año'])),
          'precio' => trim(htmlspecialchars($_POST['Precio'])),
          'stock' => trim(htmlspecialchars($_POST['Stock'])),
          'descripcion' => trim(htmlspecialchars($_POST['Descripcion'])),
          'img' => trim(htmlspecialchars($_POST['Img']))
        );

        if (in_array("", $datos)) {
          echo "Por favor, complete todos los campos obligatorios";
        } else {
          
          $this->cars->createcar($datos);
          
        }
      }
    } else {
      require_once("../public/pages/notfound.php");
    }
  }
}
