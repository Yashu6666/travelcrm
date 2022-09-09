
$(document).ready(function() {
    $('#room-type').change(function() {
        let data = $("#room-type :selected").map(function(i, el) {
      return $(el).val();
  }).get();
  
//   console.log(data);    
  if(data){
    var paras = '';
    $.each(data,function(index, value) {
  
      paras += `<div class="card">
              <div class="card-header collapsed" data-toggle="collapse" data-target="#priceTabList${index}" aria-expanded="false">
                  <span class="title">${value}</span>
              </div>
              <div id="priceTabList${index}" class="collapse" data-parent="#accordionMain">
                  <div class="card-body">
                  <div class="table-scrollable">
                  <table class="table table-hover table-checkable order-column full-width" id="example4">
                      <thead>
                          <tr>
                              <th class="center">Per Room/Per Night
                              </th>
                              <th class="center"> </th>
                              <th class="center"> </th>
                              <th class="center"> ROOM ONLY</th>
                              <th class="center"> BB </th>
                              <th class="center"> HB </th>
                              <th class="center"> FB </th>
              
                          </tr>
                      </thead>
                      <tbody>
                      <tr class="odd gradeX">
                      <td class="center"><b>Single</b></td>
                      <td class="center"> </td>
                      <!-- <td class="center">
                                        <p>Net Rate</p>
                                        
                                      </td> -->
                      <td class="center">
                          <div class="col-md-12">
                              <p>Net Rate</p>
                          </div><br>
                          <div class="col-md-10">
                              TDF
                          </div>
                      </td>
      
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate[${index}][]"  id="single[${index}]" onchange="changeVAL('single[${index}]','double[${index}]')" type="text" class="netrate form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat[${index}][]" id="singleVat[${index}]" onchange="changeVAL('singleVat[${index}]','doubleVat[${index}]')" type="text" class="vat form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate[${index}][]"  id="single_bb[${index}]" onchange="changeVAL('single_bb[${index}]','double_bb[${index}]')" type="text" class="netrate form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat[${index}][]" id="singleVat_bb[${index}]" onchange="changeVAL('singleVat_bb[${index}]','doubleVat_bb[${index}]')" type="text" class="vat form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate[${index}][]"  id="single_hb[${index}]" onchange="changeVAL('single_hb[${index}]','double_hb[${index}]')" type="text" class="netrate form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat[${index}][]" id="singleVat_hb[${index}]" onchange="changeVAL('singleVat_hb[${index}]','doubleVat_hb[${index}]')" type="text" class="vat form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate[${index}][]"  id="single_fb[${index}]" onchange="changeVAL('single_fb[${index}]','double_fb[${index}]')" type="text" class="netrate form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat[${index}][]" id="singleVat_fb[${index}]" onchange="changeVAL('singleVat_fb[${index}]','doubleVat_fb[${index}]')" type="text" class="vat form-control " value="">
                          </div>
                      </td>
      
      
                  </tr>
                  <tr class="odd gradeX">
                      <td class="center"><b> Double</b> </td>
                      <td class="center"> </td>
                      <td class="center">
                          <div class="col-md-12">
                              <p>Net Rate</p>
                          </div><br>
                          <div class="col-md-10">
                              TDF
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate_double[${index}][]" id="double[${index}]" type="text" class="netrate_double form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat_double[${index}][]" id='doubleVat[${index}]' type="text" class="vat_double form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate_double[${index}][]" id="double_bb[${index}]" type="text" class="netrate_double form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat_double[${index}][]" id='doubleVat_bb[${index}]'  type="text" class="vat_double form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate_double[${index}][]" id="double_hb[${index}]" type="text" class="netrate_double form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat_double[${index}][]" id='doubleVat_hb[${index}]'  type="text" class="vat_double form-control " value="">
                          </div>
                      </td>
                      <td class="center">
                          <div class="col-md-10">
                              <input name="netrate_double[${index}][]" id="double_fb[${index}]" type="text" class="netrate_double form-control " value="">
                          </div><br>
                          <div class="col-md-10">
                              <input name="vat_double[${index}][]" id='doubleVat_fb[${index}]'  type="text" class="vat_double form-control " value="">
                          </div>
                      </td>
      
                  </tr>
                         
                          <tr class="odd gradeX">
                              <td class="center"><b> Extra with Bed(adult)</b> </td>
                              <td class="center"> </td>
                              <td class="center">
                                  <div class="col-md-12">
                                      <p>Net Rate</p>
                                  </div>
                                  
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                          </tr>
              
              
                          <tr class="odd gradeX">
                              <td class="center"> <b>Extra with Bed(Child)</b> </td>
                              <td class="center"> </td>
                              <td class="center">
                                  <div class="col-md-12">
                                      <p>Net Rate</p>
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_child[${index}][]" type="text" class="netrate_extra_child form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_child[${index}][]" type="text" class="netrate_extra_child form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_child[${index}][]" type="text" class="netrate_extra_child form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_child[${index}][]" type="text" class="netrate_extra_child form-control " value="">
                                  </div>
                              </td>
                          </tr>
              
              
                          <tr class="odd gradeX">
                              <td class="center"><b> Extra W/O Bed</b> </td>
                              <td class="center"> </td>
                              <td class="center">
                                  <div class="col-md-12">
                                      <p>Net Rate</p>
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_wo[${index}][]"  type="text" class="netrate_extra_wo form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_wo[${index}][]" type="text" class="netrate_extra_wo form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_wo[${index}][]" type="text" class="netrate_extra_wo form-control " value="">
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra_wo[${index}][]" type="text" class="netrate_extra_wo form-control " value="">
                                  </div>
                              </td>
                          </tr>
              
                      </tbody>
                  </table>
              
              
              </div>
                  </div>
              </div>
          </div>`;
    });
      $( "#accordionMain" )
    .html(paras);
  
  }
  });
  });


  function changeVAL(single,double){
    let sing_val = document.getElementById(single).value;
    let doub_val = document.getElementById(double);
    console.log(sing_val);
    console.log(doub_val);
    doub_val.value = sing_val;
  }