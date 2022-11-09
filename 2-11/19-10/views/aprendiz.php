<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,700;0,900;1,600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title> TABLA APRENDIZ</title>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    
    </script>
</head>

<?php
        require_once("../models/classAlumno.php");
        $alumno = new Aprendiz();
        $datos = $alumno -> consultarAlumno();
print("
    <nav class='nav nav-tabs bg-dark fixed-top'>
      <li class='nav-item'><a class='navbar-brand' href='#'>EJERCICIO DE PHP</a></li>
      <li class='nav-item'><a class='nav-link' aria-current='page' href='../ejercicio_2.php'>Inicio</a></li>
      <li class='nav-item'><a class='nav-link active' href='../views/aprendiz.php'>Aprendiz</a></li>
      <li class='nav-item'><a class='nav-link' href='../views/coordinador.php'>Coordinador</a></li>
      <li class='nav-item'><a class='nav-link' href='../views/novedad.php'>Novedad</a></li>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <form action='../controllers/controladorAlumno.php' method='POST'>
      <input  class='btn bg-dark text-primary' type='submit' id='botonAdd' name='botonAdd' value='Add'/>
    </form>
    <table id='example' class='table table-striped text-align-center' style='width:100%'>
      <thead class='thead-dark'>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Programa</th>
              <th>Actualizar</th>
              <th>Borrar</th>
          </tr>
      </thead>
      <tbody>
  ");

      while ($data = $datos->fetch(PDO::FETCH_ASSOC)){
        print "<tr>
                <td>".$data['id']."</td>
                <td>".$data['nombre']."</td>
                <td>".$data['apellido']."</td>
                <td>".$data['correo']."</td>
                <td>".$data['telefono']."</td>
                <td>".$data['programa']."</td>
                <td>
                    <input class='btn bg-dark text-primary' type='button' id='botonActu' name='botonActu' value='Actualizar' onclick='validar(".$data['id'].")'/>
                <td>
                    <input class='btn bg-dark text-primary' type='button' id='botonBorra' name='botonBorra' value='Borrar' onclick='borrar(".$data['id'].")'/>
                </td>
            </tr>
      </tbody>";
      };
        
?>
    <body>
      <script type = "text/javascript">
        function validar(id){
          var dato = confirm("¿Esta seguro de actualizar el alumno" + id+"?");
          if(!dato){
            window.location.href="../views/aprendiz.php";
          }else{
            window.location.href="../controllers/controladorAlumno.php?id="+id+"&value=Actualiza";
          }
        };
        function borrar(id){
          var dato = confirm("¿Esta seguro de borrar el alumno " + id+"?");
          if(!dato){
            window.location.href="../views/aprendiz.php";
          }else{
            window.location.href="../controllers/controladorAlumno.php?id="+id+"&value=Borra";
          }
        };
      </script>
    </body>
</html>