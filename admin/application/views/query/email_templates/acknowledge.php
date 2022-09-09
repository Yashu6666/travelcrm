<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acknowledge</title>
    <link rel="stylesheet" href="Acknowledge.css">
    <style>
        * {
    margin: 0;
    padding: 0;
}


body {
    background-color: gainsboro;
    height: 100vh;
    width: 100vw;
    font-family: 'Roboto', sans-serif;
}




@media only screen and (min-width: 320px) {
    .card {
    background-color: white;
    /* height: 100%;
    width: 50%; */
    margin: auto;
    padding: 1rem;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);

}

.card p{
  margin-top: 2.5rem;
  font-size: 1rem;


}
h1 span{
    font-size: 0.5rem;
    font-weight: 600;
}
span{
    /* display: block; */
    font-size: 1rem;
}

}

@media (min-width: 1200px) {
    .card {
    background-color: white;
    /* height: 100%;
    width: 50%; */
    margin: auto;
    padding: 10rem;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);

}

.card p{
  margin-top: 2.5rem;
  font-size: 1.7rem;


}
h1 span{
    font-size: 2rem;
    font-weight: 600;
}
span{
    /* display: block; */
    font-size: 1.7rem;
}
}
    </style>
</head>

<body>
    <div class="card">
        
        <p>Dear Sir/Madam</p>
        <p>Greetings from Diamond Tours LLC-Dubai!!!
        </p>
        <p>Thank you for your query! We have received your travel query for Dubai & assure you of best
            services. A query reference for your mail is generated. <u style="font-weight: 600;">Your Query id is “ <?php echo $view->query_id ?>”.</u></p>
        <p>Our Expert<span style="font-weight: 600;">“ <?php echo $admin_user->firstName . ' '. $admin_user->LastName ?>”</span> | “<?php echo $admin_user->phoneNumber ?>” is working towards addressing your
            query at the earliest.</p>
        <p>Special Request: Request you not to change the subject line for future correspondence. If you
            would like to further inquire on this matter, please reply on this email.</p>
        <p>We will call you at the earliest with best options available for you. If you require immediate
            assistance, please call us on <?php echo $admin_user->phoneNumber ?></p>


        <p>Thanks & Regards,</p>
        <span><?php echo $admin_user->firstName . ' '. $admin_user->LastName ?></span> <br>
        <span> Numbers: <?php echo $admin_user->phoneNumber ?></span> <br>
        <span>Email:<?php echo $admin_user->emialId  ?></span> <br>
        <span>Website:-www.diamondtoursdubai.com</span>
    </div>
</body>

</html>