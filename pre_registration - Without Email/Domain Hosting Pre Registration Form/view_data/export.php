<?php  
//export.php  
$connect = mysqli_connect("localhost", "hypervoi_pre_registration", "i42K_r!mqk#Y", "hypervoi_hotel_show");

// Include XLSX generator library 
require_once 'PhpXlsxGenerator.php';
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xlsx"; 
 
// Define column names 
$excelData[] = array('Person Name', 'Address', 'Mobile Number', 'WhatsApp Number', 'Email Address', 'Designation', 'Organization'); 
 
// Fetch records from database and store in an array 
$query = $connect->query("SELECT * FROM pre_registration ORDER BY id ASC"); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $lineData = array(
            $row['contact_per_title'] . ' ' . $row['contact_per_name'],
            $row['full_address'],
            $row['mobile_ext'] . '-' . $row['mobile_number'],
            $row['whatsapp_ext'] . '-' . $row['whatsapp_number'],
            $row['email'],
            $row['designation'],
            $row['organization'],
        ); 
        $excelData[] = $lineData; 
    }
} 
 
// Export data to excel and download as xlsx file 
$xlsx = CodexWorld\PhpXlsxGenerator::fromArray( $excelData ); 
$xlsx->downloadAs($fileName); 
 
exit; 
 
?>