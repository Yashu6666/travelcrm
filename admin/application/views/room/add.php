	<?php $this->load->view('header');?>
  <link href="<?php echo base_url();?>public/css/new.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>public/assets/js/add_room.js"></script>

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
        <div class="page-title">Add Room</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
      <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
          href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
        </i>&nbsp;<a class="parent-item"
        href="<?php echo base_url();?>room/view_rooms">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>

      </li>
      <li class="active">Add Room</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
   <div class="card card-box">
    <div class="card-head">
     <div class="tools">
      <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
      <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
      <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
    </div>
  </div>
  <div class="card-body ">
   <form id="add_form" action="<?php echo site_url();?>room/addRoomDetails" method="POST" class="hotel-form row" enctype="multipart/form-data">
    <div class="col-md-8">
     <div class="backgrop">
       <div class="panel panel-default">
         <div class="tab-pane show active" role="tabpanel" id="materialTabBarJsDemo" aria-labelledby="materialTabBarJsDemoTab">
           <mwc-tab-bar class="nav nav-tabs" role="tablist">
            <mwc-tab id="general-tab" label="General" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-controls="general" aria-selected="true" dir="" class="active" active=""></mwc-tab>
            <mwc-tab id="FACILITIES-tab" label="AMENITIES" data-bs-toggle="tab" data-bs-target="#FACILITIES" role="tab" aria-controls="FACILITIES" aria-selected="true" dir="" class="" active=""></mwc-tab>
            <mwc-tab id="CONTACT-tab" label="Price Tab" data-bs-toggle="tab" data-bs-target="#CONTACT" role="tab" aria-controls="CONTACT" aria-selected="true" dir="" class="" active=""></mwc-tab>


          </mwc-tab-bar>
        </div>
        <div class="panel-body">
         <div class="tab-content border border-top-0 p-3">
          <div class="tab-pane wow fadeIn animated active in" id="general">
            <div class="clearfix"></div>
            <div class="row form-group mb-3">
              <label class="col-md-2 control-label text-left"><b>Hotel</b></label>
              <div class="col-md-10">

               <select required  name="hotelname"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                <?php foreach($hotelList as $key){ ?>
                <option value="<?php echo $key->id;?>"> <?php echo $key->hotelname;?> </option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="row form-group mb-3">
            <label class="col-md-2 control-label text-left"> <b>Room Type</b></label>
            <div class="col-md-10">

             <select  required   name="roomtype[]" id='room-type' multiple class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
             <?php foreach($room_types as $value){ ?>
                <option value="<?php echo $value->name;?>"> <?php echo $value->name;?> </option>
                <?php } ?>
                <!-- <option value="One-Bedroom Apartment">One-Bedroom Apartment</option>
              <option value="Two-Bedroom Apartment">Two-Bedroom Apartment</option>
              <option value="Studio Apartment With Creek View">Studio Apartment With Creek View</option>
              <option value="Executive Two-Bedrooms Apartment">Executive Two-Bedrooms Apartment</option>
              <option value="Double or Twin Rooms">Double or Twin Rooms</option>
              <option value="Triple Rooms">Triple Rooms</option>
              <option value="Superior Double">Superior Double</option>
              <option value="Junior Suites">Junior Suites</option>
              <option value="Classic Double or Twin Rooms">Classic Double or Twin Rooms</option>
              <option value="Interconnecting Classic Room">Interconnecting Classic Room</option>
              <option value="Delux Room">Delux Room</option>
              <option value="Double Deluxe Rooms">Double Deluxe Rooms</option>
              <option value="Royal Platinum Suite">Royal Platinum Suite</option>
              <option value="Standard Room">Standard Room</option>
              <option value="One-Bedroom Executive">One-Bedroom Executive</option>
              <option value="Studio Premier">Studio Premier</option>
              <option value="Executive Suite">Executive Suite</option>
              <option value="Extra Bed / Child">Extra Bed / Child</option>
              <option value="Presidential Suite">Presidential Suite</option>
              <option value="Family Room &amp; Twin / Large Superior">Family Room &amp; Twin / Large Superior</option>
              <option value="Garden View Room">Garden View Room</option>
              <option value="Ocean View Room">Ocean View Room</option>
              <option value="Classic Double Room">Classic Double Room</option>
              <option value="Classic Single Room">Classic Single Room</option>
              <option value="Superior Single View">Superior Single View</option>
              <option value="Superior Park View">Superior Park View</option>
              <option value="Single">Single</option>
              <option value="Double">Double</option>
              <option value="Guest Rooms">Guest Rooms</option>
              <option value="Accessible Rooms">Accessible Rooms</option> -->
            </select>
          </div>
        </div>
        <div class="row form-group mb-3">
          <label class="col-md-12 control-label text-left"><b>Room Description</b></label>
          <div class="col-md-12">
              <textarea id="editor" class="room_desc" name="room_desc">
                
              </textarea>

          </div>
        </div>
        <!-- Address and Map -->

        <!-- Address and Map -->
      </div>
      <div class="tab-pane wow fadeIn animated in" id="FACILITIES">
        <div class="row form-group">
          <div class="col-md-12">
            <!-- <div class="col-md-4">
              <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="all" type="checkbox" name="" value="" id="select_all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Select All</label>
            </div> -->
            <hr>
            <div class="row">
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="exterior corridors" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Access via exterior corridors</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Bathroom phone" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathroom phone</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Climate control" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Climate control</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Courtyard view" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Courtyard view</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Extra towels/bedding" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Extra towels/bedding</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Hair dryer" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Hair dryer</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Individually decorated" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Individually decorated</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="In-room safe (laptop compatible)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; In-room safe (laptop compatible)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Makeup/shaving mirror" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Makeup/shaving mirror</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Refrigerator" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Refrigerator</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Shower/tub combination" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Shower/tub combination</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Welcome amenities" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Welcome amenities</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Air conditioning" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Air conditioning</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Blackout drapes/curtains" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Blackout drapes/curtains</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Complimentary toiletries" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Complimentary toiletries</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Cribs/infant beds available" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Cribs/infant beds available</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Dial-up Internet access (surcharge)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Dial-up Internet access (surcharge)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Free Wi-Fi" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Free Wi-Fi</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Handheld showerhead" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Handheld showerhead</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Individually furnished" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Individually furnished</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Iron/ironing board (on request)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Iron/ironing board (on request)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Minibar" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Minibar</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Satellite TV service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Satellite TV service</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Slippers" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Slippers</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Bathrobes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathrobes</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="City view" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; City view</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Complimentary weekday newspaper" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Complimentary weekday newspaper</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Daily housekeeping" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Daily housekeeping</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Direct-dial phone" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Direct-dial phone</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Free wired high-speed Internet" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Free wired high-speed Internet</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Hypo-allergenic bedding available" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Hypo-allergenic bedding available</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="In-room childcare (surcharge)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; In-room childcare (surcharge)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="LCD TV" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; LCD TV</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Private bathroom" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Private bathroom</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Bathrobes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathrobes</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" value="Wake-up calls" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Wake-up calls</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane wow fadeIn animated in" id="CONTACT">
     <div class="accordion" id="accordionMain">
        <p class="text-center">Please Select Room Type ! </p>
     </div>                   
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 sticky">
 <div class="backgrop">
   <div class="card p-5">
     <h4 class="mb-4 center"><strong><b>Main Settings</b></strong></h4>
     <div class="panel-body">

       <!-- <div class="row form-group mb-3">
        <label class="col-md-4 control-label text-left">Status</label>
        <div class="col-md-8">
          <select required class="form-control children" name="roomstatus">
           <option value="Yes">Enabled</option>
           <option value="No">Disabled</option>
         </select>

         <script>
          $('.children option[value=]').attr('selected', 'selected');
        </script>

      </div> -->
    </div>


    <div class="row form-group mb-3">
      <label class="col-md-4 control-label text-left">Select Bed</label>
      <div class="col-md-8">

        <select required class="form-control children" id="bed" name="bed">
         <option value="Twin Bed">Twin Bed</option>
         <option value="King Bed">King Bed</option>
         <option value="Queen Bed">Queen Bed</option>
         <option value="Double Bed">Double Bed</option>
         <option value="Single Bed">Single Bed</option>
         <option value="Sofa Bed">Sofa Bed</option>
         <option value="Standard Bed">Standard Bed</option>
         <option value="1 King Bed or 2 Twin Bed(s)">1 King Bed or 2 Twin Bed(s)</option>
         <option value="1 Queen Bed or 2 Twin Bed(s)">1 Queen Bed or 2 Twin Bed(s)</option>
         <option value="1 Double Bed or 2 Twin Bed(s)">1 Double Bed or 2 Twin Bed(s)</option>
         <option value="Bunk Bed">Bunk Bed</option>
         <option value="Futton">Futton</option>
         <option value="Murphy">Murphy</option>
         <option value="Tatami Mats">Tatami Mats</option>

       </select>

       <script>
        $('.children option[value=]').attr('selected', 'selected');
      </script>

    </div>
  </div>

  <div class="row form-group mb-3">
    <label class="col-md-4 control-label text-left">Extra Bed Type</label>
    <div class="col-md-8">

      <select required class="form-control children" name="bedtype" id="bedtype">
       <option value="">Select Bed Type</option>
       <option value="Extra Bed">Extra Bed</option>
       <option value="Mattres">Mattres</option>
       <option value="Cot">Cot</option>
       <option value="Sofa cum Bed">Sofa cum Bed</option>
     </select>

     <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>


<hr>
<h4 class="mb-4 center"><strong><b>Room Occupancy (Max)</b></strong></h4>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Adults</label>
  <div class="col-md-8">

    <select required class="form-control adults" name="adultsbase" id="adultsbase">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

    <script>
      $('.adults option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Child</label>
  <div class="col-md-8">

    <select required class="form-control children" name="childbase" id="childbase">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Infant</label>
  <div class="col-md-8">

    <select required class="form-control adults" name="adultsmax" id="adultsmax">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

    <script>
      $('.adults option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<!-- <div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Child(Max)</label>
  <div class="col-md-8">

    <select required class="form-control children" name="childmax">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Guest(Max)</label>
  <div class="col-md-8">

    <select required class="form-control children" name="guestmax">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div> -->
<hr>
<div class="row form-group mb-3">
  <label class="col-md-6 control-label text-left">Promo Code</label>
  <div class="col-md-6">
    <input required class="form-control" type="text" placeholder=" Promo Code" name="promo_code" value="">
  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-6 control-label text-left">supplementary <br> Cost</label>
  <div class="col-md-6">
    <input required class="form-control" type="text" placeholder=" Cost" name="supplementary" id="supplementary" value="">
  </div>
</div>
<hr>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Valid From</label>
  <div class="col-md-8">
    <input required class="form-control" type="date" placeholder="Extra beds" name="from_date" id="from_date" value="">
  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Valid Till</label>
  <div class="col-md-8">
    <input required class="form-control" type="Date" placeholder="Beds charges" name="to_date" id="to_date" value="">
  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Currency</label>
  <div class="col-md-8">

    <select required class="form-control children" name="currency" id="currency">
      <option value="AED">AED</option>
      <option value="USD">USD</option>

    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<!-- <div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Supplier</label>
  <div class="col-md-8">

    <select required class="form-control children" name="supplier">
      <option value="Yashwath">Yashwath</option>
      <option value="Testing1">Testing1</option>
      <option value="Testing2">Testing2</option>
      <option value="Testing3">Testing3</option>

    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div> -->
<div class="panel-footer">
  
      <div class="col-lg-12 p-t-20 text-center row">
        <div class="col-lg-6 p-t-20 text-center ">
          <!-- <input id="submit_btn" name="submit_btn" style="display:block;" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="Submit"/> -->
          <input id="submit_btn" name="submit_btn" style="display:block;" type="button" class="new_btn px-3" value="Submit"/>
        </div>
        <div class="col-lg-3 p-t-20 text-center ">
          <input id="add_btn" name="add_btn" style="display:none;"  type="button" class="new_btn w-auto" value="Add">
          </div>
          <div class="col-lg-3 p-t-20 text-center ">
          </div>
      </div>

      <div class="col-lg-12 p-t-20 text-center row">
        <div class="col-lg-6 p-t-20 text-center ">
        </div>
        <div class=" p-t-20 text-center ">
        <a id="cancel_btn" name="cancel_btn" style="display:none;"  type="button" href="<?php echo base_url('Room/view_rooms')?>" class="new_btn px-3" >Cancel</a>
          </div>
          <!-- <div class="col-lg-3 p-t-20 text-center ">
          </div> -->
      </div>

      <!-- <div class="col-lg-6 p-t-20 text-center">
        <input id="add_btn" name="add_btn" style="display:none;"  type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-red" value="Add">
      </div>
      <div class="col-lg-6 p-t-20 text-center">
        <a id="cancel_btn" name="cancel_btn" style="display:none;"  type="button" href="<?php echo base_url('Room/view_rooms')?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-red" >Cancel</a>
      </div> -->
  
</div>
</div>
</div>
<strong>

</strong>
</div>
<strong>
</strong>
</div>

</form>
</div>
</div>
</div>
</div>



<!-- start widget -->
<div class="state-overview">
</div>
<!-- end widget -->
<!-- chart start -->
<!-- Chart end -->

<!-- start Payment Details -->

<!-- end Payment Details -->

</div>
</div>

<!-- end chat sidebar -->
</div>
<?php $this->load->view('room/footer_room');?>

<script>
    $(document).ready(function(){

      
      
      

        $("#submit_btn").click(function(e){
            e.preventDefault();
            var dataString = $('#add_form').serialize();
            // console.log(dataString);
            $.ajax({
                type: "POST",
                url: '<?php echo site_url();?>room/addRoomDetailss',
                data: dataString,
                success:function(data)
                {
                  alert('SUCCESS!!');
                  $('#CONTACT').find('input:text').each(function () {
                      $(this).val('');
                  }); 
                  $('#from_date').find('input:date').each(function () {
                      $(this).val('');
                  });
                  $('#to_date').find('input:date').each(function () {
                      $(this).val('');
                  });
                  $('#submit_btn').attr('style','display:none;');
                  $('#add_btn').attr('style','display:block;');
                  $('#cancel_btn').attr('style','display:block;')
                },
                error:function()
                {
                  console.log('failed');
                }
            });
        });

        $("#add_btn").click(function(e){
            e.preventDefault();
            var dataString = $('#add_form').serialize();
            console.log(dataString);
            $.ajax({
                type: "POST",
                url: '<?php echo site_url();?>room/addRoomDetailss',
                data: dataString,
                success:function(data)
                {
                  alert('SUCCESS!!');
                  $('#CONTACT').find('input:text').each(function () {
                      $(this).val('');
                  }); 
                  $('#from_date').find('input:date').each(function () {
                      $(this).val('');
                  });
                  $('#to_date').find('input:date').each(function () {
                      $(this).val('');
                  });
                  $('#submit_btn').attr('style','display:none;');
                  $('#add_btn').attr('style','display:block;');
                  $('#cancel_btn').attr('style','display:block;')
                },
                error:function()
                {
                  console.log('failed');
                }
            });
        });

       
    });


    


//   $(function(){
//     $('input[name=add_btn]').click(function(){   

//       $('#CONTACT').find('input:text').each(function () {
//           $(this).val('');
//       }); 
//     });

// });
                
</script>