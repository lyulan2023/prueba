<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="StyleSheet" href="estilos/estilos.css?v=8" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Programa</title>
</head>
<body onload="mueveReloj()">
  


      <div id="columna1">
        <p>Formulario de consulta </p>
        <form action="pagina2.php" method="post">
    Ingrese el mail del alumno:
    <input type="text" name="mail"><br>
    <input type="submit" value="buscar">
  </form>
      <form action="pagina2.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="mail"><br>
    Seleccione el curso:
    <select name="codigocurso">
      <option value="1">Javascript</option>
      <option value="2">ASP</option>
      <option value="3">JSP</option>
    </select>
    <br>
    <input type="submit" value="Registrar">
  </form>
  
        
        <br> Color de fuente:
        <select onChange="cambiarColorFuente()" id="colorfuente">
        <option value="#000000">negro</option>
        <option value="#ff0000">rojo</option>
        <option value="#00ff00">verde</option>
        <option value="#0000ff">azul</option>
        </select>
        <br> Cambiar tamaño de fuente:
        <select onChange="cambiarTamanoFuente()" id="tamanofuente">
        <option value="10px">10</option>
        <option value="12px">12</option>
        <option value="14px">14</option>
        <option value="16px">16</option>
        <option value="18px">18</option>
        <option value="20px">20</option>
        <option value="22px">22</option>
        <option value="24px">24</option>
        </select>
        
    <h1> Hola mundo </h1>
    <h1 id="titulo">Este es un título dinámico</h1>
    <input type="button" value="Cambiar Color" onClick="cambiarColor()">
    <input type="button" value="Cambiar Tamaño de Fuente" onClick="cambiarTamanoFuente()">
    <input type="button" value="Cambiar Texto" onClick="cambiarTexto()">

    
    <button onclick="addTextNode('YES! ');">YES!</button>
    <button onclick="addTextNode('NO! ');">NO!</button>
    <button onclick="addTextNode('WE CAN! ');">WE CAN!</button>

    <p id="p1">First line of paragraph.</p>

    <input type="button" value="Agregar nodo tipo elemento" onClick="agregar()">
    
    <div id="lista1"></div>
  
    
    <form name="form_reloj">
      <input type="text" name="reloj" size="10">
      </form>
      
      <div>
        <center><h3 id="counter-label">0</h3></center>
    </div>
    <center>
        <div>
            <button onclick="incrementClick()">Incrementa</button>
            <button onclick="resetCounter()">Reset Conteo</button>
            <input type="text" onfocus="myFunction(this)">
        </div>
    </center>

  

    <p class="resaltadop">Esta es la clase de Desarrollo de aplicaciones de <strong>Internet</strong>  </p>
    <img src="img/imagen1.png" alt="Imgen de Desarrollo de Aplicaciones" width="300" height="300"
     title="Imagen 1">
     <figcaption>Img1. Presentación de la materia Desarrollo de Aplicaciones.</figcaption>
     <a href="https://itsqmet.edu.ec/">ITSQMET</a><br>
     <ul class="cuadrado">
      <li>Brasil</li>
      <li>Uruguay</li>
      <li>Argentina</li>
    </ul></div>
    
   <div id="columna2">
    <p id="fondo">Uso de tabla </p>
    
    <table>
      <caption>Tabla de Saldos por meses</caption>
  <tr>
    <th>Mes</th>
    <th>Día</th>
    <th>Saldo</th>
  </tr>
  <tr>
    <td>Enero</td>
    <td>16</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Febrero</td>
    <td>20</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Marzo</td>
    <td>25</td>
    <td>$250</td>
  </tr>
   </table>
  </div>  
  <script type="text/javascript" src="JS/funciones.js"></script>
</body>
</html>
