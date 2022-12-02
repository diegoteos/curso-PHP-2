
<?php
// Varios destinatarios
$para  = 'alejandra---777@hotmail.com';

// título
$título = 'La primera prueba';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
  <form action="https://www.google.com/" method="post">
    <input type="txt" name="telefono" id="telefono">
    <button type="submit">Enviar</button>
</form>
<a href="google.com" target="_blank">hola</a>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
//$cabeceras .= 'Content-type: text/html; charset="UTF-8"' . "\r\n";
$cabeceras .=
    'Content-type: text/html; charset="UTF-8"' . "\r\n" .
    'From: guatemala.com' . "\r\n" .
    'Reply-To: alejandra---777@hotmail.com' . "\r\n" . // devuelve la respuesta a este correo
    'X-Mailer: PHP/' . phpversion();



// Enviarlo
mail($para, $título, $mensaje, $cabeceras);












echo "correo enviado a $para";



?>








