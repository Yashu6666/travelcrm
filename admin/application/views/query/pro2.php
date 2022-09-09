<html>
	<style>
		 button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
		</style>
	<body>
	<button onClick='printscreen()'>Print Quote</button>
	<div  id="print">
<table width="100%" border="0" cellpadding="5" cellspacing="0">

	<tr>
	<td colspan="2" align="center" style="font-size:15px;">
	<b>AXON TECHNOLOGIES</b><br />
	1st FLOOR, NO 15/4,<br />
	 Devanahalli Talluku, Kempaligapura,<br />
	  Bengaluru , Karnataka, 562110,<br />
	   PAN - <b>APLPT2673L</b><br />
		GST Registration Number :<b>29APLPT2673L1Z0</b> <br />
		LUT NO AD290421004306I<br /><br />	
		<img align="center" src='logo.png'> 
		<br />
	<b>Quote</b></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="65%">
	To,<br />
	<b>RECEIVER (BILL TO)</b><br />
	Name : <?php echo $quoteValues['order_receiver_name'] ?> <br /> 
	Billing Address : <?php echo $quoteValues['order_receiver_address'] ?><br />
	</td>
	<td width="35%">         
	Quote No. : <?php echo $quoteValues['order_id'] ?><br />
	Quote Date : <?php echo $quoteDate ?><br />
	</td>
	</tr>
	</table>
	<table>
	<tr>
	<td><b> Subject: </b><?php echo $quoteValues['subject'] ?><br />
	<b> Proposal: </b> <?php echo $quoteValues['proposal'] ?><br />
	</tr>
	

	</table>
	<br />
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<th align="left">Sr No.</th>
	<th align="left">Item Code</th>
	<th align="left">Item Name</th>
	<th align="left">Quantity</th>
	<th align="left">Price</th>
	<th align="left">Actual Amt.</th> 
	</tr>
	<?php 
$count = 0;   
foreach($quoteItems as $quoteItem){
	$count++; ?>
	<tr>
	<td align="left"><?php echo $count ?> </td>
	<td align="left"><?php echo $quoteItem["item_code"] ?></td>
	<td align="left"><?php echo $quoteItem["item_name"] ?></td>
	<td align="left"><?php echo $quoteItem["order_item_quantity"] ?></td>
	<td align="left"><?php echo $quoteItem["order_item_price"] ?></td>
	<td align="left"><?php echo $quoteItem["order_item_final_amount"] ?></td>   
	</tr>
	<?php } ?>

	<tr>
	<td align="right" colspan="5"><b>Total: </b></td>
	<td align="left"><b><?php echo $quoteValues['currency'];?> <?php echo $quoteValues['order_total_before_tax'] ?></b></td>
	</tr>
	</table>
	</td>
	</tr>
	</table>

	</div>
	
</body>