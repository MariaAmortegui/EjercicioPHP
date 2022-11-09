<?php

    include_once("../models/classAlumno.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id']=0;
}
if(!isset($_REQUEST["alumno"])){
    //BORRAR
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $alumno = new Aprendiz ();
        $alumno -> borrarAprendiz($id);
    //AÑADIR
    }elseif(isset($_REQUEST["botonAdd"])) {
        header("location: ../views/alumno/addAlumno.php");
    }elseif((isset($_POST["btnnewAlumno"])) && ($_REQUEST["btnnewAlumno"] != null)){
        $nombre = $_REQUEST["newNom"];
        $apellido = $_REQUEST["newApe"];
        $correo = $_REQUEST["newCor"];
        $telefono = $_REQUEST["newTel"];
        $programa = $_REQUEST["newPro"];
        $alumno = new Aprendiz();
        $alumno -> addAlumno($nombre, $apellido, $correo,$telefono,$programa);
    //ACTUALIZAR
    }elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
        header("location: ../views/alumno/updateAlumno.php?id=".$_REQUEST['id']);
    }elseif((isset($_REQUEST["btnupAlumno"])) && ($_REQUEST["btnupAlumno"] != null)){
        $id = $_REQUEST["idA"];
        $nombre = $_REQUEST["newNom"];
        $apellido = $_REQUEST["newApe"];
        $correo = $_REQUEST["newCor"];
        $telefono = $_REQUEST["newTel"];
        $programa = $_REQUEST["newPro"];
        $alumno = new Aprendiz();
        $alumno -> upAlumno($nombre,$apellido, $correo,$telefono,$programa,$id);
    }
}
elseif($_REQUEST["alumno"]==1){
    header("location:../views/aprendiz.php");
}
?>