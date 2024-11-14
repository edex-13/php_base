<?php
  require("../src/router/router.php");

  $slug = $_GET["slug"] ?? "";
  $slug = explode("/" , $slug);

  $app = new Router($slug);