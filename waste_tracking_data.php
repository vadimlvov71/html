    <?php
    $path_to_images = "images/";
    ///Array ( [totals] => Array ( [total_milesNUM] => 29520.01814396 [total_litres_usedNUM] => 10302.48633224204 [total_tonnageNUM] => 141.45000000 [total_co2_emissionsNUM] => 26230.43927658 )
    $transport_stats = array();
    $temp = [];
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04' );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => 7.40000000, 'total_co2_emissionsNUM' => 952.29128418 ,'wtn_destination_postcode' => 'B70 0AQ','waste_type_name' => 'Plasterboard/Gypsum 17 08 02');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'N/A ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'N/A ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'N/A ');
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04' );
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04' );
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04' );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => 7.40000000, 'total_co2_emissionsNUM' => 952.29128418 ,'wtn_destination_postcode' => 'B70 0AQ','waste_type_name' => 'Plasterboard/Gypsum 17 08 02');
    
    $temp[]= array(
        'total_milesNUM' => 3941.68789688, 
        'total_litres_usedNUM' => 1375.64907601112, 
        'total_tonnageNUM' => 18.77000000, 
        'total_co2_emissionsNUM' => 3502.44381700, 
        'wtn_destination_postcode' => 'BD18 1HY',
         'waste_type_name' => 'aaa'
         );
    $temp[]= array(
    'total_milesNUM' => 3941.68789688, 
    'total_litres_usedNUM' => 1375.64907601112, 
    'total_tonnageNUM' => 18.77000000, 
    'total_co2_emissionsNUM' => 3502.44381700, 
    'wtn_destination_postcode' => 'BD18 1HY',
        'waste_type_name' => 'bbbb'
        );
        $temp[]= array(
            'total_milesNUM' => 3941.68789688, 
            'total_litres_usedNUM' => 1375.64907601112, 
            'total_tonnageNUM' => 18.77000000, 
            'total_co2_emissionsNUM' => 3502.44381700, 
            'wtn_destination_postcode' => 'BD18 1HY',
                'waste_type_name' => 'cccc'
                );
        $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => 'N/A ');

    $transport_stats['by_destination'] = $temp;

   /*echo "<pre>";
    print_r($transport_stats);
    echo "</pre>";*/
    $group_by_postcode=array();
    $cells_count=0;
    
    foreach($transport_stats['by_destination'] as $stat){
        $cells_count++;
        if (!array_key_exists($stat['wtn_destination_postcode'], $group_by_postcode)) {
           /* echo "<pre>";
            print_r($stat);
            echo "</pre>"; */
            $group_by_postcode[$stat['wtn_destination_postcode']][]=$stat;
        }else{
            //echo "key::: ".key($group_by_postcode)."code::: ".$stat['wtn_destination_postcode']."<br>";
            foreach($group_by_postcode as $key => $group){
               // echo "key::: ".$key."<br>";
                if ($key == $stat['wtn_destination_postcode']) {
                    $group_by_postcode[$stat['wtn_destination_postcode']][]=$stat;
                }else{
                    /*echo "<pre>";
                    print_r($stat);
                    echo "</pre>";*/

                }
            }
        }
    }
    $group_count_array=array();
    $group_count=0;
    
    foreach($group_by_postcode as $key => $group){
        $cells_count=0;
        foreach($group as $stat){
            if ($key == $stat['wtn_destination_postcode']) {
                $cells_count++;
            }
        }
        $group_count_array[$key]=$cells_count;
        $group_count++;
    }
    //echo "cells_count::".$cells_count."<br>";
   /* echo "<pre>";
    print_r($group_count_array);
    echo "</pre>";*/
  
    /*  
    foreach($group_count_array as $key => $count){
        echo "key::".$key."<br>";
        if($key <= 5){
            if($key[1] <= 3){
                echo "yes";
            }
        }else{
            $page++;
        }
    }*/
    $page=0;
    $page_table=false;
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
        <div class=pbreak></div>
        <div class='container'>
            <div class='container-flex'>
                <div class='left-side-data'>
                    <div class='container-data-text1'>
                        <div class='data-text-1'>Waste Tracking Data</div>
                        <div class='data-text-2'>
                            The table below shows the distance of the waste disposal sites for each waste stream 
                            collected from site. The waste disposal sites are selected based on the locality to the site 
                            to minimise vehicle carbon emissions. Project totals are shown on the right of this page.
                        </div>
                        <div class='data-text-table'>
                        
                            <?php 
                                //$i = 0;
                                foreach($group_by_postcode as $key => $group){
                                   
                                    //if($i==1){
                                       echo newTable($key, false);
                                    //}
                                    /*echo "
                                    <div class='data-text-3'>
                                        Disposal site ".$key."
                                    </div>
                                    <div class='table-waste'>
                                        <table>
                                            <tr>
                                                <th width='160' >Waste type</th>
                                                <th>Total Tonnage</th>
                                                <th>Total Mileage</th>
                                                <th>Total Fuel (Litres) </th>
                                                <th>CO2 Emissions</th>
                                            </tr>";*/
                                    //$group_count_array[$key]
                                            $i = 0;
                                            foreach($group as $stat){
                                            
                                                echo  "
                                                <tr>
                                                    <td>".$stat['waste_type_name']."</td>
                                                    <td>".$stat['total_tonnageNUM']."</td>
                                                    <td>".round($stat['total_milesNUM'], 2 )."</td>
                                                    <td>".round($stat['total_litres_usedNUM'], 2 )."</td>
                                                    <td>".round($stat['total_co2_emissionsNUM'], 2 )."</td>
                                                </tr>";
                                                if($i==6){
                                                    echo "</table></div>";
                                                    $page++;
                                                    $page_table=true;
                                                    echo footer($page, $path_to_images);

                                                    echo "
                                                    <div style='padding:40px;'> PAGE 2 </div>";
                                                    echo newTable($key, true);
                                                    echo "<table>";
                                                 }
                                                 $i++;
                                            }
                                            
                                           
                                    echo "
                                        </table> 
                                    </div>";
                                }
                                //exit;
                            ?>
                                
                        </div><!--data-text-table-->
                        Further supplier information and documentation can be found on our portal within the duty of care section
                    </div><!--container-data-text1-->                
                </div>
                <div class='right-side'>
                    <div class='container-logo'>
                        <div class='data-text-1 text-align-center'>Project Tools</div>
                        <img class='data-track data-right-img center' src='images/truck.png' alt='' />
                        <div class='data-text-right-1 text-align-center'>
                            Total mileage to waste<br>disposal site: <span>3,611.4 miles</span>
                        </div>
                    </div>
                    
                    <div class='tonnage'>
                        <img class='data-right-img center' src='images/tonnage_weight.png' alt='' />
                        <div class='data-text-tonnage text-align-center'>572.12 Tonnes</div>
                    </div>
                    <div class='data-text-right-1 text-align-center'>
                        Total tonnage of <br> waste collected to date
                    </div>
                    <div class='container-logo'>
                        <img class='data-right-img center' src='images/co2_cloud.png' alt='' />
                        <div class='data-text-right-1 text-align-center'>
                            <span>XXtonnes</span>
                            <div>of CO2 emissions.</div>
                        </div>
                    </div>
                    <div class='container-logo'>
                        <img class='data-right-img center' src='images/pump.png' alt='' />
                        <div class='data-text-right-1 text-align-center'>
                            <span>1710.18 Litres</span> of fuel used 
                            <div>of CO2 emissions.</div>
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
    function newTable($key, $continue){
        $cont = " ";
        if($continue === true){
            $cont = " (cont.)";
        }
        return("
        <div class='data-text-3'>
            Disposal site ".$key.$cont."
        </div>
        <div class='table-waste'>
            <table>
                <tr>
                    <th width='160' >Waste type</th>
                    <th>Total Tonnage</th>
                    <th>Total Mileage</th>
                    <th>Total Fuel (Litres) </th>
                    <th>CO2 Emissions</th>
                </tr>");
                
    }
    function footer($page, $path_to_images){
		//global $global;
		return("
			<div class='container-line-logo' style='position: absolute;'>
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
    ?>
    