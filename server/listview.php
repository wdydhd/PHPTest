<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (!empty($_POST["test"])){
$test = $_POST["test"];
$ret = array();
for($x=0;$x<10;$x++){
$ret[]=$test.$x.$x.$x;
}
echo json_encode($ret);

}
}

if ($_SERVER["REQUEST_METHOD"] == "GET"){
$test = $_POST["test"];
$ret = array();
for($x=0;$x<10;$x++){
$ret[]=$test.$x.$x.$x;
}
echo htmlspecialchars(json_encode($ret));

}





?>
