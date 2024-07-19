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
        <link rel='stylesheet' href='css/styles.css'>
    </head>
    <body>
        <div class='container'>
            <div class='chart_pie'>
                 Waste and Service Types Summary for   1
            </div>
            <div class='container-flex'>
                <div class='chart_pie'>
                    1
                </div>
                <div class='chart_pie'>
                    2
                </div>
                <div class='chart_pie'>
                    3
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
    .container-flex {
					display: flex;
				}
.monserat-text2 span {
  display: -webkit-box;
  max-width: 500px;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

  </style>  