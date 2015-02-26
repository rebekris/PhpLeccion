<?php

include_once('Factura.php');
include_once('Collector.php');

class FacturaCollector extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM factura.fact where idfactura= ? ", array("{$id}")); 
    $ObjFactura = new Factura($row[0]{'idfactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $ObjFactura;
  }

  function createFactura($descripcion) {    
    $insertrow = self::$db->insertRow("INSERT INTO factura.fact (idfactura, descripcion, total) VALUES (?, ?)", array(null, "{$descripcion}"));
  }  

  function readFacturas() {
    $rows = self::$db->getRows("SELECT * FROM factura.fact ");        
    $arrayFactura= array();        
    foreach ($rows as $c){
      $aux = new Factura($c{'idFactura'},$c{'descripcion'},$c{'total'});
      array_push($arrayFactura, $aux);
    }
    return $arrayFactura;        
  }
  
  function updateFactura($id,$descripcion,$total) {    
    $insertrow = self::$db->updateRow("UPDATE factura.fact SET fact.descripcion = ?  fact.descripcion = ? WHERE fact.idfactura = ? ", array( "{$descripcion}", array( "{$total}",$id));
  }  

 



}
?>


