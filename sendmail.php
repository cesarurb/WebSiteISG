<?php
  $name = $_POST["firstName"];
  $email = $_POST["email"];
  $academicLevel = $_POST["academicLevel"];
  $mensaje = "Nombre: $name\nEmail: $email\nConsulta: $academicLevel";
  // $mensaje = htmlspecialchars($mensaje);
  // $mensaje = stripslaches($mensaje);

  $to = "untstudentgroup.isaca@gmail.com";
  $subject = "PRE INSCRIPCIÓN REALIZADA DE $name";
  $header = "From: untstudentgroup.isaca@gmail.com \r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  $retval = @mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    echo "<script>alert('Tu pre inscripción ha sido enviada exitosamente, en breve nos pondremos en contacto contigo.');
window.location.assign('index.html');</script>";
  } else {
    echo echo "<script>alert('No se pudo registrar tu pre inscripción, inténtalo nuevamente y verifica la información.');
window.location.assign('index.html');</script>";
  }
?>
