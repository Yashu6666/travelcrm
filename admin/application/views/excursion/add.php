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
                <div class="page-title">Add Activity</div>
              </div>
             <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Inventory</a>&nbsp;<i
                    class="fa fa-angle-right"></i>
                  </i>&nbsp;<a class="parent-item" href="hotel.html">Activity</a>&nbsp;<i
                    class="fa fa-angle-right"></i>

                </li>
                <li class="active">Add Activity</li>
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
                  <form class="form-horizontal tour-form row" method="POST" action="<?php echo site_url();?>excursion/addExcursionDetails" enctype="multipart/form-data"
  >
                    <div class="col-md-8">
                      <div class="panel panel-default">


                        <div class="tab-pane show active" role="tabpanel" id="materialTabBarJsDemo"
                          aria-labelledby="materialTabBarJsDemoTab">

                          <mwc-tab-bar class="nav nav-tabs" role="tablist">
                            <mwc-tab id="GENERAL-tab" label="GENERAL" data-bs-toggle="tab" data-bs-target="#GENERAL"
                              role="tab" aria-controls="GENERAL" style="font-weight:bold;font-size: 20px;" aria-selected="true" dir="" class="active" active="">
                            </mwc-tab>
                            <!-- <mwc-tab id="INCLUSIONS-tab" label="INCLUSIONS" data-bs-toggle="tab"
                              data-bs-target="#INCLUSIONS" role="tab" aria-controls="INCLUSIONS" aria-selected="true"
                              dir="" class="" active=""></mwc-tab> -->
                            <!-- <mwc-tab id="EXCLUSIONS-tab" label="EXCLUSIONS" data-bs-toggle="tab"
                              data-bs-target="#EXCLUSIONS" role="tab" aria-controls="EXCLUSIONS" aria-selected="true"
                              dir="" class="" active=""></mwc-tab> -->
                            <!-- <mwc-tab id="POLICY-tab" label="Policy" data-bs-toggle="tab" data-bs-target="#POLICY"
                              role="tab" aria-controls="POLICY" aria-selected="true" dir="" class="" active="">
                            </mwc-tab> -->
                            <!-- <mwc-tab id="CONTACT-tab" label="Contact" data-bs-toggle="tab" data-bs-target="#CONTACT"
                              role="tab" aria-controls="CONTACT" aria-selected="true" dir="" class="" active="">
                            </mwc-tab> -->
                          </mwc-tab-bar>

                        </div>

                        <div class="panel-body">
                          <br>
                          <div class="tab-content form-horizontal">
                            <div class="tab-pane wow fadeIn animated active in" id="GENERAL">
                              <div class="clearfix"></div>
                              <div class="row form-group mb-3">
                                <label class="col-md-12 control-label text-left"><b>Activity Name</b></label>
                                <div class="col-md-12">
                                  <input required  class="form-control form-control-lg" type="text"
                                    name="tourname" value="">
                                </div>
                              </div>
                              <div class="row form-group mb-3">
                                <label class="col-md-12 control-label text-left"><b>Activity Description</b></label>
                                <div class="col-md-12">
                                  <!-- <div id="editor"> -->
                                  	<textarea name="tourdesc" id="editor">
                                  		
                                  	</textarea>
                                 <!--  </div> -->
                                </div>
                              </div>
                              <div class="row form-group mb-3">
                                <div class="col-md-12">
                                  <table class="table table-striped table-bordered" cellspacing="1" bgcolor="#cccccc">
                                    <tbody>
                                      <tr bgcolor="#efefef" style="text-align:center;font-weight:bold">
                                        <td width="80"></td>
                                        <td width="100">Adults</td>
                                        <td width="100">Child</td>
                                        <td width="100">Infant</td>
                                      </tr>
                                      <!-- <tr bgcolor="#ffffff" style="text-align:center">
                                        <td>Quantity</td>
                                        <td><input type="text" class="form-control input-sm adult" name="maxadult"
                                            size="" value=""></td>
                                        <td><input type="text" class="form-control input-sm child" name="maxchild"
                                            readonly="" size="" value=""></td>
                                        <td><input type="text" class="form-control input-sm infant" name="maxinfant"
                                            readonly="" size="" value=""></td>
                                      </tr> -->
                                      <tr bgcolor="#ffffff" style="text-align:center">
                                        <td><b>Price</b></td>
                                        <td><input type="text" class="form-control input-sm adult" name="adultprice"
                                            size="" value=""></td>
                                        <td><input type="text" class="form-control input-sm child" 
                                            name="childprice" size="" value=""></td>
                                        <td><input type="text" class="form-control input-sm infant" 
                                            name="infantprice" size="" value=""></td>
                                      </tr>
                                      <tr bgcolor="#ffffff" style="text-align:center;display:none;">
                                        <td><b>Enable</b></td>
                                        <td>
                                          <span
                                            class="btn btn-danger btn-xs disabledinput btn-block mdc-ripple-upgraded"
                                            id="adult"><span id="adultbtn">Disable</span></span>
                                        </td>
                                        <td>
                                          <span
                                            class="btn btn-success btn-xs enabledinput btn-block mdc-ripple-upgraded"
                                            id="child"><span id="childbtn">Enable</span> </span>
                                        </td>
                                        <td>
                                          <span
                                            class="btn btn-success btn-xs enabledinput btn-block mdc-ripple-upgraded"
                                            id="infant"><span id="infantbtn">Enable</span> </span>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                 
                                </div>
                              </div>

                              
                              <div class="row form-group">
                              </div>

                              <!-- Address and Map -->
                              <div class="panel panel-default">
                                <div class="panel-heading"><strong> Address </strong></div>
                                <div class="well well-sm" style="margin-bottom: 0px;">
                                  <div class="col-md-12 form-horizontal">
                                    <table class="table">
                                      <tbody>
                                        <tr>
                                         
                                          <td>
                                            <input type="text" class="form-control Places pac-target-input"
                                            
                                              name="tourmapaddress" value="" placeholder="Enter Address"
                                              autocomplete="off">
                                          </td>
                                        </tr>
                                      
                                        
                                      </tbody>
                                    </table>
                                  </div>

                                  <div class="clearfix"></div>
                                </div>
                              </div>
                              <!-- Address and Map -->
                            </div>

                       

                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-md-4 sticky">
                      <div class="card p-5">
                        <h4 class="mb-3" style="font-weight:Bold;align-self:center" ><strong>Main Settings</strong></h4>
                        <div class="panel-body mt-3" style="padding: 0px !important;">
<!--                        
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left"> Type</label>
                            <div class="col-md-8">
                              <select required class="" name="tourtype">
                                <option value="">Select</option>
                                <option value="Private">Private</option>
                                <option value="Join-In">Join-In</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Educational">Educational</option>
                                <option value="Corporate">Corporate</option>
                                <option value="Couples">Couples</option>
                                <option value="Staff training">Staff training</option>
                                <option value="195">Discovery Tours</option>
                                <option value="Discovery Tours">Family</option>
                                <option value="Holidays">Holidays</option>
                                <option value="Wildlife Safaris">Wildlife Safaris</option>
                                <option value="Holidays">Holidays</option>
                                <option value="History / Culture">History / Culture</option>
                                <option value="Beach Holidays">Beach Holidays</option>
                                <option value="Sightseeing">Sightseeing</option>
                              </select>
                            </div>
                          </div> -->

<!-- 
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left"> Season</label>
                            <div class="col-md-8">
                              <select required class="" name="tourseason">
                                <option value="">Select</option>
                                <option value="JAN">JAN</option>
                                <option value="FEB">FEB</option>
                                <option value="MAR">MAR</option>
                                <option value="APR">APR</option>
                                <option value="MAY">MAY</option>
                                <option value="JUN">JUN</option>
                                <option value="JUL">JUL</option>
                                <option value="AUG">AUG</option>
                                <option value="SEP">SEP</option>
                                <option value="OCT">OCT</option>
                                <option value="NOV">NOV</option>
                                <option value="DEC">DEC</option>

                              </select>
                            </div>
                          </div> -->

                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left text-nowrap"><b>Transfer Type</b></label>
                            <div class="col-md-8">
                              <select required class="form-control" name="type"  id="type">
                                <option value="">Select</option>
                                <option value="SIC">SIC</option>
                                <option value="PVT">PVT</option>

                              </select>
                            </div>
                          </div>

                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left text-nowrap"><b>Tour Time Hrs</b></label>
                            <div class="col-md-8">
                              <input  type="text" class="form-control" name="tour_time" value="">
                            </div>
                          </div>

                          <div style="display:none" id="pvttab">
                      
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left"><b>Upto PAX</b></label>
                            <div class="col-md-8">
                              <input  type="text" class="form-control" name="pax" value="">
                            </div>
                          </div> 

                          <div class="row form-group mb-3" >
                            <label class="col-md-4 control-label text-left"><b>Vehicle Price</b></label>
                            <div class="col-md-8">
                              <input  type="text" class="form-control" name="vehicle_price" value="0">
                            </div>
                          </div> 
</div>

                          <h6 class="mb-3 center" style="font-weight:Bold;align-self:center" ><strong>Operating Time</strong></h6>
                         <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left"><b>From</b></label>
                            <div class="col-md-8">
                              <input  type="time" class="form-control" name="operating_from" value="">
                            </div>
                          </div>
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left"> <b>To</b></label>
                            <div class="col-md-8">
                              <input  type="time" class="form-control" name="operating_to" value="">
                            </div>
                          </div>
                          <!-- <h6 style="font-weight:Bold;align-self:center">PAX</h6>
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">Min</label>
                            <div class="col-md-8">
                              <input required type="text" class="form-control" name="min_pax" value="">
                            </div>
                          </div> -->
                          <!-- <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">Max</label>
                            <div class="col-md-8">
                              <input required type="text" class="form-control" name="max_pax" value="">
                            </div>
                          </div> -->

                          <!-- <h6 style="font-weight:Bold;align-self:center">Allowd Age Group</h6>
                          <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">From</label>
                            <div class="col-md-8">
                              <input required type="text" class="form-control" name="from_age" value="">
                            </div>
                          </div> -->
                          <!-- <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">To</label>
                            <div class="col-md-8">
                              <input required type="text" class="form-control" name="to_age" value="">
                            </div>
                          </div> -->

                          <!-- <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">Duration</label>
                            <div class="col-md-8">
                              <input required type="text" class="form-control" name="duration" value="">
                            </div>
                          </div> -->
                          <!-- <div class="row form-group mb-3">
                            <label class="col-md-4 control-label text-left">Suppliers</label>
                            <div class="col-md-8">
													
                          <select required data-placeholder="Select" class="form-select1" name="suppliers">
                         <?php foreach($supplier as $val){ 
                           //print_r($val->firstName);
                           ?>	
                          <option value="<?php print_r($val->firstName) ?> <?php print_r($val->lastName) ?>"> <?php print_r($val->firstName) ?> <?php print_r($val->lastName) ?></option>
                         <?php } ?>
                          </select>
                         </div> -->
                            <!-- <div class="col-md-8">
                              <input required type="text" class="form-control" name="suppliers" value="">
                            </div> -->
                          </div>

                           <!-- <div class="row form-group mb-3">
                            <label class="col-md-3 control-label text-left">Vat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="" placeholder="" type="text" name="taxvalue" value="">
                            </div>
                          </div> -->

                          <div class="panel-footer">
                         
                            <div class="col-lg-12 p-t-20 text-center">
                              <input type="submit" 
                                class="new_btn px-5"></button>
                            </div>
                          </div>
                        </div>
                      </div>
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

            <?php $this->load->view('footer');?>

             <script type="text/javascript">
                                    $(function () {
                                      $("#infant").on("click", function () {
                                        if ($(this).hasClass("enabledinput")) {
                                          $(this).removeClass("enabledinput");
                                          $(this).addClass("disabledinput");
                                          $(this).addClass("btn-danger");
                                          $(this).removeClass("btn-success");
                                          $(".infant").prop("readonly", false);
                                          $("#infantbtn").text("Disable");
                                          $("#infantstatus").val("1");
                                        } else {
                                          $(this).removeClass("disabledinput");
                                          $(this).addClass("enabledinput");
                                          $(this).removeClass("btn-danger");
                                          $(this).addClass("btn-success");
                                          $(".infant").prop("readonly", true);
                                          $("#infantbtn").text("Enable");
                                          $("#infantstatus").val("0");
                                        }
                                      });

                                      $("#child").on("click", function () {
                                        if ($(this).hasClass("enabledinput")) {
                                          $(this).removeClass("enabledinput");
                                          $(this).addClass("disabledinput");
                                          $(this).addClass("btn-danger");
                                          $(this).removeClass("btn-success");
                                          $(".child").prop("readonly", false);
                                          $("#childbtn").text("Disable");
                                          $("#childstatus").val("1");

                                        } else {
                                          $(this).removeClass("disabledinput");
                                          $(this).addClass("enabledinput");
                                          $(this).removeClass("btn-danger");
                                          $(this).addClass("btn-success");
                                          $(".child").prop("readonly", true);
                                          $("#childbtn").text("Enable");
                                          $("#childstatus").val("0");

                                        }
                                      })
                                      $("#adult").on("click", function () {
                                        if ($(this).hasClass("enabledinput")) {
                                          $(this).removeClass("enabledinput");
                                          $(this).addClass("disabledinput");
                                          $(this).addClass("btn-danger");
                                          $(this).removeClass("btn-success");
                                          $(".adult").prop("readonly", false);
                                          $("#adultbtn").text("Disable");
                                          $("#adultstatus").val("1");
                                        } else {
                                          $(this).removeClass("disabledinput");
                                          $(this).addClass("enabledinput");
                                          $(this).removeClass("btn-danger");
                                          $(this).addClass("btn-success");
                                          $(".adult").prop("readonly", true);
                                          $("#adultbtn").text("Enable");
                                          $("#adultstatus").val("0");
                                        }
                                      })
                                    });
                                                     

                                  </script>

<script>
    initSample();
    $('.js-example-basic-multiple').select2();
  </script>
  <script>

$('#type').change(function() {


  if($(this).val()=='PVT'){
$("#pvttab").show();
  }else{
    $("#pvttab").hide();
  }
    // $(this).val() will work here
});

    // Listen for click on toggle checkbox
    $('#select_all').click(function (event) {
      if (this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function () {
          this.checked = true;
        });
      } else {
        $(':checkbox').each(function () {
          this.checked = false;
        });
      }
    });

    function select_all_data(e) {
      if ($("#select_all").prop("")) {
        $("[class=checkboxcls]").prop("", true);
      } else {
        $("[class=checkboxcls]").prop("", false);
      }
    }

    /*
    $("#select_all").click(function () {
    if ($("#select_all").prop("").prop("")) {
    $("[class=checkboxcls]").prop("", true);
    } else {
    $("[class=checkboxcls]").prop("", false);   }
    });*/


  </script>
  <!-- icheck -->
  <script src="<?php echo base_url();?>public/js/icheck.min.js"></script>
  <link href="<?php echo base_url();?>public/css/grey.css" rel="stylesheet">
  <script>
    var cb, optionSet1;

    $(function () {
      var checkAll = $('input.all');
      var checkboxes = $('input.checkboxcls');

      $('.tab-pane input').iCheck({
        checkboxClass: "icheckbox_square-grey",
      });

      checkAll.on('ifChecked ifUnchecked', function (event) {
        if (event.type == 'ifChecked') {
          checkboxes.iCheck('check');
        } else {
          checkboxes.iCheck('uncheck');
        }
      });

      checkboxes.on('ifChanged', function (event) {
        if (checkboxes.filter(':checked').length == checkboxes.length) {
          checkAll.prop('checked', 'checked');
        } else {
          checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
      });
    });

    $("radio").iCheck({
      checkboxClass: "icheckbox_square-grey",
      radioClass: "iradio_square-grey"
    });
  </script>
  <!-- datepicker -->
  <script src="<?php echo base_url();?>public/js/datepicker.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/datepicker.css">
  <script>
    var fmt = "dd/mm/yyyy";
    if (top.location != location) { top.location.href = document.location.href; }
    $(function () {
      window.prettyPrint && prettyPrint(); $('.dob').datepicker({ format: fmt, autoclose: true }).on('changeDate', function (ev) {
        $(this).datepicker('hide');
      });
      $('#dp1').datepicker();
      $('#dp2').datepicker();
      $('#dp3').datepicker();
      $('#dp5').datepicker();

      // disabling dates
      var nowTemp = new Date();
      var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

      var date = $('.dpd3').datepicker({
        format: fmt,
        onRender: function (date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
        .on('changeDate', function (ev) {
          date.hide();
        })
        .data('datepicker');

      var date12 = $('.dpd5').datepicker({
        format: fmt,
        onRender: function (date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
        .on('changeDate', function (ev) {
          date12.hide();
        })
        .data('datepicker');
      var date13 = $('.dpd6').datepicker({
        format: fmt,
        onRender: function (date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
        .on('changeDate', function (ev) {
          date13.hide();
        })
        .data('datepicker');

      var checkin = $('.dpd1').datepicker({
        format: fmt,
        onRender: function (date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
        .on('changeDate', function (ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1); checkout.setValue(newDate);
          }
          checkin.hide();
          $('.dpd2')[0].focus();
        })
        .data('datepicker');
      var checkout = $('.dpd2').datepicker({
        format: fmt,
        onRender: function (date) {
          return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
      })
        .on('changeDate', function (ev) {
          checkout.hide();
        })
        .data('datepicker');

    });
  </script>
  <!-- timepicker -->
  <script src="<?php echo base_url();?>public/js/timepicker.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/timepicker.css">
  <script>
    $(function () {
      $('.timepicker').clockface();
    });
  </script>                                  