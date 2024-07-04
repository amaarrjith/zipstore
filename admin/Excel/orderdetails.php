<?php
include 'excel_controller.php';
$clinic = new DBController();
$fdate = $_GET['fdate'];
$todate = $_GET['tdate'];
$productResult = $clinic->runQuery("SELECT * FROM `tbl_order(master)` o INNER JOIN `tbl_customer` c on o.customer_id = c.customer_id WHERE o.order_date >='$fdate' and o.order_date <='$todate' group by o.master_id");

  
    $filename = "Monthly_Report_Excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>



 
  
      
