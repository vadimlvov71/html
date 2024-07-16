    <?php
    $site_city="";
    $project['site_city']=" ";
    if(empty($project['site_city'])){
        $site_city=$project['site_city'].",,, ";
    }
    $project['site_address1']="5 – 10 Brandon Road";
    $site_address2="Loooong beach long address, ";
    $project['site_address3']="Islington long name";
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
            <div class='container-flex'>
                <div class='left-side'>
                    <div class='container-text1'>
                        <div class='monserat-text1'>WASTE  MOVEMENT  REPORT</div>
                        <div class='monserat-text2'>
                            <div class='container-flex'>
                                <?php  echo ("
                                <div class='cut-text' style='width:100px'>".$project['site_address1']."</div><div class='cut-text'>".$site_address2."</div><div class='cut-text'>".$project['site_address3']."</div>
                                "); ?>
                            </div>
                            <div>
                                <?php echo $site_city ?> N7 9AA
                            </div>
                        </div>
                        <div class='monserat-text3'>
                            Project Number: M/54CA04/00056
                        </div>
                        <div class='monserat-text4'>
                            <div>
                                Insert Project duration: <span>start date – end date</span>
                            </div>
                            <div>
                                Insert Reporting Month: <span> April 2024</span>
                            </div>
                        </div>
                    </div>
                    <!--<div class='layer'></div>-->
                </div>
                <div class='right-side'>
                    <div class='container-logo'>
                        <img
                        class='site-logo center'
                        src='images/encore_logo_2024.png'
                        alt='' />
                    </div>
                    <div class='partner-text text-align-center'>In Partnership with</div>
                    <div class='partner'>
                        <img class='site-logo center' src='images/sample_client_logo.png' alt='' />
                    </div>
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
    