
<?php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 require 'pdf2.php';
 $output = '';
 $con=mysqli_connect("localhost","id18708187_root","M+)ow(vB9dtgOV&3","id18708187_apex_sign");
 $query=mysqli_query($con,"SELECT * FROM quotation where quot_id = ".$_GET["id"]."");
 $row=mysqli_fetch_assoc($query);
 
 $output.= '

 <table width="100%" border="1" cellpadding="5" cellspacing="0">
 

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

To,<br />
<b>M/s. '.$row["name"].'</b><br /> <br /> 
Subject :  <b><u>Quotation For Flex Banner Printing</u></b><br /><br />
<b>Respected Sir,</b><br />
With reference to above mentioned subject, We are submitting here with our rates for Flex Banner Printing.
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
 <th width="5%" >SR</th>
   <th width="30%">ITEM & DESCRIPTION</th>
   
  <th width="20%">Qty</th>
 <th width="30%">RATE PER SQ.FT</th>

 <th width="15%">AMOUNT</th>

 </tr>
 </thead>';
 $query1=mysqli_query($con,"select * from quot_items where quot_id=".$_GET["id"]."");
 while($row1=mysqli_fetch_assoc($query1)){
   $output.='
 
 <tr>
 <td>1</td>
 <td>'.$row1["item"].'</td>

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

<td align="right" width="30%"><b>Total:</b></td>
<td align="right" width="20%"><b>'.$row["total"].'</b></td>
</tr>
<tr>

<td align="right"  width="40%"><b>CGST:</b></td>
<td align="right">'.$row["cgst"].'</td>
</tr>
<tr>

<td align="right" width="40%">SGST:</td>
<td align="right">'.$row["sgst"].'</td>
</tr>
<tr>

<td align="right"  width="40%">Grand Total:</td>
<td align="right">'.$row["grand_total"].'</td>
</tr>



</table>
<tr>
<td colspan="2">
<table width="100%" cellpadding="5">
<tr>
<td>
We are promised you that, We are also give you a best service & sufficient reply. We, hope that
you give us a one chance. We are awaiting for your valued enquiries.
</td>
</tr>
<tr>
<td>
<b>Notes,<b><br/>
'.$row["note"].'<br/><br/>
</td>
</tr>
<tr>
<td>
Thanking You<br/><br/>

Your Faithfully,<br/>
<b>For Apex Sign</b>

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
$file_name = 'quotation-'.$row['name'].'.pdf';
$pdf->loadHtml($output);
$pdf->render();
$pdf->stream($file_name, array("Attachment" => false));

?>
