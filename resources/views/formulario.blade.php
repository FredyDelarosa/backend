<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="col-sm-8">
            <h1>Orden de Servicio de Soporte Técnico</h1>

            <form action="/guardar" method="post">
                <div class="form-group row">
                    
                    <label for="inputfecha" class="col-sm-2 col-form-label" >Fecha Recep.</label>
                    <div class="col-sm-10">
                        <input name="fecha" type="date" class="form-control" id="inputfecha" placeholder="Fecha de recepción">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputarea" class="col-sm-2 col-form-label" >Área</label>
                    <div class="col-sm-10">
                        <input name="area" type="text" class="form-control" id="inputarea" placeholder="Área">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputresponsable" class="col-sm-2 col-form-label" >Responsable</label>
                    <div class="col-sm-10">
                        <input name="responsable" type="text" class="form-control" id="inputresponsable" placeholder="Nombre del responsable">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputcargo" class="col-sm-2 col-form-label" >Cargo</label>
                    <div class="col-sm-10">
                        <input name="cargo" type="text" class="form-control" id="inputcargo" placeholder="Cargo">
                    </div>
                </div>

                <h2>Seleccione el Inconveniente</h2>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="conexion" type="checkbox" id="conexion">
                            <label class="col-sm-2 form-check-label" for="conexion">Conexion de Red</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="fallo" type="checkbox" id="fallo">
                            <label class="col-sm-2 form-check-label" for="fallo">Fallo del Equipo</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="textdescripcion" class="col-sm-2 col-form-label" >Describa el Inconveniente:</label>
                    <div class="col-sm-10">
                        <textarea name="descripcion" id="textdescripcion" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputgrupo" class="col-sm-2 col-form-label" >Grupo Trabajo</label>
                    <div class="col-sm-10">
                        <input name="grupo" type="text" class="form-control" id="inputgrupo" placeholder="Grupo de Trabajo">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputequipo" class="col-sm-2 col-form-label" >Nom. Equipo</label>
                    <div class="col-sm-10">
                        <input name="equipo" type="text" class="form-control" id="inputequipo" placeholder="Nombre del Equipo">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputanti" class="col-sm-2 col-form-label" >Antivirus</label>
                    <div class="col-sm-10">
                        <input name="anti" type="text" class="form-control" id="inputanti" placeholder="Antivirus">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputip" class="col-sm-2 col-form-label" >Dirección IP</label>
                    <div class="col-sm-10">
                        <input name="ip" type="text" class="form-control" id="inputip" placeholder="Dirección IP">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputmac" class="col-sm-2 col-form-label" >Dir. MAC</label>
                    <div class="col-sm-10">
                        <input name="mac" type="text" class="form-control" id="inputmac" placeholder="Dirección MAC">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script src="/resources/js/app.js"></script>
    <script src="/resources/js/bootstrap.js"></script>

</body>
</html>