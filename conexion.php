<?php
	//$server="localhost";
	$server= $IP;
	//$username="root";
	$username="adn551";
	$password="";
	//$db='carritocompras';
	$db= "carritocompras";
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
	
	// Bd coneccion
    //$servername = $IP;
    //$username = "joseduin";
    //$password = "";
    //$database = "c9";
    $dbport = 3306;
    
    // Bd configuracion
    /*
    $conn = new mysqli($servername, $username, $password, $database, $dbport)
                  or die("problemas de conexion "  . $conn->connect_error); 
                  */
    //mysqli_set_charset($conn, "utf8");
    mysqli_set_charset($con, "utf8");
    
    // Datatie Ccs
    date_default_timezone_set('America/Caracas');
    $datetime = new DateTime;
?>