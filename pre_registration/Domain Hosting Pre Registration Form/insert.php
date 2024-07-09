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
$username = "hypervoi_pre_registration";
$password = "i42K_r!mqk#Y";
$database = "hypervoi_hotel_show";
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
        $mail->Host = 'mail.hotelshowcolombo.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pre.registration@hotelshowcolombo.com';
        $mail->Password = '7sdcyy_agHqV';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('event@hotelshowcolombo.com', 'Hotel Show Colombo 2024');
        $mail->addAddress($data['email'], $data['fullName']);
        // $mail->addCC('event@hotelshowcolombo.com', 'Hotel Show Colombo 2024');
        // $mail->addCC('rizwan@cdcevents.net', 'Rizwan Khan');
        //$mail->addBCC('ameshm@aitech.lk', 'Hotel Show Colombo 2024');
        $mail->addCC('gayanchathuranga1992@gmail.com', 'Hotel Show Colombo 2024');
        // $mail->addBCC('gayanchathuranga1992@gmail.com', 'Hotel Show Colombo 2024');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Hotel Show Colombo 2024 - APPLICATION - ' . $data['fullName'];
        $emailBody = '<!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Show Colombo 2024 - Registration Success</title>
            <style>
            /* Reset styles */
            body, html {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                line-height: 1.6;
            }

            /* Container styles */
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 10px;
            }

            /* Heading styles */
            h2 {
                color: #004080;
            }

            /* Paragraph styles */
            p {
                color: #555;
                font-size: 16px;
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

            /* Responsive styles */
            @media screen and (max-width: 600px) {
                .container {
                width: 100%;
                }
            }
            </style>
            </head>
            <body>
            <div class="container">
                <img src="https://lh3.googleusercontent.com/pw/AP1GczO3OLhVWGzt1B0Tud_q6lZzc-2fFg0YAlflsJwQ9wJbI4p-fMULZxnCWXyB8rzJoKavvyLkvIbjQIgNzFyDvd5gkGjNrdymALjfyO8D0vI1IVNKHzh0If-YsBz_0lUvwaParfWSkurdqt5YKcW7JO9Tn_5SdiCeL5LbPc3NEpbnCHPTSezWRyUsZC7PocworS0upxd1aTkZhwGeEHd3yHOoJx8BhOd-lfWIQF6TY6kXjVNEsTPn3YySpIkktHKLLwA_OxcR0dJvBJi4b32Nj03dro3gnV-g34hhgbeefvlZdEUFymrdeWbbTrMfKx5HLf4BMbULgvM67VxVWsNoSbNlk-L6BYr4arXPwJYRqSGSeu9SE5JRCOMvn1A9-AQ8JteWO8t1i1TU44SgekyqAPfw0iuRFzvbNWYEBJN3YSApD76DMXMSWI80wchT5Irz9SNVqsEnNVS9zTp8Z9sGhCjDoQOFucJBVmXmomLazzcyr9aLUtHRTheRO6L9EA1AQlZUPQVc6_XuCwaMt8ikWMS4J4vLgiDstt6Uq7mdH-7aMkCjncG0W0R8acVjaMReoLm-tu2pavwUU6s1C-3DqPa0I-sLazL-KHhBg3VNxYs3DYq7jUDb3W9XTMHeGNzv5D75z39-asvxQaaYUH1qo6CeBFmgnkkZNnABsc8MzyL0ENQrdF1RDVChGzv4Ls0z99Gbvl5qUYLxx7Rnn3S9Hhd4JD5BkNM0g5zH-PR0TuhDP1tqa5K7K0VOUfBV_BViOmHodSHFgpp-_GSFV35FiBTPQk0Yj8v0qG8BhuxRWbZL0jZeIPeGz8Y0FpPE2tvwD9BjZzGv8838Emc-eHGrToS3ymnQ3DAHxk43wR4JshpPhO3tWVb6IiA3g1f_8O6QgtnMMehRtvDHIGuCEA8q3EE=w300-h161-s-no-gm?authuser=0" alt="Hotel Show Colombo 2024">
                <h2>Hotel Show Colombo 2024 - Registration Completed Successfully</h2>
                <p>Dear <b>' . $data['fullName'] . ',</b></p>
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
            </div>
            </body>
            </html>
            ';
        $mail->Body = $emailBody;

        // Send email
        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    ?>
    <title>Hotel Show Colombo 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
