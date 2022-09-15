<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/css/chartist.min.css">
<!-- <script src="<?php echo base_url(); ?>public/assets/plugins/chartist/chartist.min.css"></script> -->
<style>
	.chartist-tooltip {
		opacity: 0;
		position: absolute;
		margin: 20px 0 0 10px;
		background: rgba(0, 0, 0, 0.8);
		color: #FFF;
		padding: 5px 10px;
		border-radius: 4px;


	}

	.chartist-tooltip.tooltip-show {
		opacity: 1;
		/* z-index: 100 */
		position: absolute;
		top: 0;
		left: 0;
		width: fit-content;
		height: fit-content;
		z-index: 1;


	}
</style>
<!-- start page container -->
<div class="page-container">
	<!-- start sidebar menu -->
	<?php $this->load->view('side_bar'); ?>
	<!-- end sidebar menu -->
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Dashboard</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Dasboard</li>

					</ol>
				</div>
			</div>


			<div class="row">

				<div class="col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Total Sales in <?php echo date('Y'); ?> </header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>

						</div>
						<div class="card-body no-padding height-9">
							<b style="float:right;">AED <?php echo $all_total; ?> </b>
							<!-- <div class="mt-2" dir="ltr">
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section"><div class="chartist-tooltip" style="top: 173.219px; left: 122.5px;"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="265" class="ct-grid ct-horizontal"></line><line x1="159.375" x2="159.375" y1="15" y2="265" class="ct-grid ct-horizontal"></line><line x1="268.75" x2="268.75" y1="15" y2="265" class="ct-grid ct-horizontal"></line><line x1="378.125" x2="378.125" y1="15" y2="265" class="ct-grid ct-horizontal"></line><line y1="265" y2="265" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="240" y2="240" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="215" y2="215" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="190" y2="190" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="165" y2="165" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="115" y2="115" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="90" y2="90" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="65" y2="65" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="40" y2="40" x1="50" x2="487.5" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="487.5" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="104.6875" x2="104.6875" y1="265" y2="185" class="ct-bar" ct:value="800000" style="stroke-width: 30px"></line><line x1="214.0625" x2="214.0625" y1="265" y2="145" class="ct-bar" ct:value="1200000" style="stroke-width: 30px"></line><line x1="323.4375" x2="323.4375" y1="265" y2="125" class="ct-bar" ct:value="1400000" style="stroke-width: 30px"></line><line x1="432.8125" x2="432.8125" y1="265" y2="135" class="ct-bar" ct:value="1300000" style="stroke-width: 30px"></line></g><g class="ct-series ct-series-b"><line x1="104.6875" x2="104.6875" y1="185" y2="165" class="ct-bar" ct:value="200000" style="stroke-width: 30px"></line><line x1="214.0625" x2="214.0625" y1="145" y2="105" class="ct-bar" ct:value="400000" style="stroke-width: 30px"></line><line x1="323.4375" x2="323.4375" y1="125" y2="75" class="ct-bar" ct:value="500000" style="stroke-width: 30px"></line><line x1="432.8125" x2="432.8125" y1="135" y2="105" class="ct-bar" ct:value="300000" style="stroke-width: 30px"></line></g><g class="ct-series ct-series-c"><line x1="104.6875" x2="104.6875" y1="165" y2="149" class="ct-bar" ct:value="160000" style="stroke-width: 30px"></line><line x1="214.0625" x2="214.0625" y1="105" y2="76" class="ct-bar" ct:value="290000" style="stroke-width: 30px"></line><line x1="323.4375" x2="323.4375" y1="75" y2="34" class="ct-bar" ct:value="410000" style="stroke-width: 30px"></line><line x1="432.8125" x2="432.8125" y1="105" y2="45" class="ct-bar" ct:value="600000" style="stroke-width: 30px"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="109.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 109px; height: 20px;">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="159.375" y="270" width="109.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 109px; height: 20px;">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="268.75" y="270" width="109.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 109px; height: 20px;">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="378.125" y="270" width="109.375" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 109px; height: 20px;">Apr</span></foreignObject><foreignObject style="overflow: visible;" y="240" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="215" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">250k</span></foreignObject><foreignObject style="overflow: visible;" y="190" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">500k</span></foreignObject><foreignObject style="overflow: visible;" y="165" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">750k</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">1000k</span></foreignObject><foreignObject style="overflow: visible;" y="115" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">1250k</span></foreignObject><foreignObject style="overflow: visible;" y="90" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">1500k</span></foreignObject><foreignObject style="overflow: visible;" y="65" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">1750k</span></foreignObject><foreignObject style="overflow: visible;" y="40" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">2000k</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">2250k</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">2500k</span></foreignObject></g></svg></div>
                                    </div> -->

							<div class="mt-2" dir="ltr">
								<div id="total-sales-bars" class="ct-chart ct-golden-section">

								</div>
							</div>
						</div>
						<!-- <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <canvas id="bar-chart1"></canvas>
                                        </div>
                                    </div> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-12">

					<div class="card card-box">



						<div class="card-head">
							<header>Queries</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>

						<div class="card-body no-padding height-9">
							<div class="mt-2" dir="ltr">
								<div id="pie_chart" class="ct-golden-section">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Staff Wise Revenue</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>

						<div class="card-body no-padding height-9">
							<div class="mt-2" dir="ltr">
								<div id="staff-sales-bars" class="ct-chart2 ct-golden-section">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Upcoming Arrival</header>

						</div>
						<div class="card-body ">
								<table id="dashboard_table2" class="table table-hover table-checkable order-column">
									<thead>
										<tr>
											<th class="center"> SL.NO</th>
											<th class="center"> Query id </th>
											<th class="center"> TA Name </th>
											<th class="center"> Guest Name </th>
											<th class="center"> DOA </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($upcoming_arrivals as $key => $val) : ?>

											<tr class="odd gradeX">
												<td class="center"><?php echo $key + 1; ?> </td>
												<td class="center"><?php echo $val['query_id']; ?></td>
												<td class="center"><?php echo $val['name']; ?></td>
												<td class="center"><?php echo $val['name']; ?></td>
												<td class="center"><?php echo $val['traveldate']; ?> </td>
											</tr>
										<?php endforeach ?>

									</tbody>
								</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-12">

					<div class="card card-box">
						<div class="card-head">
							<header>To-Do List</header>
						</div>
						<div class="card-body no-padding height-9">

							<table id="dashboard_table1" class="table-responsive table-hover table-checkable order-column">
								<thead>
									<tr>
										<th class="center"> SL.NO</th>
										<th class="center"> Query Id </th>
										<th class="center"> Customer Name </th>
										<th class="center"> Followup Date</th>
										<th class="center"> Assigned To </th>
										<!-- <th class="center"> Status </th> -->
									</tr>
								</thead>
								<tbody>
									<?php foreach ($todo as $key => $todos) { ?>
										<tr class="odd gradeX">
											<td class="center"><?php echo $key + 1; ?> </td>
											<td class="center"><?php echo $todos['query_id'] != null ? $todos['query_id'] : "N/A"; ?></td>
											<td class="center"><?php echo $todos['customer']; ?></td>
											<td class="center"><?php echo $todos['follow_up']; ?> </td>
											<td class="center"><?php echo $todos['assigned_to']; ?></td>
										</tr>
									<?php
									} ?>

								</tbody>
							</table>


						</div>
					</div>
				</div>


				<div class="col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Iternary</header>
						</div>
						<div class="card-body no-padding height-9">
								<table id="dashboard_table3" class="table table-hover table-checkable order-column">
									<thead>
										<tr>
											<th class="center"> SL.NO</th>
											<th class="center"> Query id </th>
											<th class="center"> Guest Name </th>
											<th class="center"> Date </th>
											<th class="center"> Check In </th>
											<th class="center"> Check Out </th>
										</tr>
									</thead>
									<tbody>
										<?php for ($i = 0; $i < count($iternary); $i++) { ?>

											<tr class="odd gradeX">
												<td class="center"><?php echo $i + 1; ?> </td>
												<td class="center"><?php echo $iternary[$i]['query_id']; ?></td>
												<td class="center"><?php echo $iternary[$i]['name']; ?></td>
												<td class="center"><?php echo $iternary[$i]['created_at']; ?> </td>
												<td class="center"><?php echo $iternary[$i]['traveldate']; ?></td>
												<td class="center"><?php echo $iternary[$i]['checkout']; ?></td>

											</tr>
										<?php
										} ?>

									</tbody>
								</table>
						</div>
					</div>
				</div>
			</div>
			<?php if ($this->session->flashdata('error')) { ?><center>
					<div class="alert alert-danger" style="font-size: 12px;">
						<?php echo $this->session->flashdata('error') ?>
					</div>
				</center>

			<?php } ?>
			<?php if ($this->session->flashdata('success')) { ?><center>
					<div class="alert alert-success" style="font-size: 12px;">
						<?php echo $this->session->flashdata('success');
						$this->session->unset_userdata('success');
						?>
					</div>
				</center>
			<?php } ?>

		</div>
	</div>
	<!-- end page content -->
	<!-- start chat sidebar -->
	<div class="chat-sidebar-container" data-close-on-body-click="false">
		<div class="chat-sidebar">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
					</a>
				</li>
				<li class="nav-item">
					<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
					</a>
				</li>
				<li class="nav-item">
					<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
					<div class="slimscroll-style">
						<div class="theme-light-dark">
							<h6>Sidebar Theme</h6>
							<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
								Sidebar</button>
							<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
								Sidebar</button>
						</div>
						<div class="theme-light-dark">
							<h6>Sidebar Color</h6>
							<ul class="list-unstyled">
								<li class="complete">
									<div class="theme-color sidebar-theme">
										<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
									</div>
								</li>
							</ul>
							<h6>Header Brand color</h6>
							<ul class="list-unstyled">
								<li class="theme-option">
									<div class="theme-color logo-theme">
										<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
									</div>
								</li>
							</ul>
							<h6>Header color</h6>
							<ul class="list-unstyled">
								<li class="theme-option">
									<div class="theme-color header-theme">
										<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
										<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Start Doctor Chat -->
				<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
					<div class="chat-sidebar-list">
						<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
							<div class="chat-header">
								<h5 class="list-heading">Online</h5>
							</div>
							<ul class="media-list list-items">
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user3.jpg" width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">John Deo</h5>
										<div class="media-heading-sub">Spine Surgeon</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">5</span>
									</div> <img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user1.jpg" width="35" height="35" alt="...">
									<i class="busy dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Rajesh</h5>
										<div class="media-heading-sub">Director</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user5.jpg" width="35" height="35" alt="...">
									<i class="away dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jacob Ryan</h5>
										<div class="media-heading-sub">Ortho Surgeon</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">8</span>
									</div> <img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user4.jpg" width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Kehn Anderson</h5>
										<div class="media-heading-sub">CEO</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user2.jpg" width="35" height="35" alt="...">
									<i class="busy dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Sarah Smith</h5>
										<div class="media-heading-sub">Anaesthetics</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user7.jpg" width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Vlad Cardella</h5>
										<div class="media-heading-sub">Cardiologist</div>
									</div>
								</li>
							</ul>
							<div class="chat-header">
								<h5 class="list-heading">Offline</h5>
							</div>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">4</span>
									</div> <img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user6.jpg" width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jennifer Maklen</h5>
										<div class="media-heading-sub">Nurse</div>
										<div class="media-heading-small">Last seen 01:20 AM</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user8.jpg" width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Lina Smith</h5>
										<div class="media-heading-sub">Ortho Surgeon</div>
										<div class="media-heading-small">Last seen 11:14 PM</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">9</span>
									</div> <img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user9.jpg" width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jeff Adam</h5>
										<div class="media-heading-sub">Compounder</div>
										<div class="media-heading-small">Last seen 3:31 PM</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="<?php echo site_url();?>public/assets/img/user/user10.jpg" width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Anjelina Cardella</h5>
										<div class="media-heading-sub">Physiotherapist</div>
										<div class="media-heading-small">Last seen 7:45 PM</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Doctor Chat -->
				<!-- Start Setting Panel -->
				<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
					<div class="chat-sidebar-settings-list slimscroll-style">
						<div class="chat-header">
							<h5 class="list-heading">Layout Settings</h5>
						</div>
						<div class="chatpane inner-content ">
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Sidebar Position</div>
									<div class="setting-set">
										<select class="sidebar-pos-option form-control input-inline input-sm input-small ">
											<option value="left" selected="selected">Left</option>
											<option value="right">Right</option>
										</select>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Header</div>
									<div class="setting-set">
										<select class="page-header-option form-control input-inline input-sm input-small ">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="default">Default</option>
										</select>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Sidebar Menu </div>
									<div class="setting-set">
										<select class="sidebar-menu-option form-control input-inline input-sm input-small ">
											<option value="accordion" selected="selected">Accordion</option>
											<option value="hover">Hover</option>
										</select>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Footer</div>
									<div class="setting-set">
										<select class="page-footer-option form-control input-inline input-sm input-small ">
											<option value="fixed">Fixed</option>
											<option value="default" selected="selected">Default</option>
										</select>
									</div>
								</div>
							</div>
							<div class="chat-header">
								<h5 class="list-heading">Account Settings</h5>
							</div>
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Notifications</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
												<input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Show Online</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
												<input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Status</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
												<input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">2 Steps Verification</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
												<input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="chat-header">
								<h5 class="list-heading">General Settings</h5>
							</div>
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Location</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
												<input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Save Histry</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
												<input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Auto Updates</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
												<input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
											</label>
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
	<!-- end chat sidebar -->
</div>
<!-- end page container -->
<?php $this->load->view('footer'); ?>

<script src="<?php echo base_url(); ?>public/assets/plugins/chartist/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>public/chartist/chartist-plugin-pointlabels.js"></script>
<script src="<?php echo base_url(); ?>public/chartist/chartist-plugin-tooltip.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist-plugin-legend/0.6.2/chartist-plugin-legend.js" integrity="sha512-CBRJixgx8naN06wpNL+R/devoQkEHZy+DET78kCXZx4zzTKotHfdP2r469yQ4Kme2qnxF51Jl+X5khe+OC6S/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist-plugin-legend/0.6.2/chartist-plugin-legend.min.js" integrity="sha512-J82gmCXFu+eMIvhK2cCa5dIiKYfjFY4AySzCCjG4EcnglcPQTST/nEtaf5X6egYs9vbbXpttR7W+wY3Uiy37UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function() {
		new Chart(document.getElementById("bar-chart1"), {
			type: 'bar',
			data: {
				labels: ["Today", "Week", "Month"],
				datasets: [{
					label: "Total",
					backgroundColor: "#01B8AA",
					data: [
						<?php echo $today_total ?>,
						<?php echo $week_total ?>,
						<?php echo $month_total ?>
					]
				}, {
					label: "Remaining",
					backgroundColor: "#5F6B6D",
					data: [
						<?php echo $today_remaining ?>,
						<?php echo $week_remaining ?>,
						<?php echo $month_remaining ?>
					]
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Ticket Statistics'
				}
			}
		});
	});
	$(document).ready(function() {
		var ctx = document.getElementById('myChart1').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
				datasets: [{
					label: 'Cost',
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					backgroundColor: "rgba(255,61,103,0.3)"
				}, {
					label: 'Earning',
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					backgroundColor: "rgba(34,206,206,0.3)"
				}]
			}
		});
	});
</script>

<script>
	var data = {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],

		series: [

			[<?php echo isset($total['Jan']) ? $total['Jan'] : "0" . "," . (isset($total['Feb']) ? $total['Feb'] : "0") . "," . (isset($total['Mar']) ? $total['Mar'] : "0") . "," . (isset($total['Apr']) ? $total['Apr'] : "0") . "," . (isset($total['May']) ? $total['May'] : "0") . "," . (isset($total['Jun']) ? $total['Jun'] : "0") . "," . (isset($total['Jul']) ? $total['Jul'] : "0") . "," . (isset($total['Aug']) ? $total['Aug'] : "0") . "," . (isset($total['Sep']) ? $total['Sep'] : "0") . "," . (isset($total['Oct']) ? $total['Oct'] : "0") . "," . (isset($total['Nov']) ? $total['Nov'] : "0") . "," . (isset($total['Dec']) ? $total['Dec'] : "0"); ?>]

		]
	}

	var options = {
		seriesBarDistance: 10,

		plugins: [

			Chartist.plugins.tooltip({

			})
		]

	};

	var responsiveOptions = [
		['screen and (max-width: 50px)', {
			seriesBarDistance: 1000,
			axisX: {
				labelInterpolationFnc: function(value) {
					return value[0];
				}
			}
		}]
	];
	new Chartist.Bar('.ct-chart', data, options, responsiveOptions);
</script>



<script>
	var labels = <?php echo json_encode(array_values($staffs_name)); ?>;
	var visa = <?php echo json_encode(array_column(array_values($staffs_data), 'visa')); ?>;
	var hotel = <?php echo json_encode(array_column(array_values($staffs_data), 'hotel')); ?>;
	var meal = <?php echo json_encode(array_column(array_values($staffs_data), 'meal')); ?>;
	var transfer = <?php echo json_encode(array_column(array_values($staffs_data), 'transfer')); ?>;
	var excursion = <?php echo json_encode(array_column(array_values($staffs_data), 'excursion')); ?>;
	var package = <?php echo json_encode(array_column(array_values($staffs_data), 'package')); ?>;

	new Chartist.Bar('.ct-chart2', {
			labels: labels,
			series: [{
					value: package,
					name: package,
					meta: 'package'
				},
				{
					value: hotel,
					name: hotel,
					meta: 'hotel'
				},
				{
					value: transfer,
					name: transfer,
					meta: 'transfer'
				},
				{
					value: excursion,
					name: excursion,
					meta: 'excursion'
				},
				{
					value: meal,
					name: meal,
					meta: 'meal'
				},
				{
					value: visa,
					name: visa,
					meta: 'visa'
				},
				// package,
				// hotel,
				// transfer,
				// excursion,
				// meal,
				// visa

			]
		}, {

			stackBars: true,

			axisX: {
				labelInterpolationFnc: function(value) {
					return value.split(/\s+/).map(function(word) {
						return word[0];
					}).join('');
				}
			},
			axisY: {
				offset: 20
			},
			plugins: [

				Chartist.plugins.tooltip({

				}),
				// Chartist.plugins.legend({
				// legendNames: ["visa","hotel","meal","transfer","excursion","package"],
				// position: 'bottom'
				// })
			],

		},
		[
			// Options override for media > 400px
			['screen and (min-width: 400px)', {
				reverseData: true,
				horizontalBars: true,

				axisX: {
					labelInterpolationFnc: Chartist.noop
				},
				axisY: {
					offset: 60
				}
			}],
			// Options override for media > 800px
			['screen and (min-width: 800px)', {
				stackBars: false,
				seriesBarDistance: 10
			}],
			// Options override for media > 1000px
			['screen and (min-width: 1000px)', {
				reverseData: false,
				horizontalBars: false,
				seriesBarDistance: 15
			}]
		]);
</script>

<style>
	
</style>

<script>
	var data = {
		labels: ['Total', 'Confirmed', 'Pending', 'Rejected or Failed'],
		series: <?php echo $query_count ;?>
	};

	var options = {
		labelInterpolationFnc: function(value) {
			return value[0]
		}
	};

	var responsiveOptions = [
		['screen and (min-width: 640px)', {
			chartPadding: 30,
			labelOffset: 120,
			labelDirection: 'explode',
			labelInterpolationFnc: function(value) {
				return value;
			}
		}],
		['screen and (min-width: 1024px)', {
			chartPadding: 40,
			labelOffset: 120,
		}]
	];

	new Chartist.Pie('#pie_chart', data, options, responsiveOptions);
</script>

<style>
	div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 9rem !important;
}
</style>