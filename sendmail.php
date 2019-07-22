<?php
  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $name = "$firstName $lastName";
  $university = $_POST["university"];
  try {
    $otherUniversity = $_POST["otherUniversity"];
  } catch (\Exception $e) {
    $otherUniversity = " - ";
  }
  $academicLevel = $_POST["academicLevel"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $mensaje = "Nombre: $name\nUniversidad: $university\nOtra: $otherUniversity\nNivel académico: $academicLevel\nTeléfono: $telephone\nEmail: $email";
  // $mensaje = htmlspecialchars($mensaje);
  // $mensaje = stripslaches($mensaje);

  $to = "untstudentgroup.isaca@gmail.com";
  $subject = "PRE INSCRIPCIÓN DE $name";
  $header = "From: preinscripcion@correo.com \r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  $retval = @mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    echo "<script>alert('Has reservado un cupo en el evento, en breve estaremos en contacto contigo. No olvides compartir con tus amistades.');
window.location.assign('index.html');</script>";
  } else {
    echo "<script>alert('No se pudo registrar tu pre inscripción, inténtalo nuevamente y verifica la información.');
window.location.assign('index.html');</script>";
  }
?>
