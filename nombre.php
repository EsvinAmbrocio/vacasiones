<?php
    include('./coneccion.php');
    include('./funciones.php');
    $search=$_POST['search'];
    if(!empty($search)){
        $task= new vacasiones();
        $search=$task->buscar($search);
        //if(!$search){
          // die('Query Error' . $search->errorInfo());
         //}
        $json=array();
            foreach($search as $buscar){
                $json[]= array(
                    'Nombre' => $buscar['Nombre'],
                    'Apellido' => $buscar['Apellido'],
                    'dpi' => $buscar['dpi'],
                    'Puesto' => $buscar['Puesto'],
                );
            }

        $jsonString=json_encode($json);
        echo $jsonString;
        //var_dump($search);
    }      

?>