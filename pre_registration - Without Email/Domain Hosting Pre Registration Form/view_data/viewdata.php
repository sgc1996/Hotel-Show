<?php
$connect = mysqli_connect("localhost", "hypervoi_pre_registration", "i42K_r!mqk#Y", "hypervoi_hotel_show");
$sql = "SELECT * FROM pre_registration";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Hotel Show Colombo 2024 | Pre Registration Members</title>
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>
    
    <style>

    .container {
        padding: 20px;
        max-width: 1400px;
    }

    th {
        text-align: center;
    }

    table tr th, table tr td {
        font-size: 0.7rem;
    }

    .head {
        margin-bottom: 10px;
        padding-left: 0;
        padding-right: 0;
    }

    /* .head:hover {
        background-color: none;
        border: 1px solid #198754;
    } */

    .btn {
        background-color: #198754;
        color: white;
    }

    .btn:hover {
        background-color: none;
        border: 1px solid #198754;
    }

    i .dwn {
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        vertical-align: middle;
    }

    .dwn:before {
        content: url(../img/dwn.png);
    }

    </style>
 
 <body>  
  <div class="container">
    <h2>List of Pre Registration Members</h2> 

   <div class="row table-responsive">
        <!-- Export Link -->
        <div class="col-md-12 head">
            <div class="float-end">
                <a href="export.php" class="btn btn-succcess"><i class="fa fa-download"></i>&nbsp;Export</a>
            </div>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>  
                    <th>Person Name</th>
                    <th>Address</th>
                    <th>Mobile Number</th>  
                    <th>WhatsApp Number</th>
                    <th>Email Address</th>
                    <th>Designation</th>
                    <th>Organization</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($result))  
                {  
                    echo '  
                <tr>  
                    <td>'.$row["contact_per_title"].' '.$row["contact_per_name"].'</td>
                    <td>'.$row["full_address"].'</td>
                    <td>'.$row["mobile_ext"].' '.$row["mobile_number"].'</td>
                    <td>'.$row["whatsapp_ext"].' '.$row["whatsapp_number"].'</td>  
                    <td>'.$row["email"].'</td> 
                    <td>'.$row["designation"].'</td>
                    <td>'.$row["organization"].'</td> 
                </tr>  
                    ';  
                }
                ?>
            </tbody>
        </table>
   </div>  
  </div>  
 </body>  
</html>
