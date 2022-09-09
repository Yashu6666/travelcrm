  <div class="sidebar">
            <div class="">
                <div class="">
                    <div class="d-flex justify-content-around">
                        <a type="button" href="package.html" class="btn btn-success ">Edit Package</a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Share
                        </button>
                    </div>
                    <hr>
                    <div class="bg-secondary  text-white text-center ">
                        <p>Message chat with agent</p>
                    </div>

                    <p>Agent : XYZ(1234567890)</p>

                    <div class="mb-3">
                        <label for="" class="form-label"><b>Inroduce Your Self*</b></label><br>
                        <div>
                            <label class="input">
                                <input class="input__field " style="width: 170%;" type="email" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Name </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="mt-3">
                            <label class="input">
                                <input class="input__field " style="width: 170%;" type="email" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Email </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <label for="" class="mt-2 mb-2">Message To agent</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 100px;"></textarea>
                        </div>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary  ">Send Message</button>
                    </div>
                </div>
            </div>
        </div>






















    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Proposal To Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table border ">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Package Title</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Night/ Day</th>
                                <th scope="col">Pax Details</th>
                                <th scope="col">Travel Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dubai Trip</td>
                                <td>Dubai</td>
                                <td>2Night/3days</td>
                                <td>2 Adult</td>
                                <td>16/may/2022</td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col">
                            <label class="input">
                                <input class="input__field  width-input" type="text" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Email Subject</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field width-input" type="text" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">CC</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="email" placeholder=" " autocomplete="off" />
                                <span class="input__label">Email </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">First Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">Last Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="number" placeholder=" " autocomplete="off" />
                                <span class="input__label">Mobile</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>





                        <div class="row mt-3">
                            <div class="col">
                                <label class="input">
                                    <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                                    <span class="input__label">Sender Email </span></span>
                                    <!-- <span id="spanFname" class="spanCompany"></span> -->
                                </label><br>
                                <div class="mt-2"> <b>Cheak In/Out</b> : 16/may/2022</div>
                                <div class="mt-2"> <b>Destinations</b> : Dubai</div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea class="form-control" style="height: 100px;"
                                        placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
                            </div>
                        </div>



                    </div>



                </div>

                <div id="pdf" class="ml-5">

                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <div>

                    </div>
                    <div>
                        <input type="checkbox">
                        <label>Mail</label>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="modal-submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

  <!--   <script>

        const btn = document.getElementById("modal-submit");
        btn.addEventListener("click", () => {
            // console.log("click")
            const pdf = document.getElementById("pdf");



            // const crtBtn = document.createElement("button");
            // console.log(crtBtn);
            // crtBtn.className = "newclass";

            let html = ` <button type="button" class="btn btn-primary ">PDF</button>
                          <button type="button" class="btn btn-primary  ">Word</button>`;

            pdf.insertAdjacentHTML('afterbegin', html);
        })


    </script> -->

<!-- 
<script>
    function printscreen(){
        var printContents = document.getElementById('print').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }
    </script> -->



