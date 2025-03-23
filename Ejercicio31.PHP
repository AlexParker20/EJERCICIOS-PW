<html>
<head>
<title>Un libro de visitas muy sencillo</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Libro de visitas</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" Tu comentario:<br>
<textarea cols="55" rows="4" name="comment"></textarea><br> Tu nombre:<br>
<input type="text" name="name"><br> Tu e-mail:<br>
<input type="text" name="email"><br>
<input type="submit" value="publica:">
</form>
<h3>Mostrar todos los comentarios</h3>
<?php
//Guarda el nombre del archivo en la variable
$file ="guestbook.txt";
//¿variable comment definida? ¿Nombre e e-mail no estan vacios?
//if isset($_POST['comment']) && $_POST['name'] ! = "" && $_POST['email'] != "" {
if (isset($_POST['comment']) && isset($_POST['name']) != "" && $_POST['email'] != "") {
$comment = $_POST['comment'];
$name = $_POST['name'];
$email = $_POST['email'];
//El archivo se abre para escritura-lectura
$fp = fopen($file, "r+");
//Leer todos los datos y almacenar en $old


$old = fread ($fp, filesize($file));
//Se crea el vinculo de e-mail
$email = "<a href=\mailto:$email\">$email</a>";
//Se incluye la fecha y se le da formato
$dateOfEntry = date ("y-n-j");
//Ocultar caracteres html, eliminar slashes, mantener saltos de linea
$comment = htmlspecialchars($comment);
//	$comment = stripslashes(n12br($comment));
$comment = stripslashes($comment);
//"Montar la entrada (entry) del libro de visitas
$entry="<p><b>$name</b> ($email) wrote on <i>$dateOfentry</i>;<br>$comment</p>\n";
//El cursor invisible salta al principio rewind($fp);
//Escribir en la nueva entrada antes de las antiguas en el archivo: fputs($fp, "$entry \n $old");
//cerrar rl archivo fclose($fp);
}
//Mostrar el archivo completo readfile($file);
?>
</body>
</html>
Ver la variacion con proteccion contra RELOAD en guestbook2.php del Cuaderno de trabajo pag53, ademas de la prevencion esta la averiguacion del IP del cliente y las funciones DATE

Responde a lo siguiente:
PREGUNTA	RESPUESTA
¿Qué hace htmlspecialchars()?	
¿Qué hace stripslahses()?	
¿Qué hace readfile()?	

Ejercicio 31 - 31_encuesta.php
NOTA: Hacer un script para un POLL o ENCUESTA que según la decision de los usuarios seleccionen de un tema. Se necesita un archivo de texto llamado RESULTS.TXT para almacenar lo que responden los usuarios.
Codigo largo para hacer.

<?php setcookie("check", 1);
if (isset($_POST['submit'])) { setcookie("vote", 1);
}
?>
<html>
<head>
<title>Encuesta de opinion</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Encuesta</h1>
<h3>¿Que opinas de este curso de php?</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="radio" name="reply" value="0"> Excelente, he aprendido mucho.<br>
<input type="radio" name="reply" value="1"> Mas o menos, es muy complicado.<br>
<input type="radio" name="reply" value="2">
¡Bah! para que quiero aprender php
<br> <br>
<?php
if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
//Mostrar el botòn submit solo si el formulario todavia
// no se ha enviado y el usuario no ha votado.
?>
<input name="submit" type="submit" value="vota!">
<?php
} else {
echo "<p>Gracias por tu voto.</p>\n";
//¿Formulario enviado? ¿cookies activas? ¿pero todavia no se ha votado?
if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
//Guardar nombre de archivo en la variable
$file="results.txt";
$fp=fopen($file, "r+");


$vote=fread($fp, filesize($file));
//Descomponer la string del archivo en array con coma como separador
$arr_vote = explode("," , $vote); //explode convierte la string en array
//¿que valor se ha selleccionado en el formulario?
//¡El recuento aumenta en 1!
$reply = $_POST['reply'];
$arr_vote[$reply]++;
//volver a montar la string
$vote = implode(",", $arr_vote); // implode vincula elementos de la array a string rewind($fp);
//Escribir nueva string en el archivo fputs($fp, $vote);
fclose($fp);
}
}
?>
</form>
<p>
[ <a href="results.php" target="_blank">ver resultados de la encuesta</a>]
</p>
</body>
</html>