<!-- start js include path -->
<script src="<?php echo base_url();?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>public/assets/js/pages/sparkline/sparkline-data.js"></script>
<!-- Common js-->
<script src="<?php echo base_url();?>public/assets/js/app.js"></script>
<script src="<?php echo base_url();?>public/assets/js/layout.js"></script>
<script src="<?php echo base_url();?>public/assets/js/theme-color.js"></script>
<!-- material -->
<script src="<?php echo base_url();?>public/assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="<?php echo base_url();?>public/assets/js/pages/ui/animations.js"></script>
<!-- morris chart -->
<script src="<?php echo base_url();?>public/assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/morris/raphael-min.js"></script>
<script src="<?php echo base_url();?>public/assets/js/pages/chart/morris/morris_home_data.js"></script>



<!-- end js include path -->

<script src="<?php echo base_url();?>public/css/select2.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="module" src="<?php echo base_url();?>public/js/material.js"></script>
<script src="<?php echo base_url();?>public/js/scripts.js"></script>


<script>
	initSample();
	$('.js-example-basic-multiple').select2();
	$('.js-example-basic-multiple').select2();

</script>
<script>
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
			if ($("#select_all").prop("checked")) {
				$("[class=checkboxcls]").prop("checked", true);
			} else {
				$("[class=checkboxcls]").prop("checked", false);
			}
		}



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
	<!-- dronzone -->

	
</body>

</html>