<?php
    include_once("../models/classNovedad.php");
    if(!isset($_REQUEST['id'])){
        $_REQUEST['id']=0;
    }
    if(!isset($_REQUEST["novedad"])){
        //BORRAR
        if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
            $id = $_REQUEST['id'];
            $novedad = new Novedad ();
            $novedad -> borrarNovedad($id);
        //AÑADIR
        }elseif(isset($_REQUEST["BotonAddNov"])) {
            header("location: ../views/novedad/addNovedad.php");
        }elseif((isset($_POST['btnnewNovedad'])) && ($_REQUEST["btnnewNovedad"] != null)){
            $idalumno = $_REQUEST["newAlumno"];
            $tipo = $_REQUEST["newTipo"];
            $desc = $_REQUEST["newDes"];            
            $idcoordinador = $_REQUEST["newCoord"];
            $novedad = new Novedad();
            $novedad -> addNovedad($idalumno,$tipo, $desc,$idcoordinador);
        //ACTUALIZAR
        }elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualiza")){
            header("location: ../views/novedad/updateNovedad.php?id=".$_REQUEST['id']);
        }elseif((isset($_REQUEST["btnupNovedad"])) && ($_REQUEST["btnupNovedad"] != null)){
            $id = $_REQUEST["idN"];
            $idalumno = $_REQUEST["newAlumno"];
            $tipo = $_REQUEST["newTipo"];
            $desc = $_REQUEST["newDes"];
            $idcoordinador = $_REQUEST["newCoord"];
            $novedad = new Novedad();
            $novedad -> upNovedad($idalumno,$tipo, $desc,$idcoordinador,$id);
        }
    }
    elseif($_REQUEST["novedad"]==1){
        header("location:../views/novedad.php");
    }
?>