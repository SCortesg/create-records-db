<?php
    $nombre = $_REQUEST["nombre"];
    $firemech = $_REQUEST["firemech"];
    $series = $_REQUEST["series"];
    $shelfstat = $_REQUEST["shelfstat"];
    $ammotype = $_REQUEST["ammotype"];
    //1. Connect to Database
    $host = "localhost";
    $dbname = "nerf";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. Build SQL sentence
    $sql = "INSERT INTO blasters (id_blaster, name, firemech, series, shelfstat, ammotype) VALUES(NULL, '$nombre', '$firemech', '$series', '$shelfstat', ' $ammotype')";

    //3. Prepare SQL sentence
    $a = $conexion->prepare($sql);

    //4. Execute SQL sentence
    $resultado = $a->execute();   

    ?>
    <h1>N.E.R.F shop <br/><br/></h1>
  
  <h1>FORMULARIO BLASTERS<br/><br/></h1>
        <form action="guardar-blaster.php" method="POST">
    <h2>Página Web 1    Crear blaster nuevo </h2>
    <br/><br/>    
        blaster: <input type="text" name="nombre" value="<?php echo $nombre ?>"> 
        <br/><br/>
        mecanismo: <input type="int" name="firemech" value="<?php echo $firemech ?>"> 
        <br/><br/>
        serie: <input type="int" name="series" value="<?php echo $series ?>">
        <br/><br/>
        disponibilidad: <input type="int" name="shelfstat" value="<?php echo $shelfstat ?>"> 
        <br/><br/>
        ammotype: <input type="int" name="ammotype" value="<?php echo $ammotype ?>">
        <br/><br/>
        <input type="submit" value="Guardar blaster en BD">

        
    </form>
        <?php     
        if($resultado){
            echo "El blaster de nombre: $nombre se ha guardado con éxito";   
    }
    else{
        echo "Error al crear blaster";
    }

?>