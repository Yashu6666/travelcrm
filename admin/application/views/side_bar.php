<!-- start sidebar menu -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu" style="background-color:#102158 !important;">
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

				<?php if (!$this->session->userdata('admin_logged_in') || !$this->session->userdata('admin_logged_in')) : ?>
					<?php redirect('login/logout', 'refresh'); ?>
				<?php endif; ?>

				<?php $a = $this->session->userdata('reg_type');
				$for_stocks = $this->session->userdata('for_stocks');

				if ($a == 'Super Admin' && $for_stocks == FALSE) { ?>

					<li class="nav-item <?php echo $this->uri->segment(1) == "login" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>login/dashboard" class="nav-link nav-toggle">
						<i class="fa-solid fa-gauge"></i>
							<span class="title">Dashboard</span>
							<span class="selected"></span>

						</a>
					</li>

					<li class="nav-item <?php if (
											$this->uri->segment(1) == "hotel" || $this->uri->segment(1) == "room" || $this->uri->segment(1) == "transfer" ||
											$this->uri->segment(1) == "excursion" || $this->uri->segment(1) == "visa" || $this->uri->segment(1) == "meals" || $this->uri->segment(1) == "supplier"
										) {
											echo 'start active';
										} ?>">

						<a href="javascript:;" class="nav-link nav-toggle">
						
						<i class="fa-solid fa-warehouse"></i>
							<span class="title">Inventory</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>hotel/view_hotels" class="nav-link <?php echo $this->uri->segment(1) == "hotel" ? "text-white" : "" ?>">
								<i class="fa-solid fa-hotel"></i>	
								<span class="title">Hotels</span>
								</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo site_url(); ?>room/view_rooms" class="nav-link <?php echo $this->uri->segment(1) == "room" ? "text-white" : "" ?>">
								<i class="fa-solid fa-bed"></i>
								<span class="title">Rooms</span>
								</a>
							</li>
							<li class="nav-item ">
								<a href="<?php echo site_url(); ?>transfer/view_transfers" class="nav-link nav-toggle <?php echo $this->uri->segment(1) == "transfer" ? "text-white" : "" ?>">
								<i class="fa-solid fa-car"></i>
									<span class="title">Transfer</span>
								</a>

							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>excursion/view_excursion" class="nav-link <?php echo $this->uri->segment(1) == "excursion" ? "text-white" : "" ?>">
								<i class="fa-solid fa-place-of-worship"></i>	
								<span class="title">Excursion</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>visa/view_visa" class="nav-link nav-toggle <?php echo $this->uri->segment(1) == "visa" ? "text-white" : "" ?>">
								<i class="fa-brands fa-cc-visa"></i>
									<span class="title">Visa</span>

								</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo site_url(); ?>meals/view_meals" class="nav-link <?php echo $this->uri->segment(1) == "meals" ? "text-white" : "" ?>">
								<i class="fa-solid fa-bowl-rice"></i>	
								<span class="title">Meals</span>
								</a>
							</li>

							<li class="nav-item">
								<a href="<?php echo site_url(); ?>supplier/view_supplier" class="nav-link <?php echo $this->uri->segment(1) == "supplier" ? "text-white" : "" ?>">
								<i class="fa-solid fa-boxes-packing"></i>	
								<span class="title">Suppliers</span>
								</a>
							</li>

						</ul>
					</li>
					<li class="nav-item <?php echo $this->uri->segment(1) == "query" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>query/view_query/Overall" class="nav-link nav-toggle ">
						<i class="fa-solid fa-clipboard-question"></i>
							<span class="title">Queries</span>
						</a>
					</li>
					<li class="nav-item <?php echo $this->uri->segment(1) == "HotelVoucher" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>HotelVoucher/view_hotels_voucher" class="nav-link nav-toggle">
						<i class="fa-solid fa-receipt"></i>
							<span class="title">Hotel voucher</span>
						</a>
					</li>
					<li class="nav-item <?php echo $this->uri->segment(1) == "invoice" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>invoice/view_invoice" class="nav-link nav-toggle">
						<i class="fa-solid fa-file-invoice"></i>
							<span class="title">Invoice</span>
						</a>
					</li>
					<li class="nav-item <?php echo $this->uri->segment(1) == "itinerary" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>itinerary/view" class="nav-link nav-toggle">
						<i class="fa-solid fa-route"></i>
							<span class="title">Itinerary</span>
						</a>
					</li>

					<li class="nav-item <?php echo $this->uri->segment(1) == "todo" ? "start active" : "" ?>">
						<a href="<?php echo site_url(); ?>todo/view" class="nav-link nav-toggle">
						<i class="fa-regular fa-calendar-check"></i>
							<span class="title">Todo</span>
						</a>
					</li>

					<li class="nav-item <?php if ($this->uri->segment(1) == "reports") {
											echo 'start active';
										} ?>">

						<a href="#" class="nav-link nav-toggle">
						<i class="fa-solid fa-square-poll-horizontal"></i>
							<span class="title">Report Name</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/query_report" class="nav-link <?php echo $this->uri->segment(2) == "query_report" ? "text-white" : "" ?>">
									<span class="title">Queries Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/invoice_report" class="nav-link <?php echo $this->uri->segment(2) == "invoice_report" ? "text-white" : "" ?>">
									<span class="title">Invoice Report</span>
								</a>
							</li>
							<!-- <li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/hotel_report" class="nav-link <?php echo $this->uri->segment(2) == "hotel_report" ? "text-white" : "" ?>">
									<span class="title">Hotel Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/package_report" class="nav-link <?php echo $this->uri->segment(2) == "package_report" ? "text-white" : "" ?>">
									<span class="title">Package Report</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>reports/visa_report" class="nav-link <?php echo $this->uri->segment(2) == "visa_report" ? "text-white" : "" ?>">
									<span class="title">Visa Report</span>
								</a>
							</li> -->
						</ul>
					</li>

					<li class="nav-item <?php if ($this->uri->segment(1) == "roles") {
											echo 'start active';
										} ?>">
						<a href="#" class="nav-link nav-toggle">
						<i class="fa-solid fa-gear"></i>
							<span class="title">Setting</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php echo site_url(); ?>roles/view_users" class="nav-link <?php echo $this->uri->segment(2) == "view_users" ? "text-white" : "" ?>">
									<span class="title">Users</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="<?php echo site_url(); ?>login/logout" class="nav-link nav-toggle">
						<i class="fa-solid fa-arrow-right-from-bracket"></i>
							<span class="title">Logout</span>
						</a>
					</li>
				<?php } else if ($a == "Admin"  && $for_stocks == FALSE) { ?>
					<?php $user_id = $this->session->userdata('admin_id');
					$user_details = $this->db->where('id', $user_id)->get('users')->row();
					if (isset($user_details->modules)) {
						$modules = explode(',', $user_details->modules); ?>


						<li class="nav-item <?php echo $this->uri->segment(1) == "login" ? "start active" : "" ?>">
							<a href="<?php echo site_url(); ?>login/dashboard" class="nav-link nav-toggle">
							<i class="fa-solid fa-gauge"></i>
								<span class="title">Dashboard</span>
								<span class="selected"></span>

							</a>
						</li>

						<?php if (in_array('Inventory', $modules)) { ?>

							<li class="nav-item <?php if (
													$this->uri->segment(1) == "hotel" || $this->uri->segment(1) == "room" || $this->uri->segment(1) == "transfer" ||
													$this->uri->segment(1) == "excursion" || $this->uri->segment(1) == "visa" || $this->uri->segment(1) == "meals" || $this->uri->segment(1) == "supplier"
												) {
													echo 'start active';
												} ?>">

								<a href="javascript:;" class="nav-link nav-toggle">
								<i class="fa-solid fa-warehouse"></i>
									<span class="title">Inventory</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>hotel/view_hotels" class="nav-link <?php echo $this->uri->segment(1) == "hotel" ? "text-white" : "" ?>">
										<i class="fa-solid fa-hotel"></i>	
										<span class="title">Hotels</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo site_url(); ?>room/view_rooms" class="nav-link <?php echo $this->uri->segment(1) == "room" ? "text-white" : "" ?>">
										<i class="fa-solid fa-bed"></i>
										<span class="title">Rooms</span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="<?php echo site_url(); ?>transfer/view_transfers" class="nav-link nav-toggle <?php echo $this->uri->segment(1) == "transfer" ? "text-white" : "" ?>">
										<i class="fa-solid fa-car"></i>
											<span class="title">Transfer</span>
										</a>

									</li>
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>excursion/view_excursion" class="nav-link <?php echo $this->uri->segment(1) == "excursion" ? "text-white" : "" ?>">
											<span class="title">Excursion</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>visa/view_visa" class="nav-link nav-toggle <?php echo $this->uri->segment(1) == "visa" ? "text-white" : "" ?>">
										<i class="fa-brands fa-cc-visa"></i>
											<span class="title">Visa</span>

										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo site_url(); ?>meals/view_meals" class="nav-link <?php echo $this->uri->segment(1) == "meals" ? "text-white" : "" ?>">
										<i class="fa-solid fa-bowl-rice"></i>
										<span class="title">Meals</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo site_url(); ?>supplier/view_supplier" class="nav-link <?php echo $this->uri->segment(1) == "supplier" ? "text-white" : "" ?>">
										<i class="fa-solid fa-boxes-packing"></i>	
										<span class="title">Suppliers</span>
										</a>
									</li>

								</ul>
							</li>
						<?php } ?>

						<?php if (in_array('Query', $modules)) { ?>
							<li class="nav-item <?php echo $this->uri->segment(1) == "query" ? "start active" : "" ?>">
								<a href="<?php echo site_url(); ?>query/view_query/Overall" class="nav-link nav-toggle">
								<i class="fa-solid fa-clipboard-question"></i>
									<span class="title">Queries</span>
								</a>
							</li> <?php } ?>

						<?php if (in_array('HotelVoucher', $modules)) { ?>
							<li class="nav-item <?php echo $this->uri->segment(1) == "HotelVoucher" ? "start active" : "" ?>">

								<a href="<?php echo site_url(); ?>HotelVoucher/view_hotels_voucher" class="nav-link nav-toggle">
								<i class="fa-solid fa-receipt"></i>
									<span class="title">Hotel voucher</span>
								</a>
							</li>
						<?php } ?>

						<?php if (in_array('Invoice', $modules)) { ?>
							<li class="nav-item <?php echo $this->uri->segment(1) == "invoice" ? "start active" : "" ?>">

								<a href="<?php echo site_url(); ?>invoice/view_invoice" class="nav-link nav-toggle">
								<i class="fa-solid fa-file-invoice"></i>
									<span class="title">Invoice</span>
								</a>
							</li>

						<?php } ?>
						<?php if (in_array('Itinerary', $modules)) { ?>
							<li class="nav-item <?php echo $this->uri->segment(1) == "itinerary" ? "start active" : "" ?>">

								<a href="<?php echo site_url(); ?>itinerary/view" class="nav-link nav-toggle">
								<i class="fa-solid fa-route"></i>
									<span class="title">Itinerary</span>
								</a>
							</li>
						<?php } ?>

						<?php if (in_array('Todo', $modules)) { ?>
							<li class="nav-item <?php echo $this->uri->segment(1) == "todo" ? "start active" : "" ?>">

								<a href="<?php echo site_url(); ?>todo/view" class="nav-link nav-toggle">
								<i class="fa-regular fa-calendar-check"></i>
									<span class="title">Todo</span>
								</a>
							</li>
						<?php } ?>

						<?php if (in_array('ReportName', $modules)) { ?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "reports") {
													echo 'start active';
												} ?>">

								<a href="#" class="nav-link nav-toggle">
								<i class="fa-solid fa-square-poll-horizontal"></i>
									<span class="title">Report Name</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>reports/query_report" class="nav-link <?php echo $this->uri->segment(2) == "query_report" ? "text-white" : "" ?>">
											<span class="title">Querie Report</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>reports/hotel_report" class="nav-link <?php echo $this->uri->segment(2) == "hotel_report" ? "text-white" : "" ?>">
											<span class="title">Hotel Report</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>reports/package_report" class="nav-link <?php echo $this->uri->segment(2) == "package_report" ? "text-white" : "" ?>">
											<span class="title">Package Report</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>reports/visa_report" class="nav-link <?php echo $this->uri->segment(2) == "visa_report" ? "text-white" : "" ?>">
											<span class="title">Visa Report</span>
										</a>
									</li>
								</ul>
							</li>
						<?php } ?>
						<?php if (in_array('Setting', $modules)) { ?>
							<li class="nav-item <?php if ($this->uri->segment(1) == "roles") {
													echo 'start active';
												} ?>">
								<a href="#" class="nav-link nav-toggle">
								<i class="fa-solid fa-gear"></i>
									<span class="title">Setting</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo site_url(); ?>roles/view_users" class="nav-link <?php echo $this->uri->segment(2) == "view_users" ? "text-white" : "" ?>">
											<span class="title">Users</span>
										</a>
									</li>
								</ul>
							</li>
						<?php } ?>

						<li class="nav-item">
							<a href="<?php echo site_url(); ?>login/logout" class="nav-link nav-toggle">
							<i class="fa-solid fa-arrow-right-from-bracket"></i>
								<span class="title">Logout</span>
							</a>
						</li>


					<?php } ?>
				<?php } else { ?>
					<?php
					if ($a == "Stocks Admin" && $for_stocks == FALSE) {
						redirect('login/logout', 'refresh');
					}
					?>
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
				<?php } ?>
			</ul>
		</div>
	</div>
</div>


<!-- end sidebar menu -->