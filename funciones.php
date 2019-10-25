<?php
class vacasiones{
    public function buscar($search){
        global $pdo;
        $query = $pdo->prepare("
        SELECT
            *
        FROM
            trabajadores
        WHERE
            Nombre 
        LIKE ?
        ");
        $params = array("%$search%");
        $query->execute(
            $params
            );
        return $query->fetchALL();
    }
    public function Agregar($datos){
        global $pdo;
        $query = $pdo->prepare("
        INSERT INTO
            vacasiones
        SET
            dpi=:dpi,
            periodo=:periodo,
            fechaInicial=:fechaInicial,
            fechaFinalizacion=:fechaFinalizacion,
            estado=:proceso
        ");
        $query->execute([
            'dpi'=>$datos['dpi'],
            'periodo'=>$datos['periodo'],
            'fechaInicial'=>$datos['fechaInicial'],
            'fechaFinalizacion'=>$datos['fechaFinalizacion'],
            'proceso'=>$datos['proceso'],
    
            ]);
        }
}