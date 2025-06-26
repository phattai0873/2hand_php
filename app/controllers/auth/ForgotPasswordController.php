<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ✅ Dòng duy nhất để autoload PHPMailer
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../models/user.php';
require_once __DIR__ . '/../../../config/config.php';

class ForgotPasswordController {
    public function showForgotPassForm() {
        include __DIR__ . '/../../views/auth/forgotPassword.php';
    }

    public function sendResetCode() {
        $email = $_POST['email'];
        $otp = random_int(100000, 999999);

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = EMAIL_USERNAME;
            $mail->Password = EMAIL_PASSWORD;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom(EMAIL_USERNAME, '2HandHub');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Mã xác nhận đặt lại mật khẩu';
            $mail->Body = "Mã xác thực của bạn là: <b>$otp</b>";

            $mail->send();

            session_start();
            $_SESSION['reset_email'] = $email;
            $_SESSION['reset_otp'] = $otp;
            $_SESSION['reset_expired_time'] = time() + 300; // 5 phút

            echo "Mã xác nhận đã được gửi đến email.";
        } catch (Exception $e) {
            echo "Không gửi được email. Lỗi: {$mail->ErrorInfo}";
        }
    }
}
