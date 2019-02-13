<html>
<head>
<title>REGISTRO</title>
</head>
<body>
<?php
$usuario_registro=$_POST['usuario_registro'];
$email_registro=$_POST['email_registro'];
$password_registro=$_POST['password_registro'];

grabarContacto($usuario_registro, $email_registro, $password_registro);

function grabarContacto ($usuario_registro, $email_registro, $password_registro)
{
  echo "Usuario: $usuario_registro, Email: $email_registro";
  global $usuario_registro, $email_registro;
	$servername="localhost";
	$username="id8653301_adminana";
	$password="12345";

	try
   {
    	$conn = new PDO("mysql:host=$servername;dbname=id8653301_curriculumvitaeonline", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	//$conn->$dbname="mi_agenda";
    	$sql="CREATE TABLE if NOT EXISTS usuarios_curriculum (id int NOT NULL AUTO_INCREMENT , usuario varchar(50), email varchar(20), password varchar(70), PRIMARY KEY (id))";
    	$conn->exec($sql);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql="INSERT INTO usuarios_curriculum(usuario, email, password) VALUES('$usuario_registro', '$email_registro', '$password_registro')";
    	$conn->exec($sql);
    	echo "Hola, $usuario_registro se ha registrado correctamente con el email $email_registro";
   }

   catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}
?>

</body>
</html>
