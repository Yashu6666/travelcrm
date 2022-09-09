
<?php


$this->load->view('header');?>
<?php $this->load->view('package/modal');?>
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
       <div class="page-title">Add Itinerary</div>
     </div>
     <ol class="breadcrumb page-breadcrumb pull-right">
       <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
      </li>
      <li>&nbsp;<a class="parent-item" href="#">Inventory</a>&nbsp;<i
        class="fa fa-angle-right"></i>
      </li>
      <li>&nbsp;<a class="parent-item" href="#">Itinerary</a>&nbsp;<i
        class="fa fa-angle-right"></i>
      </li>

      <li class="active">Add Itinerary</li>
    </ol>
  </div>
</div>
<div class="row">
    <div class="col-sm-12">
      
   <div class="card-box">
   <form  action="<?php echo site_url();?>itinerary/searchDetails" method="post">
                                 
   <div class="row ml-2">
                                                        <div class="col-4">
                                                        <p  class="ml-2">Query ID
    <input type="text" name="query_id" value="<?php  if(!empty($details['query_id'])){ echo $details['query_id']; } else echo "" ;?> " class="form-control" placeholder="Query ID"></p>
</div>
<div class="col-4 mt-4">
<button type="submit" class="btn btn-success" >Search</button>
</div>
</div>
                                
                               </form>
     <h4 class="ml-4"></h4>
     
     <div class="row ml-4">
       <!-- <p  class="ml-2">Itinerary
    <input type="text" name="itinerary_name" id="itinerary_name" class="form-control" ></p> -->

      <!-- <p  class="ml-2">Guest Name
    <input type="text" name="packagename" value="<?php echo isset($details['name'])?$details['name']:"" ?>"   id="packagename" class="form-control" placeholder="Guest Name"></p> -->
    <p  class="ml-2">Company Name
    <input type="text" name="packagename" value="<?php echo isset($query->b2bcompanyName)?$query->b2bcompanyName:"" ?>"   id="packagename" class="form-control" placeholder="Company Name"></p>

      <p  class="ml-2">Check In:
     <input type="date" name="startfrom"  <?php echo isset($details['checkindate'])?"readonly":"" ?>   value="<?php echo isset($details['checkindate'])?$details['checkindate']:"" ?>"  id="startfrom" class="form-control" placeholder="Check In"></p>
     
      <p class="ml-4" >Check Out:
      <input type="date" name="goingto" <?php echo isset($details['checkindate'])?"readonly":"" ?>  value="<?php echo isset($details['checkoutdate'])?$details['checkoutdate']:"" ?>"  id="goingto"  class="form-control" placeholder="Check Out"></p>

      
      <!-- <p class="ml-4" style="color: rgb(231, 50, 18);margin-left: 60px;">Start
      Date:
      <input class="form-control" type="date" name="start_date" id="start_date" value="" ></p>
       -->
      <p class="ml-2">Number of Days:
      <input class="form-control" type="text" id="no_days" value="<?php echo isset($details['nights'])?$details['nights']:"" ?>"  name="no_days" readonly="" style="border: none;"></p>

      <!-- <p  class="ml-2" style="color: rgb(231, 50, 18);">Days Added:
   <span id="nightcountres"> </span> Nights  <span id="daycountres"></span> Days</p> -->
    </div>

 </div>
 <!-- <div class="row">
  <div><label class="col-md-12 control-label text-left ml-2"
   style="font-weight: bold;">Create Itinerary</label></div>
   <div>
    <p id="no_days_nights"><input type="text" id="itnnights" value="0" style="border: none;width: 20px;"> Nights <input type="text" value="1" id="itndays"  style="border: none;width: 20px;"> Days</p>
  </div>
</div> -->
<!-- <div class="card-box">
 <div class="row">
 <div class="ml-4" style="">
   <h4 style="font-weight: bold;" class="ml-4">From</h4>
   <div class="row ml-4">
    <p class="ml-2">Day 1 : <input type="text" name="s_date" id="s_date" style="border: none;" value=""></p>
  </div>
</div> -->

<!-- <div class="ml-2" style="">
 <h4 style="font-weight: bold;" class="ml-4">To
 </h4>
 <div class="row ml-4">
  <p class="ml-2">Day <input  type="text" name="itn_count" id="itn_count" style="border: none;width: 17px;" value=""> : <input type="text" name="e_date" id="e_date" style="border: none;"></p>
</div>
</div> -->
</div>
</div>

<!-- 
<table class="table table-hover" id="city_display" >
  <thead>
   <tr><th> City Name</th>
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

  <td> <button type="button" class="btn btn-success" id="addCity" >Add
  City</button>
</td>
</tr>

</tbody>

</table> -->

<div class="card-content">
  <div>
   <div id="resultdayiten"> 
    <div id="resultdayiten1" class="col-md-12 no-padding"  style="width: 97% ;margin-left: 15px;height: 50px;padding: 5px; background-color: cadetblue;">
     <div style="margin-bottom:5px; margin-top: 5px; " class="" >
      <?php $accids =uniqid();?>

      <?php 
    if(isset($details)){
      for($i=1;$i<=$details['nights'];$i++) {?>
      <div class="panel-heading row panel-defaultchange" onclick="clickaccordion('2261_1<?php echo $i ?>')">
       <p class="ml-4" style="font-weight: bold;font-size: medium;">Day <?php echo $i ?> - <?php
       echo date('Y-m-d', strtotime($details['checkindate']. ' + '.$i.' days'))
       ?></p><span class="" id="itntxt_256346" style=" margin-left: 60%;font-size: 12px;">No Hotel&nbsp;,&nbsp;No Activity&nbsp;,&nbsp;No SightSeeing Added</span>

       <a href="javascript:void(0)" class="minus active ml-4" ><i class="fa fa-angle-down large"></i></a>


       <input type="hidden" id="accdnid_2261_1<?php echo $i ?>" name="accdnid_2261_1<?php echo $i ?>" value="active">

       <input type="hidden" name="itnid_35787_2261_1<?php echo $i ?>" id="itnid_35787_2261_1<?php echo $i ?>" value="256346">
     </div>
     <?php } } ?>
     <a href="#" class="btn btn-info btnNext mdc-ripple-upgraded" style="color:white;margin-left: 50% !important;/* margin-top: 0% !important; */" id="firstNext">Save</a>

     <?php
     if(isset($details)){
      for($i=1;$i<=$details['nights'];$i++) {?>
     <div class="panel-body no-padding" id="accdresid_2261_1<?php echo $i ?>" style="display: none;">
       <div class="">
        <div class="panel-body mobilepanelbody">
         <div class="col-md-12 no-padding no-margin">
          <div class="col-md-12 no-padding">
           <div class="panel panel-danger">
            <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">
             <p class="">Day <?php echo $i ?> - <?php
       echo date('Y-m-d', strtotime($details['checkindate']. ' + '.$i.' days'))
       ?></p>

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

<div class="col-md-12 no-padding">
 <div class="panel panel-light-green">
  <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">

   <div class=""><p>Select Hotel<a
    style="text-decoration:underline; float: right;"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    data-id="<?php echo $i ?>"
    id="hotelmodal"
   >View
  All</a></p>

  <span style="margin-left:65px;display:none;">
   <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked"  onclick="return DisplayGrid('3','256346','2261')">
   <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
 </span>
</div>
</div>

<div class="panel-body">
 <div class="panel-body table-responsive no-padding">
  <table class="table tablestyle hotelresult_256346" id="hotelresult_256346_2261<?php echo $i ?>">
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


<div class="col-md-12 no-padding">
 <div class="panel panel-light-green">
  <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">

   <div class=""><p>Transfer<a
    style="text-decoration:underline; float: right;"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    onclick="ViewAllHotels()">View
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
      <th class="small smallbold">Route Name</th>
      <th class="small smallbold">Transport Type</th>
      <th class="small smallbold">Start City</th>
      <th class="small smallbold">Destination City</th>
      <th class="small smallbold"></th>
    </tr>  


  </tbody></table>
</div>
</div>
</div>


<div class="col-md-12 no-padding">
 <div class="panel panel-light-green">
  <div class="" style="width: 100% ;height: 50px;padding: 5px; background-color: cadetblue;">

   <div class=""><p>Meal<a
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
      <th class="small smallbold">Meal Name</th>
      <th class="small smallbold">Meal Type</th>
      <th class="small smallbold">Price</th>
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

   <div class=""><p>Flight<a
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
      <th class="small smallbold">Flight Name</th>
      <th class="small smallbold">Travel Date</th>
      <th class="small smallbold">Origin City</th>
      <th class="small smallbold">Destination City</th>
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
    <div class="panel-title"><p>Excursion <a style="text-decoration:underline;float: right;"  data-bs-toggle="modal"
     data-bs-target="#exampleModal1" data-target="#myModalSightseen" data-toggle="modal" href="javascript:void(0);" onclick="getAgentInternalSightseen('35787','2261','4553','1','256346','')">View all</a></p></div>
   </div>
   <div class="panel-body">

    <div class="panel-body table-responsive no-padding">
     <table class="table tablestyle" id="sightseenresult_256346">
      <tbody><tr class="alert alert-graylight">
        <th class="small smallbold">Selected</th>
        <th class="small smallbold"><strong>Excursion</strong></th>
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
</div>

 </div>
</div>


</div>
</div>
</div>
</div>
</div> 
</div>
<?php } } ?>
</div>

</div>

</div>

</div>                                                        

<div id="multiitnrys" style="margin-top: 20px;"></div>

     <!-- <a href="#" class="btn btn-info btnNext" style="color:white;margin-left: 50% !important;;margin-top: 0% !important;" id="firstNext">Save</a><br/> -->
</div>

</div>
</div>
<!-- new -->
<!-- <a href="#" class="btn btn-info btnNext" style="color:white;" id="firstNext">Save</a> -->

</div>


<?php $this->load->view('footer');?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/package.js"></script>

<script type="text/javascript">
    function clickaccordion(accdnid){

      // $("#accdresid_2261_11").hide();


var accdval   =	$("#accdnid_"+accdnid).val();

if(accdval=='active') {
    $("#accdresid_"+accdnid).show();
    $("#accdnid_"+accdnid).val('minuscl');
} else {
    $("#accdresid_"+accdnid).hide();
    $("#accdnid_"+accdnid).val('active');
} 

var days='<?php !empty($details['nights']) ?$details['nights']  : "0"  ?>';

for(var i=1;i<=days;i++){
 
  if(accdnid=="2261_1"+i){
   
  }else{
    console.log("accdresid__2261_1"+i);
    $("#accdresid_2261_1"+i).hide();
  }

}
} 
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

   $("#itn_count").val(1 + Number(no_nights));
   $("#itndays").val(1 + Number(no_nights));
  $("#nightcountres").text(no_nights);
    $("#daycountres").text(1 + Number(no_nights));
    $("#check_out_date").val(result.toDateString());
   $("#check_in_date").val(s_date);
   $("#no_days").val(1 + Number(no_nights));
  });
</script>





<script type="text/javascript">
$(document).ready(function() {
    
$(document).on('click','#addCity', function() {
  
var itncity_name = $("#itncity_name").val();
var no_nights = $("#no_nights").val();
var from_day = $("#s_date").val();
 $("#Hotel_name_city").val(itncity_name);


//Calculating To Date
// var s_date = new Date(from_day);
// var result = new Date(s_date);
// result.setDate(result.getDate() + Number(no_nights));
// $("#e_date").val(result.toDateString());
var to_day =$("#to_day").val();

//$("#itn_count").val(1 + Number(no_nights));     
    
      $.ajax({
                type:"POST",
                url:'<?php echo site_url(); ?>/itinerary/add_cities',
                data:{'itncity_name':itncity_name,'no_nights':no_nights,'from_day':from_day,'to_day':to_day},
                dataType:'JSON',
                success:function(data)
                {
                 
                    $("#itncity_name").val('');
                    $("#no_nights").val('');
                    $("#from_day").val('');
                    $("#to_day").val('');
                   
                    $("#city_display td").remove();

                    var html = "";
                     $.each(data, function(i, item) {

                      html = '<tr>';
  html += '<td class="center"><input type="text" class="form-control" name="finalCityName[]" id="finalCityName" style="border: none;" value="'+item.city_name+'"></td>';
  html += '<td class="center"><input type="number" class="form-control" id="finalNoNights" name="finalNoNights[]" style="border: none;" value="'+item.no_nights+'"></td>';
  html += '<td class="center"><input type="text"  class="form-control" id="finalFromDay" name="finalFromDay[]"  style="border: none;" value="'+item.start_date+'"></td>';
html += '<td class="center"><input type="text" class="form-control" id="finalToDay" name="finalToDay[]" style="border: none;" value="'+item.to_date+'"></td>';
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

    $(document).on('click','#hotelmodal', function() {
      var modalid = $(this).data('id');
      // alert(modalid);
      $("#modalid").val(modalid);
      
    });

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
              var modalid= $("#modalid").val();
            var tabl = "";
                  tabl = '<tr class="odd gradeX">';
                  tabl += '<td class="center"> <input type="checkbox"></td>';
                  tabl += '<td class="center">' + keyValue.hotelname + '</td>';
                  tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
                  tabl += '<td class="center">' + keyValue.supplier + '</td>';
                  tabl += '<td class="center">' + keyValue.roomtype + '</td>';
                  tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
                  tabl += '<td class="center">' +modalid+ '</td>';
                  tabl += '</tr>';
                        $('#hotelsearchtablebody').append(tabl);
                        $("#searchhotel").hide();
                       
                        $("#modalid1").val(modalid);
                    $('#allhotel').show();

                });

                }

              });


    });

   });

   function ViewAllHotelsNew(){
    $("#exampleModal").show();
   }


</script>


<script type="text/javascript">
    
$(function(){
  $(document).on("click","#selectedHotels",function(){
   
    var getSelectedRows = $("#hotelsearchtable input:checked").parents("tr");
    var modalid1= $("#modalid1").val();
    alert(modalid1);
    $("#hotelresult_256346_2261"+modalid1+" tbody").append(getSelectedRows);
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
