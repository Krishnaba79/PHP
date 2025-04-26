<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // string
    $x = "Hello world!";
    $y = 'Hello world!';
    
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    // integer
    $x = 5985;
    var_dump($x);
    echo "<br>";

    // float
    $x = 10.365;
    var_dump($x);
    echo "<br>";

    // boolean
    $x = true;
    var_dump($x);
    echo "<br>";

    // array
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    echo "<br>";


    // object
    class Car 
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() 
        {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }
      
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    echo "<br>";


    // null value
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    echo "<br>";


    // data type
    $x = 5;
    var_dump($x);
    $x = "Hello";
    var_dump($x);
    echo "<br>";

    $x = 5;
    $x = (string) $x;
    var_dump($x);
    ?>
</body>
</html>