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
  $to = "untstudentgroup.isaca@gmail.com";
  $subject = "PRE INSCRIPCIÓN DE $name";
  $header = "From: preinscripcion@correo.com \r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  $retval = @mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    $mensaje = "Felicitaciones $name hemos recibido tu información y has reservado un cupo en el V UNT ISACA Full Day.
                \nPara validar tu reserva debes hacer un depósito con el monto del precio de la entrada al Nro de cuenta: 570-37207022-0-04 o al Nro de cta. interbancaria: 002-57013720702200403 de CESAR URBINA NARRO.
                \nRecuerda mantenerte informado en el link del evento https://www.facebook.com/events/2321080694641975/ y no olvides invitar a tus amistades.";
    $to = "$email";
    $subject = "PRE INSCRIPCIÓN CONFIRMADA";
    $header = "From: no-reply@isgunt.com \r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $retval = @mail ($to, $subject, $mensaje, $header);
    if ($retval == true) {
      echo "<script>alert('Felicitaciones, has reservado un cupo en el V UNT ISACA Full Day, recibirás un correo de confirmación y en breve estaremos en contacto contigo. No olvides compartir con tus amistades.');
  window.location.assign('#!/home');</script>";
    } else {
      echo "<script>alert('No se pudo registrar tu pre inscripción, inténtalo nuevamente y verifica la información.');
  window.location.assign('#!/home');</script>";
    }
  } else {
    echo "<script>alert('No se pudo registrar tu pre inscripción, inténtalo nuevamente y verifica la información.');
window.location.assign('#!/home');</script>";
  }
?>
