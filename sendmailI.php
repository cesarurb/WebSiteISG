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
  $code = $_POST["code"];
  $operation = $_POST["operation"];
  $telephone = $_POST["telephone"];
  $email = $_POST["email"];
  $academicLevel = $_POST["academicLevel"];
  $typeSale = $_POST["typeSale"];
  $mensaje = "Nombre: $name\nUniversidad: $university\nOtra: $otherUniversity\nCódigo de estudiante: $code\nNúmero de operación bancaria: $operation\nTeléfono: $telephone\nEmail: $email\nNivel académico: $academicLevel\nTipo de venta: $typeSale";

  $to = "untstudentgroup.isaca@gmail.com";
  $subject = "INSCRIPCIÓN $academicLevel DE $name";
  $header = "From: preinscripcion@correo.com \r\n";
  $header.= "X-Mailer: PHP/". phpversion();
  $retval = @mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    echo "<script>alert('Felicitaciones, hemos recibido tu información y has confirmado un cupo en el V UNT ISACA Full Day.
    \nRecuerda mantenerte informado en el link del evento https://www.facebook.com/events/2321080694641975/
      \nNo olvides invitar a tus amistades');
      window.location.assign('#!/home');</script>";
  } else {
    echo "<script>alert('No se pudo registrar tu inscripción, inténtalo nuevamente y verifica la información.');
    window.location.assign('#!/home');</script>";
  }
?>
