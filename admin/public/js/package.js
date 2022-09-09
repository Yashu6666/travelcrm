
    $(".flightInfo") .hover(function(){
        
        $(this).parent().children(".tooltipflight") .show();
    });		
    $(".flightInfo").mouseleave(function(){
        $(".tooltipflight") .hide();
    });	
    $("#addnewbtn").click(function(){
        $("#addnact").show();
    });		
    $(".hotelbox").hide();
    $('.icheck-square-green').on('ifToggled', function(event){
        $(this).parent().parent().parent().parent().parent().parent(".panel-light-green").children(".hotelbox").slideToggle(200);
    });  
    function updatehotelapibook(packageId,apibook){ 
       
        $.ajax({
        url  : '/package/update-customer-package-hotel-api',
        data : { packageId : packageId, apibook : apibook },
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) {        
            //$("#resultdayiten").append(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            }
        });
        
    }
    
    function GoHome(){
     window.location.href = '/package/';   
    }
    
    function DisplayGrid(catID,itnID,cityID){
        var tpsysID = '35787'
        $.ajax({
        url  : '/package/displaycathotel',
        data : { catID : catID, itnID : itnID, cityID : cityID, tpsysID:tpsysID},
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        var image = "<div class= 'col-md-12' style='text-align: center;'><img id='imgId'  style='width: 40px;' src='https://globaltravelexchange.com/public/images/load3.gif'></div>";
             $("#hotelresult_"+itnID+"_"+cityID).html(image);
        },
        success : function(response) {        
            $("#hotelresult_"+itnID+"_"+cityID).html(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            
           //  window.location = '/package/add-package-itinerary/id/'+packageId;
            }
        });
        
    }
    
    function addCity(){
        
    var citystr         =	$("#cityresval").val(); 
    var nightNo         = 	$("#nightNo").val();
    if(citystr=='') {
    alert('Please enter a city.');
    return false;
    }
    if(nightNo<1) {
    alert('Please enter number of nights.');
    return false;
    }
    var cityres         =       citystr.split("_");
    var cityId          =       cityres[0];
    var selectcity      =       cityres[1];    
    var cityloop        = 	$("#cityloop").val();  
    //alert(cityloop);
    var showloop        =      parseInt(cityloop)+parseInt(1);
    //alert(showloop);
    $("#cityloop").val(showloop);
    var htmlres      =      '';
    var htmlres      = '<div class="col-md-12 alert alert-success" id="cityitn'+showloop+'"><div class="col-md-4"><strong>'+selectcity+'</strong><br />\n\
    <span class="small graytxt"><i class="fa fa-globe"></i> Adventure &nbsp;<i class="fa fa-gift"></i> Shopping &amp; Nightlife</span>\n\
    <input type="hidden" name="city'+showloop+'" id="city'+showloop+'" value="'+selectcity+'"></div>\n\
    <div class="col-md-3"><label class="fl" style="line-height:34px;">Night&nbsp;&nbsp;</label>\n\
    <input type="text" id="night'+showloop+'" name="night'+showloop+'" class="countnight form-control whbg numberonly" value="'+nightNo+'" style="width:150px;" maxlength="2" onkeyup="updateloop()" onkeydown="numericonly(event)"></div>\n\
    <div class="col-md-2 text-center"><strong>From</strong><br />Day <span name = "from'+showloop+'" id="from'+showloop+'"></span></div><div class="col-md-2 text-center"><strong>To</strong><br />Day <span name = "to'+showloop+'" id="to'+showloop+'"></span></div>\n\
    <div class="clear"></div></div>';
    $("#loopid").append(htmlres);
    updateloop();
    
    $("#cityval").val('');
    $("#cityresval").val('');
    var fromval    = 	$("#from"+showloop).html();
    var toval    = 	$("#to"+showloop).html();
    var LastCityId    = 	$("#LastCityId").val();
    //alert(fromval);
    
    //alert(toval);
    addDayIten(selectcity,cityId,nightNo,fromval,toval , LastCityId);
    }
    function updateloop(){
    var yourArray = [];
    $("#loopid div.col-md-12").each(function(){
    var idval = $(this).prop('id');              
    var idvalnew = idval.replace(/^cityitn/, "");
    yourArray.push(idvalnew);  
    });
    for (j = 0; j < yourArray.length; j++) {            
        if(j==0) { 
            var idsval      =       yourArray[j];
            var nightval    = 	$("#night"+idsval).val();
            $("#from"+idsval).html(1);
            $("#to"+idsval).html(parseInt(nightval)+parseInt(1));
        }   else { 
            var idsval          = yourArray[j];
            var preid           = yourArray[parseInt(j)-parseInt(1)];
            var nightval        = $("#night"+idsval).val();
            var previousval     = $("#to"+preid).html();                
            $("#from"+idsval).html(previousval);
            $("#to"+idsval).html(parseInt(previousval)+parseInt(nightval));            
            }
        }  
        updateduration();
    }
    
    //$(document).ready(function() {
         
    //    $("input[name=cityval]").autocomplete({
         //   source: '/register/autosuggest-city',
    //    focus: function (event, ui) {
            //event.preventDefault();
          //  $("#tags").val(ui.item.label);
       // },
       // messages: {
       //     noResults: '',
          //  results: function() {}
       // },
       // minLength: 3,
       // select: function (event, ui) {
           // event.preventDefault();
           // var nameres = ui.item.label;  
           // var nameidres = ui.item.value;
           // $("#cityval").val(nameres);
          //  $("#cityresval").val(nameidres+'_'+nameres);
           // }
       // });
        
        
        
        
   // });
    
    
    function get_city_autosuggest(inputId , hiddenInputId, countryInputId) {
     $('#'+inputId).typeahead({
        items: 'all',
        source: function(query, process) {
            $('#'+hiddenInputId).val('');
            var countryId   = (countryInputId && countryInputId != '') ? $("#"+countryInputId).val() : '';

            return $.ajax({
                url: '/general/suggest-city',
                type: 'post',
//                async: false,
                data: {query: query, countryId : countryId},
                dataType: 'json',
                success: function (result) {
                    var resultList = result.map(function (item) {
                        var aItem = {  CityId: item.CityId, Title: item.Title};
                        return JSON.stringify(aItem);
                    });
                    return process(resultList);
                }
            });
        },
        sorter: function (items) {          
           var beginswith = [], caseSensitive = [], caseInsensitive = [], item;
            while (aItem = items.shift()) {
                var item = JSON.parse(aItem);
                if (!item.Title.toLowerCase().indexOf(this.query.toLowerCase())) beginswith.push(JSON.stringify(item));
                else if (~item.Title.indexOf(this.query)) caseSensitive.push(JSON.stringify(item));
                else caseInsensitive.push(JSON.stringify(item));
            }
            return beginswith.concat(caseSensitive, caseInsensitive)
        },
        highlighter: function (obj) {
            var item = JSON.parse(obj);
            var query = this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&');
            return item.Title.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
                return '<strong>' + match + '</strong>'
            })
        },
        updater: function(item) {
            var item = JSON.parse(item);
            $('#'+hiddenInputId).val(item.CityId);
            var nameidres   = item.CityId;
            var nameres   = item.Title;
            $("#cityresval").val(nameidres+'_'+nameres);
           //  $("#cityval").val(nameres);
          //  $("#cityresval").val(nameidres+'_'+nameres);
            return item.Title;
        },
        minLength:3,
//        displayField: 'Title',
    });
}
    
    
    
    
    function addDayIten(city,cityId,day,fromval,toval , LastCityId) {        
        var packageId   =	$("#packageId").val();
        var costCalType   =	$("input[name=cost_cal_type]:checked").val();
        //alert(costCalType)
        var pkgstartdate =  '2022-05-04'
        $.ajax({
        url  : '/package/add-package-day-itenary',
        data : { packageId : packageId, city : city, cityId : cityId, day : day, pkgstartdate:pkgstartdate, fromval : fromval, toval : toval,costCalType:costCalType , LastCityId : LastCityId },
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) {        
            $("#resultdayiten").append(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            
             window.location = '/package/add-package-itinerary/id/'+packageId;
            }
        });
        updateduration();
    }
    function updateitendata(packageId,cityId,day,itenid){
    
        var title     =	$("#title_"+packageId+"_"+cityId+"_"+day).val();
        var saveasMaster     =	$("#saveasMaster_"+packageId+"_"+cityId+"_"+day).prop('checked');
        var startCityId_     =	$("#startCityId_"+packageId+"_"+cityId+"_"+day).val();
        var endCityId_     =	$("#endCityId_"+packageId+"_"+cityId+"_"+day).val();
        
        var saveasMasterCheck = 0;
        if(saveasMaster == true){
            saveasMasterCheck = 1;
        } 
        var detName = "detail_" + packageId + "_" + cityId + "_" + day;
        
        var detail = CKEDITOR.instances[detName].getData();
        //alert(title);
        //alert(detail);
        $.ajax({
        url  : '/package/update-customer-day-itenary-byo',
        data : { packageId : packageId, cityId : cityId, itenid : itenid, day : day, title : title, detail : detail, saveasMasterCheck:saveasMasterCheck,startCityId_:startCityId_,endCityId_:endCityId_ },
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) { 
           // alert('Updated successfully');
            //$("#resultdayiten").append(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            }
        });
        
    }
  
    
    function deleteitnhotelbyo(MealTypeId,RoomTypeId,TPIntSysId,SeqId,VersionId,accosysID,tpsysID,catID,InvnItemSysId){ 
   // alert('test123');    
    var tpsysID = '35787';
    var r = confirm("Are you sure you want to remove this record?");
    if (r == true) {    
        $.ajax({
            url  : '/package/update-customer-ready-package-hotel',
            data : { MealTypeId : MealTypeId,RoomTypeId : RoomTypeId,TPIntSysId : TPIntSysId, SeqId : SeqId, VersionId : VersionId, accosysID : accosysID,InvnItemSysId:InvnItemSysId, catID:catID, type : 'delete' },
            dataType : 'html',
            type : 'POST',
            error : function() {

            },
            beforeSend : function() {
            // $("#markup-table-loader").css("display","inline-block");
            // $("#markup-settings-grid-content").html('');
            },
            success : function(response) { 
             //   window.location = '/package/add-package-itinerary/id/'+tpsysID;
                }
            });
            $('#hotelrow_'+TPIntSysId+'_'+accosysID+'_'+InvnItemSysId).remove();
            return false;
            
          //  window.location = '/package/add-customer-package-itinerary/id/'+tpsysID;
            
        } else {
        
        }
        
    }
    function deleteactivity(versionID){
        var r = confirm("Are you sure you want to remove this record?");
        if (r == true) {   
        $.ajax({
            url  : '/package/update-customer-package-activity-byo',
            data : { versionID : versionID, type : 'delete' },
            dataType : 'html',
            type : 'POST',
            error : function() {
            },
            beforeSend : function() {
            // $("#markup-table-loader").css("display","inline-block");
            // $("#markup-settings-grid-content").html('');
            },
            success : function(response) { 
                //$("#markup-settings-grid-content").html(response);
                //$("#markup-table-loader").css("display","none"); 
                }
            });
            $('#actcl_'+versionID).remove();
            $.post("/package/getallitinerary/",{itnID:TPIntSysId}, function(data){
                var trimdata = data.trim();   
                var strdata = trimdata.split("|");
                $("#itntxt_"+strdata[0]).html(strdata[1]);      
            });
       }
    }    
    function deleteitnact(TPIntSysId,Sequence,VersionId,TPActivitySysId,CityId){
        
    var r = confirm("Are you sure you want to remove this record?");
    if (r == true) {   
        $.ajax({
            url  : '/package/update-customer-package-activity',
            data : { TPIntSysId : TPIntSysId, Sequence : Sequence, VersionId : VersionId, TPActivitySysId : TPActivitySysId, CityId : CityId, type : 'delete' },
            dataType : 'html',
            type : 'POST',
            error : function() {
            },
            beforeSend : function() {
            // $("#markup-table-loader").css("display","inline-block");
            // $("#markup-settings-grid-content").html('');
            },
            success : function(response) { 
                //$("#markup-settings-grid-content").html(response);
                //$("#markup-table-loader").css("display","none"); 
                }
            });
            $('#actcl_'+TPIntSysId+'_'+Sequence+'_'+VersionId+'_'+TPActivitySysId+'_'+CityId).remove();
            $.post("/package/getallitinerary/",{itnID:TPIntSysId}, function(data){
                var trimdata = data.trim();   
                var strdata = trimdata.split("|");
                $("#itntxt_"+strdata[0]).html(strdata[1]);      
            });
       } else {
        
       }
    }
    
    function deletessdetail(versionID){
        var r = confirm("Are you sure you want to remove this record?");
        if (r == true) {
            $.ajax({
                url  : '/package/update-customer-package-sightseen-byo',
                data : { versionID : versionID, type : 'delete' },
                dataType : 'html',
                type : 'POST',
                error : function() {

                },
                beforeSend : function() {
                // $("#markup-table-loader").css("display","inline-block");
                // $("#markup-settings-grid-content").html('');
                },
                success : function(response) { 
                    //$("#markup-settings-grid-content").html(response);
                    //$("#markup-table-loader").css("display","none");
                    }
                });
                 $('#sscl_'+versionID).remove();
                 $.post("/package/getallitinerary/",{itnID:TPIntSysId}, function(data){
                var trimdata = data.trim();   
                var strdata = trimdata.split("|");
                $("#itntxt_"+strdata[0]).html(strdata[1]);      
            });
        }  
        return false;
    }    
    
    
    function deleteitnsight(InvnItemSysId,SeqId,VersionId,SSSysId,CityId){   
        var r = confirm("Are you sure you want to remove this record?");
        if (r == true) {
            $.ajax({
                url  : '/package/update-customer-package-sightseen',
                data : { InvnItemSysId : InvnItemSysId, SeqId : SeqId, VersionId : VersionId, SSSysId : SSSysId, CityId : CityId, type : 'delete' },
                dataType : 'html',
                type : 'POST',
                error : function() {

                },
                beforeSend : function() {
                // $("#markup-table-loader").css("display","inline-block");
                // $("#markup-settings-grid-content").html('');
                },
                success : function(response) { 
                    //$("#markup-settings-grid-content").html(response);
                    //$("#markup-table-loader").css("display","none");
                    }
                });
                $('#sscl_'+InvnItemSysId+'_'+SeqId+'_'+VersionId+'_'+SSSysId+'_'+CityId).remove();
                $.post("/package/getallitinerarybyo/",{itnID:InvnItemSysId}, function(data){
                var trimdata = data.trim();   
                var strdata = trimdata.split("|");
                $("#itntxt_"+strdata[0]).html(strdata[1]);      
            });
        } else {
        
       }
    }
    
    
    
    function sortprice(){
        var tpintsysID = $("#selectedtpintsysID").val();
        var cityname = $("#selectedcityname").val();
        var daycountres = $("#selecteddaycounters").val();
        var packageId = '35787'
        var cityId = $("#selectedcityID").val();
        var selectstar = $("#select-star").val();
        var agentId = $("#agencysysID").val();
        var day = $("#dayseq").val();
        var packstartdate   =	$("#packstartdate").val();   
        var selectprice = $("#select-price").val();
        $.ajax({
        url  : '/package/get-agent-city-hotel-customer',
        data : { packageId : packageId, cityname :cityname, agentId : agentId, tpintsysID:tpintsysID, cityId : cityId, day : day, packstartdate : packstartdate, pricerange : selectprice, selectstar : selectstar, daycountres:daycountres, type : 'customer' },
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) {        
            $("#internaldealshotel").html(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            }
        });
    }    
    function ViewAllHotels(packageId,cityId,agentId,day,cityname,tpintsysID){
        
        var pkgcategory = $("input[name='packagecategory_"+tpintsysID+"']:checked").val();
        if(pkgcategory == undefined){
            alert('please select package category');
        
          //  $("#myModa1changehotelsbyo").modal('close');
           
            //return false;
        }    
        else{
          //  alert('test123');
            $("#selectedtpintsysID").val(tpintsysID);         
            $("#selectedcityID").val(cityId);
            $("#agencysysID").val(agentId);
            $("#dayseq").val(day);
            $("#selectedcityname").val(cityname);
            var packstartdate   =	$("#packstartdate").val();  
            var daycountres = $("#daycountres").html();
            $("#selecteddaycounters").val(daycountres);
            var roominfojson = '{"1":{"Adult":"2","Child":null,"Infant":null,"departuredate":"2022-05-04","returndate":""}}'
            $.ajax({
                url : '/package/hotelsearchformpkg',
                data : { packageId : packageId, tpintsysID : tpintsysID, agentId : agentId, cityId : cityId, day : day, packstartdate : packstartdate,   daycountres : daycountres, cityname : cityname, roominfojson : roominfojson, pkgcategory:pkgcategory,  type : 'customer' },
                dataType : 'html',
                type : 'POST',
                error : function() {
                },
                beforeSend : function() {
                },
                success : function(response){
                    //alert(response);

                    $("#hotelgrid").html(response);
                }    
            });
        }
    }    
    function getAgentInternalActivity(packageId,cityId,agentId,day,tpintsysID,descover) {
        var packstartdate   =	$("#packstartdate").val();   
        var daycountres = $("#selecteddaycounters").val();
        $.ajax({
        url  : '/package/get-agent-activity-customer-byo',
        data : { packageId : packageId, agentId : agentId, cityId : cityId, day : day, tpintsysID : tpintsysID, packstartdate : packstartdate, daycountres:daycountres, type : 'customer',descover:descover},
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) {        
            $("#internaldealsactivity").html(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            }
        });
    }
    function getAgentInternalSightseen(packageId,cityId,agentId,day,tpintsysID,descover) {
        var packstartdate   =	$("#packstartdate").val();   
        var daycountres = $("#selecteddaycounters").val();
        $.ajax({
        url  : '/package/get-agent-sightseen-customer-byo',
        data : { packageId : packageId, agentId : agentId, cityId : cityId, day : day, tpintsysID:tpintsysID, packstartdate : packstartdate, daycountres:daycountres, type : 'customer',descover:descover },
        dataType : 'html',
        type : 'POST',
        error : function() {

        },
        beforeSend : function() {
        // $("#markup-table-loader").css("display","inline-block");
        // $("#markup-settings-grid-content").html('');
        },
        success : function(response) {        
            $("#internaldealssightseen").html(response);
            //$("#markup-settings-grid-content").html(response);
            //$("#markup-table-loader").css("display","none");
            }
        });
    }
    function updateduration(){
        var countnight = '0';
        $( ".countnight" ).each(function( index ) {
            countnight = parseInt(countnight)+parseInt($( this ).val());
        });
        $("#nightcountres").html(countnight);
        $("#daycountres").html(parseInt(countnight)+parseInt(1));
       
    }
    updateduration();
    
    function SaveAsDraft(tpsysID,tabname){
        $.ajax({
             url  : '/package/saveasdraftbyo',
             data : { tpsysID : tpsysID, tabname : tabname},
             dataType : 'html',
             type : 'POST',
             error : function() {

             },
             beforeSend : function() {
                 
             // $("#markup-table-loader").css("display","inline-block");
             // $("#markup-settings-grid-content").html('');
             },
             success : function(response) { 
                    alert('you have saved the package as draft');
                 }
             });
    }
     function GetSupplierInfo(suppliersysID){
        $.ajax({
            url : '/package/supplierinfo/',
            data : {suppliersysID:suppliersysID},
            type : 'POST',
            dataType : 'html',
            error : function(){
            },
            beforeSend :function(){
                
            },
            success : function(response){
               $("#myModactpopup").show();
               $("#myModactpopup").html(response);
               
               //alert(response);
            }    
        });
    }    
    function ShowActivitydiv(val){
        if(val == 'Search'){
            $("#searchact").show();
            $("#activies").hide();
            $("#addhtldiv").removeClass('active');
            $("#srchtldiv").addClass('active');
            
        }
        if(val == 'Add'){
            $("#activies").show();
            $("#searchact").hide();
            $("#srchtldiv").removeClass('active');
            $("#addhtldiv").addClass('active');
            
        }
    }
    
    function ShowSightdiv(val){
        if(val == 'Search'){
            $("#searchsight").show();
            $("#addsightseeing").hide();
            $("#addsightdiv").removeClass('active');
             $("#srcsightdiv").addClass('active');
            
        }
        if(val == 'Add'){
            $("#addsightseeing").show();
            $("#searchsight").hide();
            $("#srcsightdiv").removeClass('active');
            $("#addsightdiv").addClass('active');
            
        }
    }
    
    
    function closepopup(){
             $("#myModactpopup").hide();
             $("#myModa11").hide();
        }
    function closeactpopup(){
            var tpsysID = '35787';
             $("#myModalSightseen").hide();
             window.location = '/package/add-package-itinerary/id/'+tpsysID;
        }   
    function closepopup2(){
             $("#myModa1activities").modal('hide');
         //    window.location = '/package/add-customer-package-itinerary/id/'+tpsysID;
        }   
    function closesspopup(){
             $("#myModalSightseen").modal('hide');
         //    window.location = '/package/add-customer-package-itinerary/id/'+tpsysID;
        }       
    function deleteitenary(ItenaryID,tpsysID,totitenary)
    {        
        var r = confirm("Are you sure you want to delete?");
        if(r == true){
            $.ajax({
            url  : '/customer/deletepkgitenarybyo',
            data : { ItenaryID : ItenaryID, tpsysID : tpsysID, totitenary : totitenary},
            dataType : 'json',
            type : 'POST',
            error : function() {

            },
            beforeSend : function() {
            // $("#markup-table-loader").css("display","inline-block");
            // $("#markup-settings-grid-content").html('');
            },
            success : function(response) {        
                window.location = '/package/add-customer-package-itinerary/id/'+tpsysID;
                //$("#internaldealssightseen").html(response);
                //$("#markup-settings-grid-content").html(response);
                //$("#markup-table-loader").css("display","none");
                }
            });
        }    
        else{
            
            window.location = '/package/add-package-itinerary/id/'+tpsysID;
        }    
    }
    
    function GetSupplierInfo(suppliersysID){
         $.ajax({
            url : '/package/supplierinfo/',
            data : {suppliersysID:suppliersysID},
            type : 'POST',
            dataType : 'html',
            error : function(){
            },
            beforeSend :function(){
                
            },
            success : function(response){
               $("#myModa11").show();
               $("#myModa11").html(response);
               
               //alert(response);
            }    
        });
        
        }
    
      function resetFilters(attribute) {
            $('.' + attribute).iCheck('uncheck');
            $("#" + attribute).val('');
            $("#filterByHotelName_clear").hide();
            $("#page").val('1');
            SearchHotel();
            //$("#filterFlag").val('');
      }    
      function FilterByStar(){
       // alert('sdsd');  
            var checkedRatingChk = $('.filterByRatings:checkbox:checked').map(function () {
            return this.value;
        }).get();
        var strRatingChk = checkedRatingChk.join(",");
       
        $("#filterByRatingsStar").val(strRatingChk);
        $("#filterFlag").val('0');
        $("#scrollFlag").val('0');
        $("#page").val('1');
        setTimeout(function () {
            SearchHotel();
        }, 100);
      }    
     
     
    
    function SearchHotel()
    {
        
        $("#filterByContainer").show();
        var fromdate =  $("#fromdate").val();
        if(fromdate == ''){
            alert('Please Enter Check In Date');
            $("#fromdate").focus();
            return false;
        }  
        var nights = $("#nights").val();
        if(nights == "0"){
            alert('Please Enter number of nights to stay');
            $("#nights").focus();
            return false;
        }    
        var todate = $("#todate").val();
        $("#chekInDate").val(fromdate);
        $("#chekOutDate").val(todate);
        var data = $('#hoterlsearchpkgfrm').serialize();
        $.ajax({
                url: '/buyhotel/save-search-query',
                data: data,
                type: 'POST',
                datatype : 'json',    
                beforeSend: function (data) {
                    $("#searchHotelButton").attr("disabled",true);
                    $("#searchHotelButton").html("Please wait...");
                },
                success: function (data) {
                var frmdata = $('#hoterlsearchpkgfrm').serialize();    
                //alert(frmdata);
                $.ajax({
                    url: '/buyhotel/search-results',
                    data: frmdata,
                    type: 'POST',

                    beforeSend: function (data) {

                            $("#hotel-search-loader").show();

                            $("#searchHotelButton").attr("disabled",true);
                            $("#searchHotelButton").html("Please wait...");
                    },
                    success: function (response) {

                             $("#hotel-search-loader").hide();

                            $("#hotelresults").html(response);
                            $("#loadmore").show();
                    },
                    error:function(){
                            alert("fail : Please try after some time");
                    }
                });    

                },
                error:function(){
                        alert("fail : Please try after some time");
                }
        });
    }
    
    
    
    function updatePackageCostCalType(typeId,selectionTxt){
        
        var conf = confirm('Your package cost will be created as per costing type selection made. Are you sure want to select "'+selectionTxt+'". You would not be able to edit this, once you submit final cost with markup on cost sheet.');
        if(conf == true){
            $.ajax({
                url: '/package/update-package-cost-cal-type',
                data: {costCalType:typeId,TPSysId:'35787'},
                type: 'POST',
                beforeSend: function (data) {

                },
                success: function (response) {
                }
            });
        }
        return false;
        
    }

  function autosuggest_title_program(startCity,endCity,idVar){
    $("#title_"+idVar).autocomplete({
    source: '/package/get-autosuggest-title-program/startCity/'+startCity+'/endCity/'+endCity,
    minLength: 0,
    select: function (event, ui) {
        CKEDITOR.instances["detail_" + idVar].setData(ui.item.Description);
//         $("#detail_"+idVar).val(ui.item.Description);
    }
  });
}  
 function savesightseeingdynamicpackage(tpid,placeid,seq,tpintid){
     var sight = $('#sight_'+placeid+'_'+seq).val();
//      var frmdata = $('#itinerary').serialize();
     $.ajax({
                url: '/package/savesightseeingdynamicpackage',
                data: {sight : sight,tpid:tpid,tpintid:tpintid,seq:seq},
                type: 'POST',
                beforeSend: function (data) {

                },
                success: function (response) {
                    if(response != 1 && response !== ''){
                    alert('There is some error in adding sightseeing. Please refresh page and try again.');
                }
                }
            });
 }




 ///

 
 var AgencySysIdJs = '4553';
 var ExtensionNo = '';
 channel.bind('my-event', function (data) {
     if (data.extension == ExtensionNo) {
         $('#myModal_leftsidepopup').show();
         if (data.IsCustomer == true) {
             var CustomerName = data.CustomerName;
             var CustomerId = data.CustomerId;
             $('.customerNameOrPhone').html(CustomerName);
             $('#noteViewProfile').attr('href', '/customer/customer-profile-desc/id/' + btoa(CustomerId));
             $('.noteCancelProfile, .noteViewProfile').show();
             $('.noteAddCustomer').hide();
             $('#noteMobileNumber').val(MobileNumber);
         } else {
             var MobileNumber = data.MobileNumber;
             $('.customerNameOrPhone').html(MobileNumber);
             $('#noteMobileNumber').val(MobileNumber);
             $('.noteAddCustomer').show();
             $('.noteCancelProfile, .noteViewProfile').hide();
         }

     }
 });

 ///

 
 var modal = document.getElementById("myModal_leftsidepopup");
 var btn = document.getElementById("noteCancelProfile");
 var btn2 = document.getElementById("popupclose_left");
 var span = document.getElementsByClassName("close")[0];
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 function closeNotePopup() {
     modal.style.display = "none";
 }
 function redirectAddCustomer() {
     var noteMobileNumber = $('#noteMobileNumber').val();
     localStorage.setItem("notificationAddCustomer", 1);
     localStorage.setItem("notificationMobileNumber", noteMobileNumber);
     window.location.href = '/dashboard/agency';
 }


 $().ready(function() {
            
    $('#oneway_departure_date').datepicker({
       dateFormat:'dd/mm/yy',
       'minDate':'05/05/2022',
       'maxDate':'+19116D'
 
});
   
   
   
  
       

          

    
//            var strDepartureDate = new Date($('#oneway_departure_date').val()); 
//            alert(strDepartureDate)
  
       
   
   
   
   $( "#oneway_departure_date" ).blur(function(){
       $( "#return_date" ).val($(this).val());
   })
   
   
   
/* Show Hide the Boxes for One Way & round Trip Jaourney starts  */    
   
   
   $('.onWay').on('ifChecked', function(event){
     
       $("#onWay-tab").show();
       $(".return-date").hide();
   });
   
   
   $('.roundTrip').on('ifChecked', function(event){
       var is_oneway = $("#is_oneway").val(2);
       $( "#return_date" ).val($( "#oneway_departure_date" ).val());
       $(".return-date").show();
   });

   
   $("#onWay").click(function() {  
       var is_oneway = $("#is_oneway").val(1);
$("#onWay-tab").show();
       $(".return-date").hide();
   });

   $("#roundTrip").click(function() {
       var is_oneway = $("#is_oneway").val(2);
       $( "#return_date" ).val($( "#oneway_departure_date" ).val());
       $(".return-date").show();
   });
   
   
  
   
});
function LoadMore(val)
{
   var is_oneway = $("#is_oneway").val(); 
   var sourceID = $("#sourceID").val();
   var page = $('#page').val();
   pagenum = parseInt(page)+1;
   $('#page').val(pagenum);
   var page2 = parseInt($('#page2').val());
   var totalPage = parseInt($('#totalPage').val());
   var totalPage2 = parseInt($('#totalPage2').val());
   var source_api = $("#source_api").val();
   var filterFormData = '';
   //alert(page);
    if(source_api == 'API'){
    //  var posturl = '/flight/search-result-api';
      var posturl = '/package/search-result-from-pkg';
    }
    if(source_api == 'Inventory'){
    //  var posturl = '/flight/search-result-api';
      var posturl = '/flight/search-result-from-inventory';
    } 
    //alert(page);
       $.ajax({
           url  : posturl,
           dataType: "html",
           method: 'post',
           data: filterFormData+"&page="+page+"&sourceID="+sourceID,
           beforeSend:function(){
               $("#no-more-records").css("display","none");
               //$("#allairlines-ajax-loader").css("display","block");
           },
           success: function( response ) {
               
              //alert(page)
               showAllAirlines(val,pagenum);//alert(data)
               //$("#oneWayTable tbody").append(response);
               
           },
           error: function( data ){
                   flag = true;
                   $("#allairlines-ajax-loader").css("display","none");
                   no_data = false;
                   alert('Something went wrong, Please contact admin');
           }
       });


   
   
}


function searchFlights(val) {
   var source_api = $("#source_api").val();
   var from = '';
   var to = '';
   var departure_dates = '';
   var adults = '';
   var child = '';
   var infant = '';
   var flight_class = '';
   var return_dates = '';
   var from = '';
   var to = '';
   var oneway_origin_text      = '';
   var oneway_destination_text = '';
   var route = $("input[name=radioRedCheckbox4]:checked").val();
   var from = $('select[name="oneway_from"]').val();
   var to = $('select[name="oneway_to"]').val();
   var oneway_origin_text = $('select[name="oneway_from"]').val();
   var oneway_destination_text = $('select[name="oneway_to"]').val();
   var departure_dates = $('input[name="oneway_departure_date"]').val();
   var adults          = $('select[name="oneway_adults"]').val();
   var child           = $('select[name="oneway_child"]').val();
   var infant          = $('select[name="oneway_infant"]').val();
   var flight_class    = $('select[name="oneway_class"]').val();
   var return_dates    = $('input[name="return_date"]').val();
   var page = $('#page').val('1');
   showAllAirlines(val,page);
}

function showAllAirlines(val,page) {  
  var is_oneway = $("#is_oneway").val();  
   //alert(is_oneway);
  var source_api = $("#source_api").val();
  $("#sourceapi").val(source_api);
  var filterFormData = $("#frmSearchFlightSearch").serialize();
 
  if(source_api == 'API'){
    //  var posturl = '/flight/search-result-api';
      var posturl = '/package/search-result-from-pkg';
  }
  if(source_api == 'Inventory'){
    //  var posturl = '/flight/search-result-api';
      var posturl = '/package/search-result-from-pkg';
  }
  var sourceID = $("#sourceID").val();
  var tplanitinraryID = $("#tpiitinraryID").val();
  
  $.ajax({
   url  : posturl,
   data : filterFormData+"&page="+page+"&tplanitinraryID="+tplanitinraryID,
   dataType : 'html',
   type : 'POST',
   error : function() {
   },
   beforeSend : function() {
        $("#one-way-search-flight-loader").show();
   },
   success : function(response) { //n alert(response)
       setTimeout(function(){
           $("#one-way-search-flight-loader").hide();
            $("#one-way-search-flight").show();
       },600);
      if(is_oneway == '1'){

          $("#allairlines").hide();
          $("#allairlines #singletrip").hide(); 
          $("#allairlines #roundtripgrid").hide();
          $("#oneWayTable").show();
          $("#loadmore").show();
           $("#twowayflightinfo").hide();
           if(val == 'loadmore'){ //alert("BYE")
            $("#oneWayTable tbody").append(response);
           }
           else{ //alert("HI")
               $("#oneWayTable tbody").html(response);
           }
      }
      else{
           //$("#oneWayTable").html('');
           $("#oneWayTable").hide();
           $("#allairlines").show();
           $("#allairlines #singletrip").show();
           $("#allairlines #roundtripgrid").show();
           //$("#twowayflight").show();
           var resTXT = response.split("~~~"); 
           //var kabhailTxt = response.split("%%%");
           $("#twowayflightinfo").show();
            $("#loadmore").show();    
          // $("#twowayflightinfo").html(kabhailTxt[1]);
         // alert(val);
          if(val == 'loadmore'){
          //  alert('test123');  
           $("#allairlines #singletrip tbody").append(resTXT[0]);
           $("#allairlines #roundtripgrid tbody").append(resTXT[1]);
          }
          else{
         //  alert('ohhh');   
           $("#allairlines #singletrip tbody").html(resTXT[0]);
           $("#allairlines #roundtripgrid tbody").html(resTXT[1]);
          }
         
           
      }
     //
   
   }
});

}


function AddReadyMadeFlight(invsysID,price,flightnum,airlinesysID,stopcount,flightduration,sourceplaceID,DestplaceID,sourceapcode,destapcode,apiname,rownum,arrivaltime,depdate)
{
var onewayadults  = $("#oneway_adults").val();
var onewaychild  = $("#oneway_child").val();
var onewayinfant  = $("#oneway_infant").val();
var onewaydeparture = $("#oneway_departure_date").val();
var tpintsysID = $("#travelplanitenaryID").val();
var seqID = $("#sequuenceID").val();
$.ajax({
  url  : '/customer/addflightinventorypkg',
  data : { invsysID:invsysID, price:price, flightnum:flightnum,airlinesysID:airlinesysID, stopcount:stopcount, flightduration:flightduration, sourceplaceID:sourceplaceID, DestplaceID:DestplaceID, sourceapcode:sourceapcode, destapcode:destapcode, onewayadults:onewayadults, onewaychild:onewaychild, onewayinfant:onewayinfant , onewaydeparture:onewaydeparture , tpintsysID:tpintsysID , seqID:seqID , apiname:apiname , arrivaltime:arrivaltime , depdate:depdate},
  dataType : 'html',
  type : 'POST',
  error : function() {

  },
  beforeSend : function() {
  // $("#markup-table-loader").css("display","inline-block");
  // $("#markup-settings-grid-content").html('');
  },
  success : function(response) { 
       //alert(response);
       $("#flightresult_"+tpintsysID+" tbody").append(response);
       $("#apiselect_"+rownum).hide();
       $("#apinotselect_"+rownum).show();
       //$('.close').trigger('click');
 }
});
}

function AlreadySelect(){
alert('you have already selected this flight');
}


function AddOneWayFlight(invsysID,flightnum,price,airlinesysID,flightduration,sourceplacesysID,destplacesysID,sourceapcode,destapcode,stop)
{
$("#twowayinventory").val(invsysID);
$("#twowayprice").val(price);
$("#twowayflightnum").val(flightnum);
$("#twowayairlinesysID").val(airlinesysID);
$("#twowaystopcount").val(stop);
$("#twowayflightduration").val(flightduration);
$("#twowaysourceplaceID").val(sourceplacesysID);
$("#twowayDestplaceID").val(destplacesysID);
$("#twowaysourceapcode").val(sourceapcode);
$("#twowaydestapcode").val(destapcode);

}

function AddReturnFlight(invsysID,flightnum,price,airlinesysID,flightduration,sourceplacesysID,destplacesysID,sourceapcode,destapcode,stop)
{
$("#twowayinventoryrt").val(invsysID);
$("#twowaypricert").val(price);
$("#twowayflightnumrt").val(flightnum);
$("#twowayairlinesysIDrt").val(airlinesysID);
$("#twowaystopcountrt").val(stop);
$("#twowayflightdurationrt").val(flightduration);
$("#twowaysourceplaceIDrt").val(sourceplacesysID);
$("#twowayDestplaceIDrt").val(destplacesysID);
$("#twowaysourceapcodert").val(sourceapcode);
$("#twowaydestapcodert").val(destapcode);
}
function selectFlights(){
if (!$("input[name='onewayflight1']:checked").val()) {
alert('please select one way flight');
return false;
}  
if (!$("input[name='twowayflight']:checked").val()) {
alert('please select two way flight');
return false;
}
var invsysID = $("#twowayinventory").val();
var price = $("#twowayprice").val();
var finalprice = parseInt(price.replace(",",""));
var flightnum = $("#twowayflightnum").val();
var airlinesysID = $("#twowayairlinesysID").val();
var stopcount =  $("#twowaystopcount").val();
var flightduration = $("#twowayflightduration").val();
var sourceplaceID = $("#twowaysourceplaceID").val();
var DestplaceID = $("#twowayDestplaceID").val();
var sourceapcode = $("#twowaysourceapcode").val();
var destapcode = $("#twowaydestapcode").val();
var onewayadults  = $("#oneway_adults").val();
var onewaychild  = $("#oneway_child").val();
var onewayinfant  = $("#oneway_infant").val();
var onewaydeparture = $("#oneway_departure_date").val();
var tpintsysID = $("#travelplanitenaryID").val();
var seqID = $("#sequuenceID").val();
$.ajax({
  url  : '/customer/addflightinventory',
  data : { invsysID:invsysID, price:finalprice, flightnum:flightnum,airlinesysID:airlinesysID, stopcount:stopcount, flightduration:flightduration, sourceplaceID:sourceplaceID, DestplaceID:DestplaceID, sourceapcode:sourceapcode, destapcode:destapcode, onewayadults:onewayadults, onewaychild:onewaychild, onewayinfant:onewayinfant , onewaydeparture:onewaydeparture , tpintsysID:tpintsysID , seqID:seqID},
  dataType : 'html',
  type : 'POST',
  error : function() {

  },
  beforeSend : function() {
  // $("#markup-table-loader").css("display","inline-block");
  // $("#markup-settings-grid-content").html('');
  },
  success : function(response) { 
     InsertReturnFlight();
 }
});
}
function InsertReturnFlight()
{
var invsysID = $("#twowayinventoryrt").val();
var pricert = $("#twowaypricert").val();
var finalpricert = parseInt(pricert.replace(",",""));
var flightnumrt = $("#twowayflightnumrt").val();
var airlinesysIDrt = $("#twowayairlinesysIDrt").val();
var stopcountrt = $("#twowaystopcountrt").val();
var flightdurationrt = $("#twowayflightdurationrt").val();
var sourceplaceIDrt = $("#twowaysourceplaceIDrt").val();
var DestplaceIDrt = $("#twowayDestplaceIDrt").val();
var sourceapcodert = $("#twowaysourceapcodert").val();
var destapcodert =  $("#twowaydestapcodert").val();
var onewayadults  = $("#oneway_adults").val();
var onewaychild  = $("#oneway_child").val();
var onewayinfant  = $("#oneway_infant").val();
var onewaydeparture = $("#oneway_departure_date").val();
var tpintsysID = $("#travelplanitenaryID").val();
var seqID = $("#sequuenceID").val();
var tpsysID = '35813';
$.ajax({
  url  : '/customer/addflightinventory',
  data : { invsysID:invsysID, price:finalpricert, flightnum:flightnumrt,airlinesysID:airlinesysIDrt, stopcount:stopcountrt, flightduration:flightdurationrt, sourceplaceID:sourceplaceIDrt, DestplaceID:DestplaceIDrt, sourceapcode:sourceapcodert, destapcode:destapcodert, onewayadults:onewayadults, onewaychild:onewaychild, onewayinfant:onewayinfant , onewaydeparture:onewaydeparture , tpintsysID:tpintsysID , seqID:seqID},
  dataType : 'html',
  type : 'POST',
  error : function() {

  },
  beforeSend : function() {
  // $("#markup-table-loader").css("display","inline-block");
  // $("#markup-settings-grid-content").html('');
  },
  success : function(response) { 
    // AddReturnFlight();
    window.location = '/package/add-customer-package-transport/id/'+tpsysID;
 }
});
}
$(".dailiit").click(function(){
    $("#hotelo").hide();
    $("#landid").show();
});			
$(".onlyh").click(function(){
    $("#hotelo").show();
    $("#landid").hide();
});	
$(".fcost").click(function(){
$("#fcostbox").fadeIn(200);
$("#iwishcostbox").hide();

});			
$(".iwisecost").click(function(){
$("#iwishcostbox").fadeIn(200);
$("#fcostbox").hide();
});	

$("#flightcheck").click(function(){
$("#flightbox").fadeIn(200);
});
function ShowFixedCost(tpdayID){
$("#modsrchdetail_"+tpdayID).show();
$("#modhoteldetail_"+tpdayID).hide();
$("#modhotelflightdetail_"+tpdayID).hide();
$("#modpackagedetail").hide();
}

function ShowFlightDeal(tpdayID){
$("#modsrchdetail_"+tpdayID).hide();
$("#modhoteldetail_"+tpdayID).show();
$("#modhotelflightdetail_"+tpdayID).hide();
$("#modpackagedetail").hide();
}
function updategrouptype(Capacity,Title,TotalPrice,TPSysId,vehicalsysID,RouteSysId,RouteVechSysId,fixtransID)
{            
var totaltraveler = '2';
$.ajax({
url  : '/package/update-group-type',
data : { TPSysId : TPSysId, Capacity:Capacity,TotalPrice:TotalPrice,Title:Title, vehicalsysID : vehicalsysID, RouteSysId:RouteSysId, TransType : 'car', TransTypeCat : 'car', totaltraveler,totaltraveler, RouteVechSysId:RouteVechSysId, fixtransID:fixtransID },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        
alert(response);
}
});
}

$("select").change(function(){
$(this).find("option:selected").each(function(){
if($(this).attr("value")=="addnew"){
$("#myModa1Modify").modal();
}            

});
}).change();

function closepopup(){
$("#myModa11").hide();
}    

function getInventoryFilght(tpintsysID,tpsysID){
$.ajax({
url  : '/package/addflightinv',
data : { tpintsysID : tpintsysID, tpsysID:tpsysID},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {   

$("#addflightinvdiv").html(response);
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
}
});
}

function AddInventoryFlight(){
var tpintsysID = $("#tpintsysID").val();
var frmdata = $('#flightinvform').serialize();
$.ajax({
url: '/package/addflightinventory',
// data: {search_going_to:search_going_to,search_price_range:search_price_range,search_inclusions:search_inclusions,search_theme:search_theme,number_of_traveler:number_of_traveler,customerID:customerID,search_specific_date:search_specific_date,TPSysId:TPSysId,itenaryID:itenaryID,roominfojson:roominfojson},
data: frmdata,
method: 'POST',
dataType: 'html',
error: function (err) {
},
success: function (response) {
alert(response);
alert(tpintsysID);
$("#flightfixed_"+tpintsysID).val(response);
}
});

}

function getAgentInternalFlight(packageId,cityId,agentId,day,tpintsysID) {
var packstartdate   =	$("#packstartdate").val();
var pricerange = $("#select-price").val();
var stops = $("#select-stops").val();
$("#travelplanitenaryID").val(tpintsysID);
$("#tpiitinraryID").val(tpintsysID);
$("#sequuenceID").val(day);
$.ajax({
url  : '/package/flightapiresultpkg',
data : { packageId : packageId, agentId : agentId, cityId : cityId, day : day, packstartdate : packstartdate, pricerange : pricerange, stops : stops, tpintsysID :tpintsysID, type : 'customer'  },
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {   

$("#internaldealsflight").html(response);
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
}
});
}

function FilterHotel(packageId,cityId,agentId,day){
var packstartdate   =	$("#packstartdate").val();
var pricerange = $("#select-price").val();
var stops = $("#select-stops").val();
$.ajax({
url  : '/package/get-agent-flight',
data : { packageId : packageId, agentId : agentId, cityId : cityId, day : day, packstartdate : packstartdate, pricerange : pricerange, stops : stops, type : 'customer'  },
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        
$("#internaldealsflight").html(response);
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
}
});

}

function addfixedflight(tpintsysId){

var fixedfrom    =   $("#fixedfrom_"+tpintsysId).val(); 
var fixedto      =   $("#fixedto_"+tpintsysId).val(); 
var costperson   =   $("#costperson_"+tpintsysId).val(); 
var packageId    =   $("#packageId").val();
var action =        'Add';
var splitstring = fixedfrom.split('_');
var fromcityval = splitstring[0];
var fromcityname = splitstring[1];
var splitstrfixedto = fixedto.split('_');
var fixedtocityval = splitstrfixedto[0];
var fixedtocityname = splitstrfixedto[1];
var totaltraveler = '2'
var htmlres = '<tr><td><span>'+fromcityname+'</span></td><td><span>'+fixedtocityname+'</span></td><td><span>'+costperson+'</span></td><td><button title="" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-danger tooltipLink" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td></tr>'; 
$.ajax({
url  : '/package/add-customer-package-trans-fixed',
data : { TPSysId : packageId, totaltraveler:totaltraveler,action:action,cost:0, tpintsysId : tpintsysId, TransType : 'flight', TransTypeCat : 'flight', FromPlace : fromcityval, ToPlace : fixedtocityval, CostPerson : costperson, Capacity : '0' },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        
$("#flightfixed_"+tpintsysId).append(htmlres);
}
});
}
function addfixedbus(tpintsysID){
var pkgID           =   '35813'
var fixedbusfrom    =   $("#fixedbusfrom_"+tpintsysID).val(); 
var fixedbusto      =   $("#fixedbusto_"+tpintsysID).val(); 
var buscostperson   =   $("#buscostperson_"+tpintsysID).val(); 
var packageId        =  $("#packageId").val();
var splitstring = fixedbusfrom.split('_');
var fromcityval = splitstring[0];
var fromcityname = splitstring[1];
var splitstrfixedto = fixedbusto.split('_');
var fixedtocityval = splitstrfixedto[0];
var fixedtocityname = splitstrfixedto[1];
var vehsysID = '';
var routevehsysID = '';
var action = 'Add';
var cost = 0;

var totaltraveler = '2'
var htmlres = '<tr><td><span>'+fromcityname+'</span></td><td><span>'+fixedtocityname+'</span></td><td><span>'+buscostperson+'</span></td><td><button title="" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-danger tooltipLink" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td></tr>';
$.ajax({
url  : '/package/add-customer-package-trans-fixed-byo',
data : { TPSysId : packageId, action:action, cost:cost, totaltraveler:totaltraveler, tpintsysId : tpintsysID, TransType : 'bus', TransTypeCat : 'bus', FromPlace : fromcityval, ToPlace : fixedtocityval, CostPerson : buscostperson, Capacity : '0', vehsysID:vehsysID, routevehsysID:routevehsysID  },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        
if(response == ''){
$("#fixedbusresult_"+tpintsysID).append(htmlres);
window.location = '/package/add-package-transport/id/'+pkgID;
}
else{
alert(response);
}    
}
});            
}

function updatefixedcost(capacity,type,cost,tpsysID,vehsysID,currval,routesysID,routevehsysID,fixtransID,currId){
var totaltraveler = '2'; 
var checkedvalue = $("#vehicletype_"+vehsysID+"_"+routesysID).prop('checked');
// alert(checkedvalue);
//alert(cost);  
if(checkedvalue == true){
// alert('Add');
var action = 'Add';
}    
else{
// alert('Update');
var action = 'Update';
}    

// alert(action);    
var packageId            =   $("#packageId").val();

$.ajax({
url  : '/package/add-customer-package-trans-fixed-byo',
data : { TPSysId : packageId, TransType : 'car', TransTypeCat : type, vehsysID:vehsysID,routesysID:routesysID, Capacity : capacity, cost:currval,  CostPerson : currval, totaltraveler:totaltraveler, action:action,routesysID:routesysID,routevehsysID:routevehsysID,fixtransID:fixtransID,currId:currId },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        

}
});
}


function getCityfrom(){

$("input[name=sourcetranscity]").autocomplete({
source: "/register/autosuggest-city",
minLength: 3,
focus: function (event, ui) {
event.preventDefault();
$("#tags").val(ui.item.label);
},
select: function (event, ui) {
event.preventDefault();
$("input[name=sourcetranscity]").val(ui.item.label);
$("#source_city_id").val(ui.item.value).trigger('change');
$("#dispErrMessage").html('');
$(".alert-danger").css("display", "none");

}
});
}

function getCityto(){

$("input[name=endtranscity]").autocomplete({
source: "/register/autosuggest-city",
minLength: 3,
focus: function (event, ui) {
event.preventDefault();
$("#tags").val(ui.item.label);
},
select: function (event, ui) {
event.preventDefault();
$("input[name=endtranscity]").val(ui.item.label);
$("#end_city_id").val(ui.item.value).trigger('change');
$("#dispErrMessage").html('');
$(".alert-danger").css("display", "none");

}
});
}


function addfixedtrain(tpintsysID){
var pkgID = '35813'  
var fixedtrainfrom    =   $("#fixedtrainfrom_"+tpintsysID).val(); 
var fixedtrainto      =   $("#fixedtrainto_"+tpintsysID).val(); 
var traincostperson   =   $("#traincostperson_"+tpintsysID).val(); 
var packageId         =   $("#packageId").val();
var totaltraveler = '2'
var splitstring = fixedtrainfrom.split('_');
var fromcityval = splitstring[0];
var fromcityname = splitstring[1];
var splitstrfixedto = fixedtrainto.split('_');
var fixedtocityval = splitstrfixedto[0];
var fixedtocityname = splitstrfixedto[1];
var vehsysID = '0';
var routesysID = '0';
var routevehsysID = '0';
var action = 'Add';
var cost = 0;
var htmlres = '<tr><td><span>'+fromcityname+'</span></td><td><span>'+fixedtocityname+'</span></td><td><span>'+traincostperson+'</span></td><td><button title="" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-danger tooltipLink" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td></tr>';
$.ajax({
url  : '/package/add-customer-package-trans-fixed-byo',
data : { TPSysId : packageId, action:action, cost:cost, vehsysID:vehsysID,routevehsysID:routevehsysID, totaltraveler:totaltraveler, tpintsysId : tpintsysID, TransType : 'train', TransTypeCat : 'train', FromPlace : fromcityval, ToPlace : fixedtocityval, CostPerson : traincostperson, Capacity : '0' },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {   

if(response == ''){
//$("#fixedtrainresult_"+tpintsysID).append(htmlres);
window.location = '/package/add-package-transport/id/'+pkgID;
}
else{
alert(response);
}    
}
});
}
function adddaywisecost(){
var dwday        =   $("#dwday").val(); 
var dwfrom       =   $("#dwfrom").val(); 
var dwto         =   $("#dwto").val();
var dwtype       =   $("#dwtype").val(); 
var dwtransport  =   $("#dwtransport").val(); 
var dwduration   =   $("#dwduration").val();
var dwdistance   =   $("#dwdistance").val();
var packageId    =   $("#packageId").val();
var htmlres = '<tr><td><span>Day '+dwday+'</span></td><td><span>'+dwfrom+'</span></td><td><span>'+dwto+'</span></td><td><span>'+dwtype+'</span></td><td><span>'+dwtransport+'</span></td><td><span class="dwduration">'+dwduration+'</span></td><td><span class="dwdistance">'+dwdistance+'</span></td><td><button title="" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-danger tooltipLink" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></td></tr>';
//       $("#daywiseresult").append(htmlres);  
//       totaldistance();
//            totalduration();
$.ajax({
url  : '/package/add-flexi-package-trans-daywise',
data : { TPSysId : packageId, Sequence : dwday, FromPlace : dwfrom, ToPlace : dwto, TransType : dwtype, TransUsed : dwtransport, Duration : dwduration, Distance : dwdistance },
dataType : 'html',
type : 'POST',
error : function() {
},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) {        
$("#daywiseresult").append(htmlres);  
totaldistance();
totalduration();
}
});
}


function totaldistance(){

var totdis = '0';
$(".dwdistance").each(function() {
totdis = parseFloat(totdis)+parseFloat($(this).text());
});
//alert(totdis);
$("#distanceres").html(totdis);
}
function totalduration(){
var totdur = '0';
$(".dwduration").each(function() {
totdur = parseFloat(totdur)+parseFloat($(this).text());
});
//alert(totdur);
$("#durationres").html(totdur);
}


function delflightAPI(TPIntSysId,SeqId,VersionId,AirlineSysId,FlightNumber){
var r = confirm("Are you sure you want to remove this record?");
if (r == true) {
$.ajax({
url  : '/package/delete-customer-package-flight-byo',
data : { TPIntSysId : TPIntSysId, SeqId : SeqId, VersionId : VersionId, AirlineSysId : AirlineSysId, FlightNumber : FlightNumber },
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) { 
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
}
});
$('#air_'+TPIntSysId+'_'+VersionId).remove();
} else {

}
}

function GetSupplierInfo(suppliersysID){
$.ajax({
url : '/package/supplierinfo/',
data : {suppliersysID:suppliersysID},
type : 'POST',
dataType : 'html',
error : function(){
},
beforeSend :function(){

},
success : function(response){
$("#myModa11").show();
$("#myModa11").html(response);

//alert(response);
}    
});

}


function updateflightapibook(tpsysID,updatevalue)
{
//alert(tpsysID);
//alert(updatevalue);
$.ajax({
url  : '/package/updateflightapi',
data : { tpsysID : updatevalue},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) { 
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
$("#fixedcostbus_"+transID).remove();
}
});
}
function getFlightItinerary(AirInvenSysId) {
$.ajax({
url  : '/flight/get-flight-itinerary',
data : { AirInvenSysId:AirInvenSysId},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
//  $("#flight-itinerary-content").modal();
$("#itenary-info-response").html('<div style="border-top:none; text-align:center; padding:10px;"><img src="https://globaltravelexchange.com/public/assets/images/loader.gif" ></div>');
},
success : function(response) { //alert(response)
$("#itenary-info-response").html(response);
}
});

}
function SaveAsDraft(tpsysID,tabname){
$.ajax({
url  : '/package/saveasdraftbyo',
data : { tpsysID : tpsysID, tabname : tabname},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {

// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) { 
alert('you have saved the package as draft');
}
});
}
function DelteFixedCost(transID){
var r = confirm("Are you sure you want to remove this record?");
if (r == true) {
$.ajax({
url  : '/package/delete-trans-flight-byo',
data : { transID : transID},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
// $("#markup-table-loader").css("display","inline-block");
// $("#markup-settings-grid-content").html('');
},
success : function(response) { 
//$("#markup-settings-grid-content").html(response);
//$("#markup-table-loader").css("display","none");
$("#fixedcostbus_"+transID).remove();
}
});
$('#air_'+TPIntSysId+'_'+SeqId+'_'+VersionId+'_'+AirlineSysId).remove();
} else {

}
}
function DsiplayGrid(val){
if(val == 'tbresult'){
// $("#tbresult").show();
$("#apibooking").hide();
}  
if(val == 'apibooking'){
//$("#tbresult").hide();
$("#apibooking").show();
}  

}



function getFlightFareRule(traceId,resultIndex) {
//alert('test');
var apiTraceId = traceId;
var ApiResultIndex = resultIndex;

$.ajax({
url  : '/flight/get-flight-fare-rule',
data : { apiTraceId:apiTraceId,ApiResultIndex:ApiResultIndex},
dataType : 'html',
type : 'POST',
error : function() {

},
beforeSend : function() {
//  $("#flight-fare-rule-content").modal();
$("#fare-rule-response").html('<div style="border-top:none; text-align:center; padding:10px;"><img src="https://globaltravelexchange.com/public/assets/images/loader.gif" ></div>');
},
success : function(response) { //alert(response)
$("#fare-rule-response").html(response);
}
});

}
function getFlightBaggageInformation(traceId,resultIndex) {

var apiTraceId = traceId;
var ApiResultIndex = resultIndex;

$.ajax({
url  : '/flight/get-flight-baggage-information',
data : { apiTraceId:apiTraceId,ApiResultIndex:ApiResultIndex},
dataType : 'html',
type : 'POST',
error : function() {

},

beforeSend : function() {
//$("#flight-baggage-info-content").modal();
$("#baggage-info-response").html('<div style="border-top:none; text-align:center; padding:10px;"><img src="https://globaltravelexchange.com/public/assets/images/loader.gif" ></div>');
},
success : function(response) { //alert(response)
$("#baggage-info-response").html(response);
}
});
}
function deletecartransport(FixTransID){
var r = confirm("Are you sure you want to remove this record?");
if (r == true) {
$.ajax({
url  : '/package/deletecarinfo',
data : {FixTransID:FixTransID},
dataType : 'html',
type : 'POST',
error : function() {

},

beforeSend : function() {
//$("#flight-baggage-info-content").modal();
//$("#baggage-info-response").html('<div style="border-top:none; text-align:center; padding:10px;"><img src="https://globaltravelexchange.com/public/assets/images/loader.gif" ></div>');
},
success : function(response) { //alert(response)
$("#routeinfogird_"+FixTransID).remove();
}
});
}
}

function GoHome(){
window.location.href = '/package/';   
}

function GetTransportRoute(){

var source_city_id = $("#source_city_id").val();

var city = $('#endtranscity').val(); 
if(city == ''){              
$('#end_city_id').val('');
}
var end_city_id = $("#end_city_id").val();
var noofdays = $("#noofdays").val();

var tpsysID = '35813'
var groupsize = '0'
$.ajax({
url  : '/package/gettransportroute',
data : {source_city_id:source_city_id,tpsysID:tpsysID,groupsize:groupsize,end_city_id:end_city_id,noofdays:noofdays},
dataType : 'html',
type : 'POST',
error : function() {

},

beforeSend : function() {
//$("#flight-baggage-info-content").modal();
//$("#baggage-info-response").html('<div style="border-top:none; text-align:center; padding:10px;"><img src="https://globaltravelexchange.com/public/assets/images/loader.gif" ></div>');
},
success : function(response) {
if(response == 'You have already Add Transport route'){
alert(response);
}
else{
//alert(response)
$("#routeinfo").html(response);
}

}
});
}
var AgencySysIdJs = '4553';
var ExtensionNo = '';
channel.bind('my-event', function (data) {
    if (data.extension == ExtensionNo) {
        $('#myModal_leftsidepopup').show();
        if (data.IsCustomer == true) {
            var CustomerName = data.CustomerName;
            var CustomerId = data.CustomerId;
            $('.customerNameOrPhone').html(CustomerName);
            $('#noteViewProfile').attr('href', '/customer/customer-profile-desc/id/' + btoa(CustomerId));
            $('.noteCancelProfile, .noteViewProfile').show();
            $('.noteAddCustomer').hide();
            $('#noteMobileNumber').val(MobileNumber);
        } else {
            var MobileNumber = data.MobileNumber;
            $('.customerNameOrPhone').html(MobileNumber);
            $('#noteMobileNumber').val(MobileNumber);
            $('.noteAddCustomer').show();
            $('.noteCancelProfile, .noteViewProfile').hide();
        }

    }
});
var modal = document.getElementById("myModal_leftsidepopup");
var btn = document.getElementById("noteCancelProfile");
var btn2 = document.getElementById("popupclose_left");
var span = document.getElementsByClassName("close")[0];
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function closeNotePopup() {
    modal.style.display = "none";
}
function redirectAddCustomer() {
    var noteMobileNumber = $('#noteMobileNumber').val();
    localStorage.setItem("notificationAddCustomer", 1);
    localStorage.setItem("notificationMobileNumber", noteMobileNumber);
    window.location.href = '/dashboard/agency';
}
