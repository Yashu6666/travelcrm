<?php $this->load->view('header');?>
<link href="<?php echo base_url();?>public/css/new.css" rel="stylesheet">
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
        <div class="page-title">Edit Room</div>
      </div>
      <ol class="breadcrumb page-breadcrumb pull-right">
      <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
          href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
        </i>&nbsp;<a class="parent-item"
        href="<?php echo base_url();?>room/view_rooms">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>

      </li>
      <li class="active">Edit Room</li>
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
   <form id="edit-form" action="<?php echo site_url();?>room/updateRoomDetails/<?php echo $edit->id;?>" method="POST" class="hotel-form row" enctype="multipart/form-data">
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
                <?php 
                // print_r($hotelList);
                foreach($hotelList as $key){ ?>
                <option value="<?php echo $key->id;?>"> <?php echo $key->hotelname;?> </option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="row form-group mb-3">
            <label class="col-md-2 control-label text-left text-nowrap"><b>Room Type</b></label>
            <div class="col-md-10">

             <select  required  name="roomtype"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
              <option selected value="<?php echo $edit->roomtype;?>"><?php echo $edit->roomtype;?></option>
              <option value="One-Bedroom Apartment">One-Bedroom Apartment</option>
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
              <option value="Accessible Rooms">Accessible Rooms</option>
            </select>
          </div>
        </div>
        <div class="row form-group mb-3">
          <label class="col-md-12 control-label text-left"><b>Room Description</b></label>
          <div class="col-md-12">
              <textarea id="editor" name="room_desc">
                <?php echo $edit->room_desc;?>
              </textarea>

          </div>
        </div>
        <!-- Address and Map -->

        <!-- Address and Map -->
      </div>
      <div class="tab-pane wow fadeIn animated in" id="FACILITIES">
        <div class="row form-group">
          <div class="col-md-12">
            <div class="col-md-4">
            	<?php if(isset($edit->roomamenities))
            	{
            		$amenti = explode(',', $edit->roomamenities); 
            		//echo count($amenti);exit;
            	} ?>
              <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="all" type="checkbox" name="" value="" <?php echo (count($amenti)==36?'checked':''); ?>   id="select_all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Select All</label>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Access via exterior corridors", $amenti)?'checked':''); ?> value="Access via exterior corridors" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Access via exterior corridors</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Bathroom phone", $amenti)?'checked':''); ?> value="Bathroom phone" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathroom phone</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Climate control", $amenti)?'checked':''); ?> value="Climate control" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Climate control</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Courtyard view", $amenti)?'checked':''); ?>   value="Courtyard view" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Courtyard view</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Extra towels/bedding", $amenti)?'checked':''); ?> value="Extra towels/bedding" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Extra towels/bedding</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Hair dryer", $amenti)?'checked':''); ?> value="Hair dryer" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Hair dryer</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Individually decorated", $amenti)?'checked':''); ?> value="Individually decorated" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Individually decorated</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("In-room safe (laptop compatible)", $amenti)?'checked':''); ?> value="In-room safe (laptop compatible)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; In-room safe (laptop compatible)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Makeup/shaving mirror", $amenti)?'checked':''); ?> value="Makeup/shaving mirror" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Makeup/shaving mirror</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Refrigerator", $amenti)?'checked':''); ?> value="Refrigerator" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Refrigerator</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Shower/tub combination", $amenti)?'checked':''); ?> value="Shower/tub combination" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Shower/tub combination</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Welcome amenities", $amenti)?'checked':''); ?> value="Welcome amenities" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Welcome amenities</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Air conditioning", $amenti)?'checked':''); ?> value="Air conditioning" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Air conditioning</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Blackout drapes/curtains", $amenti)?'checked':''); ?> value="Blackout drapes/curtains" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Blackout drapes/curtains</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Complimentary toiletries", $amenti)?'checked':''); ?> value="Complimentary toiletries" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Complimentary toiletries</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Cribs/infant beds available", $amenti)?'checked':''); ?> value="Cribs/infant beds available" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Cribs/infant beds available</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Dial-up Internet access (surcharge)", $amenti)?'checked':''); ?> value="Dial-up Internet access (surcharge)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Dial-up Internet access (surcharge)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input <?php echo (in_array("Free Wi-Fi", $amenti)?'checked':''); ?> class="checkboxcls" type="checkbox" name="roomamenities[]" value="Free Wi-Fi" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Free Wi-Fi</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Handheld showerhead", $amenti)?'checked':''); ?> value="Handheld showerhead" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Handheld showerhead</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Individually furnished", $amenti)?'checked':''); ?> value="Individually furnished" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Individually furnished</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Iron/ironing board (on request)", $amenti)?'checked':''); ?> value="Iron/ironing board (on request)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Iron/ironing board (on request)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Minibar", $amenti)?'checked':''); ?> value="Minibar" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Minibar</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Satellite TV service", $amenti)?'checked':''); ?> value="Satellite TV service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Satellite TV service</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Slippers", $amenti)?'checked':''); ?> value="Slippers" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Slippers</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Bathrobes", $amenti)?'checked':''); ?> value="Bathrobes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathrobes</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("City view", $amenti)?'checked':''); ?> value="City view" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; City View</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Complimentary weekday newspaper", $amenti)?'checked':''); ?> value="Complimentary weekday newspaper" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Complimentary weekday newspaper</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Daily housekeeping", $amenti)?'checked':''); ?>  value="Daily housekeeping" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Daily housekeeping</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Direct-dial phone", $amenti)?'checked':''); ?> value="Direct-dial phone" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Direct-dial phone</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Free wired high-speed Internet", $amenti)?'checked':''); ?> value="Free wired high-speed Internet" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Free wired high-speed Internet</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Hypo-allergenic bedding available", $amenti)?'checked':''); ?> value="Hypo-allergenic bedding available" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Hypo-allergenic bedding available</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("In-room childcare (surcharge)", $amenti)?'checked':''); ?> value="In-room childcare (surcharge)" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; In-room childcare (surcharge)</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("LCD TV", $amenti)?'checked':''); ?> value="LCD TV" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; LCD TV</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Private bathroom", $amenti)?'checked':''); ?> value="Private bathroom" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Private bathroom</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Bathrobes", $amenti)?'checked':''); ?> value="Bathrobes" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Bathrobes</label>
              </div>
              <div class="col-md-6">
                <label class="pointer"><div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="roomamenities[]" <?php echo (in_array("Wake-up calls", $amenti)?'checked':''); ?> value="Wake-up calls" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> &nbsp; Wake-up calls</label>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="tab-pane wow fadeIn animated in" id="CONTACT">
          <div class="table-scrollable">
  <table class="table table-hover table-checkable order-column full-width"
                              id="example4">
                              <thead>
                                <tr><th class="center">Per Room/Per Night
                                </th>
                                <th class="center">     </th>
                                <th class="center">     </th>
                                <th class="center"> ROOM ONLY</th>
                                <th class="center"> BB </th>
                                <th class="center"> HB </th>
                                <th class="center"> FB </th>

                              </tr>
                            </thead>
                            <tbody>
                            		<?php $net = explode(',', $edit->netrate);
                            		$vat = explode(',', $edit->vat);
                            				//echo '<pre>';print_r($vat);exit; ?>
                              <tr class="odd gradeX">
                              <td class="center"><b> Single</b> </td>
                             
                                <td class="center"> </td>
                                <td class="center">  
                                  <div class="col-md-12">
                                <p>Net Rate</p>
                                </div><br>
                                <div class="col-md-10">
                               TDF
                                </div> </td>
                                <td class="center">  <div class="col-md-10">
                                  <input name="netrate[]" id="single1" onchange="changeVAL('single1','double1')" type="text"  class="form-control " value="<?php echo (!empty($net[0])?$net[0]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat[]" id="singleV1" onchange="changeVAL('singleV1','doubleV1')" type="text"  class="form-control " value="<?php echo (!empty($vat[0])?$vat[0]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate[]" id="single2" onchange="changeVAL('single2','double2')" type="text"  class="form-control " value="<?php echo (!empty($net[1])?$net[1]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat[]" id="singleV2" onchange="changeVAL('singleV2','doubleV2')" type="text"  class="form-control " value="<?php echo (!empty($vat[1])?$vat[1]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate[]" id="single3" onchange="changeVAL('single3','double3')" type="text"  class="form-control " value="<?php echo (!empty($net[2])?$net[2]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat[]" type="text" id="singleV3" onchange="changeVAL('singleV3','doubleV3')" class="form-control " value="<?php echo (!empty($vat[2])?$vat[2]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate[]" id="single4" onchange="changeVAL('single4','double4')" type="text"  class="form-control " value="<?php echo (!empty($net[3])?$net[3]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat[]" id="singleV4" onchange="changeVAL('singleV4','doubleV4')" type="text"  class="form-control " value="<?php echo (!empty($vat[3])?$vat[3]:''); ?>">
                                </div> </td>
                              </tr>
                              <?php $net_d = explode(',', $edit->netrate_double);
                            		$vat_d = explode(',', $edit->vat_double);
                            				//echo '<pre>';print_r($vat);exit; ?>
                              <tr class="odd gradeX">
                                <td class="center"><b> Double</b> </td>
                             
                                <td class="center"> </td>
                                <td class="center">  
                                  <div class="col-md-12">
                                <p>Net Rate</p>
                                </div><br>
                                <div class="col-md-10">
                               TDF
                                </div> </td>
                                <td class="center">  <div class="col-md-10">
                                  <input name="netrate_double[]" id="double1" type="text"  class="form-control " value="<?php echo (!empty($net_d[0])?$net_d[0]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat_double[]" type="text" id="doubleV1" class="form-control " value="<?php echo (!empty($vat_d[0])?$vat_d[0]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_double[]" id="double2" type="text"  class="form-control " value="<?php echo (!empty($net_d[1])?$net_d[1]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat_double[]" type="text" id="doubleV2"  class="form-control " value="<?php echo (!empty($vat_d[1])?$vat_d[1]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_double[]" id="double3" type="text"  class="form-control " value="<?php echo (!empty($net_d[2])?$net_d[2]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat_double[]" id="doubleV3" type="text"  class="form-control " value="<?php echo (!empty($vat_d[2])?$vat_d[2]:''); ?>">
                                </div> </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_double[]" id="double4" type="text"  class="form-control " value="<?php echo (!empty($net_d[3])?$net_d[3]:''); ?>">
                                </div><br>
                                <div class="col-md-10">
                                  <input name="vat_double[]" id="doubleV4" type="text"  class="form-control " value="<?php echo (!empty($vat_d[3])?$vat_d[3]:''); ?>">
                                </div> </td>

                              </tr>
                              <?php $net_e = explode(',', $edit->netrate_extra);
                            		$vat_e = explode(',', $edit->vat_extra);
                            				//echo '<pre>';print_r($vat);exit; ?>
                              <tr class="odd gradeX">
                               
                                <td class="center"><b> Extra with Bed(adult) </b> </td>
                             
                                <td class="center"> </td>
                                <td class="center">  
                                  <div class="col-md-12">
                                <p>Net Rate</p>
                                </div>  
                                <!-- <div class="col-md-10">
                               TDF
                                </div> -->
                               </td>
                                <td class="center">  <div class="col-md-10">
                                  <input name="netrate_extra[]" type="text"  class="form-control " value="<?php echo (!empty($net_e[0])?$net_e[0]:''); ?>">
                                </div>  
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra[]" type="text"  class="form-control " value="<?php echo (!empty($vat_e[0])?$vat_e[0]:''); ?>">
                                </div>  -->
                              </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra[]" type="text"  class="form-control " value="<?php echo (!empty($net_e[1])?$net_e[1]:''); ?>">
                                </div>  
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra[]" type="text"  class="form-control " value="<?php echo (!empty($vat_e[1])?$vat_e[1]:''); ?>">
                                </div> -->
                               </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra[]" type="text"  class="form-control " value="<?php echo (!empty($net_e[2])?$net_e[2]:''); ?>">
                                </div>  
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra[]" type="text"  class="form-control " value="<?php echo (!empty($vat_e[2])?$vat_e[2]:''); ?>">
                                </div>  -->
                              </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra[]" type="text"  class="form-control " value="<?php echo (!empty($net_e[3])?$net_e[3]:''); ?>">
                                </div>  
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra[]" type="text"  class="form-control " value="<?php echo (!empty($vat_e[3])?$vat_e[3]:''); ?>">
                                </div>  -->
                              </td>  
                              </tr>
                              <?php $net_ec= explode(',', $edit->netrate_extra_child);
                            		$vat_ec = explode(',', $edit->vat_extra_child);
                            				//echo '<pre>';print_r($vat);exit; ?>

                              <tr class="odd gradeX">
                            
                                <td class="center"><b>  Extra with Bed(Child)  </b> </td>
                             
                                <td class="center"> </td>
                                <td class="center">  
                                  <div class="col-md-12">
                                <p>Net Rate</p>
                                </div>
                                </td>
                                <td class="center">  <div class="col-md-10">
                                  <input name="netrate_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($net_ec[0])?$net_ec[0]:''); ?>">
                                </div>
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($vat_ec[0])?$vat_ec[0]:''); ?>">
                                </div> -->
                               </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($net_ec[1])?$net_ec[1]:''); ?>">
                                </div>
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($vat_ec[1])?$vat_ec[1]:''); ?>">
                                </div> -->
                               </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_child[]" type="text"  class="form-control "value="<?php echo (!empty($net_ec[2])?$net_ec[2]:''); ?>">
                                </div>
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($vat_ec[2])?$vat_ec[2]:''); ?>">
                                </div> -->
                               </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($net_ec[3])?$net_ec[3]:''); ?>">
                                </div>
                                <!-- <div class="col-md-10">
                                  <input name="vat_extra_child[]" type="text"  class="form-control " value="<?php echo (!empty($vat_ec[3])?$vat_ec[3]:''); ?>">
                                </div> -->
                               </td>  
                              </tr>

                              <?php $net_wo= explode(',', $edit->netrate_extra_wo);
                            		$vat_wo = explode(',', $edit->vat_extra_wo);
                            				//echo '<pre>';print_r($vat);exit; ?>
                              <tr class="odd gradeX">
                              
                                <td class="center"><b>   Extra W/O Bed </b> </td>
                             
                                <td class="center"> </td>
                                <td class="center">  
                                  <div class="col-md-12">
                                <p>Net Rate</p>
                                </div></td>
                                <td class="center">  <div class="col-md-10">
                                  <input name="netrate_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($net_wo[0])?$net_wo[0]:''); ?>">
                                </div>
                                <!-- <br>
                                <div class="col-md-10">
                                  <input name="vat_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($vat_wo[0])?$vat_wo[0]:''); ?>">
                                </div>  -->
                              </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($net_wo[1])?$net_wo[1]:''); ?>">
                                </div>
                                <!-- <br>
                                <div class="col-md-10">
                                  <input name="vat_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($vat_wo[1])?$vat_wo[1]:''); ?>">
                                </div> -->
                               </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($net_wo[2])?$net_wo[2]:''); ?>">
                                </div>
                                <!-- <br>
                                <div class="col-md-10">
                                  <input name="vat_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($vat_wo[2])?$vat_wo[2]:''); ?>">
                                </div>  -->
                              </td>
                                <td class="center"> <div class="col-md-10">
                                  <input name="netrate_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($net_wo[3])?$net_wo[3]:''); ?>">
                                </div>
                                <!-- <br>
                                <div class="col-md-10">
                                  <input name="vat_extra_wo[]" type="text"  class="form-control "  value="<?php echo (!empty($vat_wo[3])?$vat_wo[3]:''); ?>">
                                </div> -->
                               </td>  
                              </tr>
                              


                            </tbody>
                          </table>
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
          	<?php if($edit->roomstatus == 'Yes') {?>
			<option value="Yes">Enabled</option>
				<?php } else if($edit->roomstatus == 'No') {?>
					<option value="No">Disabled</option>
				<?php } ?>
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

        <select required class="form-control children" name="bed">
         <option value="Twin Bed"  <?php echo $edit->bed=="Twin Bed"?"selected":"";?>>Twin Bed</option>
         <option value="King Bed" <?php echo $edit->bed=="King Bed"?"selected":"";?>>King Bed</option>
         <option value="Queen Bed" <?php echo $edit->bed=="Queen Bed"?"selected":"";?>>Queen Bed</option>
         <option value="Double Bed" <?php echo $edit->bed=="Double Bed"?"selected":"";?>>Double Bed</option>
         <option value="Single Bed" <?php echo $edit->bed=="Single Bed"?"selected":"";?>>Single Bed</option>
         <option value="Sofa Bed" <?php echo $edit->bed=="Sofa Bed"?"selected":"";?>>Sofa Bed</option>
         <option value="Standard Bed" <?php echo $edit->bed=="Standard Bed"?"selected":"";?>>Standard Bed</option>
         <option value="1 King Bed or 2 Twin Bed(s)" <?php echo $edit->bed=="1 King Bed or 2 Twin Bed(s)"?"selected":"";?>>1 King Bed or 2 Twin Bed(s)</option>
         <option value="1 Queen Bed or 2 Twin Bed(s)" <?php echo $edit->bed=="1 Queen Bed or 2 Twin Bed(s)"?"selected":"";?>>1 Queen Bed or 2 Twin Bed(s)</option>
         <option value="1 Double Bed or 2 Twin Bed(s)" <?php echo $edit->bed=="1 Double Bed or 2 Twin Bed(s)"?"selected":"";?>> 1 Double Bed or 2 Twin Bed(s)</option>
         <option value="Bunk Bed" <?php echo $edit->bed=="Bunk Bed"?"selected":"";?>>Bunk Bed</option>
         <option value="Futton" <?php echo $edit->bed=="Futton"?"selected":"";?>>Futton</option>
         <option value="Murphy" <?php echo $edit->bed=="Murphy"?"selected":"";?>>Murphy</option>
         <option value="Tatami Mats" <?php echo $edit->bed=="Tatami Mats"?"selected":"";?>>Tatami Mats</option>

       </select>

       <script>
        $('.children option[value=]').attr('selected', 'selected');
      </script>

    </div>
  </div>

  <div class="row form-group mb-3">
    <label class="col-md-4 control-label text-left text-nowrap">Extra Bed Type</label>
    <div class="col-md-8">

      <select required class="form-control children" name="bedtype">
       <option <?php echo $edit->bedtype =="Extra Bed" ? "Selected":"";?> value="Extra Bed">Extra Bed</option>
       <option  <?php echo $edit->bedtype =="Mattres" ?"Selected":"";?> value="Mattres">Mattres</option>
       <option  <?php echo $edit->bedtype =="Cot" ? "Selected":"";?> value="Cot">Cot</option>
       <option  <?php echo $edit->bedtype =="Sofa cum Bed" ? "Selected": "";?> value="Sofa cum Bed">Sofa cum Bed</option>
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

    <select required class="form-control adults" name="adultsbase">
   
      <?php for($i=1;$i<=10;$i++){ ?>
        <option <?php echo $edit->adultsbase== $i?"Selected":"";?> value="1"><?php echo $i ?></option>
     <?php } ?>
    </select>

    <script>
      $('.adults option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Child</label>
  <div class="col-md-8">

    <select required class="form-control children" name="childbase">
      <?php for($i=0;$i<=10;$i++){ ?>
        <option <?php echo $edit->childbase== $i?"Selected":"";?> value="1"><?php echo $i ?></option>
     <?php } ?>
    </select>

    <script>
      $('.children option[value=]').attr('selected', 'selected');
    </script>

  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Infant</label>
  <div class="col-md-8">

    <select required class="form-control adults" name="adultsmax">
  
      <?php for($i=0;$i<=10;$i++){ ?>
        <option <?php echo $edit->adultsmax== $i?"Selected":"";?> value="1"><?php echo $i ?></option>
     <?php } ?>
    
   
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
    <option value="<?php echo $edit->childmax;?>"><?php echo $edit->childmax;?></option>
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
    	<option value="<?php echo $edit->guestmax;?>"><?php echo $edit->guestmax;?></option>
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
    <input required class="form-control" type="text" placeholder=" Cost" name="supplementary" value="<?php echo $edit->supplementary_cost;?>">
  </div>
</div>
<hr>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Valid From</label>
  <div class="col-md-8">
    <input required class="form-control" type="date" placeholder="Extra beds" id="from_date" name="from_date" value="<?php echo $edit->from_date;?>">
  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Valid Till</label>
  <div class="col-md-8">
    <input required class="form-control" type="Date" placeholder="Beds charges" id="to_date" name="to_date" value="<?php echo $edit->to_date;?>">
  </div>
</div>
<div class="row form-group mb-3">
  <label class="col-md-4 control-label text-left">Currency</label>
  <div class="col-md-8">

    <select required class="form-control children" name="currency">
   
      <option <?php echo $edit->currency=="AED"?"Selected":"";?> value="AED">AED</option>
      <option  <?php echo $edit->currency=="USD"?"Selected":"";?> value="USD">USD</option>

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
    	<option value="<?php echo $edit->supplier;?>"><?php echo $edit->supplier;?></option>
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

  <div class="col-lg-12 p-t-20 text-center">
   <input type="submit"
   class="new_btn px-3">
   <!-- class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink"> -->


 </div>

 <!-- <div class="col-lg-12 p-t-20 text-center row">
        <div class="col-lg-6 p-t-20 text-center ">
          <input id="submit_btn" name="submit_btn" style="display:block;" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="Submit"/>
        </div>
        <div class="col-lg-3 p-t-20 text-center ">
          <input id="add_btn" name="add_btn" style="display:none;"  type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-info" value="Add">
          </div>
          <div class="col-lg-3 p-t-20 text-center ">
          </div>
      </div>

      <div class="col-lg-12 p-t-20 text-center row">
        <div class="col-lg-6 p-t-20 text-center ">
        </div>
        <div class=" p-t-20 text-center ">
        <a id="cancel_btn" name="cancel_btn" style="display:none;"  type="button" href="<?php echo base_url('Room/view_rooms')?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-danger" >Cancel</a>
          </div>
       
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

      

    //     $("#submit_btn").click(function(e){
    //         e.preventDefault();
    //         var dataString = $('#edit-form').serialize();
    //         $.ajax({
    //             type: "POST",
    //             url: '<?php echo site_url();?>room/updateRoomDetailss/<?php echo $edit->id;?>',
    //             data: dataString,
    //             success:function(data)
    //             {
    //               console.log(data);
    //               alert('SUCCESS!!');
    //               $('#CONTACT').find('input:text').each(function () {
    //                   $(this).val('');
    //               }); 
    //               $('#from_date').find('input:date').each(function () {
    //                   $(this).val('');
    //               });
    //               $('#to_date').find('input:date').each(function () {
    //                   $(this).val('');
    //               });
    //               $('#submit_btn').attr('style','display:none;');
    //               $('#add_btn').attr('style','display:block;');
    //               $('#cancel_btn').attr('style','display:block;')
    //             },
    //             error:function()
    //             {
    //               console.log('failed');
    //             }
    //         });
    //     });

    //     $("#add_btn").click(function(e){
    //         e.preventDefault();
    //         var dataString = $('#edit-form').serialize();
    //         $.ajax({
    //             type: "POST",
    //             url: '<?php echo site_url();?>room/updateRoomDetailss/<?php echo $edit->id;?>',
    //             data: dataString,
    //             success:function(data)
    //             {
    //               alert('SUCCESS!!');
    //               $('#CONTACT').find('input:text').each(function () {
    //                   $(this).val('');
    //               }); 
    //               $('#from_date').find('input:date').each(function () {
    //                   $(this).val('');
    //               });
    //               $('#to_date').find('input:date').each(function () {
    //                   $(this).val('');
    //               });
    //               $('#submit_btn').attr('style','display:none;');
    //               $('#add_btn').attr('style','display:block;');
    //               $('#cancel_btn').attr('style','display:block;')
    //             },
    //             error:function()
    //             {
    //               console.log('failed');
    //             }
    //         });
    //     });

       
    // });

</script>
<script>
  function changeVAL(single,double){
    let sing_val = document.getElementById(single).value;
    let doub_val = document.getElementById(double);
    console.log(sing_val);
    console.log(doub_val);
    doub_val.value = sing_val;
  }

</script>
