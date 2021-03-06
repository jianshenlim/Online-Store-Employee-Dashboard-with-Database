<?php
session_start();
include ("connection.php");
/** @var PDO $dbh */

if (isset($_SESSION['user_id'])) {

    require("fpdf.php");
    include("connection.php");

    $query = "SELECT * FROM `client` order by client_id asc";

    $pdf = new FPDF();
    $pdf->AddPage();

    $width_cell = array(5, 20, 16, 37, 25, 25, 45, 20);
    $pdf->SetFont('Arial', 'B', 8);

    $pdf->SetFillColor(78, 115, 223);

    $pdf->Cell($width_cell[0], 10, 'ID', 1, 0, 'C', true);
    $pdf->Cell($width_cell[1], 10, 'FIRST NAME', 1, 0, 'C', true);
    $pdf->Cell($width_cell[2], 10, 'SURNAME', 1, 0, 'C', true);
    $pdf->Cell($width_cell[3], 10, 'ADDRESS', 1, 0, 'C', true);
    $pdf->Cell($width_cell[4], 10, 'PHONE', 1, 0, 'C', true);
    $pdf->Cell($width_cell[5], 10, 'MOBILE', 1, 0, 'C', true);
    $pdf->Cell($width_cell[6], 10, 'EMAIL', 1, 0, 'C', true);
    $pdf->Cell($width_cell[7], 10, 'SUBSCRIBED', 1, 1, 'C', true);

    $pdf->SetFont('Arial', '', 7);
    $pdf->SetFillColor(235, 236, 236);
    $fill = false;
    foreach ($dbh->query($query) as $row) {
        $pdf->Cell($width_cell[0], 10, $row['client_id'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[1], 10, $row['client_fname'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[2], 10, $row['client_sname'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[3], 10, $row['client_addr'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[4], 10, $row['client_phone'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[5], 10, $row['client_mob'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[6], 10, $row['client_email'], 1, 0, 'C', $fill);
        if ($row['subscribed'] != '0') {
            $sub_field = "Yes";
        } else {
            $sub_field = "No";
        }
        $pdf->Cell($width_cell[7], 10, $sub_field, 1, 1, 'C', $fill);
    }

    $pdf->Output();
} else {
    echo "<script type='text/javascript'>location.href ='login.php';</script>";
}
?>
