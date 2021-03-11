<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
<h1>N.E.R.F shop <br/><br/></h1>
  
<h1>FORMULARIO BLASTERS<br/><br/></h1>
        <form action="guardar-blaster.php" method="POST">
    <h2>Página Web 1    Crear blaster nuevo </h2>
    <br/><br/>    
        blaster: <input type="text" name="nombre" > 
        <br/><br/>
        mecanismo: <input type="int" name="firemech" > 
        <br/><br/>
        serie: <input type="int" name="series" >
        <br/><br/>
        disponibilidad: <input type="int" name="shelfstat" > 
        <br/><br/>
        ammotype: <input type="int" name="ammotype" >
        <br/><br/>
        <input type="submit" value="Guardar blaster en BD">

        
    </form>

         
</body>
</html>