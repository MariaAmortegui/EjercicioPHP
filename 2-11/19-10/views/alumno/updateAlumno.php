<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR ALUMNO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <img src="https://amisalud.com.co/wp-content/uploads/2019/08/pqrs.jpg"class="d-block w-100" alt="..."/>
        </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h1 class="login-heading mb-4 text-bold text-primary">ACTUALIZAR ALUMNO</h1>
                                    <?php
                                    require_once("../../models/classAlumno.php");
                                    $id = $_REQUEST['id'];
                                    $alumno = new Aprendiz();
                                    $datos = $alumno -> consultarAlumnoxId($id);
                                    while ($data = $datos->fetch(PDO::FETCH_ASSOC)){
                                    print '
                                    <form action="../../controllers/controladorAlumno.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="hidden" name="idA" id="idA" value="'.$data['id'].'"/>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newNom" id="newNom" value="'.$data['nombre'].'" required/>
                                            <label for="newNom">Nombre:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newApe" id="newApe" value="'.$data['apellido'].'" required/>
                                            <label for="newApe">Apellido:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" name="newCor" id="newCor" value="'.$data['correo'].'" required/>
                                            <label for="newCor">Correo:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newTel" id="newTel" value="'.$data['telefono'].'" required/>
                                            <label for="newTel">Telefono:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newPro" id="newPro" value="'.$data['programa'].'" required/>
                                            <label for="newPro">Programa:</label>
                                        </div>
                                        <div class="d-grid">
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="submit" name="btnupAlumno" id="btnupAlumno" value="Enviar"/>
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="reset" value="Restablecer">
                                        </div>
                                        <br/>
                                        <a class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2 d-flex justify-content-center" href="../aprendiz.php">Regresar</a>
                                    </form>
                                ';
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


</body>
</html>