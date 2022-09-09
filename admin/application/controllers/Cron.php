<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cron extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    

    public function updateCurrency()
    {
        //--------------------------- usd to aed ---------------------

        $curl1 = curl_init();
        curl_setopt_array($curl1, array(
            CURLOPT_URL => "https://api.apilayer.com/currency_data/live?source=USD&currencies=AED",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: json",
                "apikey: K3UIXcjm6IpkIzw6wM8tc6lkLmep2H3n"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));
        $response1 = curl_exec($curl1);
        curl_close($curl1);
        $res_decode1 = json_decode($response1, true);
        $usd_aed = round($res_decode1['quotes']['USDAED'],3);
        //--------------------------  aed to usd  ----------------------

        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
            CURLOPT_URL => "https://api.apilayer.com/currency_data/live?source=AED&currencies=USD",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: json",
                "apikey: K3UIXcjm6IpkIzw6wM8tc6lkLmep2H3n"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));
        $response2 = curl_exec($curl2);
        curl_close($curl2);
        $res_decode2 = json_decode($response2, true);
        $aed_aed = round($res_decode2['quotes']['AEDUSD'],3);

        $data_arr = ['usd_to_aed'=> $usd_aed , 'aed_to_usd'=> $aed_aed];

        $query = $this->db->get('currency_data');
		if ($query->num_rows() > 0) {
			$this->db->where('id', 1);
			$this->db->update('currency_data',$data_arr);
		} else {
			$this->db->insert('currency_data', $data_arr);
		}
        
    }
}
