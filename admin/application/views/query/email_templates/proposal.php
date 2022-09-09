<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software</title>
</head>

<style>
    * {
    margin: 0;
    padding: 0;
}



.head .head1,
.head2 {
    margin-bottom: 1rem;

}

.head .head4 {
    /* background-color: red; */
    display: flex;
    height: 13rem;
    width: 40rem;
    margin-top: 1.5rem;

}

.head .head4 .left {
    /* background-color: thistle; */
    height: 12rem;
    width: 10rem;

}

.head .head4 .right {
    /* background-color: silver; */
    height: 12rem;
    width: 30rem;

}
.head .head4 .right p{
 padding: 1.5px;

}

.head .head4 .left p{
    padding: 1.5px;
   
   }


.head .head5 p {
    padding: 1.5px;

}

.head .head6 {
    color: red;
    margin-top: 2rem;
    font-family: 'Roboto Condensed', sans-serif;

}

.head .head7,
.head8,
.head9 {
    margin-top: 2rem;
    font-family: 'Roboto Condensed', sans-serif;

}

.head .head9 p i {
    font-size: 10px;

}

.head .head10 {
    display: flex;
    margin-top: 2rem;


}

.head .head10 .left {
    /* background-color: wheat; */
    height: 16rem;
    width: 30rem;

}

.head .head10 .left p {
    padding: 3px;


}

.head .head10 .right {
    /* background-color: tan; */
    height: 16rem;
    width: 10rem;

}

.head .head10 .right p {
    padding: 3px;
    margin-left: 20px;

}

.head .head10 .right .point {
    visibility: hidden;

}

.head .head11 p i {
    font-size: 10px;

}

.head .head11 u {
    margin-bottom: 5px;

}

.head .head11 p {
    padding: 1.5px;

}
@media print{
    .head{
        font-size: 16.5px;
    }
    .head .head9 > span{
        margin-top: 10px;
    }
    .head11{
        margin-top: 2rem;
    }
}


@media only screen and (min-width: 320px) {
    .maindiv {
    background-color: aliceblue;
    height: 308vh;
    width: 100vw;
    display: flex;
    /* align-items: center; */
    justify-content: center;
    flex-direction: column;
    font-size: 15px;
    font-family: 'Roboto Condensed', sans-serif;
}

.head {
    background-color: white;
    height: 100%;
    /* width: 40rem; */
    padding: 1rem;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.75);
    color: hsl(205, 86%, 27%);
}


.head4_inline {
    height: auto;
    width: auto;
    /* margin: 1.5rem 0rem 12rem 0rem; */
    margin-bottom: 200px;
}
}

@media (min-width: 1200px) {
    .maindiv {
    background-color: aliceblue;
    height: 308vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 15px;
    font-family: 'Roboto Condensed', sans-serif;
}

.head {
    background-color: white;
    height: 100%;
    /* width: 40rem; */
    padding: 7rem;
    box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.75);
    color: hsl(205, 86%, 27%);
}

.head4_inline {
    height: auto;
    width: auto;
    margin: 1.5rem 0rem 12rem 0rem;
    /* margin-bottom: 200px; */
}

}
</style>
<body>
    <div class="maindiv">
        <div class="head">
            <div class="head1">
                Dear Sir/Madam,

            </div>
            <div class="head2">
                <b>Warm Greetings from Diamond Tours LLC-Dubai...!!!</b>

            </div>
            <div class="head3">
                We are pleased to quote the best rate as per your below request: <br>
                <b>**Any amendments in the dates of travel or number of passengers will attract a requote.**</b>

            </div>

            <?php if($details->type == 'package') :  ?>   
            <div class="head4 head4_inline">
            <?php else :  ?>   
            <div class="head4" style="">
            <?php endif  ?>   

                <div class="left">
                    <p>Check-in : </p>
                    <p>Check-out : </p>
                    <p>No. of night : </p>
                    <p>No. of Pax :</p>
                    <?php if($details->type == 'package') :  ?>   
                        <p>Hotel Name :</p>
                         <?php if($details->in_transfer_pickup != 'Pickup') : ?>   
                        <p>Internal Transfer :</p>
                    <?php endif?>  
                    <?php if($details->pp_transfer_pickup != 'Pickup') : ?>   
                        <p>Point to Point Transfer : </p>
                    <?php endif?>   
                        <p>Visa Category : </p>
                        <p>Entry Type : </p>
                        <p>Validity : </p>
                        <p>SIC : </p>
                        <p>PVT : </p>
                        <p>Meals : </p>

                    <?php elseif($details->type == 'hotel') : ?> 
                        <p>Hotel Name :</p>
                    <?php elseif($details->type == 'transfer' || $details->type == 'package') : ?> 
                    <?php if($details->in_transfer_pickup != 'Pickup') : ?>   
                        <p>Internal Transfer :</p>
                    <?php endif?>  
                    <?php if($details->pp_transfer_pickup != 'Pickup') : ?>   
                        <p>Point to Point Transfer : </p>
                    <?php endif?>   
                    <?php elseif($details->type == 'visa' || $details->type == 'package') : ?> 
                    <p>Visa Category : </p>
                    <p>Entry Type : </p>
                    <p>Validity : </p>
                    <?php elseif($details->type == 'excursions' || $details->type == 'package') : ?> 
                        <p>SIC : </p>
                        <p>PVT : </p>
                    <?php elseif($details->type == 'meals') : ?> 
                    <p>Meals : </p>
                    <?php endif?>   

                </div>

                <div class="right">
                    <p><?php echo $details->checkin ?></p>
                    <p><?php echo $details->checkout ?></p>
                    <p><?php echo $details->nights ?></p>
                    <p><?php echo 'Adult '.$details->pax_adult.' Child '.$details->pax_child.' Infant '.$details->pax_infant ?></p>
                    <?php if($details->type == 'package') : ?>   
                        <p><?php echo $details->hotel ?></p>
                        <!-- ?php if($details->in_transfer_pickup != 'Pickup') : ?>   
                        <p>?php echo $details->in_transfer_pickup .' / ' . $details->in_transfer_dropoff ?></p>
                        ?php endif?>   -->
                    <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                        <?php if($val != 'Pickup') : ?>   
                            <p><?php echo $details->in_transfer_pickup[$key] .' / ' . $details->in_transfer_dropoff[$key] ?></p>
                        <?php endif?>  
                    <?php endforeach ?>
                    <br>
                    <!-- ?php if($details->pp_transfer_pickup != 'Pickup') : ?>   
                        <p>?php echo $details->pp_transfer_pickup .' / ' . $details->pp_transfer_dropoff ?></p>
                    ?php endif?>  -->
                    <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
                        <?php if($val != 'Pickup') : ?>   
                            <p><?php echo $details->pp_transfer_pickup[$key] .' / ' . $details->pp_transfer_dropoff[$key] ?></p>
                        <?php endif?>  
                    <?php endforeach ?>
                        <br>
                    <p><?php echo $details->visa_category_drop_down == "" ? "--" : $details->visa_category_drop_down ?></p>
                        <p><?php echo $details->entry_type ?></p>
                        <p><?php echo $details->visa_validity ?></p>
                        <p> <?php echo $details->excursion_name_SIC ?></p>
                        <p> <?php echo $details->excursion_name_PVT ?></p>
                        <?php foreach($details->res_name as $key => $val) : ?>
                     <p> <?php echo $details->res_name[$key].'('.$details->Meal[$key].','.$details->Meal_Type[$key] .')'?></p>
                   <?php endforeach ?>


                    <?php elseif($details->type == 'hotel') : ?>   
                        <p><?php echo $details->hotel?></p>
                       
                    <?php elseif($details->type == 'transfer' || $details->type == 'package') : ?>   
                        <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                        <?php if($val != 'Pickup') : ?>   
                            <p><?php echo $details->in_transfer_pickup[$key] .' / ' . $details->in_transfer_dropoff[$key] ?></p>
                        <?php endif?>  
                    <?php endforeach ?>
                    <br>
                   
                    <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
                        <?php if($val != 'Pickup') : ?>   
                            <p><?php echo $details->pp_transfer_pickup[$key] .' / ' . $details->pp_transfer_dropoff[$key] ?></p>
                        <?php endif?>  
                    <?php endforeach ?>
                        <br>

                    <?php elseif($details->type == 'visa' || $details->type == 'package') : ?> 
                    <p><?php echo $details->visa_category_drop_down ?></p>
                    <p><?php echo $details->entry_type ?></p>
                    <p><?php echo $details->visa_validity ?></p>
                    <?php elseif($details->type == 'excursions' || $details->type == 'package') : ?> 
                        <p> <?php echo $details->excursion_name_SIC ?></p>
                        <p> <?php echo $details->excursion_name_PVT ?></p>
                    <?php elseif($details->type == 'meals' || $details->type == 'package') : ?> 
                     <?php foreach($details->res_name as $key => $val) : ?>
                     <p> <?php echo $details->res_name[$key].'('.$details->Meal[$key].','.$details->Meal_Type[$key] .')'?></p>
                   <?php endforeach ?>
                    <?php endif?>  
                    
                </div>


            </div>
            <div class="head5">
                <b>Package Price Inclusions:</b>
                <?php echo $details->inclusions ?>
            </div>

            <div class="head5" style="margin-top: 20px;">   
                <b>Package Price Exclusions:</b>
                <?php echo $details->exclusions ?>
            </div>
            
            <div class="head9">
                <span><b><u>GENERAL TERMS AND CONDITIONS :</u></b></span>
                <?php echo $details->conditions ?>
            </div>


            <div class="head9">
                <span><b><u>Cancellation Policy :</u></b></span>
                <?php echo $details->cancelation_policy ?>
            </div>

        </div>

    </div>

</body>

</html>