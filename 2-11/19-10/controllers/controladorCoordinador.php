<?php

    include_once("../models/classCoordinador.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id']=0;
}
if(!isset($_REQUEST["coordinador"])){
    //BORRAR
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
        $id = $_REQUEST['id'];
        $coordinador = new Coordinador ();
        $coordinador -> borrarCoordinador($id);
    //AÑADIR
    }elseif(isset($_REQUEST["Add"])) {
        header("location: ../views/coordinador/addCoordinador.php");
    }elseif((isset($_POST['btnnewCoordinador'])) && ($_REQUEST["btnnewCoordinador"] != null)){
        $nombre = $_REQUEST["newNom"];
        $apellido = $_REQUEST["newApe"];
        $correo = $_REQUEST["newCor"];
        $programa = $_REQUEST["newPro"];
        $pqrs = $_REQUEST["newNov"];
        $respuesta = $_REQUEST["newRes"];
        $coordinador = new Coordinador();
        $coordinador -> addCoordinador($nombre, $apellido, $correo,$programa,$pqrs,$respuesta);
    //ACTUALIZAR
    }elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
        header("location: ../views/coordinador/updateCoordinador.php?id=".$_REQUEST['id']);
    }elseif(isset($_REQUEST["btnupCoordinador"])){
        $id = $_REQUEST["idC"];
        $nombre = $_REQUEST["newNom"];
        $apellido = $_REQUEST["newApe"];
        $correo = $_REQUEST["newCor"];
        $programa = $_REQUEST["newPro"];
        $pqrs = $_REQUEST["newNov"];
        $respuesta = $_REQUEST["newRes"];
        $coordinador = new Coordinador();
        $coordinador -> upCoordinador($nombre, $apellido, $correo,$programa,$pqrs,$respuesta,$id);
    }
}
elseif($_REQUEST["coordinador"]==1){
    header("location:../views/coordinador.php");
}
?>