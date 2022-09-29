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
						<div class="page-title">Meals</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="<?php echo site_url();?>meals/view_meals">Meals</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Add Meals</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<div class="card-head">
						<form action="<?php echo site_url();?>meals/addMealsdetails" method="post" enctype="multipart/form-data">

						<header>	
															
								Add Meals
							</header>
						</div>
						<div class="card-body row">
						<input type="radio" id="with_transfer" name="transfer[]" value="with_transfer" /> With Transfer
						<input type="radio" id="without_transfer" name="transfer[]" value="without_transfer" checked="checked"/> Without Transfer	
						</div>
						<div class="card-body row">
						
						<div class="col-lg-3 p-t-20">
							<div>
								
								<label for="sample2" ><b>Resturant Type	</b></label>

								<select class="form-control" value=""  tabIndex="-1" id="resturant_type"  name="resturant_type">									
                                    <option value="Standard">Standard</option>
									<option value="Premium">Premium</option>
								</select>
							</div>
							</div>
							<div class="col-lg-3 p-t-20">
							<div>
								<label for="sample2" ><b>Resturant Name	</b></label>

								<input class="form-control" value="" type="text" id="resturant_name" name="resturant_name">

							</div>
							</div>
							<div class="col-lg-3 p-t-20">
								<div>
								<label><b>Meal</b></label>

								<select  class="form-control" value=""  tabIndex="-1" name="meal_name">
									
                                    <option value="Lunch">Lunch</option>
									<option selected value="Dinner">Dinner</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 p-t-20">
							<div>
							<label ><b> Meal Type</b></label>

							<select  class="form-control" name="meal_type" value=""  tabIndex="-1">
								<option value="Veg">Veg</option>
								<option value="Non-veg">Non Veg</option>
								<option value="Jain">Jain</option>
								<option value="Panjabi">Panjabi</option>

							</select>

						</div>
					</div>
						

					</div>

				
					

					<div class="card-body row">

<div class="col-lg-3 p-t-20">
<div class="">
<label for="text1"><b>Adult Rate</b></label>

	<input class="form-control" type="text" id="text1" name="adult_price">
</div>
</div>
<div class="col-lg-3 p-t-20">
<div class="">
<label class="" for="text1"><b>Child Rate</b></label>

	<input class="form-control" type="text" id="text1" name="child_price">
</div>
</div>
<!-- <div class="col-lg-4 p-t-20">
<div class="mdl-textfield mdl-js-textfield">
	<input class="mdl-textfield__input" type="text" id="text1" name="price">
	<label class="mdl-textfield__label" for="text1">Price</label>
</div>
</div> -->



<div class="col-lg-12 p-t-20 center">
<button type="submit" 
class="new_btn px-3">
Save
</button>
</div>
                    <br>
				</div>
				</form>
			</div>
		</div>
	</div>					<!-- start widget -->
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
<!-- end page container -->

<?php $this->load->view('footer');?>


