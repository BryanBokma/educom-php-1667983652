<?php
$cookie_name = "user";
$cookie_value = "Bryan Bokma";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named" . $cookie_name . "'' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

<?php
// Delete a cookie (set the expiration date to one hour ago)
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>

<?php
// Check if cookies are enabled
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>
</body>
</html>

<?php
// Exercise
setcookie("username", "John", time() + (86400 * 30), "/");