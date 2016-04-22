<html>
<body>

<?php
if (isset($_COOKIE["user"])){
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
echo "Welcome " . $_COOKIE["TestCookie"] . "!<br />";
}
else
  echo "Welcome guest!<br />";
?>

</body>
</html>
