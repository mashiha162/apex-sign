<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }
  include("connection.php");


// error_reporting(0);
$_GET['sale_id'];
$_GET['sale_date'];
 $newdate  = date('d-m-yy',strtotime($_GET['sale_date']));
         



$_GET['party_name'];
$_GET['discription'];
$_GET['material'];
$_GET['width'];
$_GET['height'];
$_GET['qty'];

$_GET['total_ft'];
$_GET['rate'];
$_GET['amount'];
$_GET['cash_cre'];



//FETCH PARTIES NAME FROM PARTY TABLE

$q = "SELECT * FROM add_party";
$result = mysqli_query($conn, $q);
if ($result) {
  while ($temp = mysqli_fetch_assoc($result)) {
    $partylist[]  = $temp;
  }
}

// product fetch
$p = "SELECT * FROM add_product";
$result2 = mysqli_query($conn, $p);
if ($result2) {
  while ($pro = mysqli_fetch_assoc($result2)) {
    $productlist[]  = $pro;
  }
}

?>


      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper">
            <div class="row">
  <div class="col-12">
    <div class="content-header">
      
    </div>
  </div>
</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">UPDATE SALES ENTRY</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <!-- <div class="card-body"> -->
            <!-- <div class="table-responsive"> -->
             
<!--Basic Table Starts-->



        
        <div class="card-content">
          <div class="card-body">
          <form action="" method="POST">
              <div class="row">
                
                <div class="col-md-4 col-sm-6 col-12">
                
                <div class="form-group">
                  
                    <div class="input-group">
                      Date
                      <input type='text' name="sale_date" class="form-control" 
                      style="margin-left: 10px;" placeholder="Pick A Date"  value="<?php echo $newdate; ?>" required id="datepicker">
                      
                      <div class="input-group-prepend">
                        
                        <span class="input-group-text">
                          <span class="fa fa-calendar-o"></span>
                        </span>
                        
                      </div>
                    
                    </div>
                    
          </div>

        </div>
        
      </div>
      

       <div class="row">
            <div class="col-md-5">
                                                <div class="form-group">
                                                 <label>Party Name</label>  
          <select id="party_name" name="party_name" class="form-control" placeholder="Select Party" required value="<?php echo $_GET['party_name'] ?>">
       <option value="<?php echo $_GET['party_name'] ?>"></option>
        <?php 
        foreach($partylist as $t)
          {
           echo '<option value="'.$t['name'].'">'.$t['name'].'</option>';
          }
         ?>
       </select>
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                  <div class="form-group">
                                                   <label>Description</label>  
                                                      <input type="text" class="form-control" name="discription" required autocomplete="off" value="<?php echo $_GET['discription'] ?>">
                                                  </div>
                                              </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                 <label>Material</label> 
         <select id="material" name="material" class="form-control" placeholder="Select Material" required autocomplete="off" value="<?php echo $_GET['material'] ?>">
        
        <?php 
        foreach($productlist as $pl)
          {
            // echo '<option value="'.$t['p_id'].'">'.$t['name'].'</option>';
            echo '<option value="'.$pl['material'].'">'.$pl['material'].'</option>';
          }
         ?>
</select>
                                                </div>
                                            </div>
</div>

      
            <table class="table table-responsive-sm">
              
             
              
              <tbody>
                
                <tr>
                 <td></td>
         
</tr>
<tr>
                  <td><label>Width</label> <input type="text" id="width" class="form-control" name="width" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off" value="<?php echo $_GET['width'] ?>"></td>
                  <td><label>Height</label> <input type="text" id="height" class="form-control" name="height" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off" value="<?php echo $_GET['height'] ?>"></td>
                  <td><label>Qty</label> <input type="text" id="qty" class="form-control" name="qty" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off" value="<?php echo $_GET['qty'] ?>"></td>
                  <td><label>Foot</label> <input type="text" id="foot" class="form-control" name="total_ft" required readonly autocomplete="off" value="<?php echo $_GET['total_ft'] ?>"></td>
                  <td><label>Rate</label> <input type="text" id="rate" class="form-control" name="rate" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" required autocomplete="off" value="<?php echo $_GET['rate'] ?>"></td>
                  <td><label>Amount</label> <input type="text" id="amount" class="form-control" name="amount" required readonly value="<?php echo $_GET['amount'] ?>"></td>
                  <td width="15%" autocomplete="off"><label>Cash/Credit</label> 
                     <select name="cash_cre" class="form-control" required autocomplete="off"
                     placeholder="Select Material" value="<?php echo $_GET['cash_cre'] ?>">
       
            <option value="CASH">CASH</option>
            <option value="CREDIT">CREDIT</option>
      
          </select></td>
                </tr> 
              
            
            </tbody>
           
          </table>
          
          
            <div class="text-center ">
              <input type="submit" name="submit" value="UPDATE" class="btn btn-raised btn-primary" > 
              
              
            
            </div>
           
          </form>
          <?php    

    
if (isset($_POST['submit']))
{
    $id = $_GET['sale_id'];
 $dt = $_POST['sale_date'];
 //19-02-2020
          $date = substr($dt,0,2);
          $month = substr($dt,3,2);
          $year = substr($dt,6,4);
          $newdt = date('Y-m-d',mktime(0,0,0,$month,$date,$year));

    $pn = $_POST['party_name'];
$ds = $_POST['discription'];
$mt = $_POST['material'];
$wd = $_POST['width'];
$hg = $_POST['height'];
$qt = $_POST['qty'];
$tf = $_POST['total_ft'];
$rt = $_POST['rate'];
$am = $_POST['amount'];
$cc = $_POST['cash_cre'];



   $query = "UPDATE sale_entry SET SALE_DATE='$newdt',PARTY_NAME='$pn',DISCRIPTION='$ds',MATERIAL='$mt',WIDTH='$wd',HEIGHT='$hg',QTY='$qt',TOTAL_FT='$tf',RATE='$rt',AMOUNT='$am',CASH_CRE='$cc' WHERE SALE_ID = '$id' ";
// $query = "update DATA_ENTRY SET PARTY_NAME='$pn',DISCRIPTION = '$ds',MATERIAL='$mt',WIDTH='$wd',HEIGHT='$hg',QTY='$qt' where ID = '$id' ";
   // $query = "update DATA_ENTRY set party_name = 'mashiha ansari' where id = 11 ";
    $data = mysqli_query($conn, $query);
    if ($data) {
        ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=data_entry.php"> 
<?php
    // else
    // {
        

    
    // }
}
else
{
    die("fail").mysqli_connect_error();
    }
}
?>

      </div>
    </div>
  </div>
</section>
  </div>
  </div>
  </div>
  </div>
  
  
<!-- DOM - jQuery events table -->
</div>
          </div>
        </div>
        <!-- END : End Main Content-->



    <?php
require 'footer.php';
?>
    <script type="text/javascript">
  function checkdelete()
  {
    return confirm('Are You sure to delete this data? ')
  }
</script>
    <!-- customer java -->
    <script>
      $(document).ready(function(){
        $("#width, #height, #qty,#rate").change(function(){
          cal();
        })
        function cal(){
          var width = $("#width").val();
          var height = $("#height").val();
          var qty = $("#qty").val();
          $("#foot").val(width*height*qty);
          var foot = $("#foot").val();


          var rate = $("#rate").val();
          $("#amount").val(foot*rate);
        }
        
      })
    </script>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy'});
  } );
  </script>
<script>
  $(document).ready( function () {
  $('#party_name').editableSelect();
  $('#material').editableSelect();
  
} );
  </script>
  </body>
  <!-- END : Body-->
</html>