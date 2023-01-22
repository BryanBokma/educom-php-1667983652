<!DOCTYPE html>
<html>
<body>

<?php
// The example below has a __construct() function that is automatically called when you create
// an object from a class, and a __destruct() function that is automatically called at the end of
// the script
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit("Apple");
?>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?>
 
</body>
</html>

