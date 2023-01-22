<?php
// Define a class
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>

<?php
// Define objects
// In the example below, $apple and $banana are instances of the class Fruit
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<?php
// Voorbeeld 2
// In the example below, we add two more methods to class Fruit, for setting and getting the $color property
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>

<?php
// PHP - The $this Keyword
//So, where can we change the value of the $name property? There are two ways:
// Inside the class (by adding a set_name() method and use $this)
class Fruit {
  public $name;
}
$apple = new Fruit();
?>

<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
?>

<?php
// Outside the class (by directly changing the property value)
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
?>

<?php
// Instanceof
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?>