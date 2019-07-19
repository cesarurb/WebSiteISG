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

  // ini_set("SMTP","smtp.gmail.com");
  // ini_set("smtp_port","25");
  // ini_set("sendmail_from","untstudentgroup.isaca@gmail.com");
  // $mail->SMTPDebug  = 2;                     // Habilita información SMTP (opcional para pruebas)
  //                                              // 1 = errores y mensajes
  //                                              // 2 = solo mensajes
  //   $mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
  //   $mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
  //   $mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
  //   $mail->Port       = 465;                   // Establece el puerto del servidor SMTP de Gmail
  //   $mail->Username   = $correo_emisor;         // Usuario Gmail
  //   $mail->Password   = $contrasena;           // Contraseña Gmail
  //
  $retval = mail ($to, $subject, $mensaje, $header);
  if ($retval == true) {
    echo "Pre inscripción enviada exitosamente...";
  } else {
    echo "Pre inscripción no pudo ser enviada...";
  }
?>
