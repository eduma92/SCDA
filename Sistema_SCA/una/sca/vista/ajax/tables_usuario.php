<?php
include_once '../../modelo/listadoUsuario.php';
?>

<div class="row">
    <div id="breadcrumb" class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="#">Inicio </a></li>
            <li><a href="#">Gestión Usuario</a></li>
            <li><a href="#">Listar Usuarios</a></li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-name">
                    <span>Listado de Usuarios</span>
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
            <div class="box-content no-padding table-responsive">
                <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
                    <thead>
                        <tr>
                                <!--<th><label><input type="text" name="search_rate" value="Search rate" class="search_init" /></label></th>-->
                            <th><label><input type="text" name="buscar_name" value="Buscar Nombre" class="search_init" /></label></th>
                            <th><label><input type="text" name="buscar_cedula" value="Buscar Cédula" class="search_init" /></label></th>
                            <th><label><input type="text" name="buscar_area" value="Buscar Área" class="search_init" /></label></th>
                            <th><label><input type="text" name="buscar_tipo" value="Buscar Tipo Usuario" class="search_init" /></label></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td> <?php echo $row['nombre']; ?></td>
                                <td> <?php echo $row['cedula']; ?></td>
                                <td><?php echo $row['equipo']; ?></td>
                                <td><?php echo $row['tipoUsuario']; ?></td>
                                <!--<td><i class="fa fa-linux"></i></td>
                                <!--<td><i class="fa fa-linux"></i></td>-->
                                <!--<td><button name="boton" type=""><img src="img/lapiz.gif">  </button></td>-->
                                <!--<td><button name="boton" type=""><img src="img/eliminar.png"> </button></td>-->

                                <td class="td-actions">
                                    <div class="hidden-phone visible-desktop action-buttons">
                                        <a class="blue" href="#">
                                            <i class="assetsicon-zoom-in bigger-130"></i>
                                        </a>

                                        <a class="green" href="#">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <a class="red" href="#">
                                             <a class="red" href="../modelo/eliminar.php?cedula=<?php echo $row['cedula'];?>">
                                            <i class="icon-trash bigger-130"></i>
                                        </a>
                                    </div>
                            </tr>

                        <?php }
                        $resultado->free();
                        $conector->cerrar(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                                <!--<th>Rate</th>-->
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Área</th>
                            <th>Tipo Usuario</th>
                            <th></th>
                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
    function AllTables() {
        TestTable1();
        TestTable2();
        TestTable3();
        LoadSelect2Script(MakeSelect2);
    }
    function MakeSelect2() {
        $('select').select2();
        $('.dataTables_filter').each(function () {
            $(this).find('label input[type=text]').attr('placeholder', 'Search');
        });
    }
    $(document).ready(function () {
        // Load Datatables and run plugin on tables 
        LoadDataTablesScripts(AllTables);
        // Add Drag-n-Drop feature
        WinMove();
    });
</script>
