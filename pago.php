  <?php
  $conexion = mysqli_connect("localhost", "root", "", "lospagos") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into pago(pais,nombres,apellidos,tarjeta,pago,fecha,cvv,cp,ciudad,municipio,telefono,email) values 
                    
					   ('$_REQUEST[pais]','$_REQUEST[nombres]','$_REQUEST[apellidos]',$_REQUEST[tarjeta],'$_REQUEST[pago]','$_REQUEST[fecha]',$_REQUEST[cvv],$_REQUEST[cp],'$_REQUEST[ciudad]','$_REQUEST[municipio]',$_REQUEST[telefono],'$_REQUEST[email]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  header("Location: index.html");
  exit;
  ?>
 