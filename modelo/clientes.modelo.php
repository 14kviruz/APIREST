<?php
class ModeloCliente
{

    static public function index($tabla)
    {
        $stmt = Conexion::conectar()->prepare("slect * from $tabla");
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;
    }
}
