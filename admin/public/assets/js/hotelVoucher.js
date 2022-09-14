function printVoucher() {
  var printContents = document.getElementById("print_content").innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  CKEDITOR.replace("impInfo");
  document.body.innerHTML = originalContents;
}

function subVoucherAjax() {
  let confarr = [];
  let hotel_id_arr = [];
  let board_arr = [];

  let hotel_name_arr = [];
  let hotel_booking_date_arr = [];
  let check_in_arr = [];
  let check_out_arr = [];
  let guest_name_arr = [];


  let conf_number = $('input[name^="conf_number"]').each(function () {
    confarr.push($(this).val());
  });

  let hotel_id = $('input[name^="hotel_id"]').each(function () {
    hotel_id_arr.push($(this).val());
  });

  let board = $('input[name^="board"]').each(function () {
    board_arr.push($(this).val());
  });

  let guest_name = $('input[name^="guest_name"]').each(function () {
    guest_name_arr.push($(this).val());
  });

  let hotel_name = $('input[name^="hotel_name"]').each(function () {
    hotel_name_arr.push($(this).val());
  });

  let booking_date = $('input[name^="booking_date"]').each(function () {
    hotel_booking_date_arr.push($(this).val());
  });

  let check_in = $('input[name^="check_in"]').each(function () {
    check_in_arr.push($(this).val());
  });

  let check_out = $('input[name^="check_out"]').each(function () {
    check_out_arr.push($(this).val());
  });


  if (confarr.every((val) => val !== "")) {
    let q_id = document.getElementById("query_id").value;
    let base_url = document.getElementById("base_url_id").value;

    $.ajax({
      type: "POST",
      url: base_url + "/HotelVoucher/submitVoucherDetails/",
      data: {
        query_id: q_id,
        hotel_id: hotel_id_arr,
        conf_number: confarr,
        board: board_arr,
        guest_name:guest_name_arr,
        hotel_name: hotel_name_arr,
        booking_date : hotel_booking_date_arr,
        check_in: check_in_arr,
        check_out: check_out_arr,
      },
      success: function (result) {
        const btn1 = (document.getElementById(
          "submtVoucherBTN"
        ).hidden = false);
        const btn2 = (document.getElementById(
          "submtVoucherPrint"
        ).hidden = false);
        const btn3 = (document.getElementById(
          "submtVoucherEmail"
        ).hidden = false);
        toastr.success("Hotel Voucher Details Updated");
        location.href = base_url + "/HotelVoucher/view_hotels_voucher";

      },

      error: function () {
        console.log("Error");
      },
    });
  } else {
    toastr.error("Please enter Confirmation Number");
  }
}

function sendEmail() {
  let q_id = document.getElementById("query_id").value;
  let base_url = document.getElementById("base_url_id").value;
  let email_id = document.getElementById("email_id").value;
  let guest_name = document.getElementById("guest_name").value;
  let impInfo = CKEDITOR.instances["impInfo"].getData();
  let board_arr = [];
  let board = $('input[name^="board"]').each(function () {
    board_arr.push($(this).val());
  });

  if (impInfo == "" || impInfo == null) {
    toastr.error("Please Add Importent Information");
  } else {
    $.ajax({
      type: "POST",
      url: base_url + "/HotelVoucher/send_mail",
      data: {
        query_id: q_id,
        email: email_id,
        board_arr: board_arr,
        impInfo: impInfo,
        guest_name:guest_name,
      },
      success: function (result) {
        console.log("result.email", result);
        toastr.success("Email Sent Successfully");
        // location.href = base_url + "/HotelVoucher/view_hotels_voucher";

      },
      error: function () {
        console.log("Error");
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.error("Error while sending email");
      },
    });
  }
}

// function sendEmail() {
//   let q_id = document.getElementById("query_id").value;
//   let base_url = document.getElementById("base_url_id").value;
//   let email_id = document.getElementById("email_id").value;

//   let impInfo = CKEDITOR.instances['impInfo'].getData();
//   let board_arr= [];
//   let board = $('input[name^="board"]').each(function () {
//     board_arr.push($(this).val());
//   });

//   console.log('ckeditor content: ' + $("#impInfo").val());
//   if(impInfo == '' || impInfo == null) {
//     toastr.error("Please Add Importent Information");
//   }
//   let data = {
//     "info" : impInfo,
//     "board_arr" : board_arr,
//   }
//   console.log(data);
//   // $.ajax({
//   //   type: "POST",
//   //   url: base_url + "/HotelVoucher/send_mail",
//   //   data: { query_id: q_id, email: email_id },
//   //   success: function (result) {
//   //     console.log("result.email", result);
//   //   },
//   //   error: function () {
//   //     console.log("Error");
//   //   },
//   // });
// }
function resendEmail(result) {
  // console.log(result.hotel_conformation.board);
  let q_id = result.query_id;
  let base_url = document.getElementById("base_url_id").value;
  let email_id = result.guest.b2bEmail;
  let impInfo = "";//result.hotel_conformation.impInfo;
  let board_arr = result.hotel_conformation.board;
  
// alert(board_arr);
  // if (impInfo == "" || impInfo == null) {
  //   toastr.error("Please Add Importent Information");
  // } else {
    $.ajax({
      type: "POST",
      url: base_url + "/HotelVoucher/send_mail",
      data: {
        query_id: q_id,
        email: email_id,
        board_arr: board_arr,
        impInfo: impInfo,
      },
      success: function (result) {
        
        console.log("result.email", result);
        toastr.success("Email Sent Successfully");
        // location.href = base_url + "/HotelVoucher/view_hotels_voucher";
      },
      error: function () {
        console.log("Error");
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.error("Error while sending email");
      },
    });
  // }
}
