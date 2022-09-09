
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
<!-- Common js-->
<script src="<?php echo base_url();?>public/assets/js/app.js"></script>
<script src="<?php echo base_url();?>public/assets/js/layout.js"></script>
<script src="<?php echo base_url();?>public/assets/js/theme-color.js"></script>
<!-- Material -->
<script src="<?php echo base_url();?>public/assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="<?php echo base_url();?>public/assets/js/pages/ui/animations.js"></script>

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
<script src="<?php echo base_url();?>public/assets/js/pages/chart/morris/morris_home_data.js"></script>>

<script type="text/javascript">
	$(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 5 sec. and then will fire
// $("#successMessage").hide() function

$(".alert-success").hide(5000);

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
		html += '<td><input type="text" class="form-control" placeholder="City Name" name="city_name[]"></td>';
		html += '<td><select class="form-control" name="no_days[]"><option value="1">1</option><option value="2">2</option>option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
		html += '<td><input type="text" name="destination_covered[]" placeholder="" class="form-control"></td>';
		html += '<td><input type="text" placeholder="" name="sightseeing_covered[]" class="form-control"></td>';
		html += '<td class="mt-10"><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button></td>';
		html += '</tr>';

		$('#faqs tbody').append(html);

		faqs_row++;
	}
</script> 


</body>

</html>