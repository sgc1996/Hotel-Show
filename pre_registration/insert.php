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
$data = $_POST;
// Step 1: Establish a Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel_show_2024";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Capture input values
$value1 = $_POST['title'];
$value2 = $_POST['fullName'];
$value3 = $_POST['address'];
$value4 = $_POST['conExt'];
$value5 = $_POST['conNum'];
$value6 = $_POST['whaExt'];
$value7 = $_POST['whaNum'];
$value8 = $_POST['email'];
$value9 = $_POST['destination'];
$value10 = $_POST['organization'];

// Step 3: Prepare the SQL Query
$sql = "INSERT INTO pre_registration (contact_per_title, contact_per_name, full_address, mobile_ext, mobile_number, whatsapp_ext, whatsapp_number, email, designation, organization)
        VALUES ('$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10')";

// Step 4: Execute the Query
if ($conn->query($sql) === TRUE) {
    ?>
    <title>Hotel Show 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <div class="container">
        <h2>Registration Success</h2>

        <p>
            Dear <?php echo $value1 . ' ' . $value2; ?>,
        </p>

        <p>
            Thank you for registering! Your registration has been successfully processed.
        </p>

        <p>
            Please keep this information for your records. If you have any questions or need further assistance, feel free to contact our support team at <b>chsga@sltnet.lk</b>.
        </p>

        <p class="footer">
            Best Regards,<br>
            Hotel Show 2024<br>
            2nd Floor, LE CUBE , No. 130, High-level Road, Colombo 06, Sri Lanka.<br>
            +94 11 4022 182<br>
            +94 11 2423 848<br>
            <a href="https://www.hotelshowcolombo.com/">www.hotelshowcolombo.com</a><br>
        </p>
    </div>
<?php
} else {
    ?>  
        <title>Hotel Show 2024</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <div class="container">
            <h2>Registration Fail</h2>

            <p>
            Oops! Something went wrong during registration. Please try again later.<br/>
            <div style="background: #0c0c0c; color: #FFFFFF; padding: 10px; font-family: monospace;">
            </div>

            </p>

            <p class="footer">
                Best Regards,<br>
                Hotel Show 2024<br>
                2nd Floor, LE CUBE , No. 130, High-level Road, Colombo 06, Sri Lanka.<br>
                +94 11 4022 182<br>
                +94 11 2423 848<br>
                <a href="https://www.hotelshowcolombo.com/">www.hotelshowcolombo.com</a><br>
            </p>
        </div>
    <?php
}
// Step 5: Close the Connection
$conn->close();
?>