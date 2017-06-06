<?php
                $email_to = "jesusdmonteroc@outlook.com";

                $email_subject = "Interesado en pautar EO";

                $email_from = "jesusdmonteroc@outlook.com";

                $time = time();

            $email_message = "Fecha y hora: ".date("d/m/Y (H:i:s)", $time)."\n".
            "Nombre: ".$_POST["nombre"]."\n".
            "Email: ".$_POST["email"]."\n".
            "Teléfono: ".$_POST["telefono"]."\n".
            "Ciudad: ".$_POST["ciudad"]."\n".
            "Empresa: ".$_POST["empresa"]."\n".
              "Productos de interés: ".$_POST["selectProduct"]."\n".
              "Comentarios: ".$_POST["comentarios"]."\n".
            "Página anterior: ".$_POST["pagina"];

            $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();

            @mail($email_to, $email_subject, $email_message, $headers);
                echo true;
