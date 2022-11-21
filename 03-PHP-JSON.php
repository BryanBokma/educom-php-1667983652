<!DOCTYPE html>
<html>
<body>

<?php
// The json_encode() function is used to encode a value to JSON format (voorbeeld 1)
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

<?php
// This example shows how to encode an indexed array into a JSON array
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>

<?php
// This example decodes JSON data into a PHP object
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>

<?php
// This example decodes JSON data into a PHP associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj, true));
?>

<?php
// This example shows how to access the values from a PHP object
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>

<?php
// This example shows how to access the values from a PHP associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>

<?php
// PHP - Looping Through the Values
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

<?php
// This example shows how to loop through the values of a PHP associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

</body>
</html>