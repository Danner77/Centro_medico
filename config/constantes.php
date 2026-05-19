<?php
    // Parametros DB local - constantes
    define('USER', 'dmacias'); // Crea la constante USER con valor 'root'
    define('PW', '12345678');
    define('HOST', 'localhost');
    define('BD', 'Centro_medico');
    
    // Parametros DB remota - (infinityfree)
    /*define('USER', 'if0_41718024');  
    define('PW', 'n2nFnNrfeFNm0FG');
    define('HOST', 'sql100.infinityfree.com');
    define('BD', 'if0_41718024_centro');*/
?>

<?php
    // script para crear una conexión con la BD

    require_once 'constantes.php';

    function conectar()
    {
        // Conexión con la BD
        $conexion = mysqli_connect(HOST, USER, PW, BD); 

        // Establecer conjunto de caracteres para el hosting
        mysqli_set_charset($conexion, 'utf8mb4'); 

        // Verificar la conexión con la BD

        if (!$conexion) 
        {
            die("La conexión con la BD falló: " + mysqli_error($conexion));  
        }
        else
        {
            die("Conexión a la BD exitosa!"); 
        }
        return conexion;
    }
?>

<?php
    require_once "../config/conexion.php";
    
    conectar();
?>