<?php
                $email_to = "jesusdmonteroc@gmail.com";
                $email_subject = "Correo del portafolio web";
                $email_from = "jesusdmonteroc@gmail.com";
                $time = time();
            $email_message = "Fecha y hora: ".date("d/m/Y (H:i:s)", $time)."\n".
            // "Nombre: ".$_POST["nombre"]."\n".
            "Email: ".$_POST["email"]."\n".
            // "Teléfono: ".$_POST["telefono"]."\n".
            // "Ciudad: ".$_POST["ciudad"]."\n".
            // "Empresa: ".$_POST["empresa"]."\n".
              // "Productos de interés: ".$_POST["selectProduct"]."\n".
              "Comentarios: ".$_POST["comentarios"];
            // "Página anterior: ".$_POST["pagina"];
            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            @mail($email_to, $email_subject, $email_message, $headers);
                echo true;
