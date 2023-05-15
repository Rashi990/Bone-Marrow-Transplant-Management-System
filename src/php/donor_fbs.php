<?php
// Include the TCPDF library
require_once('../../TCPDF-main/tcpdf.php');

// Connect to the database
require_once("../../config/connection.php");


// Create a new PDF document
$pdf = new TCPDF('P', 'mm', 'A3', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('FBS Report');

// Connect to the database
try {
    $connection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

// Query the database to fetch fbs_report and donor data
$query = "SELECT f.*, d.donor_name, d.telephone_no, d.gender
          FROM fbs_report f
          INNER JOIN donor d ON f.donor_id = d.donor_id";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Start PDF document
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Generate table header
$header = array('FBS ID', 'Donor Name', 'Telephone No', 'Gender', 'Date Created', 'Test Description', 'Value', 'Reference');
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetLineWidth(0.3);
$pdf->SetFont('', 'B');
$w = array(20, 40, 40, 20, 40, 40, 40, 30, 40);
$num_headers = count($header);
for ($i = 0; $i < $num_headers; ++$i) {
    $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
}
$pdf->Ln();



// Generate table rows
$pdf->SetFillColor(224, 235, 255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill = 0;
foreach ($result as $row) {
    $pdf->Cell($w[0], 6, $row['fbs_id'], 'LR', 0, 'L', $fill);
    $pdf->Cell($w[1], 6, $row['donor_name'], 'LR', 0, 'L', $fill);
    $pdf->Cell($w[2], 6, $row['telephone_no'], 'LR', 0, 'L', $fill);
    $pdf->Cell($w[3], 6, $row['gender'], 'LR', 0, 'L', $fill);
    //$pdf->Cell($w[4], 6, $row['sample_collected_date'], 'LR', 0, 'L', $fill);
    $pdf->Cell($w[4], 6, $row['date_created'], 'LR', 0, 'L', $fill);
    $pdf->Cell($w[5], 6, $row['test_description'], 'LR', 0, 'L', $fill);
    
    // Customization: Highlight abnormal values
    $valueObserved = $row['value_observed'];
    $referenceRange = $row['reference_range'];
    $isAbnormal = $valueObserved < $referenceRange[0] || $valueObserved > $referenceRange[1];
    $pdf->Cell($w[7], 6, $valueObserved, 'LR', 0, 'L', $fill, '', $isAbnormal ? 1 : 0);
    
    // Customization: Add a note for abnormal values
    if ($isAbnormal) {
        $pdf->SetTextColor(255, 0, 0);
        $pdf->Cell($w[8], 6, 'Abnormal', 'LR', 0, 'L', $fill);
        $pdf->SetTextColor(0);
    } else {
        $pdf->Cell($w[8], 6, 'Normal', 'LR', 0, 'L', $fill);
    }
    
    $pdf->Ln();
    $fill = !$fill;
}



    // Close the database connection
    $connection= null;
    
    // Output the PDF
    $pdf->Output('fbs_report.pdf', 'I');
