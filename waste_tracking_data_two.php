    <?php
    error_reporting(0);
    //Array ( [totals] => Array ( [total_milesNUM] => 29520.01814396 [total_litres_usedNUM] => 10302.48633224204 [total_tonnageNUM] => 141.45000000 [total_co2_emissionsNUM] => 26230.43927658 )
    $temp1 = [];
    $temp1=array('total_milesNUM' => 29520.01814396, 'total_litres_usedNUM' => 10302.48633224204, 'total_tonnageNUM' => 141.45000000, 'total_co2_emissionsNUM' => 26230.43927658);
    $transport_stats['totals'] = $temp1;
    $total_miles=0;
    if(!empty($transport_stats['totals']['total_milesNUM'])){
        $total_miles=round($transport_stats['totals']['total_milesNUM'], 2);
    }
    $total_litres=0;
    if(!empty($transport_stats['totals']['total_litres_usedNUM'])){
        $total_litres=round($transport_stats['totals']['total_litres_usedNUM'], 2);
    }
    $total_tonnage=0;
    if(!empty($transport_stats['totals']['total_tonnageNUM'])){
        $total_tonnage=round($transport_stats['totals']['total_tonnageNUM'], 2);
    }
    $total_co2=0;
    if(!empty($transport_stats['totals']['total_co2_emissionsNUM'])){
        $total_co2=round($transport_stats['totals']['total_co2_emissionsNUM'], 2);
    }
    
   // echo $total_co2;
    $path_to_images = "images/";
    ///Array ( [totals] => Array ( [total_milesNUM] => 29520.01814396 [total_litres_usedNUM] => 10302.48633224204 [total_tonnageNUM] => 141.45000000 [total_co2_emissionsNUM] => 26230.43927658 )
    
    
    $transport_stats = array();
    $temp = [];
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '8888 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '9999 ');

    //$transport_stats['by_destination'] = $temp;
  
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04' );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => 7.40000000, 'total_co2_emissionsNUM' => 952.29128418 ,'wtn_destination_postcode' => 'B70 0AQ','waste_type_name' => 'Plasterboard/Gypsum 17 08 02');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '1111 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '2222 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '3333 ');
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
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '4444 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '5555 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '6666 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '7777 ');

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
    $rows_array_count=0;
    $page_data=array();
    foreach($group_by_postcode as $key => $group){
        $rows_array_count+=count($group);
        $page_data[] = $key;
    }
    //echo " rows_array_count:". $rows_array_count."<br>";
    $page_count=ceil($rows_array_count/6);
    echo $page_count;
    $page_array=array_fill(0, $page_count, 'page');
        /////////////////////////
    $temp=array();
    $page=array();
    foreach($group_by_postcode as $key => $group){
        $page[] = $key;
        echo count($group)."<br>";
        
    }

    $page1=array();
    $i=1;
    foreach($group_by_postcode as $key => $group){
        foreach($group as $key1 => $stat){
            
            if(count($temp)< 6){
                //echo count($temp)."<br>";
               // echo "lower".$i." ".$stat['waste_type_name']."<br>";
                $temp[]=$stat;
                //continue;
            }else{
                echo "more".$i." ".$stat['waste_type_name']."<br>";
                $temp[]=$stat;
                $page1[]=$temp;
                $temp=[];
            }
           
            if ($i == $rows_array_count && count($temp) < 6) {
                //echo "last:".$i."<br>";
                echo "count".count($temp)."<br>";
                $page1[]=$temp;
            }else{
                //echo "nolast:".$i."<br>";
               // echo "nolast____________".$rows_array_count."<br>";
            }
            $i++ ; 
        }
    }
    //$page_data=array();
    $page_data_array=array();
    $x=0;
    foreach($page1 as $key => $page){
        foreach($page as $key1 => $item){
            //echo "item".$item['wtn_destination_postcode']."<br>";
            foreach($page_data as $data){
                if ($data == $item['wtn_destination_postcode']) {
                    if ($x == $key) {
                        $page_data_array[$x][$data][]=$item;
                        //echo "x:: ".$x."key:: ".$key."data".$item['waste_type_name']."<br>";
                    }
                    //echo "key:: ".$key."data".$item['waste_type_name']."<br>";
                    //$group_by_postcode[$stat['wtn_destination_postcode']][]=$stat;
                }
             }
        }
        $x++;
    }

    
       /* foreach($transport_stats['by_destination'] as $stat){
            $temp[$stat['wtn_destination_postcode']][]="";
            if(count($temp[$stat['wtn_destination_postcode']])==7){
                echo "stop:". $temp[$stat['wtn_destination_postcode']]."<br>";
               
            }else{
                $page[$temp[$stat['wtn_destination_postcode']]]
            }
              /* echo "<pre>";
                    print_r($stat);
                    echo "</pre>"; 
        }*/
        
    //foreach($page_array as $page){
        //echo $page."<br>";
       // foreach($group as $stat){
            //if ($key == $stat['wtn_destination_postcode']) {
                //$cells_count++;
           // }
       // }
        //$group_count_array[$key]=$cells_count;
        //$group_count++;
   // }
    //echo "cells_count::".$cells_count."<br>";
    echo "<pre>";
  // print_r($page1);
    echo "</pre>";
    echo "<pre>";
  // print_r($page_data_array);
    echo "</pre>";
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
        <?php
        $page_i=1;
        $row_per_page=7;
        $key_i=array();
        foreach($page_data_array as $page){
            echo "
            <div class=pbreak></div>
            <div class='container'>
                <div class='container-flex1' style='position:relative'>
                    <div class='left-side-data' style='width:100%;'>
                        <div class='container-data-text1'>
                        <div class='data-text-table'>
                        ";
                        if($page_i==1){
                            echo "
                            
                                <div class='data-text-1'>Waste Tracking Data</div>
                                <div class='data-text-2' style='width:60%'>
                                    The table below shows the distance of the waste disposal sites for each waste stream 
                                    collected from site. The waste disposal sites are selected based on the locality to the site 
                                    to minimise vehicle carbon emissions. Project totals are shown on the right of this page.
                                </div>
                            ";
                        }
                        
                        $page_with_tables=1;
                        $start_last=0;
                        //$rows_array_count=15;
                        $i = 1;
                        $end=0;
                        foreach($page as $key => $group){
                            
                            echo newTable($key, $continue);

                            foreach($group as $key1 => $stat){
                                $row_count=countRows('next');
                                echo  "
                                <tr>
                        
                                    <td>".$stat['waste_type_name']."</td>
                                    <td class='cell-number'>".$stat['total_tonnageNUM']."</td>
                                    <td class='cell-number'>".round($stat['total_milesNUM'], 2 )."</td>
                                    <td class='cell-number'>".round($stat['total_litres_usedNUM'], 2 )."</td>
                                    <td class='cell-number'>".round($stat['total_co2_emissionsNUM'], 2 )."</td>
                                </tr>";                                
                            }

                                echo "</table></div>";
           
                           
                        }
                        echo "<div class='/*footer-for-tables*/' style='position:relative; /*padding:120px 0 0 0*/'>";
                            echo footer($page, $path_to_images);
                            echo "</div>";
                echo "
                    </div><!--container-data-text1-->   
                    </div><!--container-data-text1-->     
                    </div><!--left-side-data-->     
                </div><!--container-flex11-->                
            </div><!--container-->";
            $page_i++;

        }
?>
                              
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
        <div class='table-waste' style='width:60%;/*height:500px;*/'>
            <table>
                <tr>
                    <th width='160'>Waste type</th>
                    <th>Total Tonnage</th>
                    <th>Total Mileage</th>
                    <th>Total Fuel (Litres) </th>
                    <th>CO2 Emissions</th>
                </tr>");
                
    }
    function footer($page, $path_to_images){
		//global $global;
		return("
			<div class='container-line-logo' style='position: absolute;z-index: 1000;left:0;right:0;bottom:0'>
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
				<div class='container-line-logo-right' style='padding: 10px 11px 26px 0;'>
						<img
						class='site-logo-1 center'
						src='".$path_to_images."encore_logo_2024.png'
						alt='Logo' />
				</div>
			</div>
		");
	}
function countRows($type='next')
{
    static $i = 0;
    //echo $i;
    if($type=='start'){
        $i=0;
    }else{
        $i++;
    }
  
    return $i;
}

    ?>
    