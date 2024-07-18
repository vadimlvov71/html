    <?php
    $site_city="";
    $project['site_city']="London";
    //$project['site_city']=" ";
    if(!empty($project['site_city'])){
        $site_city=$project['site_city'].", ";
    }
    $project['site_address1']="5 – 10";
   // $site_address2="";
    $project['site_address2']="Long be";
    if(!empty($project['site_address2'])){
        $site_address2=$project['site_address2'].", ";
    }

    $project['site_address3']="Islington";
    if(!empty($project['site_address3'])){
        $site_address3=$project['site_address3'].", ";
    }
   
    $project['site_postcode']="N7 9AA";
    ?>
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Split Page with Background Image</title>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>

    </head>
    <body>
        <div class='container' style='height:22cm;'>
            <div class='container-flex'>
                <div class='left-side-second'>
                    <div class='container-text1'>
                        <div class='diagram-waste-right-title'>Totals to date</div>
                            
                        <div class='diagram-waste-right-cell'>
                            <div class='waste-percent-text'>88%</div>
                            <div>(XX tonnes) <span>recycled</span></div>
                        </div>
                        <div class='diagram-waste-right-cell'>
                            <div class='waste-percent-text'>88%</div>
                            <div>(XX tonnes) <span>Landfill</span></div>
                        </div>
                    
                    
                        <div class='diagram-waste-right-cell'>
                            <div class='waste-percent-text'>88%</div>
                            <div>(XX tonnes) <span>EFW</span></div>
                        </div>
                        <div class='diagram-waste-right-cell'>
                            <div class='waste-percent-text'>88%</div>
                            <div>(XX tonnes) <span>Diversion of Landfill</span></div>
                        </div>

                    </div>
                </div>
                <div class='right-side-second'>
                    <div class='red-zone-second'>
                            Key Waste Management Statistics:
                            Mixed Construction Waste and/or Demolition Waste
                            Plasterboard/Gypsum
                            Total Project Waste Generated
                    </div>
                    right
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    $date_from = "2024-07-01 00:00:00";
    $date_to = "2024-07-31 00:00:00";
    $start_date=date("d M Y", strtotime($date_from));
    $end_date=date("d M Y", strtotime($date_to));
    $current=date("F Y"); 
    echo  $current;
    ?>
<style>
    .container {
    /*display: flex;*/
   /* height: 100vh; *//* Full viewport height */
    /*height: 100%; */
    width: 100%;
}
.container-flex {
    display: flex;
    align-items: stretch;
}
.diagram-waste-right{
    
    padding: 22px 6px;
}
.diagram-waste-right-title{
    font-weight: 700;
    padding: 26px 0 20px 37px;
}
.diagram-waste-right-cell{
    width: 200px;
    font-size: 0.9rem;
    padding: 26px 0 0 37px;
}
.diagram-waste-right-cell span{
    font-weight: 700;
}
.diagram-waste-right-content{
    color:#fff;
    height:360px;
    background-color: #ff0000;
    padding: 26px 0 0 37px;
}
.left-side-second {
    
    height:100%;
    width: 30%;
    background-color: #93c13d; /* Light gray background */
    background-size: cover;
    position: relative;
}
.monserat-text2 span {
  display: -webkit-box;
  max-width: 500px;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.red-zone-second{
    color: #fff;
    height: 360px;
    background-color: #ff0000;
    padding: 26px 0 0 37px;
}


.right-side-second {
    width: 70%;
    /*display: flex;
    align-items: center;
    justify-content: center;*/
    background-color: #fff; /* Light gray background */
    padding: 38px 0px 0 0;
    position: relative;
}
.waste-percent-text{
    font-weight: 100;
    font-size: 2.1rem;
}
  </style>  