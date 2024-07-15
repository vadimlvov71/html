   <?php
    $global['pdf'] = true;
   $global['pdf']? $padding="35px 0 0 0" : $padding="0 0 0 0";
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
                <div class='left-side-last'>
                    <div class='container-text1'>
                        <div class='container-flex' style='/*width:70%*/'>
                            <div class='width-50-procent'>
                                <div class='text-last-1'>Mission</div>
                                <div class='text-last-2'>
                                    To influence change in the construction 
                                    industry by providing a value-led approach 
                                    to waste management, leading the way 
                                    with technology, sustainable development 
                                    interventions, environmental education and 
                                    collaboration across the supply chain.
                                </div>
                                <div class='text-last-1'>Social Value statement</div>
                                <div class='text-last-2'>
                                    Encore puts social value and environmental 
                                    value at the heart of its business practices. 
                                    Our sustainable development interventions 
                                    are creating huge environmental and social 
                                    value by reducing waste, reducing carbon 
                                    and creating positive outcomes for local 
                                    communities in need. This is supporting our 
                                    growth by developing new business, new 
                                    jobs and workforce engagement.
                                </div>
                            </div>
                            <div class='width-50-procent rainbow'>
                                <div class='text-last-img-1'><span>Most</span> preferable</div>
                                <img class='heat-bars-img ' src='images/heat_bars.png' alt='' />
                                
                                <div class='text-last-img-1'><span>Least</span> preferable</div>
                            </div>
                        </div>
                        <div class='social-media' >
                            <div class='container-flex' >
                                <div class='container-flex'>
                                    <div class='container-flex container-icon'>
                                        <div><img class='icon-facebook' src='images/icons/img.icons8.png'></div>
                                        <div class='icon-text'>/EncoreEnvironment</div>
                                    </div>
                                    <div class='container-flex '>
                                        <div><img class='icon-facebook' src='images/icons/img.iconstwitter.png'></div>
                                        <div class='icon-text'>/encore_enviro</div>
                                    </div>
                                </div>
                            </div>
                            <div class='container-flex' style='/*width:70%*/'>
                                <div class='container-flex'>
                                    <div class='container-flex container-icon'>
                                        <div><img class='icon-facebook' src='images/icons/img.iconslinkin.png'></div>
                                        <div class='icon-text'>/company/encore-environment-ltd</div>
                                    </div>
                                    <div class='container-flex'>
                                        <div><img class='icon-facebook' src='images/icons/img.iconspint.png'></div>
                                        <div class='icon-text'>/encoreenvironmentltd</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='contacts' style='padding:<?php echo $padding?>' >
                            <span>01604 496987</span>  |  <span>sales@encore-environment.com</span>
                        </div>
                        <div class='our-site'>
                            All reports availabe on our portal at<br>
                            <a href='encore-environment.com'>encore-environment.com</a>
                        </div>
                    </div>
                </div>
                <div class='right-side-last'>
                    <div class='container-logo'>
                        <img
                        class='site-logo center'
                        src='images/Screenshot 2024-07-03 054023.png'
                        alt='Grapefruit slice atop a pile of other slices' />
                    </div>
                    <div class='text-last-right-1'>
                        <div class='copyright'>
                            Copyright © 2024 Encore Environment  
                            All Rights Reserved.
                        </div>
                        <div class='copyright'>
                            Statistics generated from information supplied 
                            by various waste, companies. Encore endeavour 
                            to capture accurate costs and tonnages by 
                            month where possible however it is inevitable 
                            that minor adjustments are made from one 
                            month to another.
                        </div>
                    </div>
                    <div class='partner'>
                    <img
                    class='site-logo center'
                    src='images/encore_logo_2024.png'
                    alt='' />
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    