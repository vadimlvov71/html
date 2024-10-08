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
    $date_from=date("Y-m-d 00:00:00",strtotime($global[fields][from_date]));
        <div class='container'>
            <div class='left-side-ourmission'>
                <div class='container-text2'>
                    <div class='text-mission-1'> Our Mission:</div>
                    <div class='text-mission-2'>
                    Offering clients the ability to track 
                    real time waste data as it moves from 
                    site to its disposal location. This level 
                    of transparency allows waste to be 
                    tracked more effectively, allowing 
                    patterns and trends to be identified and 
                    enabling waste reduction strategies to 
                    be implemented. A valuable tool for 
                    promoting sustainability, improving 
                    operational efficiency and meeting 
                    project specific environmental goals.
                    </div>
                </div>
                <!--<div class='layer'></div>-->
                
            </div>
            <div class='right-side-ourmission'>

                <div class='container-waste center'>
                    <div class='waste-text-1'>
                        Waste<br> 
                        produced by
                    </div>
                    <div class='waste-text-2'>
                        (Client name)
                    </div>
                    <div class='dot center'></div>
                    <div class='waste-container'>
                        <div class='waste-width'>
                            <div class='line-waste-left center'></div>
                            <div class='dot'></div>
                        </div>
                        <div class='waste-width'>
                            <div class='line-dot-2'>
                                <div class='line-waste-right center'></div>
                                <div class='dot'></div>
                            </div>
                        </div>
                    </div>
                    <div class='waste-container-2' >
                        <div class='waste-width-2'>
                            Waste carried by <div class='waste-text-2'>Encore <br> Environment</div>
                        </div>
                        <div class='waste-width-2'>
                            Waste disposed<br> and processed <div class='waste-text-2'>(End destination)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='container-line-logo'>
            <div class='container-line-logo-left'>
                <div class='line-logo-text'>
                    &nbsp;
                </div>
                <div class='report-text'>
                    <span class='line-logo-text-1'>1</span><span class='line-logo-text-2'>
                         CLIENT NAME - PROJECT TITLE - WASTE MOVEMENT REPORT 
                    </span>
                </div>
            </div>
            <div class='container-line-logo-right'>
                    <img
                    class='site-logo-1 center'
                    src='images/encore_logo_2024.png'
                    alt='Grapefruit slice atop a pile of other slices' />
            </div>
        </div>
        
    </body>
    </html>
    