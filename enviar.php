<?php
include('./coneccion.php');
include('./funciones.php');
  var_dump($_POST);
if(isset($_POST['dpi'])){
    $datos=[
        'dpi' =>$_POST['dpi'],
        'periodo' =>$_POST['periodo'],
        'fechaInicial' =>$_POST['fechaInicial'],
        'fechaFinalizacion' =>$_POST['fechaFinalizacion'],
        'proceso' => $_POST['proceso'],
    ];

    $vacasiones = new vacasiones($pdo);
    $add=$vacasiones->Agregar($datos);
    if($add){
        die('Query Failed');
    }
    echo 'Task added successfully';
}
