<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="invoice.css" />
  </head>
  <body>
    <div class="invoice_container">
        <div class="in_details">
          <table class="item_table" border="1" cellspacing="0">
            <tr>
              <th rowspan="3" colspan="2">
                <img src="<?php echo base_url();?>public/image/proposalLogo.png" style="width:30% !important;" alt="" />
              </th>
              <th colspan="2">
                <h2>PROFORMA INVOICE</h2>
              </th>
            </tr>
            <tr>
              <th>CHECK IN DATE :</th>
              <td>12/11/2022</td>
            </tr>
            <tr>
              <th>CHECK OUT DATE :</th>
              <td>22/11/2022</td>
            </tr>
            <tr>
              <th>INVOICE DATE :</th>
              <td>01/12/2022</td>
              <th>INVOICE ID/REFF. NO.</th>
              <td>0983/2293884</td>
            </tr>
            <tr>
              <th>CUSTOMER/AGENT NAME :</th>
              <td>aaaaa nnnnnnn</td>
              <th>No. OF NIGHTS :</th>
              <td></td>
            </tr>
            <tr>
              <th>CUSTOMER/AGENT ADDRESS :</th>
              <td>aaaaaaaannnnnnnnnnn</td>
              <th>HOTEL NAME :</th>
              <td></td>
            </tr>
            <tr>
              <th>MODES OF PAYMENT :</th>
              <td>cash</td>
              <th>No. OF ROOMS:</th>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="product_container">
        
        <table class="item_table" border="1" cellspacing="0">
          <tr>
            <th>Services</th>
            <th>Qty</th>
            <th>Rate</th>
            <th>AMT (ADE)</th>
          </tr>
          <tr>
            <td>20,000</td>
            <td>2</td>
            <td>2000</td>
            <td>38000</td>
          </tr>
          <tr>
            <td>20,000</td>
            <td>2</td>
            <td>2000</td>
            <td>38000</td>
          </tr>
          <tr>
            <td>20,000</td>
            <td>2</td>
            <td>2000</td>
            <td>38000</td>
          </tr>
          <tr>
            <td>20,000</td>
            <td>2</td>
            <td>2000</td>
            <td>38000</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th colspan="2">Sub Total</th>

            <th>152000</th>
          </tr>
          <tr>
            <th></th>

            <th colspan="2">BANK TRANSFER CHARGES</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th></th>
            <th colspan="2">ADVANCE RECEIVED</th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th colspan="2">ABOVE COST INCLUSIVE OF 5% VAT</th>
            <th colspan="2">TOTAL</th>
            <th></th>
          </tr>
          <tr>
            <th>AMOUNT IN WORDS :</th>
            <th>AED</th>
            <th colspan="3">TWO THOUSAND AND TEN DIRHAMS ONLY /-</th>
          </tr>
        </table>
      </div>
      <div class="invoice_footer">
        <table class="item_table" border="1" cellspacing="0">
          <tr>
            <th colspan="2">Bank Details :</th>
          </tr>
            
          <tr>
            <th>Account name:</th>
            <td>DIAMOND TOURS L.L.C</td>
          </tr>
          <tr>
            <th>Current Account No.:</th>
            <td>*1012432644501</td>
          </tr>
          <tr>
            <th>IBAN</th>
            <td>AE58 0260 0010 1243 2644 501
            </td>
          </tr>
          <tr>
            <th>
              Name of Bank:
            </th>
            <td>EMIRATES NBD</td>
          </tr>
          <tr>
            <th>Branch:</th>
            <td>AL FAHEEDI BRANCH BUR DUBAI UAE</td>
          </tr>
          <tr>
            <th>Swift Code:</th>
            <td>EBILAEAD</td>
          </tr>
          <tr>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="2">FOR DIAMOND TOURS L.L.C <br>50-B STREET COSMOS LANE, OPPOSITE COSMOS STORE,MEENA BAZAR P.O.BOX:-241685,DUBAI,UAE
          <br>Tel: <b>+971 4 355 9218</b></td>
        </tr>
          <!-- <tr>
            <td colspan="2">Tel: <b>+971 4 355 9218</b></td>
          </tr> -->
          <tr>
            <td colspan="2"><b>THIS IS COMPUTER GENERATED INVOICE, HENCE NO SIGNATURE IS REQUIRED.</b></td>
          </tr>
        </table>
      </div>
      
        </div>
      </div>
    </div>
  </body>
</html>
