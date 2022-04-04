
<?php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 require 'pdf.php';
 $output = '';
 $con=mysqli_connect("localhost","root","","apex_sign");
 $query=mysqli_query($con,"SELECT * FROM invoice where invoice_id = ".$_GET["id"]."");
 $row=mysqli_fetch_assoc($query);
 
 $output.= '

 <table width="100%" border="1" cellpadding="5" cellspacing="0">
 <tr>
 <td colspan="2" align="center" style="font-size:18px"><b>Tax Invoice</b></td>
 </tr>

 <tr>
 <td colspan="2">
 <table width="100%" cellpadding="5">
 <tr>
 <td width="65%">

 <img src="app-assets/img/app.png" alt="company logo" width="700px">
 </td>
 </tr>
 </table>
 <tr>
 <td colspan="2">
 <table width="100%" cellpadding="5">
 <tr>
 <td width="70%">

 BILL TO<br />
 <b>'.$row["party_name"].'</b><br />
 '.$row["bill_address"].'<br />

 GSTIN : '.$row["gstin"].'<br />
 </td>
 <td width="30%">

 Invoice No. : '.$row["bill_no"].'<br />
 Invoice Date : '.$row["invoice_date"].'<br />
 </td>
 </tr>
 </table>

 <tr>
 <td colspan="2">
 <table width="100%" cellpadding="5">
 <tr>
 <td width="70%">
 </td>
 </tr>
 </table>

 <table width="100%" cellpadding="5">
 <thead>

 <tr>
 <th width="3%" >Sr</th>
 <th width="30%">Item & Discription</th>
 <th width="15%">HSN CODE</th>
 <th width="10%">Qty</th>

 <th width="15%">Sq Ft.</th>
 <th width="10%">Rate</th>
 <th width="15%">Amount</th>

 </tr>
 </thead>';
 $query1=mysqli_query($con,"select * from items where invoice_id=".$_GET["id"]."");
 while($row1=mysqli_fetch_assoc($query1)){
   $output.='
 
 <tr>
 <td>1</td>
 <td>'.$row1["item"].'</td>
 <td>'.$row1["hsn"].'</td>
 <td>'.$row1["qty"].'</td>

 <td>'.$row1["sqft"].'</td>
 <td>'.$row1["rate"].'</td>
 <td>'.$row1["amount"].'</td>
</tr>
 ';
}
$output.='
</table>
<br>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
<tr>
<td  width="20%">GSTIN No : </td>
<td  width="30%">BANK : AXIS BANK</td>
<td align="right" width="30%"><b>Total:</b></td>
<td align="right" width="20%"><b>'.$row["total"].'</b></td>
</tr>
<tr>
<td>24KBJHB523</td>
<td>BRANCH : GANDHIDHAM</td>
<td align="right"  width="40%"><b>CGST:</b></td>
<td align="right">'.$row["cgst"].'</td>
</tr>
<tr>
<td>PAN NO :</td>
<td>A/C N0 : 123456789123456</td>
<td align="right" width="40%">SGST:</td>
<td align="right">'.$row["sgst"].'</td>
</tr>
<tr>
<td>KKBK5616</td>
<td>IFSC CODE : 123456789123456</td>
<td align="right"  width="40%">Grand Total:</td>
<td align="right">'.$row["grand_total"].'</td>
</tr>



</table>
<tr>
<td colspan="2">
<table width="100%" cellpadding="5">
<tr>
<td width="70%">


</td>
</tr>

</table>

<tr>
<td colspan="2">
<table width="100%" cellpadding="5">
<tr>
<td> </td>

</tr>
<tr>
<td> </td>

</tr>
<tr>
<td> </td>

</tr>
<tr>
<td> </td>

</tr>
<tr>
<td> </td>

</tr>

</table>









';


}
$pdf = new Pdf();
$file_name = 'Invoice-'.$row['party_name'].'.pdf';
$pdf->loadHtml($output);
$pdf->render();
$pdf->stream($file_name, array("Attachment" => false));

?>
