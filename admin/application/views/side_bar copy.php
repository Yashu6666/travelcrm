<!-- start sidebar menu -->
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu" style="background-color:#3e3466 !important;">
		<div id="remove-scroll">
			<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper hide">
					<div class="sidebar-toggler">
						<span></span>
					</div>
				</li>
				<li class="sidebar-user-panel">
					<div class="user-panel">

					</div>
				</li>
				<li class="sidebar-user-panel">
					<div class="user-panel">

					</div>
				</li>

				<li class="menu-heading">
				</li>


				<?php $a = $this->session->userdata('reg_type');
				$for_stocks = $this->session->userdata('for_stocks');

				if ($a == 'Super Admin' && $for_stocks == FALSE) { ?>
					<!-- ?php if ($user_type == 'Super Admin') : ?> -->

					<li class="nav-item start active">
						<a href="<?php echo site_url(); ?>login/dashboard" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Dashboard</span>
							<span class="selected"></span>

						</a>
					</li>
					<li class="nav-item">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Inventory</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>hotel/view_hotels" class="nav-link ">
									<span class="title">Hotels</span>
								</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo site_url(); ?>room/view_rooms" class="nav-link ">
									<span class="title">Rooms</span>
								</a>
							</li>
							<li class="nav-item ">
								<a href="<?php echo site_url(); ?>transfer/view_transfers" class="nav-link nav-toggle">

									<span class="title">Transfer</span>
								</a>

							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>excursion/view_excursion" class="nav-link ">
									<span class="title">Excursion</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>visa/view_visa" class="nav-link nav-toggle">

									<span class="title">Visa</span>

								</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo site_url(); ?>meals/view_meals" class="nav-link ">
									<span class="title">Meals</span>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>supplier/view_supplier" class="nav-link ">
									<span class="title">Suppliers</span>
								</a>
							</li>

						</ul>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>query/view_query/Overall" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Queries</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>HotelVoucher/view_hotels_voucher" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Hotel voucher</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>invoice/view_invoice" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Invoice</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>itinerary/view" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Itinerary</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="<?php echo site_url(); ?>todo/view" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Todo</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Report Name</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/query_report" class="nav-link ">
									<span class="title">Querie Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/hotel_report" class="nav-link ">
									<span class="title">Hotel Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/package_report" class="nav-link ">
									<span class="title">Package Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/visa_report" class="nav-link ">
									<span class="title">Visa Report</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Setting</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>roles/view_users" class="nav-link ">
									<span class="title">Users</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="<?php echo site_url(); ?>login/logout" class="nav-link nav-toggle">
							<i class="material-icons">business_center</i>
							<span class="title">Logout</span>
						</a>
					</li>
			</ul>
		</div>
	</div>
</div>

<?php } else if ($a == "Admin"  && $for_stocks == FALSE) { ?>

	<?php $user_id = $this->session->userdata('admin_id');
					$user_details = $this->db->where('id', $user_id)->get('users')->row();
					if (isset($user_details->modules)) {
						$modules = explode(',', $user_details->modules);

	?>

		<?php

			if (in_array('Hotel', $modules)) { ?>
							
						
			<li class="nav-item">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="material-icons">business_center</i>
					<span class="title">Inventory</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>hotel/view_hotels" class="nav-link ">
							<span class="title">Hotels</span>
						</a>
					</li> <?php }
						if (in_array('Rooms', $modules)) { ?>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>room/view_rooms" class="nav-link ">
							<span class="title">Rooms</span>
						</a>
					</li>
				<?php } ?>

				<?php if (in_array('Transfer', $modules)) { ?>
					<li class="nav-item ">
						<a href="<?php echo site_url(); ?>transfer/view_transfers" class="nav-link nav-toggle">

							<span class="title">Transfer</span>
						</a>

					</li>

				<?php } ?>
				<?php if (in_array('Excursion', $modules)) { ?>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>excursion/view_excursion" class="nav-link ">
							<span class="title">Excursion</span>
						</a>
					</li>
				<?php } ?>
				<?php if (in_array('Visa', $modules)) { ?>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>visa/view_visa" class="nav-link nav-toggle">

							<span class="title">Visa</span>

						</a>
					</li>
				<?php } ?>

				<?php if (in_array('Package', $modules)) { ?>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>package/view_package" class="nav-link ">
							<span class="title">Packages</span>
						</a>
					</li>

				<?php } ?>

				<?php if (in_array('Meals', $modules)) { ?>
					<li class="nav-item">
						<a href="#" class="nav-link ">
							<span class="title">Meals</span>
						</a>
					</li>
				<?php } ?>

				

				<?php if (in_array('Suppliers', $modules)) { ?>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>supplier/view_supplier" class="nav-link ">
							<span class="title">Suppliers</span>
						</a>
					</li>
				<?php } ?>

				</ul>
			</li>
		
			<?php if (in_array('Query', $modules)) { ?>
				<li class="nav-item">
					<a href="<?php echo site_url(); ?>query/view_query/Overall" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Queries</span>
					</a>
				</li> <?php } ?>

			<?php if (in_array('Quotation', $modules)) { ?>
				<li class="nav-item">

					<a href="<?php echo site_url(); ?>HotelVoucher/view_hotels_voucher" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Hotel voucher</span>
					</a>
				</li>
			<?php } ?>

			<?php if (in_array('Invoice', $modules)) { ?>
				<li class="nav-item">
					<a href="<?php echo site_url(); ?>invoice/view_invoice" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Invoice</span>
					</a>
				</li>

			<?php } ?>
			<?php if (in_array('Itinerary', $modules)) { ?>
				<li class="nav-item">
					<a href="<?php echo site_url(); ?>itinerary/view" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Itinerary</span>
					</a>
				</li>
			<?php } ?>

			<?php if (in_array('Todo', $modules)) { ?>
				<li class="nav-item">
					<a href="<?php echo site_url(); ?>todo/view" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Todo</span>
					</a>
				</li>
			<?php } ?>

			<?php if (in_array('ReportName', $modules)) { ?>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Report Name</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>reports/query_report" class="nav-link ">
								<span class="title">Querie Report</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>reports/hotel_report" class="nav-link ">
								<span class="title">Hotel Report</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>reports/package_report" class="nav-link ">
								<span class="title">Package Report</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>reports/visa_report" class="nav-link ">
								<span class="title">Visa Report</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
			<?php if (in_array('Setting', $modules)) { ?>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">business_center</i>
						<span class="title">Setting</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>roles/view_users" class="nav-link ">
								<span class="title">Users</span>
							</a>
						</li>

					</ul>
				</li> <?php } ?>

			<li class="nav-item">
				<a href="<?php echo site_url(); ?>login/logout" class="nav-link nav-toggle">
					<i class="material-icons">business_center</i>
					<span class="title">Logout</span>
				</a>
			</li>
			</ul>
			</div>
			</div>
			</div>

		<?php }
				} else { ?>
		<?php if ($for_stocks == FALSE) {
						redirect('login/logout', 'refresh');
					} ?>
		<li class="nav-item start active">
			<a href="<?php echo site_url(); ?>stocks/dashboardstock" class="nav-link nav-toggle">
				<i class="material-icons">business_center</i>
				<span class="title">Dashboard</span>
				<span class="selected"></span>

			</a>
		</li>

		<li class="nav-item">
			<a href="javascript:;" class="nav-link nav-toggle">
				<i class="material-icons">business_center</i>
				<span class="title">Stocks</span>
				<span class="arrow"></span>
			</a>
			<ul class="sub-menu">
				<li class="nav-item">
					<a href="<?php echo site_url(); ?>stocks/view_stock" class="nav-link ">
						<span class="title">Buy Stocks</span>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo site_url(); ?>stocks/sell_stock" class="nav-link ">
						<span class="title">Sell Stocks</span>
					</a>
				</li>

			</ul>
		</li>

		<li class="nav-item">
			<a href="<?php echo site_url(); ?>login/logout" class="nav-link nav-toggle">
				<i class="material-icons">business_center</i>
				<span class="title">Logout</span>
			</a>
		</li>
		</ul>
		</div>
		</div>
		</div>
	<?php } ?>

	<!-- end sidebar menu -->