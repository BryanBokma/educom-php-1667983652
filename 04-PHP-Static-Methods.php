<?php
// Syntax
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
?>

<?php
// Om een static method te gebruiken/aanroepen, de je met b.h.v. de volgende code
ClassName::staticMethod();

// Voorbeeld
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call/aanroepen static method
greeting::welcome();
?>

<?php
// Voorbeeld 1
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>

<?php
// Voorbeeld 2
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}
?>

<?php
// Voorbeeld 3
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>