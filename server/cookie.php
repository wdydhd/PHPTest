<?php 
setcookie("user", "Alex Porter", time()+3600);

$value = "my cookie value";

// 发送一个 24 小时候过期的 cookie
setrawcookie("TestCookie",$value, time()+3600*24);
?>

<html>
<body>

</body>
</html>
