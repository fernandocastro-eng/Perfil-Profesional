<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=".imgfares/favicon.png" type="image/png" sizes="16x16">
    <title>Inventario-Fares</title>
</head>
<body>
    <header>
        <h1>Ediciones Fares</h1>
</header>
    <nav>
        <ul>
            <li><a href="#">Principal</a>
            <li><a href="#">Libros</a>
            <li>
                <a href ="#">Inventario</a>
                <div>
                    <a href="cproductos.php">Crear producto</a>
                    <a href="#">Consultar Producto</a>
</div>
</li>
<li><a href="#">Contacto</a></li>
</ul>

</nav>
    <div>
        <h2>Inventario </h2>
</div>
    <tittle> Inventario-Fares</tittle>

    <form action="Guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">

</div>
    

    <div> 
        <label>Codigo: <input type="text" name="codigo" pattern="[0-9]{3,}"
        placeholder="Ingresar solo numeros" size="12" autofocus required> </label>
        <label class="codnum1">Producto: <input type="text" class="campof" name="nproducto"
        id="nproducto" pattern="[a-zA-Z\s]+{3,100}" placeholder="Ingresar solo letras" size="45"
        required> </label>

        <label>Costo: <input type="text" name="costop" id="costop"
        pattern="[0,9]+([,\.][0,9]+)?"> </label>
        <label>Porcentaje de venta:  <input type="text" name="porcentajev" id="porcentajev"
        maxlength="3" size="4"> </label>
</div>
<div> 
    <label>Precio de venta: <input type="text" name="pventa" id="pventa"
    readonly> </label>
    <label>Fecha: <input type="date" name="fecha_creacion"
    id="fecha_creacion"> </label>
<div>
    <img src="" width="200" alt="Imagen del producto...">
</div>
<input type="file" name="simagen" id="simagen">

<input type="submit" value="Guardar">
</form>

<footer>
    <p>Derechos Reservados &copy; 2004-2023 </p>
</footer>
 
</body>
</html>