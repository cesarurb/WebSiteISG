<?php
  $name = $_POST["firstName"] . $_POST["lastName"];
  $university = $_POST["university"];
  $otherUniversity = $_POST["otherUniversity"];
  $academicLevel = $_POST["academicLevel"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $mensaje = "Nombre: $name\nUniversidad: $university\nOtra: $otherUniversity\nNivel académico: $academicLevel\nTeléfono: $telephone\nEmail: $email";
  // $mensaje = htmlspecialchars($mensaje);
  // $mensaje = stripslaches($mensaje);

  $to = "untstudentgroup.isaca@gmail.com";
  $subject = "PRE INSCRIPCIÓN DE $name";
  $header = "From: untstudentgroup.isaca@gmail.com \r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  $retval = @mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    echo "<script>alert('Tu pre inscripción ha sido enviada exitosamente, en breve nos pondremos en contacto contigo.');
window.location.assign('index.html');</script>";
  } else {
    echo "<script>alert('No se pudo registrar tu pre inscripción, inténtalo nuevamente y verifica la información.');
window.location.assign('index.html');</script>";
  }
?>
