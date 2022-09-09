  <?php $this->load->view('header');?> 
 
  <!-- start page container -->
  <div class="page-container">
   <!-- start sidebar menu -->
   <?php $this->load->view('side_bar');?>
   <!-- end sidebar menu -->
   <!-- start page content -->
   <div class="page-content-wrapper">
    <div class="page-content">
     <div class="page-bar">
      <div class="page-title-breadcrumb">
       <div class=" pull-left">
        <div class="page-title">Edit Visa</div>
       </div>
       <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
         href="<?php echo site_url();?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
        </li>
        <li>&nbsp;<a class="parent-item" href="#">Inventory</a>&nbsp;<i
         class="fa fa-angle-right"></i></li>
         <li>&nbsp;<a class="parent-item" href="<?php echo site_url();?>visa/view_visa">Visa</a>&nbsp;<i
          class="fa fa-angle-right"></i></li>

          <li class="active">Edit Visa</li>
         </ol>
        </div>
       </div>
       <div class="row">
        <div class="col-sm-12">
         <div class="card-box">
          <div class="card-head">
           <header>Edit Visa</header>
          </div>
          <div style="margin-top: 30px;">


          </div>

          <div class="card-body ">

           <div class="">
   <form action="<?php echo site_url();?>visa/updateVisaDetails/<?php echo $edit->id;?>" method="post" encrypt="multipart/form-data">
  

           <table id="faqs" class="table table-hover">
            <thead>
             <tr>
        
              <th>Visa Category</th>
              <th>Entry Type</th>
              <th>Processing Time</th>
              <th>Validity</th>
           
              <th>Adult Rate</th>
              <th>Child Rate</th>
              <th>Infant Rate</th>
      

             </tr>
         
            </thead>
            <tbody>
           
           
             <tbody>
            
              <tr id="">
            <td>
               <div>
                <!-- <select data-mdl-for="sample2" class="form-control"
            tabIndex="-1" name="visa_category">
                <option <?php echo $edit->visa_category=="Tourism"?"selected":"" ?> value="Tourism">Tourism</option>
                <option  <?php echo $edit->visa_category=="Business"?"selected":"" ?> value="Business">Business</option>
                <option  <?php echo $edit->visa_category=="Student"?"selected":"" ?> value="Student">Student</option>
                <option  <?php echo $edit->visa_category=="Immigrant"?"selected":"" ?> value="Immigrant">Immigrant</option>
                <option  <?php echo $edit->visa_category=="Transit"?"selected":"" ?> value="Transit">Transit</option>
                <option  <?php echo $edit->visa_category=="Conference"?"selected":"" ?> value="Conference">Conference</option>
                <option  <?php echo $edit->visa_category=="Work permit"?"selected":"" ?> value="Work permit">Work permit</option>
               </select> -->

               <!-- <select data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" name="visa_category">
                <option value="Tourism">Select Category</option>
                <option value="Tourism">48 hrs Transit</option>
                <option value="Business">96 hrs Transit</option>
                <option value="Student">90 Days Single entry</option>
                <option value="Immigrant">90 Days Muti Entry</option>
                 </select> -->
                 <select data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" name="visa_category">
                <option value="">Select Category</option>
                
                 <option <?php echo $edit->visa_category=="48_hrs"?"selected":""?> value="48_hrs">48 hrs Transit</option>

                <!-- // <option value="48_hrs">48 hrs Transit</option> -->
                <option <?php echo $edit->visa_category=="96_hrs"?"selected":""?> value="96_hrs">96 hrs Transit</option>
                <option <?php echo $edit->visa_category=="30_days_tourist"?"selected":""?> value="30_days_tourist">30 Days Tourist</option>
                <option <?php echo $edit->visa_category=="90_days_single"?"selected":""?> value="90_days_single">90 Days Single entry</option>
                <option <?php echo $edit->visa_category=="90_days_multi"?"selected":""?> value="90_days_multi">90 Days Muti Entry</option>
                 </select>


              </div>
             </td>
             <td>
              <div>
               <select data-mdl-for="sample2" class="form-control"
               value=""  tabIndex="-1" name="entry_type">
             <option <?php echo $edit->entry_type=="Single Entry"?"selected":"" ?>  value="Single Entry">Single Entry</option>
               <option <?php echo $edit->entry_type=="Double Entry"?"selected":"" ?>  value="Double Entry">Double Entry</option>
               <option <?php echo $edit->entry_type=="Multi Entry"?"selected":"" ?>  value="Multi Entry">Multi Entry</option>
              </select>

             </div>
            </td>
            <td><input type="text" value="<?php echo $edit->process_time?>"  class="form-control" name="process_time"  value="">
            </td>
            <td>
            <select data-mdl-for="sample2" class="form-control"
              value=""  tabIndex="-1" name="visa_validity">
              <option <?php echo $edit->visa_validity=="1 Month"?"selected":"" ?>  value="1 Month">1 Month</option>
              <option <?php echo $edit->visa_validity=="3 Month"?"selected":"" ?>  value="3 Month">3 Month</option>
              <option <?php echo $edit->visa_validity=="5 Years"?"selected":"" ?>  value="5 Years">5 Years</option>
             </select>
            </td>
       
           <td><input type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $edit->adult?>" >
           </td>
           <td><input type="text" placeholder="0" class="form-control" name="child" value="<?php echo $edit->child?>" > 
           </td>
           <td><input type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $edit->infant?>" > 
           </td>
        
         </tr>
       
         </tbody>
        </tbody>
       </table>
      </div>
   
      <div class="row" style="margin-left:45%">
      <button type="submit" class="new_btn px-3"  >Update</button>
      </div>
     
     </div>
    </div>
   </div>
  </div>
</form>
 </div>
</div>


                <div class="modal-footer">
                    <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="new_btn px-3" id="save" data-id="">Upload</button>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php $this->load->view('visa/footer');?>


<script type="text/javascript">
  $("#cl-btn").click(function(){
    var id =  $(this).attr('data-id');
    var visa_id = $('#visa_id').val();
  // alert(id);
    $.ajax({
      url: '<?php echo site_url(); ?>/visa/get_docsByRow',
    data: {'id':id,'visa_id':visa_id},
    dataType: "json",
    type: 'POST', 
    success: function(data){

      var url = '<?php echo base_url();?>';

      $.each(data, function (key, value) { 
        if(value['occupation_proof'] != '')
        {
          $("#occupation_proof").attr('src',url+value['occupation_proof']);
          $("#old_occ").val(value['occupation_proof']);
        }
        if(value['old_passport'] != '')
        {
          $("#oldpassport").attr('src',url+value['old_passport'] );
          $("#oldpass").val(value['old_passport'] );
        }
        if(value['pancard'] != '')
        {
          $("#pancard").attr('src',url+value['pancard'] );
          $("#pan").val(value['pancard'] );
        }      
        if(value['original_passport'] !='')
        {
          $("#newpassport").attr('src',url+value['original_passport'] );
          $("#newpass").val(value['original_passport'] );
        }      
        if(value['photo'] !='')
        {
         $("#photourl").attr('src',url+value['photo'] );
         $("#oldphoto").val(value['photo'] );
        }       
        if(value['biometrics'] !='')
        {
         $("#biometricsurl").attr('src',url+value['biometrics'] );
         $("#oldbiometric").val(value['biometrics'] );
        }       
        if(value['basic_requirements'] !='')
        {
         $("#basicurl").attr('src',url+value['basic_requirements'] );
          $("#oldbasic").val(value['basic_requirements'] );
        } 
        if(value['photo2'] !='')
        {
         $("#basic_photourl").attr('src',url+value['photo2'] );
         $("#oldbasic_photo").attr(value['photo2'] );
        }      
          if(value['passport_scan'] !='')
        {
         $("#passport_scanurl").attr('src',url+value['passport_scan'] );
         $("#oldpassport_scan").val(value['passport_scan'] );
        }       
            if(value['address'] !='')
        {
         $("#addressurl").attr('src',url+value['address'] );
         $("#oldaddress").val(value['address'] );
        }    
             if(value['photo3'] !='')
        {
         $("#address_photourl").attr('src',url+value['photo3'] );
         $("#oldphotourl").val(value['photo3'] );
        }      
              $("#xyz").val(value['rowids']);
            })
      
        $("#data").trigger('reset');
    }

    });


  });
</script>
<script type="text/javascript">
 
$('#faqs').on('click','.btn', function() {
    var id =  $(this).attr('data-id');
     // alert(id);
    $('#xyz').val(id);
  var arr = [];
  var i=0;
  $("#faqs tr").each(function() {
  arr[i++] = this.id;
  });
  var str = arr.toString();
  var row_ids = str.replace(',','');
  alert(row_ids);
    $('#row_ids').val(row_ids);

    });   
    
  $('#data').submit(function(event){
        event.preventDefault();

   jQuery.ajax({
    url: '<?php echo site_url(); ?>/visa/update_docs',
    data: new FormData(this),
    cache: false,
    contentType: false,
    processData: false,
    type: 'POST', 
    success: function(data){
        $("#staticBackdrop").modal('hide');
        $("#data").trigger('reset');
    }
});
});
  

</script>
<script>
 $(document).ready(function () {
  $('input[name="intervaltype"]').click(function () {
   $(this).tab('show');
   $(this).removeClass('active');
  });
 });

</script>

<script>

  var faqs_row = 0;

  function addfaqs() {
  html = '<tr id="faqs-row' + faqs_row + '">';
  html += '<td><input type="text" class="form-control" placeholder="Tourist Visa" name="visa_name[]"></td>';
  // html += '<td><div><select data-mdl-for="sample2" class="form-control"  value="" readonly tabIndex="-1" name="visa_required[]"><option value=" value="No">No</option><option value="Visa On Arrival">Visa On Arrival</option><option value="Normal visa">Normal visa</option><option value="e visa">e visa</option><option value="Emergency visa">Emergency visa</option></select></div></td>';
  html += '<td><div><select data-mdl-for="sample2" class="form-control" value="" readonly tabIndex="-1" name="visa_category[]"><option value="Tourism" >Tourism</option><option name="Business">Business</option><option value="Student">Student</option><option value="Immigrant">Immigrant</option><option value="Transit">Transit</option><option value="Conference">Conference</option><option value="Work permit">Work permit</option></select></div></td>';
  html += '<td><div><select data-mdl-for="sample2" class="form-control" value="" readonly tabIndex="-1" name="entry_type[]"><option value="Single Entry">Single Entry</option><option value="Double Entry">Double Entry</option><option value="Multi Entry">Multi Entry</option></select></div></td>';
  html += '<td><input type="text" placeholder="" class="form-control" name="process_time[]"></td>';
  html += '<td><input type="date" placeholder="0" class="form-control" name="visa_validity[]"></td>';
  // html += '<td><input type="text" placeholder="0" class="form-control" name="duration[]"></td>';
  // html += '<td><div><select data-mdl-for="sample2" class="form-control" value="" readonly tabIndex="-1" name="currency[]"><option value="INR">INR</option><option value="USD">USD</option><option value="EUR">EUR</option><option name="AED">AED</option></select></div></td>';
  html += '<td><input type="text" placeholder="0" class="form-control" name="adult[]"></td>';
  html += '<td><input type="text" placeholder="0" class="form-control" name="infant[]"></td>';
  html += '<td> <button type="button" id="cl-btn" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update</button></td>';
  html += '<td class="mt-10"><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button></td>';
  html += '</tr>';

  $('#myTableRow').remove();

  $('#faqs').prepend(html);
  faqs_row++;
 }

</script> 


