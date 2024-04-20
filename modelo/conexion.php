<?php
class Conexion
{
    private $con;

    public function _construct()
    {
        $this ->con = new mysqli('localhost', 'root', '', 'coningenio');

    }

    public function getUsers(){
        $query = $this->con->query('SELECT * FROM consultas');

        $retorno = [];

        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++:
            # code...
        }

        return $retorno;
    }
    
}

?>