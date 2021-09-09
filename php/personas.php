<?php
$i=5;
if($_GET['id']){
get_persons($_GET['id']);
} else {
die("Solicitud no válida.");
}
function get_persons( $id ) {
//Cambia por los detalles de tu base datos
$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "trabajo";



try {     
    //conexión a mysql 
    $dsn = "mysql:host=".$dbserver.";dbname=".$dbname;
    $dbh = new PDO($dsn, $dbuser,$password); 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //
    $jsondata=array();

    //Verificar el tipo de variable que es id
    if(is_array($id)){
        $id = array_map('intval', $id);
        $querywhere = "where id in (" . implode( ',', $id ) . ")";
    }else{
        $id = intval($id);
        $querywhere = "WHERE `ID` = " . $id;
    }

    //Creación de la consulta
    $stm=$dbh->prepare("SELECT * FROM `prueba_users` " . $querywhere);
    
    
    //Ejecutar la consulta
    if($stm->execute())
    {
        //Obtener los resultados y transformarlos a un arreglo asociativo
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        //Dar la información de la consulta a la variable jsondata
        if(sizeof($result)>0)
        {
            $jsondata["success"] = true;
            $jsondata["data"]["message"] = sprintf("Se han encontrado %d usuarios", sizeof($result));
            $jsondata["data"]["users"] = array();
            $jsondata["data"]["users"] = $result;
        }else
        {
            $jsondata["success"] = false;
            $jsondata["data"] = array(
                'message' => 'No se encontró ningún resultado.'
            );
        }
    }else
    {
        $jsondata["success"] = false;
        $jsondata["data"] = array(
            'message' => $database->error
        );
    }
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata, JSON_FORCE_OBJECT);

} catch (PDOException $e){  
   echo  $e->getMessage(); 
   return false; 
                } 
  return $dbh;


            }


