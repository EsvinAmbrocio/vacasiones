<?php
class vacasiones
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function buscar($search)
    {
        $query = $this->connection->prepare("
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

    public function Agregar($datos)
    {
        $query = $this->connection->prepare("
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
            'dpi' => $datos['dpi'],
            'periodo' => $datos['periodo'],
            'fechaInicial' => $datos['fechaInicial'],
            'fechaFinalizacion' => $datos['fechaFinalizacion'],
            'proceso' => $datos['proceso'],

        ]);
    }
}
