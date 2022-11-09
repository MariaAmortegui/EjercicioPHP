<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR NOVEDAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <img src="https://img.freepik.com/foto-gratis/hombre-escribiendo-correo-electronico_53876-137663.jpg?w=740&t=st=1666639902~exp=1666640502~hmac=2f45e347e789c0e64cc93829734d0f39c716af75294c7f66d1cd9fd144210495"class="d-block w-100 h-100" alt="..."/>
        </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h1 class="login-heading mb-4 text-bold text-primary">AGREGAR NOVEDAD</h1>
                                    <form action="../../controllers/controladorNovedad.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="number" name="newAlumno" id="newAlumno" required/>
                                            <label for="newAlumno">ID ALUMNO:</label>
                                        </div>    
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newTipo" id="newTipo" required/>
                                            <label for="newTipo">Tipo:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newDes" id="newDes" required/>
                                            <label for="newDes">Descripcion:</label>
                                        </div>
                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="number" name="newCoord" id="newCoord" required/>
                                            <label for="newCoord">ID COORDINADOR:</label>
                                        </div>
                                        <div class="d-grid">
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="submit" name="btnnewNovedad" id="btnnewNovedad" value="Enviar">
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="reset" name="" id="" value="Restablecer">
                                        </div>
                                        <br/>
                                        <a class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2 d-flex justify-content-center" href="../novedad.php">Regresar</a>
                                    </form>      
                            </div> 
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>