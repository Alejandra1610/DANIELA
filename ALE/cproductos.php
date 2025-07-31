<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="content="IE="edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagenes/icon.png" type="image/png" sizes="16*16">
    <link rel="stylesheet"  type="text/css"  href="./ESTILOS/colores.css">
    <link rel="stylesheet"  type="text/css" href="./ESTILOS/diseño.css" >
	<title>Inventario-Fares</title>
</head>
<body>

    <header id="titulo1" class="fcolor-d5">
        <h1>CEMGHRT</h1>
    </header>
    
    <nav class="fcolor-l4">
        <ul>
         <li><a href="#">Principal</a></li>
         <li><a href="#">Libro</a></li>
        <li class="f-desplegable">
           <a href="#" class="btndesplegable">Inventario</a>
        <div class="cont-desplegable">
           <a href="cproductos.php">Crear producto</a>
           <a href="#">Consultar producto</a>
        </div>
        </li>
        <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <section class="fcolor-l1 seccion-form">
    <div class="s-encabezado">
        <h2>INVENTARIO<h2>
    </div>

     <form class="fcolor-l5" action="guardar.php"  method="post" enctype="multipart/form-data" autocomplete="off">   
     
     <div id="codnom">
      <label id="codnom1">Código: <input type="text" name="codigo" id="codigo" pattern="[0-9]{3,}" 
      placeholder="Ingresar solo números" size="15" autofocus required> </label>

      <label id="codnom1">Producto: <input type="text" name="nproducto" id="nproducto" 
      pattern="[A-Za-z]{3,100}" placeholder="Ingresar solo letras" size="40" 
      autofocus required> </label>
    </div>  

    <div id="cospor">
     <label id="codnom1">Costo: <input type="text" name="costop" id="costop" 
     pattern="[0-9]+([,\.][0-9]+)?"> </label>

     <label class="codnom1">Porcentaje de venta: <input type="text"  class="campof" name="porcentajev"
      id="porcentajev"  maxlength="3" size="4"> </label>
    </div> 

    <div id="prefecha">
     <label class="codnom1">Precio de venta: <input type="text" class="campof" name="pventa" id="pventa" 
     readonly> </label>

     <label class="codnom1">Fecha: <input type="date" class="campof" name="fecha_creacion" 
     id="fecha_creacion"> </label>
    </div>

    <div id="csimagen">
     <img src="" width="200px" alt="Imagen del producto....">
    </div>

    <div id="botonimg">
     <input type="file"  class="campof" name="simagen" id="simagen">
    </div>

    <div>
     <input type="submit" value="Guardar" >
    </div>
    </form>
    </section>

    <footer class="fcolor-d5">
        <p>Derechos reservados &copy; 2024-2025 </p>
   </footer>  

</body>
</html>
<html>
