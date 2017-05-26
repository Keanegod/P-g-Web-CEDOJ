<?php 
    $curso = $_POST['txtcurso'];
    $horario = $_POST['txthorario'];
    $instalacion = $_POST['txtinstalacion'];
    $nombre = $_POST['txtnombre'];
    $lugar = $_POST['txtlugar'];
    $maestro = $_POST['txtmaestro'];
    
    $SERVER = "localhost";
    $BD = "paginasweb";
	$USER = "root";
	$PASS = "Admin123";
    $newID = 0;

    $conexion = mysqli_connect($SERVER, $USER,$PASS, $BD);

if (!$conexion)
{
    die("\nError de Conexión: " . mysqli_connect_errno());
	exit();
}
else{
    if($nombre != ""){
        //insertar nueva instalacion
        $query1 = "";
			$query1 = $query1 . "SELECT IFNULL(max(id_instalaciones), 0) + 1 AS id_instalaciones FROM instalaciones;";
			$resultado1 = mysqli_query($conexion, $query1);
			$newID1 = 0;
			while($object1 = mysqli_fetch_object($resultado1))
			{
				$newID1 = $object1->id_instalaciones;
			}
        $insert1 = "INSERT INTO instalaciones VALUES ($newID1,'$nombre', '$lugar');";
        if (!mysqli_query($conexion, $insert1)) {
			    printf("\nError al ejecutar insertar: %s\n", $conexion->error);
			}
        $instalacion = $newID1;
    }
        
			$query = "SELECT IFNULL(max(id_grupos), 0) + 1 AS id_grupos FROM grupos;";
			$resultado = mysqli_query($conexion, $query);
			
			while($object = mysqli_fetch_object($resultado))
			{
				$newID = $object->id_grupos;
			}
        $insert = "INSERT INTO grupos VALUES($newID,'$horario', '20','$maestro','$curso','$instalacion');";

			if (!mysqli_query($conexion, $insert)) {
			    ?>
<script type="text/javascript">alert("Nose insertaron los datos";</script>
        <?php
			}
            else{
                $insert2 = "INSERT INTO horarios(horario,FKgrupos) VALUES('$horario','$newID');";

			if (!mysqli_query($conexion, $insert2)) {
			    ?>
<script type="text/javascript">alert("No se insertaron los datos";</script>
        <?php
			}
                mysqli_close($conexion);
                 ?>
<script type="text/javascript">alert("Se insertaron los datos";</script>
        <?php
                header('Location:registro.php');
            }
}

			

?>