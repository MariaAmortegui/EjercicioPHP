<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<?php

class Coordinador {
    public $nombre;
    public $apellido;
    public $correo;
    public $programa;
    public $idnovedad;
    public $respuesta;

    //CONSULTAR
    public function consultarCoordinador(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    //BORRAR
    public function borrarCoordinador($idCoordinador) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from coordinador where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idCoordinador));
        $conn = null;
        header("location:../views/coordinador.php");
    }
    //AÑADIR
    public function addCoordinador($nombre, $apellido, $correo,$programa,$pqrs,$respuesta) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into coordinador (nombre,apellido,correo,programa,idnovedad,respuesta) values (?,?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo,$programa,$pqrs,$respuesta));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡COORDINADOR AGREGADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>El coordinador $nombre $apellido con correo $correo del programa $programa con respuesta $respuesta al PQRS $pqrs ha sido agregado</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/coordinador.php'>Regresar</a>
                    </div>
                </div>
        ");
    }
    //ACTUALIZAR
    public function consultarCoordinadorxId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from coordinador where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
    public function upCoordinador($nombre, $apellido, $correo,$programa,$pqrs,$respuesta,$id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE coordinador SET nombre = ?, apellido = ?, correo = ?, programa = ?, idnovedad = ?, respuesta = ? WHERE id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo,$programa,$pqrs,$respuesta,$id));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡COORDINADOR ACTUALIZADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>El coordinador $nombre $apellido con correo $correo del programa $programa que respondio a la novedad $pqrs con respuesta $respuesta ha sido actualizado</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/coordinador.php'>Regresar</a>
                    </div>
                </div>
        ");
    }
    
};

?>