<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

<?php

class Aprendiz {
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    //CONSULTAR
    public function consultarAlumno(){
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    //BORRAR
    public function borrarAprendiz($idAprendiz) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "delete from alumno where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idAprendiz));
        $conn = null;
        header("location:../views/aprendiz.php");
    }
    //AÑADIR
    public function addAlumno( $nombre, $apellido, $correo,$telefono,$programa) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "insert into alumno (nombre,apellido,correo,telefono,programa) values (?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array( $nombre, $apellido, $correo,$telefono,$programa));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡ALUMNO AGREGADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>El alumno $nombre $apellido con correo $correo y telefono $telefono del programa $programa ha sido agregado</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/aprendiz.php'>Regresar</a>
                    </div>
                </div>
        ");
    }
    //ACTUALIZAR
    public function consultarAlumnoxId($id){
        require_once("../../dao/conectar.php");
        $conn = connect();
        $sql = "select * from alumno where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
    public function upAlumno($nombre, $apellido, $correo,$telefono,$programa,$id) {
        require_once("../dao/conectar.php");
        $conn = connect();
        $sql = "UPDATE alumno SET nombre = ?, apellido = ?, correo = ?, telefono = ?, programa = ? WHERE id = ?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo,$telefono,$programa,$id));
        $conn = null;
        print("<br/><br/>  ");
        print("<div class='card border-white text-white bg-dark'>
                    <div class='card-header'>
                        <h1>¡¡ALUMNO ACTUALIZADO!!</h1>
                    </div>  
                    <div class='card-body'>
                        <h4 class='card-text'>El alumno $nombre $apellido con correo $correo y telefono $telefono del programa $programa ha sido actualizado</h4>
                    </div>
                    <div class='card-footer'>
                        <a class='btn bg-dark text-primary d-flex justify-content-center' href='../views/aprendiz.php'>Regresar</a>
                    </div>
                </div>
        ");
    }
};
?>