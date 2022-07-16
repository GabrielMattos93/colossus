<?php  
//Fuso horário padrão do sistema
date_default_timezone_set('America/Sao_Paulo');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colossus - Sistema de Registro de Ponto Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
<div class="modal modal-sheet position-static d-block py-5" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">Registrar ponto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>
      </div>
      <div class="modal-footer flex-column border-top-0">
      <a href="registrar_ponto.php" class="btn btn-lg btn-primary w-100 mx-0 mb-2" tabindex="-1"  aria-disabled="true">Registrar</a><br>
        <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Sair</button>

        <script>
            //var apHorario  = document.getElementById("horario"); 

            function atualizarHorario() {
            var data = new Date().toLocaleString("pt-br",{
                timeZone: "America/Sao_Paulo"
            });
            //var formatarData = data.replace(", ", " - "); 
            //apHorario.innerHTML = formatarData
            document.getElementById("horario").innerHTML= data.replace(", ", " - "); 
            }
            setInterval(atualizarHorario, 1000); 
        </script>
      </div>
    </div>
  </div>
</div>

<div class="b-example-divider"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>