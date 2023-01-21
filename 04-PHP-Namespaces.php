<?php
// Syntax
namespace Html;
?>

<?php
// Voorbeeld hoe het niet moet, namespace declaration altijd als eerste in het php bestand/file
echo "Hello World!";
namespace Html;
...
?>

<?php
// Table class in the Html namespace
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
$table->message();
?>

</body>

</html><?php
// Nested namespaces, declare a namespace called Html inside a namespace called Code
namespace Code\Html;
?>

<?php
// Any code that follows a namespace declaration is operating inside the namespace, so classes that belong to the namespace can be instantiated without any qualifiers. 
// To access classes from outside a namespace, the class needs to have the namespace attached to it.
// Use classes from the Html namespace
$table = new Html\Table()
$row = new Html\Row();
?>

<?php
// When many classes from the same namespace are being used at the same time, it is easier to use the namespace keyword:
// Use classes from the Html namespace without the need for the Html\qualifier:
namespace Html;
$table = new Table();
$row = new Row();
?>

<?php
// Namespace an alias
use Html as H;
$table = new H\Table();
?>

<?php
// Class an alias
use Html\Table as T;
$table = new T();
?>