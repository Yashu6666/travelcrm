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
        <div class="page-title">Add Visa</div>
       </div>
       <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
         href="<?php echo site_url();?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
        </li>
        <li>&nbsp;<a class="parent-item" href="#">Inventory</a>&nbsp;<i
         class="fa fa-angle-right"></i></li>
         <li>&nbsp;<a class="parent-item" href="<?php echo site_url();?>visa/view_visa">Visa</a>&nbsp;<i
          class="fa fa-angle-right"></i></li>

          <li class="active">Add Visa</li>
         </ol>
        </div>
       </div>
       <div class="row">
        <div class="col-sm-12">
         <div class="card-box">
          <div class="card-head">
           <header>Add Visa</header>
          </div>
        

          <div class="card-body ">

   <form action="<?php echo site_url();?>visa/addVisaDetails" method="post" encrypt="multipart/form-data">
         


         
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
              <tr id="myTableRow">
          
              
              <td>
               <div>
                <!-- <select data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" name="visa_category">
                <option value="Tourism">Tourism</option>
                <option value="Business">Business</option>
                <option value="Student">Student</option>
                <option value="Immigrant">Immigrant</option>
                <option value="Transit">Transit</option>
                <option value="Conference">Conference</option>
                <option value="Work permit">Work permit</option>
               </select> -->

               <select data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" id= "visa_category" name="visa_category">
                <option value="">Select Category</option>               
                <option value="48_hrs">48 hrs Transit</option>
                <option value="96_hrs">96 hrs Transit</option>
                <option value="30_days_tourist">30 Days Tourist</option>
                <option value="90_days_single">90 Days Single entry</option>
                <option value="90_days_multi">90 Days Muti Entry</option>
                 </select>

              </div>
             </td>
             <td>
              <div>
               <select data-mdl-for="sample2" class="form-control"
               value=""  tabIndex="-1" name="entry_type">
               <option value="Single Entry">Single Entry</option>
               <option value="Double Entry">Double Entry</option>
               <option value="Multi Entry">Multi Entry</option>
              </select>

             </div>
            </td>
            <td><input type="text" placeholder="" class="form-control" name="process_time">
            </td>
           <td>
             <div>
              <select data-mdl-for="sample2" class="form-control"
              value=""  tabIndex="-1" name="visa_validity">
              <option value="1 Month">1 Month</option>
              <option value="3 Month">3 Month</option>
              <option value="5 Years">5 Years</option>
             </select>
            </div>
           </td>

           <td><input type="text" placeholder="0" class="form-control" name="adult">
           </td>
           <td><input type="text" placeholder="0" class="form-control" name="child">
           </td>
           <td><input type="text" placeholder="0" class="form-control" name="infant"> 
           </td>
         
         </tr>

         </tbody>
        </tbody>
       </table>
       
       <div class="row" style="margin-left:450px">
										<div class="col-md-12">
											<a type="button" class="new_btn px-3" href="<?php echo base_url();?>visa/view_visa">Cancel</a>
											<button type="submit" class="new_btn px-3">Submit</button>
										</div>
									</div>
      </div>
    
      <div style="margin-top: 30px;">
      </div>

     </div>
    </div>
   </div>
  </div>
</form>
 </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                   <h2>Upload Documents</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              
                <div class="modal-body">
                <div class="card-body ">
    <form id="data" method="post" enctype="multipart/form-data">
      <input type="hidden"  id="xyz"  name="xyz" >
      <div class="table">
         <div class="row">
          <div class="ml-4">
          <label style="font-weight: bold;margin-left: 30px;">Document Submission</label>
          <tr>
           <td>
            <label class="mdl-radio mdl-js-radio ml-4" for="option1">
             <input type="radio" id="option1" name="doc_submission"
              class="mdl-radio__button ml-4" checked value="Yes">
             <span class="mdl-radio__label">Yes</span>
            </label>
           </td>
           <td>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
             for="option2">
             <input type="radio" id="option2" name="doc_submission"
              class="mdl-radio__button" value="No">
             <span class="mdl-radio__label">No</span>
            </label>
           </td>
           
         </tr>
         </div>
         <div style="margin-left: 40px;"></div>
         <div class=" row ml-4">
          <label style="font-weight: bold;margin-left: 5px;">Physical Interview</label>
          <div class="form-check ml-4">
           <input class="form-check-input" type="radio" name="interview" id="exampleRadios1" value="Yes" checked>
           <label class="form-check-label" for="exampleRadios1">
            Yes
           </label>
            </div>
            <div class="form-check ml-2">
           <input class="form-check-input" type="radio" name="interview" id="exampleRadios2" value="No">
           <label class="form-check-label" for="exampleRadios2">
            No
           </label>
            </div>

            </div>
            <div style="margin-top: 30px;">
          <div class="row ml-4 mt-4">
           <div style="flex-direction: column;" class=" col ml-4 ">
            <div>
              <label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">Proof of Occupation</label>
             </div>
           <div><input type="file" class="" placeholder="" id="occupation_photo" name="occupation_photo" id="occupation"></div>
          </div>
          <div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            One old Passport</label></div>
          <div><input type="file" class="" placeholder="" id="oldpassport_photo" name="oldpassport_photo"></div>
         </div>
        </div>
            
            <div class="row ml-4 mt-4">
           <div style="flex-direction: column;" class=" col ml-4 ">
            <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            Pan Card</label></div>
           <div><input type="file" class="" placeholder="" id="pancard_photo" name="pancard_photo"></div>
          </div>
          <div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            Original Passport</label></div>
          <div><input type="file" class="" placeholder="" id="newpassport_photo" name="newpassport_photo"></div>
         </div>
          
            </div>
            <div class="row ml-4 mt-4">
           <div style="flex-direction: column;" class=" col ml-4 ">
            <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
             Photo(51mm X 51mm)</label></div>
           <div><input type="file" class="" placeholder="" id="photo" name="photo"></div>
          </div>
          <div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            Biometrics</label></div>
          <div><input type="file" class="" placeholder="" id="biometrics" name="biometrics"></div>
         </div>
           
            </div>
            <div class="row ml-4 mt-4">

            <div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            Basic Requirements</label></div>
          <div><input type="file" class="" placeholder="" id="basic_require" name="basic_require"></div>
         </div>
         <div style="flex-direction: column;" class=" col ml-4 ">
          <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
           Photo</label></div>
         <div><input type="file" class="" placeholder="" id="basic_photo" name="basic_photo "></div>
        </div>
           
            </div>
            <div class="row ml-4 mt-4">
           <div style="flex-direction: column;" class=" col ml-4 ">
            <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
             Passport Scan</label></div>
           <div><input type="file" class="" placeholder="" id="passport_scan" name="passport_scan"></div>
          </div><div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
            Letters Addressed to the Embassy/Consulate</label></div>
          <div><input type="file" class="" placeholder="" id="address" name="address"></div>
         </div>
           
            </div>
            <div class="row ml-4 mt-4">
           
          <div style="flex-direction: column;" class=" col ml-4 ">
           <div><label style="font-size: small;font-weight: bold;color: rgb(255, 179, 0);">
            Photo(35mm X 45mm)</label></div>
          <div><input type="file" class="" placeholder="" id="address_photo" name="address_photo"></div>
         </div>
            </div>
            
         </div>
       </div>
      </div>
     </div>   
  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="save">Upload</button>
                </div>
            </form>
            </div>
        </div>
    </div>
 
<?php $this->load->view('footer');?>



<script type="text/javascript">

$('#faqs').on('click','.btn', function() {
    var id =  $(this).closest("tr").attr('id');
      //alert(id);
    $('#xyz').val(id);
  var arr = [];
  var i=0;
  $("#faqs tr").each(function() {
  arr[i++] = this.id;
  });
  var str = arr.toString();
  var row_ids = str.replace(',','');

    $('#row_ids').val(row_ids);

    });   
    
  $('#data').submit(function(event){
        event.preventDefault();

   jQuery.ajax({
    url: '<?php echo site_url(); ?>/visa/upload_docs',
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
 })

</script>
<script>
 var faqs_row = 0;

 function addfaqs() {
  html = '<tr id="faqs-row' + faqs_row + '">';
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
</script> 
</script> 