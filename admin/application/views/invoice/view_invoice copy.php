<?php $this->load->view('header');?>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
	<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
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
								<div class="page-title">Invoice</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Invoice</li>

							</ol>
						</div>
					</div>
					<?php  if($this->session->flashdata('error'))
			{?><center>
				<div class="alert alert-danger" style="font-size: 12px;">
					<?php echo $this->session->flashdata('error')?>
				</div>
			</center>

			<?php } ?>
			<?php  if($this->session->flashdata('success'))
			{?><center>
				<div class="alert alert-success" style="font-size: 12px;">
					<?php echo $this->session->flashdata('success');
					$this->session->unset_userdata ( 'success' );
					?>
				</div>
			</center>
			<?php } ?>

					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									
								</div>

								<div class="card-body ">
									<div class="d-flex justify-content-between">

										<div class="ml-4">
											<div class="row ">
												<div class="col-md-12  ">
													<!-- <input type="date" class="invoice-input">
													<input type="date" class="invoice-input">
													<div class="btn-group">
														<button type="button" class="btn btn-primary">Clear</button>
													</div> -->
												</div>

											</div>
										</div>

										<!-- <div class="tools">
											<div class="dropdown">
												<a href="<?php echo site_url();?>invoice/add_invoice" type="button"
													class="btn btn-primary invoice-add">ADD</a>
												<label for="" class="ml-4"><b>Export</b></label>
												<select class="pdf">
													<option value="">PDF</option>
													<option value="">Word</option>
												</select>
											</div>
										</div> -->
									</div>
									<div class="table-scrollable">
										<table
											class="table table-hover table-checkable order-column full-width text-center"
											id="example4">
											<!-- <table class="table table-hover table-checkable order-column full-width"
											id="example4"> -->
											<thead>
												<tr>

													<th class="center">Sl No.</th>
													<th class="center"> Invoice Date </th>
													<th class="center"> Invoice No </th>
													<th class="center"> Cusotmer/Agency Name </th>
													<th class="center"> Invoice value </th>
													<th class="center">VAT</th>
													<th class="center"> Received </th>
													<th class="center"> Balance </th>
													<th class="center"> Due date </th>
													<th class="center"> Owner </th>
													<th class="center"> Status </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php for($i=0;$i<count($listInvoice);$i++){ ?>
												<tr class="odd gradeX text-center">
													<td><?php echo $i+1;?></td>
													<td><?php echo $listInvoice[$i]->invoiceDate;?></td>
													<td><?php echo $listInvoice[$i]->invoiceNumber;?></td>
													<td><?php echo $listInvoice[$i]->billTo;?></td>
													<td><?php echo $listInvoice[$i]->finalTotalInvoice;?></td>
													<td><?php echo $listInvoice[$i]->finalVAT;?></td>
													<td><?php echo $listInvoice[$i]->invoicePayment;?></td>
													<td><?php echo $listInvoice[$i]->finalBalance;?></td>
													<td><?php echo $listInvoice[$i]->invoicePayment;?></td>
													<td><?php echo $this->session->userdata('admin_username');?></td>
													<?php if($listInvoice[$i]->finalBalance == 0)
													{?>
														<td>Completed</td>
													<?php } elseif ($listInvoice[$i]->finalBalance > 0) { ?>
														<td>Pending</td>
													<?php	} ?>
													

													<td class="center">

														<div class="dropdown-center ">
															<button class="btn btn-primary " type="button" id=""
																data-bs-toggle="dropdown" aria-expanded="false">
																Select
															</button>
															<ul class="dropdown-menu"
																aria-labelledby="dropdownMenuButton1" style="inset: -18px auto auto 900px; !important ">
																<li>
																	<a onclick="checkamount(<?php echo $listInvoice[$i]->id;?>)" class="dropdown-item" data-id="<?php echo $listInvoice[$i]->id;?>"
																		data-bs-toggle="modal"
																		data-bs-target="#exampleModal">
																		Add a Payment
													</a>
																</li>
																<li>
																	<a class="dropdown-item"
																		href="<?php echo site_url();?>invoice/modify_invoice/<?php echo $listInvoice[$i]->id;?>">Modify Invoice</a>
																</li>
																<li>
                                                                    <a class="dropdown-item" onclick="sendmail(<?php echo $listInvoice[$i]->id;?>)" 			id="show-modal-btn9" data-id="<?php echo $listInvoice[$i]->id;?>">
																		Send Email
													</a>
																</li>
																<!-- <li>
																	<a class="dropdown-item" href="#">Share on
																		Whatsapp</a>
																</li> -->

																<a  class="dropdown-item"
																	data-bs-toggle="modal"
																	data-bs-target="#staticBackdrop">
																	Send Reminder Email
													</a>


																<li>
																	<a class="dropdown-item" href="<?php echo site_url();?>invoice/printInvoice/<?php echo $listInvoice[$i]->id;?>">View/Print
																		Invoice</a>
																</li>
															</ul>
														</div>
													</td>
												</tr>
												<?php } ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 1-->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog ">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add a Payment INR <span id="balanceAmt"></span> Outstanding</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<form action="<?php echo site_url();?>invoice/makePayment" method="post">
							<input type="hidden" name="payId" id="payId">
						<div class="modal-body">


							<div class="row">
								<div class="col">
									<label class="input">
										<input class="input__field" type="number" placeholder=" " autocomplete="off" / name="payAmount">
										<span class="input__label">Amount</span>

									</label>
								</div>
								<div class="col">
									<label for="">Payment Type</label>
									<select name="payType" class="payment-type">
										<option value="Net Banking">Net Banking</option>
										<option value="Credit Card">Credit Card</option>
										<option value="Debit Card">Debit Card</option>
										<option value="Bank Transfer">Bank Transfer</option>
										<option value="Cash">Cash</option>
										<option value="Cheque">Cheque</option>
									</select>
								</div>


							</div>




							<div class="row mt-3">
								<div class="col">
									<label class="input">
										<input class="input__field " type="date" placeholder=" " autocomplete="off" / name="payDate">
										<span class="input__label">Payment Date</span></span>
									</label>
								</div>


								<div class="col">
									<label class="input">
										<input class="input__field" type="text" placeholder=" " id="vDateOf"
											autocomplete="off" / name="payNotes">
										<span class="input__label">Payment Notes(optional)</span>
									</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Make Payment</button>
						</div>
					</div>
					</form>
				</div>
			</div>

			<!-- Modal 2-->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
				aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Send Reminder Email</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="ml-3">
								<label class="input">
									<input class="input__field Subject-width" type="text" placeholder=" " id="remaindEmailID"
										autocomplete="off" />
									<span class="input__label">Email</span></span>
								</label>
							</div> 

							<div class="ml-3">
								<label class="input">
									<input class="input__field Subject-width" type="text" placeholder=" " id=""
										autocomplete="off" />
									<span class="input__label">Subject</span></span>
								</label>
							</div>

							<div class="col-md-12">
								<textarea name="editor3"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Send</button>
						</div>
					</div>
				</div>
			</div>


			<!-- modal 3 -->


			<div id="overlay9">
				<div id="modal9">

					<div class="modal_head_bg9 modal-head9">
						<h3 class="  pl-4 pt-3">Send Invoice Email</h3>
					</div>

					<button class="close_btn9 close_modal_btn9">X</button>

					<div class="modal-body">

						<div class="row m-5 ">
							<div>
								<label class="input">
									<input class="input__field invoice-email" type="text" placeholder=" " id="invoiceEmailId"
										autocomplete="off" />
									<span class="input__label">Email</span>
								</label>
							</div>
						</div>
						<div class="d-flex justify-content-end  ">
							<button  onclick="closemail()" type="button" class="btn btn-secondary">Close</button>
							<button type="button" class="btn btn-primary ">Send</button>
						</div>
					</div>
				</div>

				<!-- end page content -->
			</div>

			<!-- end page container -->
			<!-- start footer -->
			<div class="page-footer">
				<div class="page-footer-inner">
					<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss"></a>
				</div>
				<div class="scroll-to-top">
					<i class="icon-arrow-up"></i>
				</div>
			</div>
			<!-- end footer -->
		</div>

	<script src="<?php echo base_url();?>public/assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>public/assets/plugins/popper/popper.min.js"></script>
		<script src="<?php echo base_url();?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
		<script src="<?php echo base_url();?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- bootstrap -->
		<script src="<?php echo base_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Common js-->
		<script src="<?php echo base_url();?>public/assets/js/app.js"></script>
		<script src="<?php echo base_url();?>public/assets/js/layout.js"></script>
		
		<script src="<?php echo base_url();?>public/assets/js/pages/table/table_data.js"></script>
		<!-- Material -->
		<script src="<?php echo base_url();?>public/assets/plugins/material/material.min.js"></script>
		

<script type="text/javascript" src="<?php echo base_url();?>public/js/html2pdf.bundle.js"></script>
		<script>
			
	// 		$(document).ready(function () {
    // $('body').on('click', '#openpayment',function(){
	// 	alert($(this).attr('data-id'));
    //     document.getElementById("payId").value = $(this).attr('data-id');
    //      console.log($(this).attr('data-id'));
    //     });
    // });

			CKEDITOR.replace('editor3');

			const overlay9 = document.getElementById("overlay9");

			document.querySelector("#show-modal-btn9").addEventListener("click", () => {

				overlay9.style.display = "block";
			});

			document.querySelector(".close_modal_btn9").addEventListener("click", () => {

				overlay9.style.display = "none";


			});

}
		</script>

		<script type="text/javascript">
			function sendmail(id){
				const overlay9 = document.getElementById("overlay9");
				
				overlay9.style.display = "block";
			}
			function closemail(){
				const overlay9 = document.getElementById("overlay9");
				
				overlay9.style.display = "none";
			}
			function checkamount(id){
				$("#balanceAmt").empty();
				$("#payId").val(id);

				$.ajax({

					type:"POST",
					url:'<?php echo site_url();?>/invoice/getBalanceAmount',
					data:{'payId':id},
					dataType:"JSON",
					success:function(response)
					{
						$("#balanceAmt").append(response.finalBalance);
					}

				});
			}
		
		</script>

		<script type="text/javascript">
			$(".invoiceEmail").click(function(){

				var id = $(this).attr('data-id');

				$.ajax({

					type:"POST",
					url:'<?php echo site_url();?>/invoice/getClientEmail',
					data:{'id':id},
					dataType:"JSON",
					success:function(response)
					{
						$("#invoiceEmailId").val(response.invoiceClientAddress);
						$("#remaindEmailID").val(response.invoiceClientAddress);
					}

				});
				

			});
		</script>