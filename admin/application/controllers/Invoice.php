<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('Image_Slug');
		// $this->load->library('Pdf');
	}

	public function view_invoice()
	{
		$data['listInvoice'] = $this->db->order_by('id', 'desc')->get('invoice')->result();

		$company_name = [];

		foreach ($data['listInvoice'] as $key => $value) {
			if(!empty($value->query_id)) {
				
				$company = $this->db->where('query_id', $value->query_id)->get('b2bcustomerquery')->row();

				if(!empty($company)){
					array_push($company_name,$company->b2bcompanyName);
				} else {
					array_push($company_name,"N/A");
				}

			} else {
				array_push($company_name,"N/A");
			}
		}

		$data['company_names'] = $company_name;

		$this->load->view('invoice/view_invoice', $data);
	}

	public function modify_invoice($id)
	{
		$data['edit_invoice'] = $this->db->where('id', $id)->get('invoice')->row();
		$data['details'] = $this->db->where('query_id', $data['edit_invoice']->query_id)->get('b2bcustomerquery')->row();

		$this->load->view('invoice/modify_invoice', $data);
	}
	public function searchDetails()
	{
		$query_id = $_POST['query_id'];
		$data['details'] = $this->db->where('query_id', $query_id)->get('b2bcustomerquery')->row();
		$data['presentdate'] = date('Y-m-d');
		$data['duedate'] = date('Y-m-d', strtotime(' + 15 days'));
		// $listInvoice = $this->db->query('SELECT * FROM invoice ORDER by id limit 1')->result();
		$listInvoice = $this->db->order_by('id',"desc")->limit(1)->get('invoice')->row();

		if (isset($listInvoice->invoiceNumber)) {
			$invoicenumber = $listInvoice->invoiceNumber + 1;
		} else {
			$invoicenumber = 29042000;
		}
		
		$data['invoicenumber'] = $invoicenumber;
		$data['usd_to_aed'] = $this->db->get_where('currency_data', array('id' => 1))->row();

		$query_type = $this->db->where('queryId', $query_id)->get('querypackage')->row();
		$data['desc'] = $query_type->type;
		// $data['currency'] = $query_type->currency;
		$data['pax'] = $query_type->adult + $query_type->child + $query_type->infant;
		$query_price = $this->db->where('query_id', $query_id)->get('pricing_info')->row();

		if($query_type->type == "Transfer"){
			$QType = "transfer_price";
		}
		elseif($query_type->type == "Hotel"){
			$QType = "hotel_price";
		}
		elseif($query_type->type == "Meals"){
			$QType = "meal_price";
		}
		elseif($query_type->type == "Visa"){
			$QType = "visa_price";
		}
		elseif($query_type->type == "Excursion"){
			$QType = "excursion_price";
		}
		elseif($query_type->type == "Package"){
			$QType = "package_price";
		}
		$remove_vat_amount = (($query_price->$QType * 5 ) / 100);
		$data['price'] = ($query_price->$QType - $remove_vat_amount )  / $data['pax'];
		// if($query_type->type == "Package") {
		
		// 	$query_type = $this->db->where('queryId', $query_id)->get('querypackage')->row();

		// }
		
		//-----------------------------------------------------------------------------------

		$data['query_id'] = $query_id;
		//print_r($invoicenumber);die();
		$this->load->view('invoice/add_invoice', $data);
	}
	public function add_invoice()
	{
		$data['presentdate'] = date('Y-m-d');
		$data['query_id'] = "";
		$data['duedate'] = date('Ymd', strtotime(' + 15 days'));
		$listInvoice = $this->db->query('SELECT * FROM invoice ORDER by id limit 1')->result();

		$first_invoice_no = date('Ymd');
		// print_r($data['duedate']."01");die();
		// echo '<pre>';print_r($data);exit;
		if (isset($listInvoice[0]->invoiceNumber)) {
			$data['invoicenumber'] = $listInvoice[0]->invoiceNumber + 1;
		} else {
			$data['invoicenumber'] = $first_invoice_no . "01";
		}

		//print_r($invoicenumber);die();
		$this->load->view('invoice/add_invoice', $data);
	}

	public function printInvoice($id)
	{
		$data['printInvoice'] = $this->db->where('id', $id)->get('invoice')->row();
		$data['query_data'] = $this->db->where('id', $data['printInvoice']->query_id)->get('queries')->row();
		$data['invoice'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('invoice')->row();
		$data['query_package'] = $this->db->where('queryId', $data['printInvoice']->query_id)->get('querypackage')->row();
		$data['b2b'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('b2bcustomerquery')->row();
		$data['query_hotel'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('query_hotel')->row();
		$data['query_hotel_voucher'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('hotel_voucher_confirmation')->result();
		$query_hotel_voucher = $this->db->where('query_id', $data['printInvoice']->query_id)->get('hotel_voucher_confirmation')->result();

		$data['hotel_details'] = [];
		foreach($query_hotel_voucher as $val){
				$data_hotel = $this->db->where('id', $val->query_hotel_id)->get('hotel')->row();
				array_push($data['hotel_details'],$data_hotel);
		}

		// print_r($query_hotel_voucher);
		// exit;
		$this->load->view('invoice/invoice', $data);
		// $html = $this->load->view('invoice/invoice',$data,TRUE);

		// $this->pdf->load_html($html);
		// $this->pdf->set_base_path('/');// Load HTML content
		// $this->pdf->setPaper('A4', 'landscape'); // (Optional) Setup the paper size and orientation
		// $this->pdf->render();// Render the HTML as PDF
		// $output = $this->pdf->output();
		// file_put_contents("./public/uploads/Invoice.pdf", $output);

	}

	// public function download_pdf()
	// {

	// 	try {

			
	// 	$data['invoice'] = $this->db->where('query_id', '8878')->get('invoice')->row();
	// 	$data['query_package'] = $this->db->where('queryId', '8878')->get('querypackage')->row();
	// 	$data['b2b'] = $this->db->where('query_id', '8878')->get('b2bcustomerquery')->row();
	// 	$data['query_hotel'] = $this->db->where('query_id', '8878')->get('query_hotel')->row();

	// 		$this->load->library('Pdf');
	// 		// $this->load->view('invoice/template/invoice',$data);return;
	// 		$html =  $this->load->view('invoice/template/invoice',$data, true);
	// 		$dompdf = new Dompdf\DOMPDF();
	// 		$dompdf->load_html($html);
	// 		$dompdf->render();
	// 		$pdf_name = time() . ".pdf";
	// 		$dompdf->stream($pdf_name);

	// 		// echo 'pdf downloaded successfully';
			
	// 	} catch (\Exception $e) {
	// 		echo $e->getMessage();
	// 	}
	// }

	public function sendMailInvoice()
	{
		try {
		$email = $this->input->post('email');
		$id = $this->input->post('pay_id');

		$data['printInvoice'] = $this->db->where('id', $id)->get('invoice')->row();
		$data['query_data'] = $this->db->where('id', $data['printInvoice']->query_id)->get('queries')->row();
		// echo '<pre>';print_r($data);exit;

		$data['invoice'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('invoice')->row();
		$data['query_package'] = $this->db->where('queryId', $data['printInvoice']->query_id)->get('querypackage')->row();
		$data['b2b'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('b2bcustomerquery')->row();
		$data['query_hotel'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('query_hotel')->row();
		$data['query_hotel_voucher'] = $this->db->where('query_id', $data['printInvoice']->query_id)->get('hotel_voucher_confirmation')->result();
		$query_hotel_voucher = $this->db->where('query_id', $data['printInvoice']->query_id)->get('hotel_voucher_confirmation')->result();

		$data['hotel_details'] = [];
		foreach($query_hotel_voucher as $val){
				$data_hotel = $this->db->where('id', $val->query_hotel_id)->get('hotel')->row();
				array_push($data['hotel_details'],$data_hotel);
		}

		
		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'devsum2@gmail.com',
			'smtp_pass' => 'kidueonawxajhfae',
			'crlf' => "\r\n",
			'mailtype' => "html",
			'newline' => "\r\n",
		);

		$this->db->select("cb.b2bfirstName,cb.b2bcompanyName,cb.query_id,qp.specificDate,qp.goingTo,qp.Packagetravelers,qp.adult,qp.infant,
		qp.child,cb.reportsTo,cb.b2bEmail,qp.room");

		$this->db->from("b2bcustomerquery cb");

		$this->db->where('qp.queryId', $data['printInvoice']->query_id);
		$this->db->join('querypackage qp', 'cb.query_id=qp.queryId', 'LEFT');
		$data['view'] = $this->db->get()->row();

		$user_id = $this->session->userdata()['admin_id'];
		$data['admin_user'] = $this->db->where('id', $user_id)->get('users')->row();


		$subject =
		'DT/DHIREN/DXB/'. ($data['view']->adult + $data['view']->child + $data['view']->infant)  . ' Pax  
		/ ' . $data['view']->query_id . ' / ' . $data['printInvoice']->invoiceNumber  ;

		$this->load->library('Pdf');
		$html =  $this->load->view('invoice/template/invoice',$data, true);
		$dompdf = new Dompdf\DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		$output = $dompdf->output();
		$pdf_name = time() . ".pdf";
		file_put_contents(FCPATH . '/public/uploads/hotelVoucher/'.$pdf_name, $output);
		$file_name = base_url('/public/uploads/hotelVoucher/' . $pdf_name);
		$this->email->attach($file_name);

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($email);
		// $this->email->cc('info@diamondtoursdubai.com');
		$this->email->subject($subject);
		// $body = $this->load->view('invoice/template/invoice_mail', $data, TRUE);
		$body = '<p>Dear Sir/Ma&rsquo;am</p>
		<p>Your Booking has been confirmed Find attached corresponding document and Query Id. <strong><u>'.$subject.'</u></strong>&nbsp; dated '. $data['view']->specificDate .' for AED '.$data['printInvoice']->finalTotalInvoice. ' ,</p>
		<p>Regards, DIAMOND TOURS LLC This Is auto generate Email Please Do not Reply on This Email (For Contact send email on&nbsp;<a href="mailto:info@diamondtoursdubai.com" rel="noreferrer noopener" target="_blank" title="mailto:info@diamondtoursdubai.com">info@diamondtoursdubai.com</a>)<br><br>Thanks &amp; Regards,<br><br>DIAMOND TOUR LLC<br>BUR DUBAI, MENA BAZAR, 50-B STREET ,COSMOS LANE, OPP: COSMOS STORE , Dubai , UAE<br>E-Mail :&nbsp;<a href="mailto:Info@diamondtoursdubai.com" rel="noreferrer noopener" target="_blank" title="mailto:info@diamondtoursdubai.com">Info@diamondtoursdubai.com</a> ,&nbsp;<a href="http://www.diamondstoursdubai.com/" rel="noreferrer noopener" target="_blank" title="http://www.diamondstoursdubai.com/">www.diamondstoursdubai.com</a></p>
		<p><br></p>';
		$this->email->message($body);

		if ($this->email->send()) {
			$this->load->helper("file");
			delete_files(FCPATH . '/public/uploads/hotelVoucher');

			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	} catch (\Exception $e) {
		echo $e->getMessage();
	}
	}

	public function sendMailRemainder()
	{
		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'devsum2@gmail.com',
			'smtp_pass' => 'kidueonawxajhfae',
			'crlf' => "\r\n",
			'mailtype' => "html",
			'newline' => "\r\n",
		);

		$email = $this->input->post('email');
		$subject = $this->input->post('subject');

		$email_from = $this->session->userdata('admin_email');
		$this->email->initialize($config);
		$this->email->from($email_from);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($this->input->post('body'));
		$this->email->send();

		echo json_encode(["msg" => "Email Send Successfully"]);
	}

	public function addInvoiceDetails()
	{


		$description_arr = $this->input->post('invoiceDesc');
		$description = implode(',', $description_arr);


		// echo '<pre>';print_r($description);exit;
		$data = array(
			'billTo' => $this->input->post('clientName'),
			'clientName' => $this->input->post('clientName'),
			'invoiceCurrency' => $this->input->post('invoiceCurrency'),
			'invoiceDate' => $this->input->post('invoiceDate'),
			'invoicePayment' => $this->input->post('invoicePayment'),
			'invoiceNumber' => $this->input->post('invoiceNumber'),
			'invoiceClientAddress' => $this->input->post('invoiceClientAddress'),
			'invoicePhoneNumber' => $this->input->post('invoicePhoneNumber'),
			'bank_charges' => $this->input->post('bank_charges'),

			// 'ClientCity'=>$this->input->post('ClientCity'),
			// 'ClientVat'=>$this->input->post('ClientVat'),

			'invoiceCategory' => $description,
			// 'invoiceCategory'=>$this->input->post('invoiceDesc'),

			// 'invoiceNum'=>$this->input->post('invoiceNum'),
			// 'invoiceComment'=>$this->input->post('invoiceComment'),[]
			// 'invoiceComment'=>$this->input->post('invoiceDesc'),


			// 'invoiceQty'=>$this->input->post('invoiceQty'),[]
			'invoiceQty' => $this->input->post('com_invoicePax'),
			//[]
			'invoiceRate' => $this->input->post('com_invoiceRate'),
			// 'total'=>$this->input->post('total'),

			// 'invoiceDiscountChoice'=>$this->input->post('invoiceDiscountChoice'),
			// 'invoiceDiscount'=>$this->input->post('invoiceDiscount'),

			// 'invoiceAmount'=>$this->input->post('invoiceAmount'),[]
			// 'invoiceAmount'=>$this->input->post('com_invoiceVatAmount'),
			'invoiceVatChoice' => $this->input->post('com_invoiceVatAmount'),


			// 'invoiceMarkupChoice'=>$this->input->post('invoiceMarkupChoice'),
			// 'invoiceMarkup'=>$this->input->post('invoiceMarkup'),

			// 'invoiceSubtotal'=>$this->input->post('invoiceSubtotal'),[]
			'invoiceSubtotal' => $this->input->post('com_invoiceTaxableAmount'),

			// 'invoiceVatChoice'=>$this->input->post('invoiceVatChoice'),

			// 'invoiceVat'=>$this->input->post('invoiceVat'),[]
			'invoiceVat' => '5',

			//[]
			'invoiceTotalAmount' => $this->input->post('com_invoiceTaxableAmount'),
			'finalSubtotal' => $this->input->post('finalSubtotal'),
			'finalVAT' => $this->input->post('finalVAT'),
			'finalTotalInvoice' => $this->input->post('finalTotalInvoice'),
			'finalAdvance' => $this->input->post('finalAdvance'),
			'finalBalance' => $this->input->post('finalBalance'),
			'Notes' => $this->input->post('editorNotes'),
			'TrmsCond' => $this->input->post('editorTrmsCond'),
			'query_id' => $this->input->post('query_id'),
			'created_by' => $this->session->userdata('admin_id')
		);

		if ($this->db->insert('invoice', $data)) {
			$this->session->set_flashdata('success', 'Invoice Added Sucessfully');
			redirect('invoice/view_invoice', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('invoice/view_invoice', 'refresh');
		}
	}


	public function updateInvoiceDetails($id)
	{

		// //echo '<pre>';print_r($_POST);exit;
		// $data = array('billTo'=>$this->input->post('billTo'),
		// 				'clientName'=>$this->input->post('clientName'),
		// 	'invoiceCurrency'=>$this->input->post('invoiceCurrency'),
		// 	'invoiceDate'=>$this->input->post('invoiceDate'),
		// 	'invoicePayment'=>$this->input->post('invoicePayment'),
		// 	'invoiceNumber'=>$this->input->post('invoiceNumber'),
		// 	'invoiceClientAddress'=>$this->input->post('invoiceClientAddress'),
		// 	'invoicePhoneNumber'=>$this->input->post('invoicePhoneNumber'),
		// 	'ClientCity'=>$this->input->post('ClientCity'),
		// 	'ClientVat'=>$this->input->post('ClientVat'),
		// 	'invoiceCategory'=>$this->input->post('invoiceCategory'),
		// 	'invoiceNum'=>$this->input->post('invoiceNum'),
		// 	'invoiceComment'=>$this->input->post('invoiceComment'),
		// 	'invoiceQty'=>$this->input->post('invoiceQty'),
		// 	'invoiceRate'=>$this->input->post('invoiceRate'),
		// 	'total'=>$this->input->post('total'),
		// 	'invoiceDiscountChoice'=>$this->input->post('invoiceDiscountChoice'),
		// 	'invoiceDiscount'=>$this->input->post('invoiceDiscount'),
		// 	'invoiceAmount'=>$this->input->post('invoiceAmount'),
		// 	'invoiceMarkupChoice'=>$this->input->post('invoiceMarkupChoice'),
		// 	'invoiceMarkup'=>$this->input->post('invoiceMarkup'),
		// 	'invoiceSubtotal'=>$this->input->post('invoiceSubtotal'),
		// 	'invoiceVatChoice'=>$this->input->post('invoiceVatChoice'),
		// 	'invoiceVat'=>$this->input->post('invoiceVat'),
		// 	'invoiceTotalAmount'=>$this->input->post('invoiceTotalAmount'),
		// 	'finalSubtotal'=>$this->input->post('finalSubtotal'),
		// 	'finalVAT'=>$this->input->post('finalVAT'),
		// 	'finalTotalInvoice'=>$this->input->post('finalTotalInvoice'),
		// 	'finalAdvance'=>$this->input->post('finalAdvance'),
		// 	'finalBalance'=>$this->input->post('finalBalance'),
		// 	'Notes'=>$this->input->post('editorNotes'),
		// 	'TrmsCond'=>$this->input->post('editorTrmsCond')
		// );
		$description_arr = $this->input->post('invoiceDesc');
		$description = implode(',', $description_arr);
		$data = array(
			'billTo' => $this->input->post('clientName'),
			'clientName' => $this->input->post('clientName'),
			'invoiceCurrency' => $this->input->post('invoiceCurrency'),
			'invoiceDate' => $this->input->post('invoiceDate'),
			'invoicePayment' => $this->input->post('invoicePayment'),
			'invoiceNumber' => $this->input->post('invoiceNumber'),
			'invoiceClientAddress' => $this->input->post('invoiceClientAddress'),
			'invoicePhoneNumber' => $this->input->post('invoicePhoneNumber'),
			'bank_charges' => $this->input->post('bank_charges'),
			// 'ClientCity'=>$this->input->post('ClientCity'),
			// 'ClientVat'=>$this->input->post('ClientVat'),

			'invoiceCategory' => $description,
			// 'invoiceCategory'=>$this->input->post('invoiceDesc'),

			// 'invoiceNum'=>$this->input->post('invoiceNum'),
			// 'invoiceComment'=>$this->input->post('invoiceComment'),[]
			// 'invoiceComment'=>$this->input->post('invoiceDesc'),


			// 'invoiceQty'=>$this->input->post('invoiceQty'),[]
			'invoiceQty' => $this->input->post('com_invoicePax'),
			//[]
			'invoiceRate' => $this->input->post('com_invoiceRate'),
			// 'total'=>$this->input->post('total'),

			// 'invoiceDiscountChoice'=>$this->input->post('invoiceDiscountChoice'),
			// 'invoiceDiscount'=>$this->input->post('invoiceDiscount'),

			// 'invoiceAmount'=>$this->input->post('invoiceAmount'),[]
			// 'invoiceAmount'=>$this->input->post('com_invoiceVatAmount'),
			'invoiceVatChoice' => $this->input->post('com_invoiceVatAmount'),


			// 'invoiceMarkupChoice'=>$this->input->post('invoiceMarkupChoice'),
			// 'invoiceMarkup'=>$this->input->post('invoiceMarkup'),

			// 'invoiceSubtotal'=>$this->input->post('invoiceSubtotal'),[]
			'invoiceSubtotal' => $this->input->post('com_invoiceTaxableAmount'),

			// 'invoiceVatChoice'=>$this->input->post('invoiceVatChoice'),

			// 'invoiceVat'=>$this->input->post('invoiceVat'),[]
			'invoiceVat' => '5',

			//[]
			'invoiceTotalAmount' => $this->input->post('com_invoiceTaxableAmount'),
			'finalSubtotal' => $this->input->post('finalSubtotal'),
			'finalVAT' => $this->input->post('finalVAT'),
			'finalTotalInvoice' => $this->input->post('finalTotalInvoice'),
			'finalAdvance' => $this->input->post('finalAdvance'),
			'finalBalance' => $this->input->post('finalBalance'),
			'Notes' => $this->input->post('editorNotes'),
			'TrmsCond' => $this->input->post('editorTrmsCond'),
			// 'query_id' => $this->input->post('query_id')
		);

		if ($this->db->where('id', $id)->update('invoice', $data)) {
			$this->session->set_flashdata('success', 'Invoice Updated Sucessfully');
			redirect('invoice/view_invoice', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Something Went Wrong');
			redirect('invoice/view_invoice', 'refresh');
		}
	}

	public function makePayment()
	{
		//echo '<pre>';print_r($_POST);exit;

		$data = array(
			'payId' => $this->input->post('payId'),
			'payAmount' => $this->input->post('payAmount'),
			'payType' => $this->input->post('payType'),
			'payDate' => $this->input->post('payDate'),
			'payNotes' => $this->input->post('payNotes')
		);

		$payId = $this->input->post('payId');
		$payAmount = $this->input->post('payAmount');
		$data1['editBalance'] = $this->db->where('id', $payId)->get('invoice')->row();
		$newBalance = $data1['editBalance']->finalBalance - $payAmount;

		$newAdvance = $data1['editBalance']->finalAdvance + $payAmount;

		$update = array('finalBalance' => $newBalance, 'finalAdvance' => $newAdvance);

		$this->db->where('id', $payId)->update('invoice', $update);

		if ($this->db->insert('invoicepayment', $data)) {
// 			echo '<script>alert("Payment Added Sucessfully")</script>';
            $this->session->set_flashdata('success', 'Payment Added Sucessfully');
			redirect('invoice/view_invoice');
		} else {
			echo '<script>alert("Something Went Wrong")</script>';
			redirect('invoice/view_invoice', 'refresh');
		}
	}


	public function getBalanceAmount()
	{
		$id = $_POST['payId'];
		$data = $this->db->where('id', $id)->get('invoice')->row();
		//echo '<pre>';print_r($data);exit;
		echo json_encode($data);
	}

	public function getClientEmail()
	{
		$id = $_POST['id'];
		$data = $this->db->where('id', $id)->get('invoice')->row();
		//echo '<pre>';print_r($data);exit;
		echo json_encode($data);
	}
}

?>