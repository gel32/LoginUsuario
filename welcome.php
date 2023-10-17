<?php
   include('session.php');
?>


<div align = "center">
<title>welcome</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

<h1>Hola, <?php echo $nombre . ' ' . $apellido; ?></h1>

<p>Gracias por ponerse en contacto con nosotros, por favor para mayor informacion pongase en contacto con el equipo especializado.</p> 
<p> Nos comunicaremos con usted a la brevedad para entregar una actualizacion de su requerimiento</p> 
<br>

<div id="after_submit"></div>
<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

  <div class="row">
    <label class="required" for="email">Correo electronico:</label><br />
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    <span id="email_validation" class="error_message"></span>
  </div>
  <br>

  <div class="row">
    <label class="required" for="name">Telefono:</label><br />
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    <span id="name_validation" class="error_message"></span>
  </div>
  <br>

  <div class="row">
    <label class="required" for="message">Mensaje:</label><br />
    <textarea id="message" class="input" name="message" rows="7" cols="100"></textarea><br />
    <span id="message_validation" class="error_message"></span>
  </div>
    <br>
    <input id="submit_button" type="submit" value="Enviar mensaje" />
</form>

<p>Responderemos lo antes posible a su requerimiento</p> 

  <body>
      <h2><a href = "logout.php">Salir</a></h2>
   </body>
