<!-- start footer -->
<div class="page-footer">
			<div class="page-footer-inner"> 
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss"></a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
	</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			
		</div>
		<!-- end footer -->
	</div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- start js include path -->
	<script src="<?php echo base_url();?>public/assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/popper/popper.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="<?php echo base_url();?>public/assets/js/app.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/layout.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/theme-color.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/counterup/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/chart-js/utils.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/pages/chart/chartjs/home-data2.js"></script>
	<!-- data tables -->
	<script src="<?php echo base_url();?>public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url();?>public/assets/js/pages/table/table_data.js"></script>
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

	<!-- timepicker -->
	<script src="<?php echo base_url();?>public/js/timepicker.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/timepicker.css">


	
	<!-- <script type="text/javascript">



            $(function () {
                var smsCodes = $('.smsCode');
                function goToNextInput(e) {
                    var key = e.which,
                        t = $(e.target),
                        // Get the next input
                        sib = t.closest('div').next().find('.smsCode');

                    // Not allow any keys to work except for tab and number
                    if (key != 9 && (key < 48 || key > 57)) {
                        console.log("!=9");
                        e.preventDefault();
                        return false;
                    }

                    // Tab
                    if (key === 9) {
                        console.log("===9");
                        return true;
                    }

                    // Go back to the first one
                    if (!sib || !sib.length) {
                        console.log("!sib || !sib.length");
                        
                        sib = $('.smsCode').eq(0);
                        console.log(sib);
                    }
                    sib.select().focus();
                }

                function onKeyDown(e) {
                    var key = e.which;

                    // only allow tab and number
                    if (key === 9 || (key >= 48 && key <= 57)) {
                        return true;
                    }

                    e.preventDefault();
                    return false;
                }

                function onFocus(e) {
                    $(e.target).select();
                }

                smsCodes.on('keyup', goToNextInput);
                smsCodes.on('keydown', onKeyDown);
                smsCodes.on('click', onFocus);

            });
        </script> -->
	
	
		<script type="text/javascript">
		$(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 5 sec. and then will fire
// $("#successMessage").hide() function
	$("#otp_content").attr('style','display:none;');
    $(".alert-success").hide(5000);


});

function getOtp(){
        var username= $("#stock_username").val();
        var password = $("#stock_password").val();
    //    alert(username);
        var base_url = '<?php echo base_url()?>';
        $.ajax({
            url: base_url + "Login/loginstock_otp",
            dataType : 'json',
            type: "POST",
            data : { 'username':username,'password':password },
            success: function(result) {
            console.log(result);
			if(result.code == true){
				$("#login_content").attr('style','display:none;')
				$("#otp_content").attr('style','display: flex;margin-top: 20px;');
				$("#get_otp_div").attr('style','display:none;');
				$("#verify_div").attr('style','display: grid;')
				$("#mail_id").html(result.mail_id);
				$("#stock_userid").val(result.user_id);
			}else{
				$("#message_div").attr('style','display: flex;margin-top: 20px;');
				$("#message_div").html(result.msg);
			}
        }});

    }


	function verify_otp(){


		var user_id = $('#stock_userid').val();
		var email_id = $('#stock_email_id').val();
		var otp = $('#stock_otp').val();
        var base_url = '<?php echo base_url()?>';
        $.ajax({
            url: base_url + "Login/loginstock",
            dataType : 'json',
            type: "POST",
            data : { 'otp':otp,'user_id':user_id,'email_id':email_id },
            success: function(result) {
            console.log(result);
			if(result.code == true){
				window.location.href = result.redirect_url;
				
			}else{
				$("#otp_msg_div").attr('style','display: flex;margin-top: 20px;');
				$("#otp_msg_div").html(result.msg);
			}
        }});

    }
	
	</script>


</body>

</html>