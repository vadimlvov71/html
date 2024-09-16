<?php
    error_reporting(1);
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
    $client=[];
    $client['name']="Client Loooooooooooooooooooooooong";
    $project=[];
    $project['project_title']="Project Name 11111111111";
    $transport_stats = array();

    $temp = [];
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '8888 ##### 1');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '9999 ##### 2 ');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '8888 ##### add 1');
    //$temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '0000', 'waste_type_name' => '9999 ##### add 2');
    //$transport_stats['by_destination'] = $temp;
  
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04 ##### 3' );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => 7.40000000, 'total_co2_emissionsNUM' => 952.29128418 ,'wtn_destination_postcode' => 'B70 0AQ','waste_type_name' => 'Plasterboard/Gypsum 17 08 02 ##### 4');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '1111 ##### 5');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '2222 ##### 6');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => '3333 ##### 7');
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04 ##### 8' );
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04 ##### 9' );
    $temp[]= array( "total_milesNUM" => 2500.67729625, 'total_litres_usedNUM' => 872.73637639125, 'total_tonnageNUM' => 19.75000000, 'total_co2_emissionsNUM' => 2222.01299642, 'wtn_destination_postcode' => 'B70 0AQ', 'waste_type_name' => 'Mixed Construction Waste and/or Demolition Waste17 09 04 ##### 10' );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => 7.40000000, 'total_co2_emissionsNUM' => 952.29128418 ,'wtn_destination_postcode' => 'B70 0AQ','waste_type_name' => 'Plasterboard/Gypsum 17 08 02 ##### 11');
    
    $temp[]= array(
        'total_milesNUM' => 3941.68789688, 
        'total_litres_usedNUM' => 1375.64907601112, 
        'total_tonnageNUM' => 18.77000000, 
        'total_co2_emissionsNUM' => 3502.44381700, 
        'wtn_destination_postcode' => 'BD18 1HY',
         'waste_type_name' => 'aaa ##### 12'
         );
    $temp[]= array(
    'total_milesNUM' => 3941.68789688, 
    'total_litres_usedNUM' => 1375.64907601112, 
    'total_tonnageNUM' => 18.77000000, 
    'total_co2_emissionsNUM' => 3502.44381700, 
    'wtn_destination_postcode' => 'BD18 1HY',
        'waste_type_name' => 'bbbb ##### 13'
        );
        $temp[]= array(
            'total_milesNUM' => 3941.68789688, 
            'total_litres_usedNUM' => 1375.64907601112, 
            'total_tonnageNUM' => 18.77000000, 
            'total_co2_emissionsNUM' => 3502.44381700, 
            'wtn_destination_postcode' => 'BD18 1HY',
                'waste_type_name' => 'cccc ##### 14'
                );
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '4444 ##### 15');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '5555 ##### 16');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '6666 ##### 17');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '4444', 'waste_type_name' => '7777 ##### 18');

    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '5555', 'waste_type_name' => '7777 ##### 19');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '5555', 'waste_type_name' => '7777 ##### 20');
    $temp[]= array( 'total_milesNUM' => 1071.71884125, 'total_litres_usedNUM' => 374.02987559625, 'total_tonnageNUM' => '', 'total_co2_emissionsNUM' => 952.29128418, 'wtn_destination_postcode' => '5555', 'waste_type_name' => '7777 ##### 21');

    $transport_stats['by_destination'] = $temp;