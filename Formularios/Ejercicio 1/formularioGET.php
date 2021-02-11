<!doctype html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <form method=get action=get.php>
        Nombre: <input type="text" name="usuario">
        <br>
        <input type ="Submit" name"Enviar" value="Enviar">
    </form>

    <!-- 
        Respuesta
        ---------------------------
        
        La diferencia entre los formularios es en el method uno utiliza get y el otro post
        despues lo guarda en diferentes array con el tipo de method que ha sido utilizado.

    -->

    <!-- 
    <form method=post action=get_post.php>
        Nombre: <input type="text" name="usuario">
        <br>
        <input type ="Submit" name"Enviar" value="Enviar">
    </form>
     -->
</body>
</html>