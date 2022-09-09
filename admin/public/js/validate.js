
let timer;

document.addEventListener('input', e => {
    const el = e.target;

    if (el.matches('[data-color]')) {
        clearTimeout(timer);
        timer = setTimeout(() => {
            document.documentElement.style.setProperty(`--color-${el.dataset.color}`, el.value);
        }, 100)
    }
})






// validation signup


function validation() {




    const isEmail = (email) => {
        let atSymbol = email.indexOf("@");
        if (atSymbol < 1) return false;

        let dot = email.lastIndexOf('.');
        if (dot <= atSymbol + 2) return false;

        if (dot === email.length - 1) return false;

        return true;
    }





    const company = document.getElementById("company").value.trim();
    const spanCompany = document.getElementById("spanCompany");

    if (company == "") {
        spanCompany.innerHTML = "** Please fill the Company Name";
        return false;
    } else if (!isNaN(company)) {
        spanCompany.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((company.length <= 2) || (spanCompany.length >= 20)) {
        spanCompany.innerHTML = "** Company Name should be between 2 to 20 Character ";
        return false;
    }




    const firstName = document.getElementById("firstName").value.trim();
    const spanFname = document.getElementById("spanFname");

    if (firstName == "") {
        spanFname.innerHTML = "** Please fill the  First Name";
        return false;
    } else if (!isNaN(firstName)) {
        spanFname.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((firstName.length <= 2) || (firstName.length >= 20)) {
        spanFname.innerHTML = "** First Name should be between 2 to 20 Character ";
        return false;
    }





    const lastName = document.getElementById("lastName").value.trim();
    const spanLname = document.getElementById("spanLname");

    if (lastName == "") {
        spanLname.innerHTML = "** Please fill the  Last Name";
        return false;
    } else if (!isNaN(lastName)) {
        spanLname.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((lastName.length <= 2) || (lastName.length >= 20)) {
        spanLname.innerHTML = "** Last Name should be between 2 to 20 Character ";
        return false;
    }







    const email = document.getElementById("email").value.trim();
    const spanEmail = document.getElementById("spanEmail");

    if (email == "") {
        spanEmail.innerHTML = "** Please fill the  Email";
        return false;
    } else if (!isEmail(email)) {
        spanEmail.innerHTML = "** Not a valid Email ";
        return false;
    }




    const phoenVal = document.getElementById("phoenVal").value;
    const spanPhone = document.getElementById("spanPhone");

    if (phoenVal == "") {
        spanPhone.innerHTML = "** Please fill the  Mobile Number";
        return false;
    } else if (phoenVal.length != 10) {
        spanPhone.innerHTML = "** Invalid Mobile Number ";
        return false;
    } else if ((phoenVal.charAt(0) != 9) && (phoenVal.charAt(0) != 8) && (phoenVal.charAt(0) != 7)) {
        spanPhone.innerHTML = "**Invalid Mobile Number 8,9,7 ";
        return false;
    }





}






// validatePackage 

console.log("goutam")

function validatePackage() {
    const goingTo = document.getElementById("goingTo").value.trim();
    const goingFrom = document.getElementById("goingFrom").value.trim();
    const specificDate = document.getElementById("specificDate").value;
    // const From = document.getElementById("From").value.trim();
    // const To = document.getElementById("To").value.trim();



    const spanGoingTo = document.getElementById("spanGoingTo");
    const spanGoingFrom = document.getElementById("spanGoingFrom");
    const spanSpecificDate = document.getElementById("spanSpecificDate");
    // const spanFrom = document.getElementById("spanFrom");
    // const spanTo = document.getElementById("spanTo");


    if (goingTo == "") {
        spanGoingTo.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(goingTo)) {
        spanGoingTo.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((goingTo.length <= 1) || (goingTo.length >= 20)) {
        spanGoingTo.innerHTML = "** Place should be between 2 to 20 Character ";
        return false;
    }



    if (goingFrom == "") {
        spanGoingFrom.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(goingFrom)) {
        spanGoingFrom.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((goingFrom.length <= 1) || (goingTo.length >= 20)) {
        spanGoingFrom.innerHTML = "** Place should be between 2 to 20 Character ";
        return false;
    }



    if (specificDate == "") {
        spanSpecificDate.innerHTML = "** Please fill the  Date";
        return false;
    }

}



//vadate trasfer


function validationTransfer() {

    const TgoingTo = document.getElementById("TgoingTo").value.trim();
    const spanTgoingTo = document.getElementById("spanTgoingTo");


    // if (TgoingTo == "") {
    //     spanTgoingTo.innerHTML = "** Please fill the  Box";
    //     return false;
    // } else if (!isNaN(TgoingTo)) {
    //     spanTgoingTo.innerHTML = "** Only Characters are allowed ";
    //     return false;
    // } else if ((TgoingTo.length <= 2) || (goingTo.length >= 20)) {
    //     spanTgoingTo.innerHTML = "** Place should be between 2 to 20 Character ";
    //     return false;
    // }




    const TgoingFrom = document.getElementById("TgoingFrom").value.trim();
    const spanTgoingFrom = document.getElementById("spanTgoingFrom");




    if (TgoingFrom == "") {
        spanTgoingFrom.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(TgoingFrom)) {
        spanTgoingFrom.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((TgoingFrom.length <= 2) || (TgoingFrom.length >= 20)) {
        spanTgoingFrom.innerHTML = "** Place should be between 2 to 20 Character ";
        return false;
    }








    const TspecificDate = document.getElementById("TspecificDate").value;
    const spanTspecificDate = document.getElementById("spanTspecificDate");



    if (TspecificDate == "") {
        spanTspecificDate.innerHTML = "** Please fill the  Date";
        return false;
    }





    const Travelers = document.getElementById("Travelers").value.trim();
    const spanTravelers = document.getElementById("spanTravelers");


    if (Travelers === "") {
        spanTravelers.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(Travelers)) {
        spanTravelers.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((Travelers.length <= 2) || (Travelers.length >= 20)) {
        spanTravelers.innerHTML = "** Travelers should be between 2 to 20 Character ";
        return false;
    }


}


//validation Visa


function validationVisa() {

    const vCountry = document.getElementById("vCountry").value.trim();
    const spanvCountry = document.getElementById("spanvCountry");


    //  if (vCountry === "") {
    //     spanvCountry.innerHTML = "** Please fill the  Country Name";
    //     return false;
    // } else if (!isNaN(vCountry)) {
    //     spanvCountry.innerHTML = "** Only Characters are allowed ";
    //     return false;
    // } else if ((vCountry.length <= 2) || (goingTo.length >= 20)) {
    //     spanvCountry.innerHTML = "** Place should be between 2 to 20 Character ";
    //     return false;
    // }





    const vCategory = document.getElementById("vCategory").value;
    const spanvCategory = document.getElementById("spanvCategory");

    if (vCategory === "") {
        spanvCategory.innerHTML = "** Please Select the Category";
        return false;
    }





    const vDateOf = document.getElementById("vDateOf").value;
    const spanvDateOf = document.getElementById("spanvDateOf");


    if (vDateOf === "") {
        spanvDateOf.innerHTML = "** Please Select the date";
        return false;
    }









    const vApplicants = document.getElementById("vApplicants").value.trim();
    const spanvApplicants = document.getElementById("spanvApplicants");


    if (vApplicants === "") {
        spanvApplicants.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(vApplicants)) {
        spanvApplicants.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((vApplicants.length <= 2) || (vApplicants.length >= 20)) {
        spanvApplicants.innerHTML = "** Applicants should be between 2 to 20 Character ";
        return false;
    }






    const vNatioality = document.getElementById("vNatioality").value.trim();
    const spanvNatioality = document.getElementById("spanvNatioality");


    if (vNatioality === "") {
        spanvNatioality.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(vNatioality)) {
        spanvNatioality.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((vNatioality.length <= 2) || (vNatioality.length >= 20)) {
        spanvNatioality.innerHTML = "*Natioality should be between 2 to 20 Character ";
        return false;
    }


}





//validation hotel

function validationHotel() {

    const hDestination = document.getElementById("hDestination").value.trim();
    const spanhDestination = document.getElementById("spanhDestination");


    if (hDestination === "") {
        spanhDestination.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(hDestination)) {
        spanhDestination.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((hDestination.length <= 2) || (hDestination.length >= 20)) {
        spanhDestination.innerHTML = "** Destination should be between 2 to 20 Character ";
        return false;
    }








    const hCheckIn = document.getElementById("hCheckIn").value;
    const spanhCheckIn = document.getElementById("spanhCheckIn");


    if (hCheckIn === "") {
        spanhCheckIn.innerHTML = "** Please fill the Check In Time";
        return false;
    }




    const hCheckOut = document.getElementById("hCheckOut").value;
    const spanhCheckOut = document.getElementById("spanhCheckOut");


    if (hCheckOut === "") {
        spanhCheckOut.innerHTML = "** Please fill the Check Out Time";
        return false;
    }






    const hNights = document.getElementById("hNights").value;
    const spanhNights = document.getElementById("spanhNights");


    if (hNights === "") {
        spanhNights.innerHTML = "** Please fill the Box";
        return false;
    }






}


// validate Shightseeing

function validateShightseeing() {

    const sDateOf = document.getElementById("sDateOf").value;
    const spanSDateOf = document.getElementById("spanSDateOf");


    if (sDateOf === "") {
        spanSDateOf.innerHTML = "** Please Select the date";
        return false;
    }



    const sNatioality = document.getElementById("sNatioality").value.trim();
    const spansNatioality = document.getElementById("spansNatioality");


    if (sNatioality === "") {
        spansNatioality.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(sNatioality)) {
        spansNatioality.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((sNatioality.length <= 2) || (sNatioality.length >= 20)) {
        spansNatioality.innerHTML = "*Natioality should be between 2 to 20 Character ";
        return false;
    }




    const pax = document.getElementById("pax").value;
    const spanPax = document.getElementById("spanPax");

    if (pax == "") {
        spanPax.innerHTML = "** Please fill the PAX Number";
        return false;
    }






    const age = document.getElementById("age").value;
    const spanAge = document.getElementById("spanAge");
    if (age <= 0) {
        spanAge.innerHTML = "** Please enter your age";
        return false;
    } else if (age >= 1 && age <= 5) {
            spanAge.innerHTML = "**  Adults(18+) only";
            return false;
    } else if (age >= 6 && age <= 10) {
            spanAge.innerHTML = "**  Adults(18+) only";
            return false;
    }




}



// Invoice validate

function validateInvoice(){

    const billTo = document.getElementById("billTo").value.trim();
    const spanBilledTo = document.getElementById("spanBilledTo");


    if (billTo === "") {
        spanBilledTo.innerHTML = "** Please fill the  Box";
        return false;
    } else if (!isNaN(billTo)) {
        spanBilledTo.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((billTo.length <= 2) || (billTo.length >= 20)) {
        spanBilledTo.innerHTML = "** Billed  should be between 2 to 20 Character ";
        return false;
    }



    const invoiceDate = document.getElementById("invoiceDate").value;
    const spanInvoiceDate = document.getElementById("spanInvoiceDate");


    if (invoiceDate === "") {
        spanInvoiceDate.innerHTML = "** Please Select the Invoice date";
        return false;
    }



    const invoicePayment = document.getElementById("invoicePayment").value;
    const spaninvoicePayment = document.getElementById("spaninvoicePayment");


    if (invoicePayment === "") {
        spaninvoicePayment.innerHTML = "** Please Select the Payment Due date";
        return false;
    }


    
    const invoiceNumber = document.getElementById("invoiceNumber").value;
    const spanInvoiceNumber = document.getElementById("spanInvoiceNumber");

    if (invoiceNumber == "") {
        spanInvoiceNumber.innerHTML = "** Please fill the Invoice Number";
        return false;
    }






    const ClientCity = document.getElementById("ClientCity").value.trim();
    const spanClientCity = document.getElementById("spanClientCity");


    if (ClientCity === "") {
        spanClientCity.innerHTML = "** Please fill the City Name";
        return false;
    } else if (!isNaN(ClientCity)) {
        spanClientCity.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((ClientCity.length <= 2) || (ClientCity.length >= 20)) {
        spanClientCity.innerHTML = "** City Name should be between 2 to 20 Character ";
        return false;
    }








    const invoiceCate = document.getElementById("invoiceCate").value.trim();
    const spaninvoiceCate = document.getElementById("spaninvoiceCate");


    if (invoiceCate === "") {
        spaninvoiceCate.innerHTML = "** Please fill the Box";
        return false;
    } else if (!isNaN(invoiceCate)) {
        spaninvoiceCate.innerHTML = "** Only Characters are allowed ";
        return false;
    } else if ((invoiceCate.length <= 2) || (spaninvoiceCate.length >= 20)) {
        spaninvoiceCate.innerHTML = "** Category should be between 2 to 20 Character ";
        return false;
    }







        
    const invoiceNum = document.getElementById("invoiceNum").value;
    const spaninvoiceNum = document.getElementById("spaninvoiceNum");

    if (invoiceNum == "") {
        spaninvoiceNum.innerHTML = "** Please fill the Invoice Number";
        return false;
    }












    const qty = document.getElementById("qty").value;
    const spanqty = document.getElementById("spanqty");

    if (qty == "") {
        spanqty.innerHTML = "** Please fill the Qty";
        return false;
    }else if (isNaN(qty)) {
        spanqty.innerHTML = "** Only Number are allowed ";
        return false;
    }








    
    const rate = document.getElementById("rate").value;
    const spanRate = document.getElementById("spanRate");

    if (rate == "") {
        spanRate.innerHTML = "** Please fill the Rate";
        return false;
    }else if (isNaN(rate)) {
        spanRate.innerHTML = "** Only Number are allowed ";
        return false;
    }




    const total = document.getElementById("total").value;
    const spantotal = document.getElementById("spantotal");

    if (total == "") {
        spantotal.innerHTML = "** Please fill the Box";
        return false;
    }else if (isNaN(total)) {
        spantotal.innerHTML = "** Only Number are allowed ";
        return false;
    }

}





//setting validate


function validatesetting(){
    
    const isEmail = (email) => {
        let atSymbol = email.indexOf("@");
        if (atSymbol < 1) return false;

        let dot = email.lastIndexOf('.');
        if (dot <= atSymbol + 2) return false;

        if (dot === email.length - 1) return false;

        return true;
    }





  



    const UserName = document.getElementById("UserName").value.trim();
    const spanUserName = document.getElementById("spanUserName");

    if (UserName == "") {
        // spanUserName.innerHTML = "** Please fill the  User Name";
        alert(" Please fill the  User Name");
        return false;
    } else if (!isNaN(UserName)) {
        // spanUserName.innerHTML = "** Only Characters are allowed ";
        alert(" Only Characters are allowed ");
        return false;
    } else if ((UserName.length <= 2) || (UserName.length >= 20)) {
        alert("User Name should be between 2 to 20 Character ");
        // spanUserName.innerHTML = "** User Name should be between 2 to 20 Character ";
        return false;
    }





    const password = document.getElementById("password").value.trim();
    const spanPassword = document.getElementById("spanPassword");

    if (password == "") {
        // spanPassword.innerHTML = "** Please fill the  Password";
        alert(" Please fill the Password");
        return false;
    }else if ((password.length <= 2) || (password.length >= 20)) {
        alert("Password should be between 2 to 20 Character ");
        // spanPassword.innerHTML = "** Password should be between 2 to 20 Character ";
        return false;
    }


    const firstName = document.getElementById("firstName").value.trim();
    const spanFirstName = document.getElementById("spanFirstName");

    if (firstName == "") {
        // spanFirstName.innerHTML = "** Please fill the  First Name";
        alert("Please fill the  First Name");
        return false;
    } else if (!isNaN(firstName)) {
        // spanFirstName.innerHTML = "** Only Characters are allowed ";
        alert("Only Characters are allowed");
        return false;
    } else if ((firstName.length <= 2) || (firstName.length >= 20)) {
        // spanFirstName.innerHTML = "** First Name should be between 2 to 20 Character ";
        alert("First Name should be between 2 to 20 Character");
        return false;
    }


    const LastName = document.getElementById("LastName").value.trim();
    const spanLastName = document.getElementById("spanLastName");

    if (LastName == "") {
        // spanLastName.innerHTML = "** Please fill the  Last Name";
        alert("Please fill the  Last Name");
        return false;
    } else if (!isNaN(LastName)) {
        // spanLastName.innerHTML = "** Only Characters are allowed ";
        alert(" Only Characters are allowed ")
        return false;
    } else if ((LastName.length <= 2) || (LastName.length >= 20)) {
        // spanLastName.innerHTML = "** Last Name should be between 2 to 20 Character ";
        alert("Last Name should be between 2 to 20 Character")
        return false;
    }




    const Address = document.getElementById("Address").value.trim();
    const spanAddress = document.getElementById("spanAddress");

    if (Address == "") {
        // spanAddress.innerHTML = "** Please fill the  Address";
        alert("Please fill the Address");
        return false;
    } else if (!isNaN(Address)) {
        // spanAddress.innerHTML = "** Only Characters are allowed ";
        alert(" Only Characters are allowed ")
        return false;
    } else if ((Address.length <= 2) || (Address.length >= 20)) {
        // spanAddress.innerHTML = "** Address should be between 2 to 20 Character ";
        alert("Address should be between 2 to 20 Character")
        return false;
    }



   const phoenVal = document.getElementById("phoenVal").value;
    const spanPhone = document.getElementById("spanPhone");

    if (phoenVal == "") {
        // spanPhone.innerHTML = "** Please fill the Contact Number";
        alert("Please fill the Contact Number")
        return false;
    } else if (phoenVal.length != 10) {
        // spanPhone.innerHTML = "** Invalid Contact Number";
        alert("Invalid Contact Number");
        return false;
    } else if ((phoenVal.charAt(0) != 9) && (phoenVal.charAt(0) != 8) && (phoenVal.charAt(0) != 7)) {
        // spanPhone.innerHTML = "**Invalid Contact Number ";
        alert("Invalid Contact Number ");
        return false;
    }



    const email = document.getElementById("email").value.trim();
    const spanEmail = document.getElementById("spanEmail");

    if (email == "") {
        // spanEmail.innerHTML = "** Please fill the  Email";
        alert(" Please fill the  Email")
        document.getElementById("email").focus();
        return false;
    } else if (!isEmail(email)) {
        // spanEmail.innerHTML = "** Not a valid Email ";
        alert(" Not a valid Email ")
        return false;
    }



    const photo = document.getElementById("photo").value;
    const spanPhoto = document.getElementById("spanPhoto");

    if (photo === "") {
        // spanPhoto.innerHTML = "** Please Select the Any One";
        alert(" Please Choose a Photo");
        return false;
    }


    const mCategory = document.getElementById("mCategory").value;
    const spanmCategory = document.getElementById("spanmCategory");

    if (mCategory === "") {
        // spanmCategory.innerHTML = "** Please Select  Any One";
        alert(" Please Select the Module");
        return false;
    }


  

    const vCategory = document.getElementById("vCategory").value;
    const spanAdmin = document.getElementById("spanAdmin");

    if (vCategory === "") {
        // spanAdmin.innerHTML = "** Please Select Any One";
        alert(" Please Select the Type");
        return false;
    }






    















}






















window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Bar Chart "
        },
        axisY: {
            includeZero: true
        },
        data: [{
            type: "bar", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
            indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 10, y: 71 },
                { x: 20, y: 55 },
                { x: 30, y: 50 },
                { x: 40, y: 65 },
                { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                { x: 60, y: 68 },
                { x: 70, y: 38 },
                { x: 80, y: 71 },
                { x: 90, y: 54 },
                { x: 100, y: 60 },
                { x: 110, y: 36 },
                { x: 120, y: 49 },
                { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
            ]
        }]
    });
    chart.render();





    var chart = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Line Chart "
        },
        axisY: {
            includeZero: true
        },
        data: [{
            type: "line", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
            indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 10, y: 71 },
                { x: 20, y: 55 },
                { x: 30, y: 50 },
                { x: 40, y: 65 },
                { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                { x: 60, y: 68 },
                { x: 70, y: 38 },
                { x: 80, y: 71 },
                { x: 90, y: 54 },
                { x: 100, y: 60 },
                { x: 110, y: 36 },
                { x: 120, y: 49 },
                { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
            ]
        }]
    });
    chart.render();




    var chart = new CanvasJS.Chart("chartContainer3", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "dark1", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Area Chart "
        },
        axisY: {
            includeZero: true
        },
        data: [{
            type: "area", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
            indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 10, y: 71 },
                { x: 20, y: 55 },
                { x: 30, y: 50 },
                { x: 40, y: 65 },
                { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                { x: 60, y: 68 },
                { x: 70, y: 38 },
                { x: 80, y: 71 },
                { x: 90, y: 54 },
                { x: 100, y: 60 },
                { x: 110, y: 36 },
                { x: 120, y: 49 },
                { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
            ]
        }]
    });
    chart.render();




    var chart = new CanvasJS.Chart("chartContainer4", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "dark2", // "light1", "light2", "dark1", "dark2"
        title: {
            text: "Pie Chart "
        },
        axisY: {
            includeZero: true
        },
        data: [{
            type: "pie", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
            indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 10, y: 71 },
                { x: 20, y: 55 },
                { x: 30, y: 50 },
                { x: 40, y: 65 },
                { x: 50, y: 92, indexLabel: "\u2605 Highest" },
                { x: 60, y: 68 },
                { x: 70, y: 38 },
                { x: 80, y: 71 },
                { x: 90, y: 54 },
                { x: 100, y: 60 },
                { x: 110, y: 36 },
                { x: 120, y: 49 },
                { x: 130, y: 21, indexLabel: "\u2691 Lowest" }
            ]
        }]
    });
    chart.render();

}










