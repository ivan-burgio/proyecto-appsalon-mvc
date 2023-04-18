<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $nombre;
    public $email;
    public $token;

    public function __construct($nombre, $email, $token) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        // Crear el objeto de email
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'b345255ffd7776';
        $phpmailer->Password = '3382bdd9697836';

        $phpmailer->setFrom($this->email);
        $phpmailer->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $phpmailer->Subject = 'Confirma tu cuenta';

        // Set HTML
        $phpmailer->isHTML(TRUE);
        $phpmailer->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>!, ";
        $contenido .= "Has creado tu cuenta en AppSalon, entra en el siguiente link para confirmarla.</p>";
        $contenido .= "<p>Presiona aquí: ";
        $contenido .= "<a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirma tu cuenta.</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje.</p>";
        $contenido .= "</html>";

        $phpmailer->Body = $contenido;

        // Enviar email
        $phpmailer->send();
    }

    public function enviarInstrucciones() {
        // Crear el objeto de email
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'b345255ffd7776';
        $phpmailer->Password = '3382bdd9697836';

        $phpmailer->setFrom($this->email);
        $phpmailer->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $phpmailer->Subject = 'Restablecer contraseña';

        // Set HTML
        $phpmailer->isHTML(TRUE);
        $phpmailer->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong>!, ";
        $contenido .= "Has solicitado reestablecer tu contraseña, has click en el siguiente enlace.</p>";
        $contenido .= "<p>Presiona aquí: ";
        $contenido .= "<a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer contraseña.</a></p>";
        $contenido .= "<p>Si tu no solicitaste esto, puedes ignorar este mensaje.</p>";
        $contenido .= "</html>";

        $phpmailer->Body = $contenido;

        // Enviar email
        $phpmailer->send();
    }
}