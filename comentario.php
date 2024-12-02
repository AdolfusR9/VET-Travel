  <?php
  $conexion = mysqli_connect("localhost", "root", "", "comentario") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into comentarios(nombres,apellidos,email,telefono,mensaje) values 
                       ('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[email]',$_REQUEST[telefono],'$_REQUEST[mensaje]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  header("Location: index.html");
  exit;
  ?>