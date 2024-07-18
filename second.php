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
    <?php
            $client=[];
            $client['name']="Client Loooooooooooooooooooooooong";
            $project=[];
            $project['project_title']="Project Name 11111111111";
        $page=1;
         $path_to_images = "images/";
        echo("
        <div class='container' style='height:22cm;'>
            <div class='container-flex'>
                <div class='second-left-side'>
                    <div class='second-container-text1'>
                        <div class='diagram-waste-right-title'>This month (March 2024)</div>
                            
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
                <div class='second-right-side'>
                    <div class='second-red-zone'>
                        <div class='second-title'>Key Waste Management Statistics: <span>Test data</span></div>
                        <div class='second-red'>Mixed Construction Waste and/or Demolition Waste <span>(Test data)</span></div>
                        <div class='second-red'>Plasterboard/Gypsum <span>Test data</span></div>
                        <div class='second-red-total'>TOTAL PROJECT WASTE GENERATED: <span>Test data</span></div>
                    </div>
                    
                    <div style='width:99%;padding:10px'>
                        <div style='background-color:#a02b93;color:#fff;padding:10px;font-weight:800;'>PROJECT DETAILS:</div>
                        <table class='second-table'>
                        <tr><td>Project details </td><td>98.58%</td></tr>
                        <tr><td>Project start date </td><td>98.58%</td></tr>
                        <tr><td>Project end date </td><td>98.58%</td></tr>
                        <tr><td>Project floor area (m2) </td><td>98.58%</td></tr>
                        <tr><td>Project value </td><td>98.58%</td></tr>
                        </table>
                    </div>
                </div>
            </div>
            ");
                echo footer($page, $path_to_images, $client['name'], $project['project_title']);
        echo("
        </div>
        ");
        ?>
    </body>
    </html>
    <?php
    function footer($page, $path_to_images, $client_name, $project_name){
		//global $global;
		return("
                <div class='footer-container'>
                    <div class='footer-line-logo-left'>
                        <div class='footer-logo-text'>
                            &nbsp;
                        </div>
                        <div class='container-flex footer-report-text'>
                            <div class='line-logo-text-1' style='width:40px;'>".$page."</div>
                            <div style='text-align:right' class='cut-text uppercase'>".$client_name." </div> 
                            <div class='footer-divide'>-</div>
                            <div class='cut-text uppercase'> ".$project_name." </div> 
                            <div class='footer-divide'>-</div>
                            <div style='padding:4px 0 0 14px'>  WASTE MOVEMENT REPORT</div> 
                        </div>
                    </div>
                    <div class='footer-logo-right' style='padding: 10px 11px 26px 0;'>
                        <img class='footer-logo-1 center' src='".$path_to_images."encore_logo_2024.png' />
                    </div>
                </div>
           
		");
	}
 
    $date_from = "2024-07-01 00:00:00";
    $date_to = "2024-07-31 00:00:00";
    $start_date=date("d M Y", strtotime($date_from));
    $end_date=date("d M Y", strtotime($date_to));
    $current=date("F Y"); 
   // echo  $current;
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
.second-container-text1 div{
    color:#fff;
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
    background-color: #f04d46;
    padding: 26px 0 0 37px;
}
.second-left-side {
    flex-grow: 1; 
    /*height:100%;*/
    width: 30%;
    background-color: #93c13d;
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
.second-red-zone{
    color: #fff;
    height: 202px;
    background-color: #f04d46;
    padding: 26px 0 0 37px;
}
.second-right-side {
    width: 70%;
    background-color: #fff; 
    position: relative;
}
.second-title{
    font-weight: 700;
    padding: 38px 0px 20px 0;
}
.second-red{
    font-weight: 300; 
    padding: 5px 0px 0 0; 
}
.second-red span{
    font-weight: 700; 
}
.waste-percent-text{
    font-weight: 100;
    font-size: 2.1rem;
}
.second-red-total{
    font-weight: 700;
    padding: 5px 0px 0 0;   
}
.second-red-total span{
    font-weight: 300;  
}
.second-table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
.second-table td {
    text-align: left;
    padding: 16px;
}
.second-table tr td:first-child{
    width:200px;
}
.second-table tr td:last-child{
    width:400px;
}
.second-table tr:nth-child(even) {
  background-color: #f0e8ee;
}
.second-table tr:nth-child(odd) {
  background-color: #dfcddc;
}
  </style>  