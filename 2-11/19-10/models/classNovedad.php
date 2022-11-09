<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

<?php

class Novedad {
    public $idalumno;
    public $tipo;
    public $descripcion;
    public $idcoordinador;

    //CONSULTAR
    public function consultarNovedad(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    //BORRAR
    public function borrarNovedad($idNovedad) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from novedad where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idNovedad));
        $conn = null;
        header("location:../views/novedad.php");
    }
    //AÑADIR
    public function addNovedad($idalumno,$tipo,$desc,$idcoordinador) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into novedad (idalumno,tipo,descripcion,idcoordinador) values (?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idalumno,$tipo,$desc,$idcoordinador));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡COORDINADOR ACTUALIZADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>La novedad realizada por el alumno $idalumno de tipo $tipo con la descripcion $desc para el coordinador $idcoordinador ha sido agregada</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/novedad.php''>Regresar</a>
                    </div>
                </div>
                ");
    }
    //ACTUALIZAR
    public function consultarNovedadxId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from novedad where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
    public function upNovedad($idalumno,$tipo,$desc,$idcoordinador,$id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE novedad SET idalumno = ?, tipo = ?, descripcion = ?, idcoordinador = ? WHERE id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idalumno,$tipo,$desc,$idcoordinador,$id));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡COORDINADOR ACTUALIZADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>La novedad realizada por el alumno $idalumno cuyo tipo es $tipo y tiene como descripcion $desc hacia el coordinador $idcoordinador ha sido actualizada</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/novedad.php''>Regresar</a>
                    </div>
                </div>
        ");
    }
}

?>