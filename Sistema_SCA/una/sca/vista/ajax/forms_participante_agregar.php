 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<div class="row">
    <div id="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Gestión Participante</a></li>
            <li><a href="#">Agregar Participante</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Ficha Individual</span>
                </div>
                <div class="box-icons">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <div class="no-move"></div>
            </div>
            <div class="box-content">
                <h4 class="page-header">Ficha Individual</h4>

                <form class="form-horizontal"  method="POST" action="return false" onsubmit="return false">

                    <div class="form-horizontal">
                            <input class="" type="file" id="files" name="files[]" onclick="LoadPicture('list');" />
                            <br />
                            <span id="list"> </span>


                    <!--<script>
                            function archivo(evt) {
                                    var files = evt.target.files; // FileList object

                            // Obtenemos la imagen del campo "file".
                                    for (var i = 0, f; f = files[i]; i++) {
                                    //Solo admitimos imágenes.
                                            if (!f.type.match('image.*')) {
                                                    if(f.type.match('image.*'))
                                                            continue;
                                            }

                                            var reader = new FileReader();

                                            reader.onload = (function(theFile) {
                                                    return function(e) {
                                                    // Insertamos la imagen
                                                            document.getElementById("list").innerHTML = ['<img style="width:100px;height:100" class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                                                    };
                                            })(f);

                                            reader.readAsDataURL(f);
                                    }
                            }

                            document.getElementById('files').addEventListener('change', archivo, false);
                    </script>
            </div>
             
                    -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Nombre" data-toggle="tooltip" data-placement="bottom" title="Nombre" name="nombre" id="nombre" required/>
                        </div>

                        <label class="col-sm-2 control-label">Primer Apellido</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Primer Apellido" data-toggle="tooltip" data-placement="bottom" title="Primer Apellido" name="apellido1" id="apellido1" required/>
                        </div>

                        <label class="col-sm-2 control-label">Segundo Apellido</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Segundo Apellido" data-toggle="tooltip" data-placement="bottom" title="Segundo Apellido" name="apellido2" id="apellido2">
                        </div>


                        <label class="col-sm-2 control-label">Carnet</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Carnet" data-toggle="tooltip" data-placement="bottom" title="Carnet" name="carnet" id="carnet" >
                        </div>


                        <label class="col-sm-2 control-label">Fecha Nacimiento</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Fecha Nacimiento" name="nacimiento" id="nacimiento">

                        </div>

                        <label class="col-sm-2 control-label">Cédula o Pasaporte</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Cédula o Pasaporte" data-toggle="tooltip" data-placement="bottom" title="Cedula" name="cedula" id="cedula" required/>
                        </div>

                        <label class="col-sm-2 control-label">Teléfono celular</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Teléfono celular" data-toggle="tooltip" data-placement="bottom" title="Telefono" name="celular" id="celular">
                        </div>

                        <label class="col-sm-2 control-label">Teléfono habitación</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Teléfono habitación" data-toggle="tooltip" data-placement="bottom" title="Telefono habitación" name="habitacion" id="habitacion">
                        </div>



                        <label class="col-sm-2 control-label">Fax</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Fax" data-toggle="tooltip" data-placement="bottom" title="Fax" name="fax" id="fax">
                        </div>


                        <label class="col-sm-2 control-label">Cuenta Bancaria</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Cuenta Bancaria" data-toggle="tooltip" data-placement="bottom" title="Cuenta" name="cuentaBancaria" id="cuentaBancaria">
                        </div>

                        <label class="col-sm-2 control-label">Correo Electrónico</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Correo Electrónico" data-toggle="tooltip" data-placement="bottom" title="Correo" name="correo" id="correo">
                        </div>



                        <label class="col-sm-3 control-label">Dirección Tiempo Lectivo</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Dirección Tiempo Lectivo" data-toggle="tooltip" data-placement="bottom" title="Dirección" name="lectivo" id="lectivo" required/>
                        </div>

                        <label class="col-sm-3 control-label">Dirección Tiempo No Lectivo</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Dirección Tiempo No Lectivo" data-toggle="tooltip" data-placement="bottom" title="Dirección" name="noLectivo" id="noLectivo" required/>
                        </div>

                        <label class="col-sm-2 control-label">Tipo de Sangre</label>
                        <div class="col-sm-3">
                            <select class="populate placeholder" name="country" id="sangre">
                                <option value="">-- Tipo de Sangre --</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="O+">O+</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>


                    </div>
                    <div class="form-group">
                        <h4 class="page-header">Información Universitaria</h4>
                        <label class="col-sm-2 control-label">Facultad</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Facultad" data-toggle="tooltip" data-placement="bottom" title="Facultad" name="facultad" id="facultad" required/>
                        </div>

                        <label class="col-sm-2 control-label">Escuela</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Escuela" data-toggle="tooltip" data-placement="bottom" title="Escuela" name="escuela" id="escuela" required/>
                        </div>

                        <label class="col-sm-2 control-label">Nivel que cursa</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Nivel que cursa" data-toggle="tooltip" data-placement="bottom" title="Nivel" name="nivel" id="nivel" required/>
                        </div>


                        <label class="col-sm-2 control-label">Carrera</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Carrera" data-toggle="tooltip" data-placement="bottom" title="Carrera" name="carrera" id="carrera" required/>
                        </div>

                        <label class="col-sm-2 control-label">Tipo de Beca</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Tipo de Beca" data-toggle="tooltip" data-placement="bottom" title="Tipo de Beca" name="beca" id="beca">
                        </div>

                        <label class="col-sm-2 control-label">Ciclo Lectivo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Ciclo Lectivo" data-toggle="tooltip" data-placement="bottom" title="Ciclo Lectivo" name="ciclo" id="ciclo" required/>
                        </div>

                        <label class="col-sm-2 control-label">Créditos Matriculados</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Créditos Matriculados" data-toggle="tooltip" data-placement="bottom" title="Créditos" name="creditos" id="creditos">
                        </div>

                    </div>
                    <div class="form-group">
                        <h4 class="page-header">Datos Personales</h4>
                        <label class="col-sm-2 control-label">Lateralidad</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Lateralidad" data-toggle="tooltip" data-placement="bottom" title="Lateralidad" name="lateralidad" id="lateralidad">
                        </div>

                        <label class="col-sm-2 control-label">Puesto</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Puesto" data-toggle="tooltip" data-placement="bottom" title="Puesto" name="puesto" id="puesto">
                        </div>

                        <label class="col-sm-2 control-label">Estatura</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Estatura" data-toggle="tooltip" data-placement="bottom" title="Estatura" name="estatura" id="estatura">
                        </div>

                        <label class="col-sm-2 control-label">Peso</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Peso" data-toggle="tooltip" data-placement="bottom" title="Peso" name="peso" id="peso">
                        </div>
                        <label class="col-sm-2 control-label">IMC</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="IMC" data-toggle="tooltip" data-placement="bottom" title="IMC" name="IMC" id="IMC">
                        </div>


                        <label class="col-sm-2 control-label">Talla de Camisa</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Talla de camisa" data-toggle="tooltip" data-placement="bottom" title="Talla de Camisa" name="tallaCamisa" id="tallaCamisa">
                        </div>

                        <label class="col-sm-2 control-label">Talla de Pantaloneta</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Talla de camisa" data-toggle="tooltip" data-placement="bottom" title="Talla Pantaloneta" name="tallaPantalon" id="tallaPantalon">
                        </div>

                        <label class="col-sm-2 control-label">Talla de buzo</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Talla de buzo" data-toggle="tooltip" data-placement="bottom" title="Talla de Buzo" name="tallaBuzo" id="tallaBuzo">
                        </div>
                        <label class="col-sm-2 control-label">Calzado</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" placeholder="Calzado" data-toggle="tooltip" data-placement="bottom" title="Calzado" name="calzado" id="calzado">
                        </div>

                        <label class="col-sm-3 control-label">Fecha de Ingreso</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Fecha de Ingreso" data-toggle="tooltip" data-placement="bottom" title="Ingreso" name="ingreso" id="ingreso" >
                        </div>
                        <label class="col-sm-3 control-label">Fecha de  Salida</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Fecha de Salida " data-toggle="tooltip" data-placement="bottom" title="Salida" name="salida" id="salida">
                        </div>

                        <label class="col-sm-2 control-label">Asignar Equipo(s) / Grupo(s)</label>
                        <div class="col-sm-2">
                            <select class="populate placeholder" name="country" id="equipo">
                                <option value="">-Equipos/Grupos-</option>
                                <option value="Ajedrez">Ajedrez</option>
                                <option value="Atletismo">Atletismo</option>
                                <option value="Baloncesto Masculino">Baloncesto Masculino</option>
                                <option value="Baloncesto Femenino">Baloncesto Femenino</option>
                                <option value="Balon Mano">Balon Mano</option>
                                <option value="Fútbol Masculino">Fútbol Masculino</option>
                                <option value="Fútbol Femenino">Fútbol Femenino</option>
                                <option value="Fútbol Sala Masculino">Fútbol Sala Masculino</option>
                                <option value="Fútbol Sala Femenino">Fútbol Sala Femenino</option>
                                <option value="Karate">Karate</option>
                                <option value="Porrismo">Porrismo</option>
                                <option value="Taekwondo">Taekwondo</option>
                                <option value="Tenis De Mesa">Tenis De Mesa</option>
                                <option value="Voleibol Masculino">Voleibol Masculino</option>
                                <option value="Voleibol Femenino">Voleibol Femenino</option>
                                <option value="Teatro">Teatro</option>
                                <option value="Bailes Populares">Bailes Populares</option>
                                <option value="Marimba">Marimba</option>
                                <option value="Ballet Folclórico">Ballet Folclórico</option>
                                <option value="Coro">Coro</option>
                                <option value="Rondalla">Rondalla</option>
                                <option value="Orquesta">Orquesta</option>
                            </select>
                        </div>

                    </div>



                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                                <button type="cancel" class="btn btn-default btn-label-left">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                        Cancelar
                                </button>
                        </div>
                        <!--
                        <div class="col-sm-2">
                                <button type="submit" class="btn btn-warning btn-label-left">
                                <span><i class="fa fa-clock-o"></i></span>
                                        Imprimir
                                </button>
                        </div>-->

                        <div class="col-sm-2">
                            <p><button class="btn btn-primary btn-label-left" onclick="Validar3(document.getElementById('nombre').value, document.getElementById('apellido1').value,
                                            document.getElementById('apellido2').value, document.getElementById('carnet').value, document.getElementById('nacimiento').value,
                                            document.getElementById('cedula').value, document.getElementById('celular').value,
                                            document.getElementById('habitacion').value, document.getElementById('fax').value,
                                            document.getElementById('cuentaBancaria').value, document.getElementById('correo').value,
                                            document.getElementById('lectivo').value, document.getElementById('noLectivo').value,
                                            document.getElementById('sangre').value, document.getElementById('facultad').value,
                                            document.getElementById('escuela').value, document.getElementById('nivel').value,
                                            document.getElementById('carrera').value, document.getElementById('beca').value,
                                            document.getElementById('ciclo').value, document.getElementById('creditos').value,
                                            document.getElementById('lateralidad').value, document.getElementById('puesto').value,
                                            document.getElementById('estatura').value, document.getElementById('peso').value,
                                            document.getElementById('IMC').value, document.getElementById('tallaCamisa').value,
                                            document.getElementById('tallaPantalon').value, document.getElementById('tallaBuzo').value,
                                            document.getElementById('calzado').value, document.getElementById('ingreso').value,
                                            document.getElementById('salida').value, document.getElementById('equipo').value
                                            );"> 
                                    <span><i class="fa fa-clock-o"></i></span>
                                    Guardar
                                </button></p>
                        </div>
                    </div>
                    <label id="errorMessage"></label>
                    <div id="resultado3"></div>
                </form>

                <script>
                    function Validar3(nombre, apellido1, apellido2, carnet, nacimiento, cedula, celular, habitacion, fax, cuentaBancaria, correo, lectivo, noLectivo, sangre, facultad, escuela, nivel, carrera, beca, ciclo, creditos, lateralidad, puesto, estatura, peso, IMC, tallaCamisa, tallaPantalon, tallaBuzo, calzado, ingreso, salida, equipo)
                    {
                        alert("jkl");
                        $.ajax({
                            url: "../controlador/servicioIngresoParticipante.php",
                            type: "POST",
                            data: "nombre=" + nombre + "&apellido1=" + apellido1 + "&apellido2=" + apellido2 + "&carnet=" + carnet + "&nacimiento=" + nacimiento
                                    + "&cedula=" + cedula + "&celular=" + celular + "&habitacion=" + habitacion + "&fax=" + fax + "&cuentaBancaria=" + cuentaBancaria + "&correo=" + correo + "&lectivo=" + lectivo
                                    + "&noLectivo=" + noLectivo + "&sangre=" + sangre + "&facultad=" + facultad + "&escuela=" + escuela + "&nivel=" + nivel
                                    + "&carrera=" + carrera + "&beca=" + beca + "&ciclo=" + ciclo + "&creditos=" + creditos + "&lateralidad=" + lateralidad
                                    + "&puesto=" + puesto + "&estatura=" + estatura + "&peso=" + peso + "&IMC=" + IMC + "&tallaCamisa=" + tallaCamisa
                                    + "&tallaPantalon=" + tallaPantalon + "&tallaBuzo=" + tallaBuzo + "&calzado=" + calzado + "&ingreso=" + ingreso + "&salida=" + salida
                                    + "&equipo=" + equipo,
                            success: function (resp) {
                                $('#resultado3').html(resp).show(200).delay(2500).hide(200);
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
// Run Select2 plugin on elements
    function DemoSelect2() {
        $('#s2_with_tag').select2({placeholder: "Select OS"});
        $('#s2_country').select2();
    }
// Run timepicker
    function DemoTimePicker() {
        $('#input_time').timepicker({setDate: new Date()});
    }
    $(document).ready(function () {
        // Create Wysiwig editor for textare
        TinyMCEStart('#wysiwig_simple', null);
        TinyMCEStart('#wysiwig_full', 'extreme');
        // Add slider for change test input length
        FormLayoutExampleInputLength($(".slider-style"));
        // Initialize datepicker
        $('#input_date').datepicker({setDate: new Date()});
        // Load Timepicker plugin
        LoadTimePickerScript(DemoTimePicker);
        // Add tooltip to form-controls
        $('.form-control').tooltip();
        LoadSelect2Script(DemoSelect2);
        // Load example of form validation
        LoadBootstrapValidatorScript(DemoFormValidator);
        // Add drag-n-drop feature to boxes
        WinMove();
    });
</script>
