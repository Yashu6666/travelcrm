
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
                              <td class="center" title="Extra Bed (Adult)"><b> Ex Adult </b> </td>
                              <td class="center"> </td>
                              <td class="center">
                                  <div class="col-md-12">
                                      <p>Net Rate</p>
                                  </div>
                                  
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" id="netrate_extra[${index}]" onchange="changeTripleVal('double[${index}]','netrate_extra[${index}]','triple[${index}]')" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" id="netrate_extra_bb[${index}]" onchange="changeTripleVal('double_bb[${index}]','netrate_extra_bb[${index}]','triple_bb[${index}]')" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" id="netrate_extra_hb[${index}]" onchange="changeTripleVal('double_hb[${index}]','netrate_extra_hb[${index}]','triple_hb[${index}]')" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                              <td class="center">
                                  <div class="col-md-10">
                                      <input name="netrate_extra[${index}][]" id="netrate_extra_fb[${index}]" onchange="changeTripleVal('double_fb[${index}]','netrate_extra_fb[${index}]','triple_fb[${index}]')" type="text" class="form-control " value="">
                                  </div><br>
                                  <div class="col-md-10">
                                      
                                  </div>
                              </td>
                          </tr>
              
              
                <tr class="odd gradeX">
                    <td class="center"><b> Triple</b> </td>
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
                            <input name="netrate_triple[${index}][]" id="triple[${index}]" type="text" class="netrate_triple form-control " value="">
                        </div><br>
                        <div class="col-md-10">
                            <input name="vat_triple[${index}][]" id='tripleVat[${index}]' type="text" class="vat_triple form-control " value="">
                        </div>
                    </td>
                    <td class="center">
                        <div class="col-md-10">
                            <input name="netrate_triple[${index}][]" id="triple_bb[${index}]" type="text" class="netrate_triple form-control " value="">
                        </div><br>
                        <div class="col-md-10">
                            <input name="vat_triple[${index}][]" id='tripleVat_bb[${index}]'  type="text" class="vat_triple form-control " value="">
                        </div>
                    </td>
                    <td class="center">
                        <div class="col-md-10">
                            <input name="netrate_triple[${index}][]" id="triple_hb[${index}]" type="text" class="netrate_triple form-control " value="">
                        </div><br>
                        <div class="col-md-10">
                            <input name="vat_triple[${index}][]" id='tripleVat_hb[${index}]'  type="text" class="vat_triple form-control " value="">
                        </div>
                    </td>
                    <td class="center">
                        <div class="col-md-10">
                            <input name="netrate_triple[${index}][]" id="triple_fb[${index}]" type="text" class="netrate_triple form-control " value="">
                        </div><br>
                        <div class="col-md-10">
                            <input name="vat_triple[${index}][]" id='tripleVat_fb[${index}]'  type="text" class="vat_triple form-control " value="">
                        </div>
                    </td>
    
                </tr>

                          <tr class="odd gradeX">
                              <td class="center" title="Extra Bed (Child)"><b>  Ex CWB </b> </td>
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
                              <td class="center" title="Child Not Bed (CNB)"><b>   Ex CNB </b> </td>
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

  function changeTripleVal(double,extra,triple){
    let double_val = document.getElementById(double).value;
    let extra_val = document.getElementById(extra).value;
    let triple_val = document.getElementById(triple);
    triple_val.value = parseInt(double_val) + parseInt(extra_val);
  }