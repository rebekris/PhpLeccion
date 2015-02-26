<html>
<head>
</head>

<body>
<div id="main">
<?php
$desc=$_POST["descripcion"];
$total=$_POST["total"];
//$valor="manuel";
echo 'Descripción: ' . htmlspecialchars($desc) . ' Total: ' .  htmlspecialchars($total) ;

include_once("FacturaCollector.php");

$FacturaCollectorObj = new FacturaCollector();
$FacturaCollectorObj->createFactura($desc);
$FacturaCollectorObj->createFactura($total);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
