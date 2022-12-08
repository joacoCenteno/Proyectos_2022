<?php

include "con_db.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

function enviarMail($text,$correo){

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'host';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'username';                     //SMTP username
        $mail->Password   = 'pass';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('user', 'optional');
        $mail->addAddress($correo, 'optional');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'PRUEBA ENVIO PHP MAILER';
        $mail->Body    = $text;

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
        return false;
    }
}



if(isset($_POST['enviar'])){

    if(strlen($_POST['text']) >= 1){
        $text = trim($_POST['text']);
        $cont = 0;

        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($con,$sql);
        
        if($result){

            if(mysqli_num_rows($result) > 0){
                
                while($mostrar=mysqli_fetch_array($result)){
                    $mail= enviarMail($text,$mostrar['correo']);

                    if($mail){
                        $cont++;
                    }else{
                        echo "<h2 style='color:red;display:flex;justify-content:center;margin-top:30px;margin-left:40px;'>ERROR!</h2>";
                    }
                }
                echo "<h2 style='color:#27F871;display:flex;justify-content:center;margin-top:30px;margin-left:40px;'>EMAILS ENVIADOS: $cont</h2>";
            }else{
                echo "<h2 style='color:red;display:flex;justify-content:center;margin-top:30px;margin-left:40px;'>NO HAY REGISTROS EN BD!</h2>";
            }
        }else{
            echo "<h2 style='color:red;display:flex;justify-content:center;margin-top:30px;margin-left:40px;'>ERROR EN CONSULTA!</h2>";;
        } 

    }else{
        echo "<h2 style='color:red;display:flex;justify-content:center;margin-top:30px;margin-left:40px;'>NINGÚN MENSAJE POR ENVIAR</h2>";
    }
    
   
}

?>