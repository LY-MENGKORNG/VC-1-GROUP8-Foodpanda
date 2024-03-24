<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    if (!empty ($email)) {
        $customer_verify = accountExist($email, 4);
        $user_name = $customer_verify["first_name"];

        $verify_codes = random_verify_codes();
        update_reset_token($email, $verify_codes);
        $currentURL = "http://$_SERVER[HTTP_HOST]";
        $reset_link = $currentURL . "/customer/change_password";

        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'lymengkorng54@gmail.com'; // server main
            $mail->Password = 'loikfrjgqxobxyhm'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom('lymengkorng54@gmail.com', 'Food Panda');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Reset Password';

            require "./views/authentication/forgot_password/send_email_form.view.php";
            $body_content = ob_get_clean();
            $mail->Body = $body_content;
            $mail->send();
            $_SESSION["email_sent"] = true;
            header("Location: /customer/signin");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
