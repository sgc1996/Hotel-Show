<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 650px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #004080;
    }

    p {
        line-height: 1.6;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .footer {
        margin-top: 20px;
        text-align: center;
        color: #777;
    }
    .footer a {
        text-decoration: none;
        color: #0e87ff;
    }
    .footer a:hover {
        text-decoration: none;
        color: #004080;
    }
</style>

<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Capture POST data
$data = $_POST;

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel_show_2024";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Capture input values
$value1 = $data['title'];
$value2 = $data['fullName'];
$value3 = $data['address'];
$value4 = $data['conExt'];
$value5 = $data['conNum'];
$value6 = $data['whaExt'];
$value7 = $data['whaNum'];
$value8 = $data['email'];
$value9 = $data['destination'];
$value10 = $data['organization'];

// Prepare SQL query
$sql = "INSERT INTO pre_registration (contact_per_title, contact_per_name, full_address, mobile_ext, mobile_number, whatsapp_ext, whatsapp_number, email, designation, organization)
        VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10')";

// Execute SQL query and send email if successful
if ($conn->query($sql) === TRUE) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.sancharakaudawa.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'webform@sancharakaudawa.com';
        $mail->Password = '3DsYeTJBZD89sf7';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('event@hotelshowcolombo.com', 'Hotel Show Colombo 2024');
        $mail->addAddress($data['email'], $data['fullName']);
        $mail->addCC('gayanchathuranga1992@gmail.com', 'Hotel Show Colombo 2024');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'SU 2024 - APPLICATION - ' . $data['fullName'];
        $emailBody = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Hotel Show Colombo 2024 - Registration Success</title>
            </head>
            <body style="font-family: Arial, sans-serif;">
                <h2 style="color: #004080;">Hotel Show Colombo 2024 - Registration Completed Successfully</h2>
                <p<b>Dear ' . $data['fullName'] . ',</b></p>
                <p><b>Your registered email id is : ' . $data['email'] . '</b></p>
                <p>Thank you for registering! Your registration has been successfully processed.</p>
                <p>Kindly show a copy of this email at the registration counter in-order to collect your Buyer Pass.</p>
                <p>Please keep this information for your records. If you have any questions or need further assistance, feel free to contact our  at <b>event@hotelshowcolombo.com.</b></p>
                <p class="footer">
                    Best Regards,<br>
                    Hotel Show 2024<br>
                    2nd Floor, LE CUBE, No. 130, High-level Road, Colombo 06, Sri Lanka.<br>
                    +94 11 4022 182<br>
                    +94 11 2423 848<br>
                    <a href="https://www.hotelshowcolombo.com/">www.hotelshowcolombo.com</a><br>
                </p>
            </body>
            </html>';
        $mail->Body = $emailBody;

        // Send email
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    ?>
    <div class="container">
        <h2>Registration Success</h2>
        <p>Dear <?php echo $value1 . ' ' . $value2; ?>,</p>
        <p>Thank you for registering! Your registration has been successfully processed.</p>
        <p>Please keep this information for your records. If you have any questions or need further assistance, feel free to contact our support team at <b>event@hotelshowcolombo.com</b>.</p>
        <p class="footer">
            Best Regards,<br>
            Hotel Show 2024<br>
            2nd Floor, LE CUBE, No. 130, High-level Road, Colombo 06, Sri Lanka.<br>
            +94 11 4022 182<br>
            +94 11 2423 848<br>
            <a href="https://www.hotelshowcolombo.com/">www.hotelshowcolombo.com</a><br>
        </p>
    </div>
    <?php
} else {
    ?>
    <div class="container">
        <h2>Registration Fail</h2>
        <p>Oops! Something went wrong during registration. Please try again later.<br/>
        <div style="background: #0c0c0c; color: #FFFFFF; padding: 10px; font-family: monospace;">
            <?php echo $conn->error; ?>
        </div>
        </p>
        <p class="footer">
            Best Regards,<br>
            Hotel Show 2024<br>
            2nd Floor, LE CUBE, No. 130, High-level Road, Colombo 06, Sri Lanka.<br>
            +94 11 4022 182<br>
            +94 11 2423 848<br>
            <a href="https://www.hotelshowcolombo.com/">www.hotelshowcolombo.com</a><br>
        </p>
    </div>
    <?php

}
