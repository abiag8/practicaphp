<head>
    <title>PHP Test</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 

 <label> Formulario </label>
    <form id="formulario" action="envio.php" method="post">
      <label for="nombre"> Nombre : </label>
      <input id="nombre" name="nombre" type="text">
      <label for="edad"> Edad : </label>
      <input id="edad" name="edad" type="number">
      <label for="apellido"> Apellido : </label>
      <input id="apellido" name="apellido" type="text">
      <select id="carrera" name="carrera">
      <option value="ingenieria"> Ingenieria </option>
      <option value="Diseño multimedial"> Diseño Multimedial </option>
      </select>
      
      <button type="button" id="enviar" onclick="validar()"> Enviar </button>
    </form>
  </body>
</html>