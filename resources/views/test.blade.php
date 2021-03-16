<form method="post" action="performCalls.php" enctype="multipart/form-data">
    <div class="card-header">
        <strong>Seleccione un tipo de campaña</strong>
    </div>
    <div class="card">
        <div class="card-body card-block" >
            <input type="radio" name="opcion" id="opcion" <?php if (isset($opcion) && $opcion=="cp1_checkbox") echo "checked";?> value="cp1_checkbox" onclick="csvFile.disabled = !this.checked"> Campaña Informativa&nbsp;
            <div id="tooltip">
                <i class="far fa-question-circle"></i>
                <span id="tooltiptext">Requiere: <br>
                    1 audio <br> 1 telefono</span>
            </div>
            <br>
            <input type="radio" name = "opcion" id="opcion" <?php if (isset($opcion) && $opcion=="cp2_checkbox") echo "checked";?>value="cp2_checkbox" onclick="csvFile.disabled = !this.checked"> Campaña Saldo&nbsp;
            <div id="tooltip">
                <i class="far fa-question-circle"></i>
                <span id="tooltiptext">Requiere: <br>
                    2 audio <br> 1 telefono <br> 1 saldo</span>
            </div>
            <br>
            <input type="radio" name = "opcion" id="opcion"<?php if (isset($opcion) && $opcion=="cp3_checkbox") echo "checked";?> value="cp3_checkbox" onclick="csvFile.disabled = !this.checked"> Campaña Personalizada&nbsp;
            <div id="tooltip">
                <i class="far fa-question-circle"></i>
                <span id="tooltiptext">Requiere: <br>
                    3 audio <br> 1 telefono <br> 1 nombre <br> 1 saldo</span>
            </div>
            <br>
            <br>
            <label for="texto">Subir archivo</label><br>
            <input id="csvFile"  type="file" name="csvFile" disabled/><br>
            <em><b>El archivo no debe contener espacios</b><br><br></em>

            <input type="submit" name="action" class="action" value="Upload and Initiate Calls"/>
        </div>
    </div>
</form>

<script>
    $(document).ready(function(){
    $( '.action' ).on( "click", function(event) {
        event.preventDefault();
        validarOpcion();
    });

    });

    function cargarArchivosCSV(){
        var archivo = $('input[name="csvFile"]').val();
        var extension= $('#csvFile').val().split(".").pop().toLowerCase();
        var returnError = false;
        console.log(extension);

        if(archivo ==""){
            swal({
                icon: 'error',
                text: 'Selecciona un archivo',
              })
            returnError = true;
        }
        else if($.inArray(extension, ['csv']) == -1)
        {
            swal({
                icon: 'error',
                text: '¡El archivo que intentas subir es invalido!',
              })
              returnError = true;
            $('#csvFile').val("");
        }
        else{
            $('#csvFile').removeClass('error');
            //window.location='/callblaster/perfomCalls';
        }

    }

    function validarOpcion(){
        var opcion = $('input[name="opcion"]');
        var returnError = false;

        for (let i = 0; i < opcion.length; i++) {
            if(opcion[i].checked){
                returnError = true;
                cargarArchivosCSV();
            }
        }
        if(!returnError){
            swal({
                icon: 'error',
                text: 'Debes elegir un tipo de campaña',
              })
        }
    }
</script>
