 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<div class="row">
    <div id="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#">Gestión Usuario</a></li>
            <li><a href="#">Agregar Usuario</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <i class="fa fa-search"></i>
                    <span>Registro Usuario</span>
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
                <h4 class="page-header">Usuario</h4>

                <form class="form-horizontal"  method="POST" action="return false" onsubmit="return false">

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
                            <input type="text" class="form-control" placeholder="Segundo Apellido" data-toggle="tooltip" data-placement="bottom" title="Segundo Apellido" name="apellido2" id="apellido2" required/>
                        </div>


                        <label class="col-sm-2 control-label">Cédula</label>
                        <div class="col-sm-2">
                            <input  placeholder="Cédula" data-toggle="tooltip" data-placement="bottom" title="Cedula" name="cedula" id="cedula" required/>
                        </div>



                        <label class="col-sm-2 control-label">Contraseña</label>
                        <div class="col-sm-2">
                            <input type="password" class="form-control" placeholder="Contraseña" data-toggle="tooltip" data-placement="bottom" title="Contraseña" name="contrasena" id="contrasena" required/>
                        </div>

                        <div class="row form-group">
                            <label class="col-sm-2 control-label">Tipo de Usuario</label>
                            <div class="col-sm-2">
                                <select class="populate placeholder" name="usuario" id="usuario" >
                                    <option value="">-- Tipo de Usuario --</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Entrenador/Director">Entrenador/Director</option>
                                    <option value="Fisioterapeuta">Fisioterapeuta</option>
                                </select>

                            </div>
                        </div>



                        <label class="col-sm-2 control-label">Equipo / Grupo</label>
                        <div class="col-sm-2">
                            <select class="populate placeholder" name="equipo" id="s2_country" >
                                <option value="">-Equipo/Grupo-</option>
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
                                <option value="Ballet Folclórico">Ballet Folclórico</option>
                                <option value="Coro">Coro</option>
                                <option value="Orquesta">Orquesta</option>
                                <option value="Marimba">Marimba</option>
                                <option value="Rondalla">Rondalla</option>
                                <option value="Bailes Populares">Bailes Populares</option>

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
                       <!-- <div class="col-sm-2">
                            <button type="" class="btn btn-warning btn-label-left">
                                <span><i class="fa fa-clock-o"></i></span>
                                Imprimir
                            </button>
                        </div>-->
                        <div class="col-sm-2">
                            <p><button class="btn btn-primary btn-label-left" onclick="Validar1(document.getElementById('nombre').value, document.getElementById('apellido1').value,
                                            document.getElementById('apellido2').value, document.getElementById('cedula').value, document.getElementById('contrasena').value,
                                            document.getElementById('usuario').value, document.getElementById('s2_country').value
                                            );"> 
                                  <span><i class="fa fa-clock-o"></i></span>
                                    Guardar
                                </button></p>
                        </div>
                 
        
              
            </div>
                    <label id="errorMessage"></label>
                        <div id="resultado1"></div>
            </form>
                 <script>
                    function Validar1(nombre, apellido1, apellido2, cedula, contrasena, usuario, equipo)
                    {
                      
                        $.ajax({
                            url: "../controlador/servicioIngreso.php",
                            type: "POST",
                            data: "nombre=" + nombre + "&apellido1=" + apellido1 + "&apellido2=" + apellido2 + "&cedula=" + cedula + "&contrasena=" + contrasena
                                    + "&usuario=" + usuario + "&equipo=" + equipo,
                            success: function (resp) {
                                $('#resultado1').html(resp).show(200).delay(2500).hide(200);
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
