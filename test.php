
<!doctype html>
<html lang="es">
<head>
    <?php
        include 'particles/head.php';
    ?>
</head>
<body>
  <form action="mailto:blacksk81@gmail.com" method="post" enctype="text/plain">
<table width="500px">
<tr>
    <td>
    <label for="first_name">Nombre: *</label>
    </td>
    <td>
    <input type="text" name="nombre" maxlength="50" size="25">
    </td>
</tr>
<tr>
    <td>
    <label for="telephone">Número de teléfono:</label>
    </td>
    <td>
    <input type="text" name="telefono" maxlength="25" size="15">
    </td>
</tr>
<tr>
    <td>
    <label for="email">Dirección de E-mail: *</label>
    </td>
    <td>
    <input type="text" name="correo" maxlength="80" size="35">
    </td>
</tr>

<tr>
    <td>
    <label for="comments">Comentarios: *</label>
    </td>
    <td>
    <textarea name="asunto" maxlength="500" cols="30" rows="5"></textarea>
    </td>
</tr>
<tr>
    <td colspan="2" style="text-align:right">
    <input type="submit" value="Enviar">
    </td>
</tr>
</table>
</form>






    <?php
        include 'particles/script.php';
    ?>
</body>
</html>