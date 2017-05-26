<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="images/ico/faviconcopia1.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WIZARD | REGISTRO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      <script src="js/jquery.validate.js"></script>
      <script src="js/Validacion.js"></script>
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	   <link href="../prettify.css" rel="stylesheet">
  </head>
  <body>
<?php $SERVER = "localhost";
    $BD = "paginasweb";
	$USER = "root";
	$PASS = "Admin123";
    $newID = 0;

    $conexion = mysqli_connect($SERVER, $USER,$PASS, $BD); ?>
   
   <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="../../index.html"></a>
                <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                       <li class="active"><a href="../../index.html">INICIO</a></li>
                        <li><a href="../../HISTORIA.html">HISTORIA</a></li>
                        <li><a href="../../SERVICIOS.html">SERVICIOS</a></li>
                        <li><a href="../../Fotos.html">FOTOS</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CURSOS<i class="icon-angle-down"></i></a>
                              <ul class="dropdown-menu">
                                <li><a href="../../Tareas.html">Club de Tareas</a></li>
                                <li><a href="../../Música.html">Música y Canto</a></li>
                                <li><a href="../../Masoterapia.html">Masoterapia y Quiroterapia</a></li>
                                <li><a href="../../Tae.html">Tae Kwon Do</a></li>
                                <li><a href="../../Futbol.html">Fútbol</a></li>
                                <li><a href="../../Básquetbol.html">Básquetbol</a></li>
                                <!--<li><a href="Voleibol.html">Voleibol</a></li>-->
                                <!--<li><a href="Aerobics.html">Aerobics</a></li>-->
                                <li><a href="../../Ballet.html">Ballet</a></li>
                                <li><a href="../../Zumba.html">Zumba</a></li>
                                <li><a href="../../DanzaFolklorica.html">Danza Folklorica</a></li>
                                <li><a href="../../BalletFolklorico.html">BalletFolklorico</a></li>
                                <!--<li><a href="Polinesio.html">Baile Polinesio</a></li>-->
                                <li><a href="../../Enfermeria.html">Enfermería</a></li>
                                 <!--<li><a href="Tanatologia.html">Tanatologia</a></li>-->
                                <li class="divider"></li>
                              </ul>
                        <li><a href="../../EVENTOS.html">EVENTOS</a></li>
                        <li><a href="../../Ubicación.html">UBICACIÓN</a></li>
                        <li><a href="../../Contacto.html">CONTACTAR</a></li>
                        <li><a href="registro.php">REGISTRO</a></li>
                        
                    </ul>        
            </div>
        </div>
         </div>
    </header>
    <!-- /header -->
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>WIZARD</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="../../index.html">INICIO</a> <span class="divider"></span></li>
                        <li class="active">WIZARD</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   


    <div class='container'>
			<section id="wizard">
			  <div class="page-header">
	            <h1 align="center">WIZARD DE REGISTRO</h1>
	          </div>

				<div id="rootwizard">
					<div class="navbar">
					  <div class="navbar-inner">
					    <div class="container">
					<ul>
					  <li><a href="#tab1" data-toggle="tab">Curso</a></li>
						<li><a href="#tab2" data-toggle="tab">Horario</a></li>
						<li><a href="#tab3" data-toggle="tab">Instalaciones</a></li>
						<li><a href="#tab4" data-toggle="tab">Maestro</a></li>
					</ul>

					 	</div>
					  </div>
					</div>

					<div id="bar" class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                      </div>
                    </div>
  <form id="formid" role="form" action="registrar.php" method="post" onsubmit="return validarformulario()">
					<div class="tab-content">
<!------------------------------------- inicio tabla -------------------->        
					    <div class="tab-pane" id="tab1">
               <select name="txtcurso">            
                     <?php 
                            
                      if (!$conexion)
			                 {
				                      die("\nError de Conexión: " . mysqli_connect_errno());
				                        exit();
			                 }

			                 $query = "SELECT id_cursos,nombre FROM cursos;";

			                 $resultado = mysqli_query($conexion, $query);

            				?>
                     <label class="label-control">Seleccione un curso</label>
                            
                    <?php
				                  while($object = mysqli_fetch_object($resultado))
				                  {
					           ?>
                          <option value="<?php echo $object->id_cursos ?>"><?php echo $object->nombre ?></option>
                    	<?php
                      		}
			                       mysqli_close($conexion);  
                          ?>
					    	  </select> 
					    </div>
					   
					    <div class="tab-pane" id="tab2">
					      		
			<div class="row">
			   <div class="col-xs-6 text-">
          			<label>Horario</label><br>
                   <select name="txthorario">
                    <?php for($i=10;$i<=18;$i++){
                    ?><option value="<?php echo $i?>:00:00"><?php echo $i?>:00:00</option><?php
} ?>
          			</select>
        		</div>
      		</div>

					    </div>
						
						<div class="tab-pane" id="tab3">
											
											<h2 class="modal-title">
      											Instalaci&oacute;n
    										</h2>	
  
  <div class="panel-body">
    <div class="panel-group col-xs-12" id="acoordion">

  		<div class="panel panel-success">
  			<div class="panel-heading">
  				<h4 class="panel-title">
  					<a data-toggle="collapse" data-parent="#acoordion" href="#persiana1">
  						<span class="text-primary text-bold">Asignar instalaci&oacute;n +</span>
  					</a>
  				</h4>
  			</div>

  			<div class="panel-collapse collapse" id="persiana1">
  				<div class="panel-body">
  					<div class="row">
        				<select name="txtinstalacion">
                    <?php 
                        $conexion = mysqli_connect($SERVER, $USER,$PASS, $BD); 
                        if (!$conexion)
			                   {
				                      die("\nError de Conexión: " . mysqli_connect_errno());
				                        exit();
			                     }

                  			$query1 = "SELECT id_instalaciones,nombre FROM instalaciones;";

			                   $resultado1 = mysqli_query($conexion, $query1);

				                  ?>          
                          <label class="label-control">Seleccione una instalaci&oacute;n</label>
                           
                          <?php
				                  while($object = mysqli_fetch_object($resultado1))
				                  {
					           ?>
                          <option value="<?php echo $object->id_instalaciones ?>"><?php echo $object->nombre ?></option>
                    	  
                            <?php
				                  }
			                     mysqli_close($conexion);  ?>
                 </select>

      				</div>
  				</div>
  			</div>
  		</div>

  		<div class="panel panel-info">
  			<div class="panel-heading">
  				<h4 class="panel-title">
  					<a data-toggle="collapse" data-parent="#acoordion" href="#persiana2">
  						<span class="text-primary text-bold">Agregar nueva instalaci&oacute;n +</span>
  					</a>
  				</h4>
  			</div>

  			<div class="panel-collapse collapse" id="persiana2">
  				<div class="panel-body">
  					<div class="row">
        				
        				<div class="col-xs-6 text-">
          					<label>Nombre</label><br>
          				<input name="txtnombre" id="txtnombre" type="text" maxlength="10" >
        				</div>

        				<div class="col-xs-6 text-">
          				<label>Lugar</label><br>
          				<input name="txtlugar" id="txtlugar" type="text" maxlength="10" >
				        </div>

      				</div>
  				</div>
  			</div>

  		</div>
  		</div>
 	</div>
 						</div>
						

						<div class="tab-pane" id="tab4">
													
									<div class="col-xs-6 text-">
          						<select name="txtmaestro">
                        <?php 
                        $conexion = mysqli_connect($SERVER, $USER,$PASS, $BD); 
                        if (!$conexion)
			                   {
				                        die("\nError de Conexión: " . mysqli_connect_errno());
				                          exit();
			                    }

			                     $query2 = "SELECT id_maestros,nombre FROM maestros;";

                          $resultado2 = mysqli_query($conexion, $query2);

				                ?>
                            <label class="label-control">Seleccione un maestro</label>
                        
                                <?php
				                            while($object = mysqli_fetch_object($resultado2))
				                            {
					                       ?>
                                    <option value="<?php echo $object->id_maestros ?>"><?php echo $object->nombre ?></option>
                    	 
                                    <?php
				                            }
			                              mysqli_close($conexion);  
                                    ?>
					    	                
                       </select>
        						</div>

                    <input type="submit" value="Enviar" class="btn btn-primary">

					    </div>
						
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">Primero</a></li>
							<li class="previous"><a href="#">Regresar</a></li>
							<li class="next last" style="display:none;"><a href="#">Ultimo</a></li>
						  	<li class="next"><a href="#">Siguiente</a></li>
						</ul>
<!------------------------------- fin de la tabla------------------------>
				   
					</div>
      </form>	
				</div>
			</section>
	</div>

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2017 <a target="_blank" href="https://www.facebook.com/cedoj.ac" title="CEDOJ">CEDOJ</a> Copyright
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="https://www.facebook.com/cedoj.ac"><i class="icon-facebook"></i></a></li>
                    <!--/bottom<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>-->
                    <li><a href="https://plus.google.com/108670282597504671796/posts"><i class="icon-google-plus"></i></a></li>                                         
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<script type="text/javascript">
    


     
      </script>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/registro.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../jquery.bootstrap.wizard.js"></script>
	<script src="../prettify.js"></script>
	<script>
function validarformulario(){
            var nombre = document.getElementById("txtnombre");
            var lugar = document.getElementById("txtlugar");
    
            if(nombre.value.length == 0 && lugar.value.length == 0){
                    return true;
            }
            else{
                if(nombre.value.length > 0 && lugar.value.length > 0){
                    return true;
                }
                else{
                    alert("Ingrese todos los datos de la instalacion");
                    return false;
                }
            }
                
        }
	$(document).ready(function() {
        
        
        $('#txtnombre').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z A-Z]/g, '');
          });
        
        $('#txtlugar').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z A-Z]/g, '');
          });
    
        
      
        
	  	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
				

			}, onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootwizard .progress-bar').css({width:$percent+'%'});
			}});
		window.prettyPrint && prettyPrint()
	});
	</script>
  </body>
</html>
