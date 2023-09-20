<?php
$bulan1 = 'Januari';
$bulan2 = 'Februari';
$bulan3 = 'Maret';

$totalPenjualan1 = 4000000;
$totalPenjualan2 = 3000000;
$totalPenjualan3 = 2000000;

$biayaOperasional1 = 1500000;
$biayaOperasional2 = 1000000;
$biayaOperasional3 = 500000;

$labaBersih1 = $totalPenjualan1 - $biayaOperasional1;
$labaBersih2 = $totalPenjualan2 - $biayaOperasional2;
$labaBersih3 = $totalPenjualan3 - $biayaOperasional3;

$totalPenjualan = $totalPenjualan1 + $totalPenjualan2 + $totalPenjualan3;
$totalbiayaOperasional = $biayaOperasional1 + $biayaOperasional2 + $biayaOperasional3;
$totalLaba = $labaBersih1 + $labaBersih2 + $labaBersih3;
?>

<html lang="en">
<head>
    
    <title>Data Penjualan</title>
</head>
<body>
    <h1>Data Penjualan PT XYZ Thn 2022</H1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Total Penjualan</th>
            <th>Biaya Operasional</th>
            <th>Laba Bersih</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $bulan1; ?> </td>
            <td><?php echo $totalPenjualan1; ?> </td>
            <td><?php echo $biayaOperasional1; ?> </td>
            <td><?php echo $labaBersih1; ?> </td>
        </tr>
        <tr>
        <td>2</td>
            <td><?php echo $bulan2; ?> </td>
            <td><?php echo $totalPenjualan2; ?> </td>
            <td><?php echo $biayaOperasional2; ?> </td>
            <td><?php echo $labaBersih2; ?> </td>
</tr>
<tr>
<td>3</td>
            <td><?php echo $bulan3; ?> </td>
            <td><?php echo $totalPenjualan3; ?> </td>
            <td><?php echo $biayaOperasional3; ?> </td>
            <td><?php echo $labaBersih3; ?> </td>
</tr>
<tr>
    <td colspan="2" > TotalTahun </td>
<td><?php echo $totalPenjualan; ?> </td>
<td><?php echo $totalbiayaOperasional; ?> </td>
<td><?php echo $totalLaba; ?> </td>

</tr>
    </table>
 
</body>
</html>