<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="icon" href="img/etec.png" type="image/png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Controle Diabetes</title>
</head>
<body>
    <section class="cabecalho bg-light py-3">
        <div class="container text-right">
            <a href="https://www.ubbonline.org.br/" class="btn btn-outline-primary">Consulte um Profissional</a>
        </div>
    </section>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <b class="titulo">Medicamentos</b>
                    </div>
                    <div class="card-body">
                        <?php include_once("./php/consulta_med.php"); ?>
                        <a href="index2.html" class="btn btn-primary mt-3 w-100">Registros Paciente/Medicamentos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <b class="titulo">Paciente</b>
                    </div>
                    <div class="card-body">
                        <?php include_once("./php/consulta_pac.php"); ?>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <b class="titulo">IMC</b>
                         <!-- Formulário para entrada de peso e altura -->
                        <form method="POST" action="./php/imc.php">
                            <label for="peso">Nome Paciente:</label>
                            <input type="text" step="0.1" name="nome_pc" id="id_pc" required><br><br>

                            <button type="submit">Calcular IMC</button>
                            <!--<a href="./php/imc.php" class="btn btn-success mt-3 w-100">Calcular IMC</a>-->
                        </form>

                    </div>
                    <div class="card-body">
                        <?php include_once("./php/consulta_pac.php"); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="card">
                    <div class="card-header text-center bg-success text-white">
                        <b class="titulo">Controle Diabetes</b>
                    </div>

                    <div class="">
                        <!-- chama o grafico.php-->
                    
                    </div>
                    
                    <div class="card-body">
                        <a href="index3.html" class="btn btn-success mt-3 w-100">Registrar Glicemia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
