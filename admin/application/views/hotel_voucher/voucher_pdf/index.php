<!doctype html>
<html lang="en">

<head>
    <title>Voucher</title>
   
    <style>
        body {
            box-sizing: border-box;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            actualWidth: 1600;
            actualHeight: 734;
        }

        body .mainDiv {
            background-color: #063251;
            margin: 0 auto;
            width: 95vw;
            color: white;
            text-align: center;
            border-radius: var(--radius);
        }

        h4 {
            box-sizing: border-box;
            margin-bottom: 0.5;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color);
            font-size: calc(1.275rem + 0.3vw);
        }

        body .TravelDiv {
            margin: 0 auto;
            width: 95vw;
            color: var(--clr-primary-10);
            text-align: center;
            margin-bottom: 0.8rem;
            border: 0.1rem solid black;
            color: var(--clr-black);
            text-align: start;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 0.1rem 1.2rem;
        }

        h1,
        h2,
        h3,
        h4 {
            letter-spacing: var(--spacing);
            text-transform: capitalize;
            line-height: 1.25;
            margin-bottom: 0.75rem;
            font-family: var(--ff-primary);
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-right: auto;
            margin-left: auto;
        }


        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }

        body .units {
            margin: 0 auto;
            width: 95vw;
            color: black;
        }


        body .units table {
            border-color: var(--clr-black);
            text-align: justify;
        }

        .table {
            --bs-table-color: var(--bs-body-color);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--bs-border-color);
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: var(--bs-body-color);
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: var(--bs-body-color);
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: var(--bs-body-color);
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: var(--bs-table-color);
            vertical-align: top;
            border-color: var(--bs-table-border-color);
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        .icon {
            color: white;
            fill: currentColor;
            margin-right: 10px;
        }

        .border_right {
            margin-right: 20px;
            margin-left: 5em;
            border-right: 2px solid black !important;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="<?php echo base_url('/public/image/logo_new.png'); ?>" alt="logo" style="margin-bottom: 15px;" width="100" class="my-3 ms-4">
    </div>
    <div class="mainDiv">
        <h4>Voucher</h4>
    </div>
    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 20px;"><span class="icon"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    
                    <path d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z" />
                </svg></span> Hotel Details</h4>
    </div>

    <!-- ?php foreach ($hotel as $key => $value) : ?> -->
    <?php foreach (explode(',',$hotel[0]->nights) as $key => $value) : ?>
    
    <div class="units">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="border: 2px solid #000;">Hotel Name</th>
                <th style="border: 2px solid #000;"><?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?></th>
            </tr>
        </thead>
    </table>
    </div>

    <div class="units">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="border: 2px solid #000;">Check-in</th>
                <th style="border: 2px solid #000;"><?php print_r(explode(',',$hotel[0]->checkin)[$key]); ?></th>
                <th style="border: 2px solid #000;">Check-out </th>
                <?php
                    $date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
                    $date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
                    $checkout =  $date->format('Y-m-d');
                ?>
                <th style="border: 2px solid #000;"><?php echo $checkout; ?></th>
            </tr>
        </thead>
    </table>
    </div>

        <div class="units" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Room Type</th>
                        <th>Adults</th>
                        <th>Children</th>
                        <th>Children Ages</th>
                        <th>Board</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?></td>
                        <td><?php echo $details->adult; ?></td>
                        <td><?php echo $details->child; ?></td>
                        <td>--</td>
                        <?php if ($board_arr[$key] == '') : ?>
                            <td>----</td>
                        <?php else : ?>
                             <td><?php 
                            if(is_array($board_arr)) echo $board_arr[$key];
                            else echo $board_arr;
                                
                                ?></td>
                        <?php endif ?>
                    </tr>
                </tbody>
            </table>

        </div>

    <?php endforeach; ?>

    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 20px;"><span class="icon"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    
                    <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                </svg></span>Guest Details</h4>
    </div>

    <div class="units" style="width:100%">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Guest Name:</th>
                    <th>Nationality:</th>
                    <th>Guest Email Id:</th>
                    <th>Guest Mobile No:</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $guest->b2bfirstName . ' ' . $guest->b2blastName ?></td>
                    <td>indian</td>
                    <td><?php echo $guest->b2bEmail ?></td>
                    <td><?php echo $guest->b2bmobileNumber ?></td>
                </tr>
            </tbody>
        </table>
    </div>



    <div class="mainDiv">
        <h4 class="text-lg-start mx-3" style="text-align: start;margin-left: 0px;"><span class="icon" style="text-align: start;margin-left: 20px;"><svg width="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    
                    <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z" />
                </svg></span>Important
            Information : Hotel
        </h4>
    </div>


    <div class="information">
        <?php echo $impInfo ?>
        
    </div>
</body>

</html>