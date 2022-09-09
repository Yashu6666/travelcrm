<?php $this->load->view('header');?>
<?php $this->load->view('package/modal');?>
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
       <div class="page-title">Add Package</div>
     </div>
     <ol class="breadcrumb page-breadcrumb pull-right">
       <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
        href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
      </li>
      <li>&nbsp;<a class="parent-item" href="#">Inventory</a>&nbsp;<i
        class="fa fa-angle-right"></i>
      </li>
      <li>&nbsp;<a class="parent-item" href="#">Package</a>&nbsp;<i
        class="fa fa-angle-right"></i>
      </li>

      <li class="active">Add Package</li>
    </ol>
  </div>
</div>


<div class="card-box">
  <div class="card-head">
   <header>Add Package</header>
 </div>
 <div class="row">
   <div class="col-sm-12" style="height:1600px">
    <hr>
  </hr>

  <div id="exTab2" class="container">
    <ul class="nav nav-tabs">
     <li class="active">
      <a href="#1" data-toggle="tab">1 Create Package</a>
    </li>
    <li><a class="tabNext" href="#2" data-toggle="tab">2 Itinerary</a>
    </li>
    <li><a href="#3" data-toggle="tab">3 Transport</a>
    </li>
    <li><a href="#4" data-toggle="tab">4 Other</a>
    </li>
    <li><a href="#5" data-toggle="tab">5 T & C</a>
    </li>
    <li><a href="#6" data-toggle="tab">6 Cost Sheet</a>
    </li>

  </ul>
 <form action="<?php echo site_url();?>package/addPackageDetails" method="post" enctype="multipart/form-data">

<?php $uniqueCode = mt_rand(1111,9999);
 ?>
  <input type="hidden" name="package_id" id="package_id" value="<?php echo $uniqueCode;?>">

  <div class="tab-content ">
   <div class="tab-pane active" id="1">
    <div>

      <div style="margin-top: 30px;">

       <div class="row ml-4 mt-4">
        <input type="text" class="title_package" placeholder="Enter Package Name" name="package_name" id="package_name" required="">
        <input type="text" class="ml-4" placeholder=" City Name" name="city_name" id="city_name">
        <input type="text" class="ml-4" placeholder="End City" name="end_city" id="end_city">
        <input type="text" class="ml-4" placeholder="Destination Covered" name="destination_covered">
      </div>
      <div class="row ml-4 mt-4">
    
        <input type="number" class="travelers" placeholder="No of Adults" name="no_adults" id="no_adults">
         <input type="number" class="travelers ml-4" placeholder="No of Children" name="no_child" id="no_child">
          <input type="number" class="travelers ml-4" placeholder="No of Infant" name="no_infant" id="no_infant">
        <select name="inclusions" class="ml-4">
         <option value="">Select Inclusions</option>
         <option value="Hotel">Hotel</option>
         <option value="Only Breakfast">Only Breakfast</option>
         <option value="B/fast and lunch">B/fast and lunch</option>
         <option value="B/fast and dinner">B/fast and dinner</option>
         <option value="Self Driven Scooter">Self Driven Scooter</option>
         <option value="Evening Party Cruise">Evening Party Cruise</option>
         <option value="Speed Boat">Speed Boat</option>
         <option value="Jungle Safari">Jungle Safari</option>

       </select>

     </div>

   </div>
   <div style="margin-top:30px;"></div>

   <div style="margin-bottom: 5px;"></div>

   <div style="margin-top: 5px;"></div>
   <div class="row form-group mb-3">
    <label style="font-weight: bold;"
    class="col-md-12 control-label text-left">Overview</label>
    <div class="col-md-12">
     <div id="editor" name="overview">

     </div>

   </div>
 </div>

</div>
<a href="#" class="firstNext btn btn-info btnNext" style="color:white;">Next</a>

</div>
<div class="tab-pane" id="2">
  <div>

   <div class="card-box">
     <h4 class="package_title ml-4"></h4>
     <input type="hidden" name="package_title" value="" id="package_title">
     <div class="row ml-4">
      <p style="color: rgb(231, 50, 18);">Staring from:</p>
      <p class="ml-2" id="start_from1"></p>
      <input type="hidden" name="start_from" value="" id="start_from">
      <p class="ml-4" style="color: rgb(231, 50, 18);">Going to:</p>
      <p class="ml-2" id="go_to1"></p>

      <input type="hidden" name="go_to" value="" id="go_to">
      <p style="color: rgb(231, 50, 18);margin-left: 60px;">Start
      Date:</p>
      <p class="ml-2"><input class="form-control" type="date" name="start_date" id="start_date" value="" ></p>
      <p class="ml-4" style="color: rgb(231, 50, 18);">Number of Days:
      </p>
      <p class="ml-2"><input class="form-control" type="text" id="no_days" name="no_days" value="" readonly="" style="border: none;"></p>
    </div>
    <div class="row ml-4">
     <p style="color: rgb(231, 50, 18);">Days Added:</p>
     <p class="ml-2"><span id="nightcountres"> </span> Nights  <span id="daycountres"></span> Days</p>
   </div>

 </div>
 <div class="row">
  <div><label class="col-md-12 control-label text-left ml-2"
   style="font-weight: bold;">Create Itinerary</label></div>
   <div>
    <p id="no_days_nights"><input type="text" id="itnnights" value="0" style="border: none;width: 20px;"> Nights <input type="text" value="1" id="itndays"  style="border: none;width: 20px;"> Days</p>
  </div>
</div>
<div class="card-box">
 <div class="row">
  <!-- <div class="ml-2" style="">
   <h4 style="font-size: large;" class="city_nameitn ml-4"></h4>

 </div>
 <div class="ml-2" style="">
   <h4 style="" class="ml-4">Night: <input type="text" id="total_nights" name="total_nights" style="border: none;"></h4>

 </div> -->
 <div class="ml-4" style="">
   <h4 style="font-weight: bold;" class="ml-4">From</h4>
   <div class="row ml-4">
    <p class="ml-2">Day 1 : <input type="text" name="s_date" id="s_date" style="border: none;" value=""></p>
  </div>
</div>

<div class="ml-2" style="">
 <h4 style="font-weight: bold;" class="ml-4">To
 </h4>
 <div class="row ml-4">
  <p class="ml-2">Day <input  type="text" name="itn_count" id="itn_count" style="border: none;width: 17px;" value=""> : <input type="text" name="e_date" id="e_date" style="border: none;"></p>
</div>
</div>
</div>
</div>


 <table class="table table-hover" id="city_display" >
  <thead>
    <tr><th > City Name</th>
      <th > No of Nights</th>
      <th >From</th>
      <th>To</th>
    </tr>
  </thead>
  <tbody >
</tbody>
</table>



<table id="faqs" class="table table-hover">
 <tbody>
  <tr>
   <td>
     <input type="text" class="form-control"
    placeholder="Add City" name="itncity_name" id="itncity_name">
  </td>
    <td>
      <input type="number" placeholder="No.of Nights"
     class="no_nights form-control" id="no_nights" name="no_nights">
   </td>

    <td>
      <input type="hidden" id="from_day" name="from_day">
   </td>

   <td>
      <input type="hidden" id="to_day" name="to_day">
   </td>

     <td> <button type="button" class="btn btn-success" id="addCity" onclick="return addDayIten();" >Add
    City</button>
  </td>
</tr>

</tbody>

</table>
<div class="card-content">
  <div>
   <div id="resultdayiten"> 
    <div id="resultdayiten1" class="col-md-12 no-padding"  style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
     <div style="margin-bottom:5px; margin-top: 5px; " class="" >
      <?php $accids =uniqid();?>
      <div class="panel-heading row panel-defaultchange" onclick="clickaccordion('2261_1')">
       <p class="ml-4" style="font-weight: bold;font-size: medium;">Day 1</p><span class="" id="itntxt_256346" style=" margin-left: 60%;font-size: 12px;">No Hotel&nbsp;,&nbsp;No Activity&nbsp;,&nbsp;No SightSeeing Added</span>

       <a href="javascript:void(0)" class="minus active ml-4" ><i class="fa fa-angle-down large"></i></a>


       <input type="hidden" id="accdnid_2261_1" name="accdnid_2261_1" value="active">

       <input type="hidden" name="itnid_35787_2261_1" id="itnid_35787_2261_1" value="256346">
     </div>
     <div class="panel-body no-padding" id="accdresid_2261_1" style="display: none;">
       <div class="">
        <div class="panel-body mobilepanelbody">
         <div class="col-md-12 no-padding no-margin">
          <div class="col-md-12 no-padding">
           <div class="panel panel-danger">
            <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">
             <p class="">Day 1</p>

           </div>
           <div class="panel-body">
             <div class="col-md-12 no-padding">
              <div class="col-md-12 no-padding">
               <div class="form-group active">
                <label>Title</label>

                <input onclick="autosuggest_title_program('30785','2261','35787_2261_1');" onchange=" updateitendata('35787','2261','1','256346')" type="text" class="form-control whbg" name="title_35787_2261_1" id="title_35787_2261_1" value="">                   
              </div>
            </div>    
            <div class="col-md-4 " style="display:none;">  
             <label class="checkbox_popup checkbox_width_100 align_margin_bottom_0">
              <input type="checkbox" name="saveasMaster_35787_2261_1" id="saveasMaster_35787_2261_1" value="1">
              Save as Itinerary Description Master
              <span class="checkmark"></span>
            </label>
          </div>    
        </div>
        <div class="col-md-12 no-padding">
          <div class="form-group form-group1 active">
           <label>Program Description</label>
           <textarea onchange=" updateitendata()" rows="3" class="form-control whbg" cols="45" id="detail_35787_2261_1" name="detail_35787_2261_1"></textarea>                     
           <script>
            CKEDITOR.replace('detail_35787_2261_1', {});
            var detName = 'detail_35787_2261_1';
            CKEDITOR.instances[detName].on('paste', function () {
             updateitendata('35787', '2261', '1', '256346');
           });
            CKEDITOR.instances[detName].on('blur', function () {
             updateitendata('35787', '2261', '1', '256346');
           });
         </script>
         <input type="hidden" name="startCityId_35787_2261_1"  id="startCityId_35787_2261_1" value="30785">
         <input type="hidden" name="endCityId_35787_2261_1" id="endCityId_35787_2261_1" value="2261">


       </div>
     </div>
   </div>
 </div>
</div>
<div class="col-md-12 no-padding">
 <div class="panel panel-light-green">
  <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">

   <div class=""><p>Select Hotel Bang Kapi(Thailand)<a
                                                    style="text-decoration:underline; float: right;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"
                                                    onclick="ViewAllHotels('35787','2261','4553','1','Bang Kapi(Thailand)','256346')">View
                                                All</a></p>

    <span style="margin-left:65px;display:none;">
     <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked"  onclick="return DisplayGrid('3','256346','2261')">
     <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
   </span>
 </div>
</div>
<div class="panel-body">
 <div class="panel-body table-responsive no-padding">
  <table class="table tablestyle hotelresult_256346" id="hotelresult_256346_2261">
   <tbody>
    <tr class="alert alert-graylight">
    <th class="small smallbold">Selected</th>
     <th class="small smallbold">Hotel Name</th>
      <th class="small smallbold">Rating</th>
     <th class="small smallbold">Supplier</th>
     <th class="small smallbold">Room Type/Meal Plan</th>
     <th class="small smallbold">All room per night</th>
     <th class="small smallbold"></th>
   </tr>  


 </tbody></table>
</div>
</div>
</div>
</div>
<div class="col-md-12 no-padding">
  <div class="panel panel-light-green">
   <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">
    <div class="panel-title"><p>Activities/Sightseeing <a style="text-decoration:underline;float: right;"  data-bs-toggle="modal"
               data-bs-target="#exampleModal1" data-target="#myModalSightseen" data-toggle="modal" href="javascript:void(0);" onclick="getAgentInternalSightseen('35787','2261','4553','1','256346','')">View all</a></p></div>
  </div>
  <div class="panel-body">

    <div class="panel-body table-responsive no-padding">
     <table class="table tablestyle" id="sightseenresult_256346">
      <tbody><tr class="alert alert-graylight">
        <th class="small smallbold">Selected</th>
       <th class="small smallbold"><strong>Sightseeing</strong></th>
      <!--  <th class="small smallbold"><strong>Source</strong></th> -->
       <th class="small smallbold"><strong>Supplier</strong></th>
       <!-- <th class="small smallbold"><strong>Duration</strong></th> -->
       <!-- <th class="small smallbold"><strong>Adult Price</strong></th> -->
       <th class="small smallbold"><strong>Per Person Cost</strong></th>

       <th class="small smallbold"></th>
     </tr>

   </tbody></table>
 </div>
</div>
</div>
</div>

<!-- <input type="hidden" id="cityday" name="cityday[]" value="2261_1"> -->
<div class="col-md-12 no-padding">                                                  <div class="panel panel-light-green">

  <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">
   <div class="panel-title">Select Sightseeing (Free)</div>
 </div>
 <div class="panel-body">
   <div class="row">
    <div class="ml-4">Sightseeing </div>
    <div class="ml-2 col-lg-12">
     <select style="width: 70%; height: 30px;" class="">
      <option value="">Select Sightseeing</option>
      <?php foreach ($listSightseeings as $key) { ?>
      <option><?php echo $key->tourname;?></option>
      <?php } ?>
     </select>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>
</div>                                                        

<div id="multiitnrys" style="margin-top: 20px;"></div>



<a href="#" class="btn btn-danger btnPrev" style="color:white;margin-top: 1100px;">Previous</a>
<a href="#" class="btn btn-info btnNext" style="color:white;margin-top: 1100px;" id="firstNext">Next</a>
</div>

</div>
</div>
<!-- new -->






</div>

<div class="tab-pane" id="3">
 <div>
  <div class="card-box">
   <div class="row">
    <div class="ml-2">
     <h4 style="font-weight: bold;" class="package_title ml-4"></h4>
     <div class="row ml-4">
      <p class="ml-2">-1 Nights 0 Days</p>
    </div>
  </div>
  <div style="margin-left: 650px;">
   <h4 style="font-weight: bold;" class="ml-4">Total Travelers
   </h4>
   <div class="row ml-4">
   <p class="ml-2"><input type="text" class="adults" value="" style="width: 15px;border: none;"> Adult(s),<input type="text" class="child" value="" style="width: 15px;border: none;"> Child(ren)</p>
  </div>
</div>
</div>
</div>
<div
style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">
<p style="margin-top: 5px;color: aliceblue;" class="ml-4">Transport
Required</p>

</div>
<label class="mt-4 ml-4" style="font-size: medium;">Car</label>
<div style="margin-top: 20px;"></div>
<input type="text" class="mt-10 ml-4" value="" placeholder="Start City" name="start_city" >
<div style="margin-bottom: 100px;"></div>

</div>
<a href="#" class="btn btn-danger btnPrev" style="color:white;">Previous</a>
<a href="#" class="btn btn-info btnNext" style="color:white;">Next</a>

</div>
<div class="tab-pane" id="4">
  <div>
   <div class="row">
    <div class=" col ml-4 mt-4"><label style="font-size: small;">
    Service Name</label>
    <input type="text" class="" placeholder="Service Name" name="service_name">
  </div>
  <div class="col ml-2 mt-4"><label style="font-size: small;">Select
  Service Type</label>
  <select style="width: 200px;height: 30px;" class="form-select" name="service_type">
    <option>Hotel</option>
    <option>Excursion</option>
    <option>Room</option>
    <option>Visa</option>
    <option>Transfer</option>
    <option>Meals</option>
  </select>
</div>
<div class="col ml-2 mt-4"><label
 style="font-size: small;">Rate</label>
 <select style="width: 200px;height: 30px;" class="form-select" name="rate">
  <option value="per_pax">PER PAX</option>

</select>
</div>

<div class="col ml-2 mt-4"><label
 style="font-size: small;">Currency</label>
 <select style="width: 200px;height: 30px;" class="form-select" name="currency">
  <option value="INR">INR</option>
  <option value="USD">USD</option>
  <option value="AED">AED</option>
  <option value="EUR">EUR</option>
</select>
</div>

</div>
<div class="row">
  <div class="col ml-4 mt-4" style="margin-top: 10px;"><label style="font-size: small;">Total Cost</label>
  <input type="text" class="form-control" placeholder="Cost" name="total_cost">
</div>

<div class="col ml-4 mt-4" style="margin-top: 10px;"><label
  style="font-size: small;">Supplier</label>
  <select class="form-control" name="supplier">
    <option value="">Select Supplier</option>
    <?php foreach ($supplierList as $key) { ?>
     <option value="<?php echo $key->company_name;?>"><?php echo $key->company_name;?></option>
    <?php } ?>
    
  </select>
</div>

</div>

</div>
<a href="#" class="btn btn-danger btnPrev" style="color:white;">Previous</a>
<a href="#" class="btn btn-info btnNext" style="color:white;">Next</a>
</div>
<div class="tab-pane" id="5">
 <div class="row form-group mb-3">
  <div class="row "
  style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
  <p style="margin-top: 5px;color: aliceblue;" class="ml-4">Inclusions
  </p>
  <label style=" margin-top:5px;margin-left: 72%;color: aliceblue;"
  for="vehcile1">Default Selected</label>
  <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
  id="" name="" value="Bike" checked>
</div>

<!-- <label class="col-md-12 control-label text-left">Inclusions</label> -->
<div class="col-md-12">
  <textarea class="ckeditor" required=""
  name="inclusions"></textarea>
</div>
</div>
<div class="row form-group mb-3">
 <div class="row"
 style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
 <p style="margin-top: 5px;color: aliceblue;" class="ml-4">Term &
 Conditions</p><label
 style=" margin-top:5px;margin-left: 65%;color: aliceblue;"
 for="vehcile1">Default Selected</label>
 <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
 id="vehicle2" name="vehicle2" value="Bike" checked>
</div>

<div class="col-md-12">
 <textarea class="ckeditor" required=""
 name="terms_conditions"></textarea>
</div>
</div>
<div class="row form-group mb-3">
  <div class="row"
  style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
  <p style="margin-top: 5px;color: aliceblue;" class="ml-4">
   Cancellation
 Policy</p><label
 style=" margin-top:5px;margin-left: 65%;color: aliceblue;"
 for="vehcile1">Default Selected</label>
 <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
 id="vehicle3" name="vehicle1" value="Bike" checked>
</div>
<div class="col-md-12">
  <textarea class="ckeditor" required=""
  name="cancel_policy"></textarea>
</div>
</div>
<div class="row form-group mb-3">
 <div class="row"
 style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
 <p style="margin-top: 5px;color: aliceblue;" class="ml-4">Booking
 Terms</p>
 <label style=" margin-top:5px;margin-left: 70%;color: aliceblue;"
 for="vehcile1">Default Selected</label>
 <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
 id="vehicle1" name="vehicle1" value="Bike" checked>
</div>

<div class="col-md-12">
 <textarea class="ckeditor" required=""
 name="booking_terms"></textarea>
</div>
</div>
<div class="row form-group mb-3">
  <div class="row"
  style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
  <p style="margin-top: 5px;color: aliceblue;" class="ml-4">Why use Us
  </p>
  <label style=" margin-top:5px;margin-left: 70%;color: aliceblue;"
  for="vehcile1">Default Selected</label>
  <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
  id="vehicle1" name="vehicle1" value="Bike" checked>
</div>
<div class="col-md-12">
  <textarea class="ckeditor" required=""
  name="why_use"></textarea>
</div>
</div>
<div class="row form-group mb-3">
 <div class="row"
 style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
 <p style="margin-top: 5px;color: aliceblue;" class="ml-4">Return
 Policy</p>
 <label style=" margin-top:5px;margin-left: 70%;color: aliceblue;"
 for="vehcile1">Default Selected</label>
 <input style=" margin-top:12px;margin-left:5px;" type="checkbox"
 id="vehicle1" name="vehicle1" value="Bike" checked>
</div>
<div class="col-md-12">
 <textarea class="ckeditor" required=""
 name="return_policy"></textarea>
</div>
</div>
<a href="#" class="btn btn-danger btnPrev" style="color:white;">Previous</a>
<a href="#" class="btn btn-info btnNext" style="color:white;">Next</a>


</div>
<div class="tab-pane" id="6">
 <div class="card-box">
  <div class="row">
   <div class="ml-2">
    <h4 style="font-weight: bold;" class="package_title ml-4" id="package_title4"></h4>
    <div class="row ml-4">
     <p class="ml-2">7 Nights 8 Days</p>
   </div>
 </div>
 <div style="margin-left: 550px;">
  <h4 style="font-weight: bold;" class="ml-4">Total Travelers</h4>
  <div class="row ml-4">
   <p class="ml-2"><input type="text" class="adults" value="" style="width: 15px;border: none;"> Adult(s),<input type="text" class="child" value="" style="width: 15px;border: none;"> Child(ren)</p>
 </div>
</div>
</div>

</div>
<div class="row">
  <div class=" col ml-4 mt-4">
   <div><label style="font-size: small;">
   Cost Per Person(Twin Sharing)</label></div>
   <div><label style="font-size: small;">
   0/-</label></div>
 </div>
 <div class="col ml-2 mt-4">
   <div><label style="font-size: small;">Markup
   </label></div>
   <div><select style="width: 200px;height: 30px;" class="form-select" name="cost_markup">
    <option value="per_pax">PER PAX</option>
  </select>
</div>
</div>



</div>
<div style="margin-top: 40px;width: 90%;height: 50px;background-color: cadetblue;">
 <p class="ml-4 mt-2" style="margin-top: 30px !important;">Booking Rules</p></div>
 <div class="mt-10">
  <div class="row ml-4 mt-4">
   <div><label style="font-size: small;">
   Advance</label></div>
   <div style="margin-left: 20%;" class="row"><input type="text" class="" value="" name="advance"><p class="mt-2 ml-2">%</p></div>

   <div style="margin-left: 20%;"><label style="font-size: small;" class="">
   At the time of confirmation</label></div>
 </div>
 <div class="row ml-4 mt-4">
   <div><label style="font-size: small;">
   Balance Before</label></div>
   <div style="margin-left: 177px;" class="row"><input type="text"  class="" value="" name="balance_cost"><p class="mt-2 ml-2">days</p></div>

   <div style="margin-left: 18%;"><label style="font-size: small;" class="">
   before  the department date</label></div>
 </div>
 <div class="row ml-4 mt-4">
   <div style="width: 24%;height: 50px;background-color: cadetblue;"><label class="ml-2 mt-2" style="font-size: small;">
   Total Price Range</label></div>
   <div style="margin-left: 10px;" class="row"><input type="text"  class="" value="" name="total_price_range"></div>
 </div>

</div>
<div style="margin-top: 20px;"></div>
<a href="#" class="btn btn-danger btnPrev"
style="color:white;">Previous</a>
<button type="submit" class="btn btn-info btnNext" style="color:white;">Finish
</button>

</div>





</form>
</div>
</div>

<hr>
</hr>


</div>
</div>


<!-- start widget -->
<!-- end widget -->
<!-- chart start -->
<!-- Chart end -->

<!-- start Payment Details -->

<!-- end Payment Details -->

</div>
</div>

<!-- end chat sidebar -->
</div>
<!-- end page container -->
<!-- start footer -->

</div>
<!-- end page content -->
<!-- start chat sidebar -->

</div>
<!-- end footer -->
</div> 


<?php $this->load->view('footer');?>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/package.js"></script>
<script>
  $("#exTab2").tabs(); 
  $(".btnNext").click(function () {
   $( "#exTab2" ).tabs( "option", "active", $("#exTab2").tabs('option', 'active')+1 );
          // $('.nav-tabs > .active').next('li').find('a').trigger('click');
        });

  $(".btnPrev").click(function () {
           // $('.nav-tabs > .active').prev('li').find('a').trigger('click');
           $( "#exTab2" ).tabs( "option", "active", $("#exTab2").tabs('option', 'active')-1 );
         });
  console.clear()
  initSample();
  $('.js-example-basic-multiple').select2();
</script> 
<!-- <script type="text/javascript">
   function SearchHotel(){
        $("#allhotel").show();
        $("#searchhotel").hide();

    }
</script> -->
<!-- <script>
 var faqs_row = 0;
 function addfaqs() {
  html = '<tr id="faqs-row' + faqs_row + '">';
  html += '<td><input type="text" class="form-control" placeholder="Add City"></td>';
  html += '<td><input type="number" class="no_nights form-control" placeholder="No.of Nights" id="no_nights1" name="no_nights"></td>';
  html += '<td class="mt-10"><button type="button" class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button></td>';

  html += '</tr>';

  $('#faqs tbody').append(html);

  faqs_row++;
}
</script> -->


<script type="text/javascript">
  $(".firstNext").click(function(){

    var package_name = $('#package_name').val();
    var city_name = $('#city_name').val();
    var end_city = $('#end_city').val();
    $(".package_title").append(package_name);
   
    $("#start_from1").append(city_name);
    $("#go_to1").append(end_city);
    $("#start_from").val(city_name);
    $("#go_to").val(end_city);

  });
</script>

<!-- <script type="text/javascript">
  $(".tabNext").click(function(){

    var package_name = $('#package_name').val();
    var city_name = $('#city_name').val();
    var end_city = $('#end_city').val();
    $(".package_title").append(package_name);
    $("#start_from1").append(city_name);
    $("#go_to1").append(end_city);
    $("#start_from").val(city_name);
    $("#go_to").val(end_city);
      });
    ("$")
</script> -->

<script type="text/javascript">
  $(".travelers").on("input", function() {
   var adults = $("#no_adults").val();
   var child = $("#no_child").val();
   var infant = $("#no_infant").val();

   $(".adults").val(adults);
   $(".child").val(child);

});
</script>

<script type="text/javascript">

  $("#slect_car").on('click',function() {
    var val = $(this).val();

    $('#trans').show();
    
  });

</script>

<script type="text/javascript">
$("#start_date").change(function() {
   // alert($(this).val()); 
  
   var s_date = $(this).val();
    var result = new Date(s_date);
   $("#s_date").val(result.toDateString());
});
</script>
<script>
  $("#no_nights").change(function() {
    var no_nights = $("#no_nights").val();
    var s_date = $("#s_date").val();
   var result = new Date(s_date);
   result.setDate(result.getDate() + Number(no_nights));
   $("#e_date").val(result.toDateString());

   $("#from_day").val(s_date);
   $("#to_day").val(result.toDateString());

   $("#check_out_date").val(result.toDateString());
   $("#check_in_date").val(s_date);

   $("#total_nights").val(no_nights);
   $("#itn_count").val(1 + Number(no_nights));
   $("#itndays").val(1 + Number(no_nights));
    $("#itnnights").val(no_nights);
    $("#nightcountres").text(no_nights);
    $("#daycountres").text(1 + Number(no_nights));
    $("#no_days").val(1 + Number(no_nights));
  });
</script>
  <script type="text/javascript">
$("#itncity_name").change(function() {
    //alert($(this).val()); 
  
   var city_name = $(this).val();
   $(".city_nameitn").append(city_name);
});
</script>


<script type="text/javascript">
$(document).ready(function() {
    $("#city_display tbody").hide();

$(document).on('click','#addCity', function() {
  
var itncity_name = $("#itncity_name").val();
 $("#Hotel_name_city").val(itncity_name);
var no_nights = $("#no_nights").val();
var from_day = $("#from_day").val();
var to_day = $("#to_day").val();
var r = Math.floor(1000 + Math.random() * 9000);
var package_id = $("#package_id").val();
      $.ajax({
                type:"POST",
                url:'<?php echo site_url(); ?>/package/add_cities',
                data:{'itncity_name':itncity_name,'no_nights':no_nights,'from_day':from_day,'to_day':to_day,'id':r,'p_id':package_id},
                dataType:'JSON',
                success:function(data)
                {
                 
                    $("#itncity_name").val('');
                    $("#no_nights").val('');
                    $("#from_day").val('');
                    $("#to_day").val('');
                   
                    $("#city_display td").remove();
                    // jQuery.each(data, function(key, value) {

                    //   $("#finalCityName").val(value['cityName']);
                    //   $("#finalNoNights").val(value['noNights']);
                    //   $("#finalFromDay").val(value['fromDay']);
                    //   $("#finalToDay").val(value['toDay']);
                    //   $("#city_display").show();
  
                    // });

                    var html = "";
                     $.each(data, function(i, item) {

                      html = '<tr>';
  html += '<td class="center"><input type="text" class="form-control" name="finalCityName[]" id="finalCityName" style="border: none;" value="'+item.cityName+'"></td>';
  html += '<td class="center"><input type="number" class="form-control" id="finalNoNights" name="finalNoNights[]" style="border: none;" value="'+item.noNights+'"></td>';
  html += '<td class="center"><input type="text"  class="form-control" id="finalFromDay" name="finalFromDay[]"  style="border: none;" value="'+item.fromDay+'"></td>';
html += '<td class="center"><input type="text" class="form-control" id="finalToDay" name="finalToDay[]" style="border: none;" value="'+item.toDay+'"></td>';
  html += '</tr>';

  $('#city_display tbody').append(html);
  $('#city_display tbody').show();
                   
                      
                });
      }

        });



});
});
</script>


<script type="text/javascript">
   $(document).ready(function() {

    $(document).on('click','#searchHotelButton', function() {

      var fromdate =  $("#check_in_date").val();
     if(fromdate == ''){
            alert('Please Enter Check In Date');
            $("#check_in_date").focus();
            return false;
        }
        var nights = $("#nights").val();
        if(nights == "0"){
            alert('Please Enter number of nights to stay');
            $("#nights").focus();
            return false;
        }  

        var todate = $("#check_out_date").val();
        var rating = $("#selectStarRating").val();

          $.ajax({
                type:"POST",
                url:'<?php echo site_url(); ?>/package/save_search_query',
                data:{'fromdate':fromdate,'nights':nights,'todate':todate,'rating':rating},
                dataType:'json',
                success:function(data)
                {
                 
                 if(data == "")
                 {
                  $("#norecords").append("No Records Found");
                 }

            $.each(data, function(keyName, keyValue) {
            var tabl = "";
                  tabl = '<tr class="odd gradeX">';
                  tabl += '<td class="center"> <input type="checkbox"></td>';
                  tabl += '<td class="center">' + keyValue.hotelname + '</td>';
                  tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
                  tabl += '<td class="center">' + keyValue.supplier + '</td>';
                  tabl += '<td class="center">' + keyValue.roomtype + '</td>';
                  tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
                  tabl += '</tr>';
                        $('#hotelsearchtablebody').append(tabl);
                        $("#searchhotel").hide();
                    $('#allhotel').show();
                });

                }

              });


    });

   });


</script>


<script type="text/javascript">
    
$(function(){
  $(document).on("click","#selectedHotels",function(){
    var getSelectedRows = $("#hotelsearchtable input:checked").parents("tr");
    
    $("#hotelresult_256346_2261 tbody").append(getSelectedRows);
  });
});
</script>

<script type="text/javascript">
    
$(function(){
  $(document).on("click","#selectedsight",function(){
    var getSelectedRows = $("#sightsearchtablebody input:checked").parents("tr");
    
    $("#sightseenresult_256346 tbody").append(getSelectedRows);
  });
});
</script>



<!-- <script type="text/javascript">

  function addDayIten()
  {
    var no_nights = $("#no_nights").val();
     var $resultdivs = $('#resultdayiten').clone();
     $('#multiitnrys').html($resultdivs);
  }

</script> -->


