<?php   
       
    // Si se recibe Datos con el Método GET, los procesamos
    if (isset($_GET['contador_esp'])){
        $var1 = $_GET['contador_esp'];
    }
   
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3">
    <title>Luz</title>

</head>
    <style>
        h1 {
            color: antiquewhite;
            background-color: dodgerblue;
            text-align: center;
        }
    </style>
<body>
    <header>
        <h1>Servidor de datos para ver luz</h1>
    </header>
    
    <section>
        <h3>Nivel: <?php echo $var1; ?></h3>
    </section>
</body>
</html>