<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
  session_start();
   if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
    }

//FETCH PARTIES NAME FROM PARTY TABLE
include("connection.php");
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
          <div class="content-wrapper"><div class="row">
  <div class="col-12">
    <div class="content-header"></div>
  </div>
</div>
                          
<!-- abc -->
<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">CREATE INVOICE</h4>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <section class="content">
            <div class="row">
              <form method="POST" id="invoiceform">
                <div class="col-md-12">
              <div class="box box-primary">
                        <div class="box-header with-border">
                         </div>
                        <div class="box-body">
                      <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12 ">
                                  <div id="msg"></div>
                                  <div class="row">
                                      <div class="col-md-12">
         <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Invoice Info</h4>
                                          <div class="row">
                                              <div class="col-md-3">
                                              <div class="form-group">
                                                  <label>Invoice Date<span class="required" aria-required="true">*</span></label>
                                                  <input type="text" class="form-control" name="invoice_date" required
                                                  id="datepicker">
                                              </div>
                                          </div>
                                             
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Party Name<span class="required" aria-required="true">*</span></label>
          <select id="party_name" name="party_name" class="form-control" required placeholder="Select Party">
      
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
                                                      <label>Bill No<span class="required" aria-required="true">*</span></label>
                                                      <input type="text" class="form-control" name="bill_no" required
                                                      oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                                                      autocomplete="off">
                                                  </div>
                                              </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email<span class="required" aria-required="true">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Mobile No<span class="required" aria-required="true">*</span></label>
                                              <input type="text" class="form-control" name="mobile" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" autocomplete="off">
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label>GSTIN<span class="required" aria-required="true">*</span></label>
                                            <input type="text" class="form-control" name="gstin" required>
                                            <input type="hidden" name="totalrow" id="totalrow" autocomplete="off">
                                        </div>
                                   </div>
                                 
                            
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Billing Address</label>
                                                  <textarea class="form-control" name="bill_address"></textarea required autocomplete="off">
                                              </div>
                                          </div>
        
                                       
                                      
        </div>
        </div>
        
      

        <div class="box" style="margin-top: 20px;">
          <div class="box-body">
        
              <div id="cart_view"><div class="table">
        
        <div class="table-responsive">
        <table class="table table-bordered table-hover" id="tireFields">
          <table id="invoice-item-table" class="table table-bordered">
            <tr>
              <th width="2%">SR</th>
              <th width="30%">Item Name</th>
              <th width="15%">HSN CODE</th>
              <th width="10%">Qty</th>
              <th width="15%">SQ FT</th>

              <th width="10%">Rate</th>
 
              <th width="20%" >Amount</th>
              <th width="2%" ></th>
            </tr>
           
            <tr>
              <td align="center"><span id="sr_no">1</span><input type="hidden" name="sr_no" id="sr_no" value="1"></td>
                      <td><input type="text" name="material[]" id="material" class="form-control input-sm material" required autocomplete="off"/></td>
                      <td><input type="text" name="hsn_code[]" id="hsn_code" data-srno="1" class="form-control input-sm hsn_code" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"autocomplete="off" /></td>
                      <td><input type="text" name="qty[]" id="qty" data-srno="1" class="form-control input-sm qty"oninput="this.value=this.value.replace(/[^0-9.]/g,'');" autocomplete="off" /></td>
                      <td><input type="text" name="sqft[]" id="sqft" data-srno="1" class="form-control input-sm number_only sqft"oninput="this.value=this.value.replace(/[^0-9.]/g,'');" autocomplete="off" /></td>
                      <td><input type="text" name="rate[]" id="rate" data-srno="1" class="form-control input-sm rate"
                        oninput="this.value=this.value.replace(/[^0-9.]/g,'');"autocomplete="off" /></td>

                      <td><input type="text" name="amount[]" id="amount" data-srno="1" class="form-control input-sm number_only amount" readonly=""  /></td>
                      <td></td>
                    </tr>
                  </table>
                  <div align="right">
                    <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                  </div>
                </td>
              </tr>
             
          </table>
          <table class="table table-hover">
            <thead>
            
            <tr style="border-bottom: solid 1px #ccc">
            <th style="width: 15px"></th>
            <th class=""></th>
            <th class="col-sm-5"></th>
            <th class=""></th>
            <th class=""></th>
            <th style="width: 230px"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td colspan="3" style="text-align: right ">
            Total            </td>
            
            <td colspan="4" style="text-align: right; " >
           <input type="text" class="form-control" style="width: 200px;" name="total" id="total" readonly="">      </td>
            
            </tr>
            
            
            
            <tr>
              <td colspan="3" style="text-align: right ">
                CGST            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="cgst" id="cgst" readonly="">      </td>
              </tr>
            
            </tr>
            
            <tr>
              <td colspan="3" style="text-align: right ">
                SGST            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="sgst" id="sgst" readonly="">      </td>
            
            </tr>
            <tr>
              <td colspan="3" style="text-align: right ">
                Grand Total            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="grand_total" id="grand_total" readonly="" >      </td>
            
            </tr>
            </tbody>
            </table>
            </div>
            
            
            
                  <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                  <label>Note</label>
                                  <textarea class="form-control" name="notes"></textarea>
                              </div>
                          </div>
                          </div>
                            
                          <div class="form-actions text-center">

                <button type="submit" id="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
                <button type="reset" class="btn btn-raised btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                
              </div>
                        </form>
          
        
        </div>
        </div>
        
       
      </div>
        
         </section>
          
        
        </div>
      

        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
        <!-- END : End Main Content-->



       <?php
require 'footer.php';
?>
  </body>
  
  </html>
  <script>
    $(document).ready(function(){
      var final_total_amt = $('#final_total_amt').text();
      var count = 1;
      
      $(document).on('click', '#add_row', function(){
        count++;
        $("#totalrow").val(count);
        $('#total_item').val(count);
        var html_code = '';
        html_code += '<tr id="row_id_'+count+'">';
        html_code += '<td align="center"><span>'+count+'</span><input type="hidden" name="sr_no" id="sr_no" value="'+count+'"></td>';
        // html_code += '<td align="center"><span id="sr_no">'+count+'</span></td>';
        
        html_code += '<td><input type="text" name="material[]" id="material'+count+'" class="form-control input-sm" /></td>';
        
        html_code += '<td><input type="text" name="hsn_code[]" id="hsn_code'+count+'" data-srno="'+count+'" class="form-control input-sm number_only hsn_code" /></td>';
        html_code += '<td><input type="text" name="qty[]" id="qty'+count+'" data-srno="'+count+'" class="form-control input-sm number_only qty" /></td>';
        html_code += '<td><input type="text" name="sqft[]" id="sqft'+count+'" data-srno="'+count+'" class="form-control input-sm number_only sqft" /></td>';
        html_code += '<td><input type="text" name="rate[]" id="rate'+count+'" data-srno="'+count+'" class="form-control input-sm rate" /></td>';
        
        html_code += '<td><input type="text" name="amount[]" id="amount'+count+'" data-srno="'+count+'" class="form-control input-sm number_only amount"  /></td>';

        html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
        html_code += '</tr>';
        $('#invoice-item-table').append(html_code);
      });
      
      $("#submit").click( function(){
        $.ajax({
          url:'invoice_fun.php',
          method:'post',
          datatype:'json',
          data:$("#invoiceform").serialize(),
          success: function(data,status){
            alert(data);
          }
        });

      });


      $(document).on('click', '.remove_row', function(){
        var row_id = $(this).attr("id");
      
        $('#row_id_'+row_id).remove();
        count--;
        $('#total_item').val(count);
        $("#totalrow").val(count);
      });

 
    });
    </script>
     <script>
      $(document).ready(function(){
        $("#qty, #sqft, #rate").change(function(){
          cal();
        })
        function cal(){
          var sqft = $("#sqft").val();
          var rate = $("#rate").val();
          var qty = $("#qty").val();
          $("#amount").val(qty*sqft*rate);
          calc_total();
        }

        function calc_total()
          {
            total=0;
                  total += parseInt($("#amount").val());
            $("#total").val(total.toFixed(2));
            var cgst = (total*9/100);
            $("#cgst").val(cgst);
            var sgst = (total*9/100);
            $("#sgst").val(sgst);
            var gtotal = total+cgst+sgst;
            $("#grand_total").val(gtotal.toFixed(2));

            // $('#tax_amount').val(tax_sum.toFixed(2));
            // $('#total_amount').val((tax_sum+total).toFixed(2));
          }
        // $("#total").val("total");

      })
    </script>
    <script>
  $(document).ready( function () {
  $('#party_name').editableSelect();
 
  
} );
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
     $("#datepicker").datepicker().datepicker("setDate", new Date());
  } );
  </script>

