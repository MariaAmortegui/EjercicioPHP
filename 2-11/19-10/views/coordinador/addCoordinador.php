<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR COORDINADOR</title>
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
                                <h1 class="login-heading mb-4 text-bold text-primary">AGREGAR COORDINADOR</h1>
                                    <form action="../../controllers/controladorCoordinador.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newNom" id="newNom"required/>
                                            <label for="newNom">Nombre:</label> 
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newApe" id="newApe"required/>
                                            <label for="newApe">Apellido:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" name="newCor" id="newCor"required/>
                                            <label for="newCor">Correo:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="newPro" id="newPro"required/>
                                            <label for="newPro">Programa:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="num" name="newNov" id="newNov"required/>
                                            <label for="newNov">Novedad:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="num" name="newRes" id="newRes"required/>
                                            <label for="newRes">Respuesta:</label>
                                        </div>
                                        <div class="d-grid">
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="submit" name="btnnewCoordinador" id="btnnewCoordinador" value="Enviar"/>
                                            <input class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="reset" name="" id="" value="Restablecer"/>
                                        </div>
                                        <br/>
                                        <a class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2 d-flex justify-content-center" href="../coordinador.php">Regresar</a>
                                    </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>