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
                <!-- /.col -->
                <form method="POST" id="invoiceform">
                
                <div class="col-md-12">
        
                    <!-- View massage -->
                    
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- <h3 class="box-title">
                               Hello
                            </h3> -->
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
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
                                                  <input type="date" class="form-control" name="invoice_date" value="<?php echo $_GET['invoice_date'] ?>" required
                                                  placeholder="Pick-A-Date" >
                                              </div>
                                          </div>
                                             
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Party Name<span class="required" aria-required="true">*</span></label>
          <select id="party_name" name="party_name" class="form-control" required>
        <option value="<?php echo $_GET['party_name'] ?>"><?php echo $_GET['party_name']?></option>
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
                                                      <input type="text" class="form-control" name="bill_no" 
                                                      value="<?php echo $_GET['bill_no'] ?>" required>
                                                  </div>
                                              </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email<span class="required" aria-required="true">*</span></label>
                                                <input type="text" class="form-control" name="email" value="<?php echo $_GET['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Mobile No<span class="required" aria-required="true">*</span></label>
                                              <input type="text" class="form-control" name="mobile" value="<?php echo $_GET['mobile'] ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <label>GSTIN<span class="required" aria-required="true">*</span></label>
                                            <input type="text" class="form-control" name="gstin" value="<?php echo $_GET['gstin'] ?>" required>
                                            <input type="hidden" name="totalrow" id="totalrow">
                                        </div>
                                   </div>
                                 
                            
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                  <label>Billing Address</label>
                                                  <textarea class="form-control" name="bill_address"><?php echo $_GET['bill_address'] ?></textarea required>
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
                      <td><input type="text" name="material[]" id="material" class="form-control input-sm material" required/ value="<?php echo $_GET['material[]'] ?>"></td>
                      <td><input type="text" name="hsn_code[]" id="hsn_code" data-srno="1" class="form-control input-sm hsn_code" / value="<?php echo $_GET['hsn_code'] ?>"></td>
                      <td><input type="text" name="qty[]" id="qty" data-srno="1" class="form-control input-sm qty" value="<?php echo $_GET['qty'] ?>" /></td>
                      <td><input type="text" name="sqft[]" id="sqft" data-srno="1" class="form-control input-sm number_only sqft" value="<?php echo $_GET['sqft'] ?>" /></td>
                      <td><input type="text" name="rate[]" id="rate" data-srno="1" class="form-control input-sm rate" value="<?php echo $_GET['rate'] ?>" /></td>

                      <td><input type="text" name="amount[]" id="amount" data-srno="1" class="form-control input-sm number_only amount" value="<?php echo $_GET['amount'] ?>"   /></td>
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
           <input type="text" class="form-control" style="width: 200px;" name="total"
           value="<?php echo $_GET['total'] ?>">      </td>
            
            </tr>
            
            
            
            <tr>
              <td colspan="3" style="text-align: right ">
                CGST            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="cgst" id="cgst" value="<?php echo $_GET['cgst'] ?>">      </td>
              </tr>
            
            </tr>
            
            <tr>
              <td colspan="3" style="text-align: right ">
                SGST            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="sgst" id="sgst" value="<?php echo $_GET['sgst'] ?>">      </td>
            
            </tr>
            <tr>
              <td colspan="3" style="text-align: right ">
                Grand Total            </td>
                
                <td colspan="4" style="text-align: right; " >
               <input type="text" class="form-control" style="width: 200px;" name="grand_total" id="" value="<?php echo $_GET['grand_total'] ?>" >      </td>
            
            </tr>
            </tbody>
            </table>
            </div>
            
            
            
                  <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                  <label>Note</label>
                                  <textarea class="form-control" name="notes">
                                    <?php echo $_GET['notes'] ?>
                                  </textarea>
                              </div>
                          </div>
                          </div>
                            
                          <div class="form-actions text-center">

                <button type="submit" id="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
                <button type="button" class="btn btn-raised btn-raised btn-warning mr-1">
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

 


      // function cal_final_total(count)
      // {
      //   var final_item_total = 0;
      //   for(j=1; j<=count; j++)
      //   {
      //     var sqft = 0;
      //     var rate = 0;
      //     var actual_amount = 0;
        
      //     var item_total = 0;
      //     quantity = $('#order_item_quantity'+j).val();
      //     if(quantity > 0)
      //     {
      //       price = $('#order_item_price'+j).val();
      //       if(price > 0)
      //       {
      //         actual_amount = parseFloat(quantity) * parseFloat(price);
      //         $('#order_item_actual_amount'+j).val(actual_amount);
      //         tax1_rate = $('#order_item_tax1_rate'+j).val();
      //         if(tax1_rate > 0)
      //         {
      //           tax1_amount = parseFloat(actual_amount)*parseFloat(tax1_rate)/100;
      //           $('#order_item_tax1_amount'+j).val(tax1_amount);
      //         }
      //         tax2_rate = $('#order_item_tax2_rate'+j).val();
      //         if(tax2_rate > 0)
      //         {
      //           tax2_amount = parseFloat(actual_amount)*parseFloat(tax2_rate)/100;
      //           $('#order_item_tax2_amount'+j).val(tax2_amount);
      //         }
      //         tax3_rate = $('#order_item_tax3_rate'+j).val();
      //         if(tax3_rate > 0)
      //         {
      //           tax3_amount = parseFloat(actual_amount)*parseFloat(tax3_rate)/100;
      //           $('#order_item_tax3_amount'+j).val(tax3_amount);
      //         }
      //         item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
      //         final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
      //         $('#order_item_final_amount'+j).val(item_total);
      //       }
      //     }
      //   }
      //   $('#final_total_amt').text(final_item_total);
      // }

      // $(document).on('blur', '.order_item_price', function(){
      //   cal_final_total(count);
      // });

      // $(document).on('blur', '.order_item_tax1_rate', function(){
      //   cal_final_total(count);
      // });

      // $(document).on('blur', '.order_item_tax2_rate', function(){
      //   cal_final_total(count);
      // });

      // $(document).on('blur', '.order_item_tax3_rate', function(){
      //   cal_final_total(count);
      // });

      // $('#create_invoice').click(function(){
      //   if($.trim($('#order_receiver_name').val()).length == 0)
      //   {
      //     alert("Please Enter Reciever Name");
      //     return false;
      //   }

      //   if($.trim($('#order_no').val()).length == 0)
      //   {
      //     alert("Please Enter Invoice Number");
      //     return false;
      //   }

      //   if($.trim($('#order_date').val()).length == 0)
      //   {
      //     alert("Please Select Invoice Date");
      //     return false;
      //   }

      //   for(var no=1; no<=count; no++)
      //   {
      //     if($.trim($('#item_name'+no).val()).length == 0)
      //     {
      //       alert("Please Enter Item Name");
      //       $('#item_name'+no).focus();
      //       return false;
      //     }

      //     if($.trim($('#order_item_quantity'+no).val()).length == 0)
      //     {
      //       alert("Please Enter Quantity");
      //       $('#order_item_quantity'+no).focus();
      //       return false;
      //     }

      //     if($.trim($('#order_item_price'+no).val()).length == 0)
      //     {
      //       alert("Please Enter Price");
      //       $('#order_item_price'+no).focus();
      //       return false;
      //     }

      //   }

      //   $('#invoice_form').submit();

      // });

    });
    </script>
