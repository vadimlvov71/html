    <?php
    $path_to_images = "images/";
    $page=1;
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
                <div class='left-side-ourmission'>
                    <div class='container-text2'>
                        <div class='monserat-text-mission-1'> Our Mission:</div>
                        <div class='monserat-text-mission-2'>
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
                    <div class='container-logo'>
                        <div class='waste-text-1'>
                                Waste<br> produced by
                        </div>
                        <div class='waste-text-2'>
                            (Client name)
                        </div>
                        <img class='triangle-img center' src='images/triangle.png' alt='' />
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
            <?php
            echo footer($page, $path_to_images);
            ?>
        </div>
        
    </body>
    </html>
    <?php 
    function footer($page, $path_to_images){
		//global $global;
		return("
			<div class='container-line-logo' style='position: absolute;z-index: 1000;width: 100%;'>
				<div class='container-line-logo-left'>
					<div class='line-logo-text'>
						&nbsp;
					</div>
					<div class='report-text'>
						<span class='line-logo-text-1'>".$page."</span><span class='line-logo-text-2'>
							CLIENT NAME - PROJECT TITLE - WASTE MOVEMENT REPORT 
						</span>
					</div>
				</div>
				<div class='container-line-logo-right'>
						<img
						class='site-logo-1 center'
						src='".$path_to_images."encore_logo_2024.png'
						alt='Logo' />
				</div>
			</div>
		");
	}