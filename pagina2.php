<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue registrado.";
  header('Location:index.php')

  ?>

</body>

</html>
