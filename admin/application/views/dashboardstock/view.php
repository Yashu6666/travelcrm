<!-- Material Design Lite CSS -->
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
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="stockDashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
                        
					</div>

					<!-- start widget -->
					<div class="state-overview">

                        <div class="row">
                            
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>Stocks Report</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <canvas id="bar-chart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>Stocks Report</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <canvas id="myChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        
							<div class="state-overview col-6">
								<div class="" >
										<div class="">
									<!-- <div class="col-xl-4 col-md-6 col-12"> -->
										<div class="info-box bg-blue">
											<span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
											<div class="info-box-content">
												<span class="info-box-text">Total Tickets</span>
												<span class="info-box-number"><?php echo $total_ticket ?></span>
												<div class="progress">
													<div class="progress-bar width-100"></div>
												</div>
												<!-- <span class="progress-description">
													60% Increase in 28 Days
												</span> -->
											</div>
											<!-- /.info-box-content -->
										</div>
										<!-- /.info-box -->
									</div>
									<!-- /.col -->
									<!-- <div class="col-xl-4 col-md-6 col-12"> -->
									<div class="">
										<div class="info-box bg-orange">
											<span class="info-box-icon push-bottom"><i
													class="material-icons">card_travel</i></span>
											<div class="info-box-content">
												<span class="info-box-text">Remaining Tickets</span>
												<span class="info-box-number"><?php echo $remaning_ticket ?></span>
												<div class="progress">
													<div class="progress-bar width-100"></div>
												</div>
												<!-- <span class="progress-description">
													40% Increase in 28 Days
												</span> -->
											</div>
											<!-- /.info-box-content -->
										</div>
										<!-- /.info-box -->
									</div>
									<!-- /.col -->
								
							
									<!-- /.col -->
								</div>
							</div>
						</div>
                        
					</div>
					<!-- end widget -->
                    

					<div class="state-overview">

                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>Remaining Tickets</header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
										<canvas id="remain_ticket"></canvas>
                                            <!-- <canvas id="bar-chart2"></canvas> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>	
					
					
					<!-- chart start -->
					<!-- Chart end -->
					
					<!-- start Payment Details -->
					
					<!-- end Payment Details -->
					
				</div>
			</div>
</div> <!-- start widget -->


<!-- end page container -->
<!-- start footer -->
<?php $this->load->view('footer');?>

<script>
    $(document).ready(function() 
		{
	new Chart(document.getElementById("bar-chart1"), {
		type: 'bar',
		data: {
			labels: ["Today", "Week", "Month"],
			datasets: [
			           {
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
			           }
			           ]
		},
		options: {
			title: {
				display: true,
				text: 'Ticket Statistics'
			},
			scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          callback: function(value) {if (value % 1 === 0) {return value;}}
        }
      }]
    }
		}
	});
});

        $(document).ready(function() 
		{
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
		new Chart(document.getElementById("remain_ticket"), {
			type: 'bar',
			data: {
			labels: [<?php echo $formatted_ticket_key ;?>],
			datasets: [
				{
				label: "Tickets Remaining",
				backgroundColor: "lightpink",
				data : [<?php echo $formatted_ticket_values ;?>],
				}
			]
			},
			options: {
			legend: { display: false },
			title: {
				display: true,
			},

			scales: {
				xAxes: [{
					barPercentage: 0.4
				}],
				yAxes: [{

					stacked: true,
					ticks: {
						min: 0,
						stepSize: 25,
					}

				}]
			}

			}
		
		});
</script>
        <!-- end page content -->