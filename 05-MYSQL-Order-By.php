<?php
// The ORDER BY clause is used to sort the result-set in ascending or descending order.
// The ORDER BY clause sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.
// SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// The following example selects the id, firstname and lastname columns from the MyGuests table. The records will be ordered by the lastname column
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>