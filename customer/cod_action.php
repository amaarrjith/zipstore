<?php
session_start();
$customer_id = $_SESSION['id'];
$email = $_SESSION['emailaddress'];
$customername = $_SESSION['name'];
$order_date = date('Y/m/d'); // Changed 'y' to 'Y' for 4-digit year
$total = $_SESSION['totalamount'];
$status = "confirmed";
$quantity = 1; // Removed quotes since it's an integer
$date = date('Y/m/d'); // Changed 'y' to 'Y' for 4-digit year

// INSERT INTO TBL ORDER MASTER 
include('config.php');
$sql = "INSERT INTO `tbl_order(master)` (customer_id, order_date, total_amount, order_status) VALUES ('$customer_id','$order_date','$total','$status')"; // Removed backticks and corrected table name
$result = mysqli_query($conn, $sql);

// GETTING BILLID AS LAST INSERTED VALUE
$billid = mysqli_insert_id($conn);

$emailTemplate = file_get_contents("email.php");

// SELECT FROM TBL CART
$sql1 = "SELECT * FROM tbl_cart WHERE customer_id = '$customer_id'";
$res = mysqli_query($conn, $sql1);

while ($display = mysqli_fetch_array($res)) {
    $product_id = $display["product_id"];
    $order_status = "confirmed";

    // INSERT INTO TBL ORDER DETAILS
    $sql3 = "INSERT INTO `tbl_order(details)` (order_date ,bill_id, customer_id , quantity, product_id, order_detail_status) VALUES ('$order_date','$billid','$customer_id','$quantity','$product_id','$order_status')"; // Removed backticks and corrected table name
    $res1 = mysqli_query($conn, $sql3);

    // UPDATE STOCK
    $sql7 = "SELECT * FROM tbl_product WHERE product_id = $product_id";
    $res6 =  mysqli_query($conn,$sql7);
    $row = mysqli_fetch_array($res6);
    $stock = $row['stock'];
    $productname = $row['product_name'];
    $rate = $row['rate'];
    $newstock = $stock - $quantity;
    $sql8 = "UPDATE tbl_product SET stock = '$newstock' WHERE product_id = $product_id"; // Removed backticks and corrected table name and WHERE clause
    $res7 = mysqli_query($conn,$sql8);

    $emailContent = str_replace(
    array("{billnumber}", "{orderDate}", "{productname}", "{rate}"),
    array($billid, $order_date, $productname, $rate),
    $emailTemplate
    );
}

// DELETE FROM CART 
$sql4 = "DELETE FROM tbl_cart WHERE customer_id = '$customer_id'";
$res2 = mysqli_query($conn, $sql4);

// UPDATE TBL SHIPPING AND TBL BOOKING
$sql5 = "UPDATE tbl_shipping SET bill_id = '$billid' WHERE customer_id = '$customer_id' AND bill_id = '0'"; // Removed backticks and corrected table name
$res4 = mysqli_query($conn, $sql5);

$sql6 = "UPDATE tbl_billing SET bill_id = '$billid' WHERE customer_id = '$customer_id' AND bill_id = '0'"; // Removed backticks and corrected table name
$res5 = mysqli_query($conn, $sql6);

// No need for this query as it's already updated above
// $sql8 = "UPDATE tbl_product SET stock = '$newstock'"; 
// $res7 = mysqli_query($conn,$sql8);





ob_start();
?> 
<?php
include ('config.php');
$order_date = date('Y/m/d');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="*|MC:SUBJECT|*" />
        
        <title>*|MC:SUBJECT|*</title>
		<style type="text/css">
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* Template Styles */

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your company's branding.
			* @theme page
			*/
			body, #backgroundTable{
				/*@editable*/ background-color:#FAFAFA;
			}

			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border: 1px solid #DDDDDD;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1, .h1{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2, .h2{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:30px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3, .h3{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:26px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4, .h4{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:22px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your email's header area.
			* @theme header
			*/
			#templateHeader{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-bottom:0;
			}

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#202020;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding:0;
				/*@editable*/ text-align:center;
				/*@editable*/ vertical-align:middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:600px !important;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your email's body area.
			*/
			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			/**
			* @tab Body
			* @section data table style
			* @tip Set the background color and border for your email's data table.
			*/
			.templateDataTable{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:1px solid #DDDDDD;
			}
			
			/**
			* @tab Body
			* @section data table heading text
			* @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
			*/
			.dataTableHeading{
				/*@editable*/ background-color:#D8E2EA;
				/*@editable*/ color:#336699;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:14px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}
		
			/**
			* @tab Body
			* @section data table heading link
			* @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
			*/
			.dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#FFFFFF;
				/*@editable*/ font-weight:bold;
				/*@editable*/ text-decoration:underline;
			}
			
			/**
			* @tab Body
			* @section data table text
			* @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
			*/
			.dataTableContent{
				/*@editable*/ border-top:1px solid #DDDDDD;
				/*@editable*/ border-bottom:0;
				/*@editable*/ color:#202020;
				/*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:12px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}
		
			/**
			* @tab Body
			* @section data table link
			* @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
			*/
			.dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#202020;
				/*@editable*/ font-weight:bold;
				/*@editable*/ text-decoration:underline;
			}

			/**
			* @tab Body
			* @section button style
			* @tip Set the styling for your email's button. Choose a style that draws attention.
			*/
			.templateButton{
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				/*@editable*/ background-color:#336699;
				/*@editable*/ border:0;
				border-collapse:separate !important;
				border-radius:3px;
			}

			/**
			* @tab Body
			* @section button style
			* @tip Set the styling for your email's button. Choose a style that draws attention.
			*/
			.templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#FFFFFF;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:15px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ letter-spacing:-.5px;
				/*@editable*/ line-height:100%;
				text-align:center;
				text-decoration:none;
			}

			.bodyContent img{
				display:inline;
				height:auto;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-top:0;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:center;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.footerContent img{
				display:inline;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			* @theme footer
			*/
			#utility{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			*/
			#utility div{
				/*@editable*/ text-align:center;
			}

			#monkeyRewards img{
				max-width:190px;
			}
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        
    <center>
        
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            <tr>
                
                <td align="center" valign="top" style="padding-top:20px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        <tr>
                            <td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                <table border="0" cellpadding="15" cellspacing="0" width="600" id="templateHeader">
                                    <th style="text-align: left; background-color:#d19c97;color: black;"scope="col" valign="top" width="40%" class="dataTableHeading" mc:edit="data_table_heading00">
                                        BILL ID : <?php echo $billid ?> <br><br> ORDER DATE : <?php echo $order_date ?> </th>
                                        
                                        <th style="text-align: right; background-color:#d19c97;color: black;"scope="col" valign="top" width="60%" class="dataTableHeading" mc:edit="data_table_heading00">
                                            <br>ZIP - STORE ORDER CONFIRMATION </th>
                                </table>
                                    <br><br>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        <tr>
                            <td align="center" valign="top">
                                
                                    <!-- // Begin Template Body \\ -->
                                <table align = "center" border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                    
                                
                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    
                                                    <tr>
                                                    <td valign="top" style="padding-top:0; padding-bottom:0;">
                                                        <table align="center" border="0" cellpadding="10" cellspacing="0" width="100%" class="templateDataTable">
                                                            <tr>
                                                                 
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th style="text-align: center;"scope="col" valign="top" width="20%" class="dataTableHeading" mc:edit="data_table_heading00">
                                                                    ORDER NO 
                                                                </th>
                                                                <th style="text-align: center;" scope="col" valign="top" width="45%" class="dataTableHeading" mc:edit="data_table_heading01">
                                                                    PRODUCT NAME
                                                                </th>
                                                                <th style="text-align: center;" scope="col" valign="top" width="25%" class="dataTableHeading" mc:edit="data_table_heading02">
                                                                    PRODUCT RATE
                                                                </th>
                                                            </tr>
															<?php
															$sql = "SELECT * FROM `tbl_order(details)` d INNER JOIN tbl_product p ON d.product_id = p.product_id WHERE d.customer_id = '$customer_id' and d.bill_id='$billid'";
															$result = mysqli_query($conn,$sql);

															if (!$result) {
																echo "Error fetching data: " . mysqli_error($conn);
															} else {
																while ($display = mysqli_fetch_array($result)) {
															?>		
                                                            <tr mc:repeatable>
                                                                <td style="text-align: center;" valign="top" class="dataTableContent" mc:edit="data_table_content00">
                                                                    <?php echo $display ["order_id"] ?>
                                                                </td>
                                                                
                                                                <td style="text-align: center;" valign="top" class="dataTableContent" mc:edit="data_table_content01">
																	<?php echo $display ["product_name"] ?>
                                                                </td>
                                                                <td style="text-align: center;" valign="top" class="dataTableContent" mc:edit="data_table_content02">
																	<?php echo $display ["rate"] ?>
                                                                </td>
                                                            </tr>
															<?php
																}
															}
															?>
                                                        </table>
														
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" class="bodyContent">
                                                            
														</td>
                                                    </tr>
                                                    <tr>
                                                    <td align="center" valign="top" style="padding-top:0;">
                                                        <table border="0" cellpadding="15" cellspacing="0" class="templateButton">
                                                            
                                                        </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                    <tr>
                                        <td class="headerContent">
                                            
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            <img src="https://cdn.dribbble.com/users/5804730/screenshots/14516978/oc.gif" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                            	<!-- // End Module: Standard Header Image \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        <tr>
                            <td align="center" valign="top">
                                    <!-- // Begin Template Footer \\ -->
                                <table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                    <tr>
                                        <td valign="top" class="footerContent">
                                            
                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div mc:edit="std_footer">
																<em>Copyright &copy; 2024 ZiP - Store , All rights reserved.</em>
																<br />
																
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        
                                                    </tr>
                                                </table>
                                                <!-- // End Module: Transactional Footer \\ -->
                                            
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
<?php
$bodyContent = ob_get_clean();

// Replace placeholders in the template with actual content


// Email template inclusion
$mailtoaddress = $email; // Assuming $email is defined somewhere
require('mailtemplate.php'); // Ensure mailtemplate.php handles the email sending logic

// Redirect
echo '<script>window.location.href="order_placed.php"</script>';

?>
