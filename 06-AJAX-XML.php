<?php
// The page on the server called by the JavaScript above is a PHP file called "getcd.php".
// The PHP script loads an XML document, "cd_catalog.xml", runs a query against the XML file, and returns the result as HTML
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}

// When the CD query is sent from the JavaScript to the PHP page, the following happens:

// 1. PHP creates an XML DOM object
// 2. Find all <artist> elements that matches the name sent from the JavaScript
// 3. Output the album information (send to the "txtHint" placeholder)
?>

<html>
<!-- When a user selects a CD in the dropdown list above, a function called "showCD()" is executed. The function is triggered by the "onchange" event -->

<head>
    <script>
    function showCD(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "getcd.php?q=" + str, true);
        xmlhttp.send();
    }
    </script>
</head>

<body>

    <form>
        Select a CD:
        <select name="cds" onchange="showCD(this.value)">
            <option value="">Select a CD:</option>
            <option value="Bob Dylan">Bob Dylan</option>
            <option value="Bee Gees">Bee Gees</option>
            <option value="Cat Stevens">Cat Stevens</option>
        </select>
    </form>
    <div id="txtHint"><b>CD info will be listed here...</b></div>

</body>

<!--
The showCD() function does the following:

- Check if a CD is selected
- Create an XMLHttpRequest object
- Create the function to be executed when the server response is ready
- Send the request off to a file on the server
- Notice that a parameter (q) is added to the URL (with the content of the dropdown list) -->

</html>