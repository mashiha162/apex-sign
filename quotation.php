<?php
ob_start();
require 'header.php';
require 'navbar_header.php';
include("connection.php");
  session_start();
  if (!isset($_SESSION['admin_email'])){
      header('location:index.php');
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
       <form action="quotation_fun.php" method="POST">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">NEW QUOTATION</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
           <div><br></div>
              <div class="card-content">
          <div class="px-4">
          
              <div class="form-body">
                <h4 class="form-section">
                  <i class="ft-user"></i> Quotation Info</h4>
                <div class="row">
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>Customer Name</label>
                      <input type="text" id="name" class="form-control" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" id="mobile" class="form-control" name="mobile" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" maxlength="10" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>E-mail</label>
                      <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Quotation Date</label>
                      <input type="text" class="form-control" name="quot_date" required id="datepicker">
                    </div>
                  </div>
                </div>

              
                <div class="form-group">
                  <label>Address</label>
                  <textarea rows="2" id="address"class="form-control" name="address" required></textarea>
                   <input type="hidden" name="totalrow" id="totalrow">
                </div>
              </div>

                     
          <div class="table-responsive">
        <table class="table table-bordered table-hover" id="tireFields">
          <table id="invoice-item-table" class="table table-bordered">
            <tr>
              <th width="2%">SR</th>
              <th width="35%">Item Name</th>
              
              <th width="15%">SQ FT</th>

              <th width="15%" colspan="">Rate</th>
 
              <th width="15%" >Amount</th>
              <th width="3%" ></th>
            </tr>
           
            <tr>
              <td align="center"><span id="sr_no">1</span><input type="hidden" name="sr_no" id="sr_no" value="1"></td>
              <td><input type="text" name="material[]" id="material" class="form-control input-sm" /></td>
                   
              <td><input type="text" name="sqft[]" id="sqft" data-srno="1" class="form-control input-sm number_only sqft" oninput="this.value=this.value.replace(/[^0-9.]/g,'');" /></td>
              <td><input type="text" name="rate[]" id="rate" data-srno="1" class="form-control input-sm rate" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"/></td>

               <td><input type="text" name="amount[]" id="amount" data-srno="1" class="form-control input-sm number_only amount"  readonly="" /></td>
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
               <input type="text" class="form-control" style="width: 200px;" name="sgst" id="sgst" readonly="" readonly="">      </td>
            
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
                                  <textarea class="form-control" name="note"></textarea>
                              </div>
                          </div>
                          </div>
                          
                          <div class="form-actions text-center">

                <button type="submit" name="submit" class="btn btn-raised btn-raised btn-primary">
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
    <script>
    $(document).ready(function(){
   
      var count = 1;
      
    $(document).on('click', '#add_row', function(){
        count++;
        $("#totalrow").val(count);
        $('#total_item').val(count);
        var html_code = '';
        html_code += '<tr id="row_id_'+count+'">';
        html_code += '<td align="center"><span>'+count+'</span><input type="hidden" name="sr_no" id="sr_no" value="'+count+'"></td>';
        
        html_code += '<td><input type="text" name="material[]" id="material'+count+'" class="form-control input-sm" /></td>';
        
       
        html_code += '<td><input type="text" name="sqft[]" id="sqft'+count+'" data-srno="'+count+'" class="form-control input-sm number_only sqft" /></td>';
        html_code += '<td><input type="text" name="rate[]" id="rate'+count+'" data-srno="'+count+'" class="form-control input-sm rate" /></td>';
        
        html_code += '<td><input type="text" name="amount[]" id="amount'+count+'" data-srno="'+count+'" class="form-control input-sm number_only amount"  /></td>';
        
        html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
        html_code += '</tr>';
        $('#invoice-item-table').append(html_code);
      });
      
 $("#submit").click( function(){
        $.ajax({
          url:'quotation_fun.php',
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
        $("#sqft, #rate").change(function(){
          cal();
        })
        function cal(){
          var sqft = $("#sqft").val();
          var rate = $("#rate").val();
          
          $("#amount").val(sqft*rate);
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
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
     $("#datepicker").datepicker().datepicker("setDate", new Date());
  } );
  </script>
  </body>
  <!-- END : Body-->
</html>