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

   echo "<pre>";
   //print_r($transport_stats['by_destination']);
    echo "</pre>";
    //////
    /*
    function setPages($array){
        foreach($array as $key => $list){
            
            $temp=[];
            $temp[][$key] = $list;
            $pageArray[]=$temp;
           // echo "key:".$key."<br>";
          
        }
        return $pageArray;
    }
    echo "rows_array_count:".$rows_array_count."<br>";
    $new_group_by_postcode = $transport_stats['by_destination'];
    $pageArray=[];
    $pageArray[] = setPages($new_group_by_postcode );
    echo "<pre>";
    print_r($pageArray);
     echo "</pre>";
     */
    /////////////
    /////////////////
   
    $group_by_postcode=array();
    $cells_count=0;
    $transport_stats_exists=false;
		if($transport_stats['by_destination']){
			$transport_stats_exists=true;
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


        //$group_count_array=array();
        //$group_count=0;
        $rows_array_count=0;
        $page_data=array();
        $group_count=array();
        foreach($group_by_postcode as $key => $group){
            $rows_array_count+=count($group);
            //echo "count group:: ".count($group)."<br>";
            $group_count[$key]=count($group);
            $page_data[] = $key;
        }
        echo "<pre>";
        //print_r($group_by_postcode);
         echo "</pre>";
         ##################################
         #####################
         ##############

        function setPages($array, $pageArray=[], $page_number=1, $rows_number=0, $cycle=1){
            $rows_number += 3;
            echo "rows_number start:".$rows_number."<br>";
            /*if($rows_number > 8){
                if($page_number=="one"){
                    $page_number="two";
                }else if($page_number=="two"){
                    $page_number="three"; 
                }
                $rows_number = 0;
            }*/
            $rows_number_limit = 12;
            $page_limit = false;
            echo "<div style='color:red'>page_number: ".$page_number."</div>";
            echo "<div style='color:red'>cycle: ".$cycle."</div>";
           // echo "rows_number start:".$rows_number."<br>";
            //////////////
            $array_new=[];
            if( $cycle === 3){
            echo "<div style='color:green'><pre>";
                       // print_r( $array);
                        echo "</pre></div>";
            }
            foreach($array as $key => $list){
                echo "key: ".$key."<br>";
                $i=0;
                foreach($list as $key1 => $item){
                    //echo "index: ".$i."<br>";
                   // echo "rows_number inside:".$rows_number."<br>";
                    //echo "rows_number_limit:".$rows_number_limit."<br>";
                    if($rows_number < $rows_number_limit){ 
                       // echo "<div style='color:green'>ITEM:".$item['waste_type_name']."</div>";
                       // echo "<div style='color:green'>ITEM:".$array[$key][$i]['waste_type_name']."</div>";
                        $rows_number++;
                        $array_new[$key][]=$item;
                       
                        unset($array[$key][$i]);
                        //$rows_number=0;
                       
                    }else{
                        //$rows_number+=3;
                        $page_limit = true;
                                              
                        break;
                    }
                    $i++;
                }
                
                //reindexing
                $array[$key]= array_values($array[$key]);
                /*if(!empty($array[$key])){
                    if( $cycle === 2){
                        echo "###########________________<pre>";
                        print_r( $array[$key]);
                        echo "</pre>";
                    }
                }*/
                echo "<div style='color:green'>rows_number end: ".$rows_number."</div>";
               //TO DO how many rows passed farther
                if(empty($array[$key])){
                    echo "Delete<br>";
                   // print_r( $array[$key]);
                   unset($array[$key]);
                }
                if( $cycle === 4){
                   /* echo "<div style='color:blue'><pre>";
                    print_r($array_new);
                    echo "</pre></div>";*/
                }
                $pageArray[$page_number][]=$array_new;

                if($rows_number === 12){
                    $page_limit = true;
                    $rows_number = 0;
                }
                if($page_limit == true ){
                    $page_number++;
                    /*if($page_number=="one"){
                        $page_number="two";
                    }else if($page_number=="two"){
                        $page_number="three"; 
                    }else if($page_number=="three"){
                        $page_number="four"; 
                    }*/
                }
               /* if( $cycle === 8){
                    //$rows_number += 3;
                    //$page_number="";
                    
                    echo "<div style='color:blue'><pre>";
                    print_r($array);
                    echo "</pre></div>";
                    return $pageArray;
                }*/
                if(empty($array)){
                    return $pageArray;
                }else{
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                }
                
               /*
                if( $cycle === 2){
                    //$rows_number += 3;
                    //$page_number="two";
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    return $pageArray;
                }
                if( $cycle === 3){
                    //$rows_number += 3;
                   // $page_number="";
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    return $pageArray;
                }
                if( $cycle === 4){
                    //$rows_number += 3;
                   // $page_number="";
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    return $pageArray;
                }
                if( $cycle === 5){
                    //$rows_number += 3;
                   // $page_number="";
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    return $pageArray;
                }
                if( $cycle === 6){
                    //$rows_number += 3;
                   // $page_number="";
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    return $pageArray;
                }
                if( $cycle === 7){
                    //$rows_number += 3;
                   // $page_number="";
                    //return setPages($array, $pageArray, $page_number, $rows_number, $cycle);
                    return $pageArray;
                }
                */
            }
            
            ////////////////////
            //$cycle++;
            echo "<div style='color:green'>cycle: ".$cycle."</div>";
        }
        ##############################################################
        function setPages1($array, $pageArray=[], $page_number="one", $rows_number=3, $cycle=1){
            
            echo "rows_number start:".$rows_number."<br>";
            echo "<div style='color:red'>cycle: ".$cycle."</div>";
            echo "page_number: ".$page_number."<br>";
            $rows_number_limit = 11;
           
            //$page_num = 0;
            $array_new=[];
            
            foreach($array as $key => $list){
                echo "key: ".$key."<br>"; 
                echo "key count:::: ".count($list)."<br>";
               // echo "rows_number before:".$rows_number."<br>";
                //$rows_number += count($list);
                echo "rows_number before:".$rows_number."<br>";
                /*
                echo "AAAAAA________________<pre>";
                print_r( $array);
                echo "</pre>";
                  */  
                    $i = 0;
                    
                foreach($list as $key1 => $item){
                    echo "rows_number inside:".$rows_number."<br>";
                    echo "i :::::::::::::".$i."<br>";
                    if($rows_number <= $rows_number_limit){ 
                        
                        echo "ITEM_____________-:".$item['waste_type_name']."<br>";
                        $rows_number ++;
                        $array_new[$key][]=$item;
                    /* echo "###########________________<pre>";
                        print_r( $array[$key][$i]);
                        echo "</pre>";*/
                        unset($array[$key][$i]);
                    }else{
                        echo "<div style='color:red'>ITEM_____________-:".$item['waste_type_name']."</div>";
                        /*
                        echo "rows_number zzz:".$rows_number."<br>";
                        echo "zzzzzzzzzzzzzzzzz<br>";
                        echo "item:".$item['waste_type_name']."<br>";
                        echo "zzzzzzzzzzzzzzzzz<br>";
                        */
                        $rows_number=3;
                        
                        echo "<div style='color:blue'><pre>";
                       // print_r($array_new);
                        echo "</pre></div>";
                        if($cycle === 5){
                            echo "vvvvvvvvvvvvvvvv<br>";
                            exit;
                        }
                        if(empty($array[$key])){
                            echo "Delete 22222<br>";
                           // print_r( $array[$key]);
                           unset($array[$key]);
                        }
                        //exit;
                        $pageArray[$page_number][]=$array_new;
                         //header coefficient
                        //$rows_number += 3;
                        return setPages($array, $pageArray, "two", $rows_number, ++$cycle);
                    }
                    $i++;
                }
                if(empty($array[$key])){
                    echo "Delete<br>";
                   // print_r( $array[$key]);
                   unset($array[$key]);
                }
               /* if($cycle === 4){
                    echo "stop<br>";
                   exit;
                }*/
                /*
                if($rows_number >= 9){
                    echo "<div style='color:red'>LIMIT</div>";
                    echo "rows_number:".$rows_number."<br>";
                    $page_number="three";
                    exit;
                    return setPages($array, $pageArray, $page_number, $rows_number, ++$cycle);
                    
                }   
                */
                //echo "!!!!!!!!!!!!!!!!!rows_number:".$rows_number."<br>";
                
               
               // $temp=[];
                //$temp[$key] = $list;
                if(!empty($array_new)){
                    $pageArray[$page_number][]=$array_new;
                }else{
                    echo "Empty<br>";
                }
                
               
                echo "<pre>";
              // print_r( $array);
                echo "</pre>";
               // echo "count:".count($pageArray)."<br>";
                $page_num += count($pageArray) * 3;
                /*foreach($pageArray as $key => $page){
                    foreach($page as $key1 => $page_item){
                        //echo "count page:".count($page_item)."<br>";
                        echo "<pre>";
                        print_r($array);
                         echo "</pre>";
                        $page_num += count($page_item);
                        //unset($array[$key]);
                    } 
                }*/
                if($cycle === 4){
                    echo "<pre>";
                    print_r($array);
                     echo "</pre>";
                }
               
                echo "rows_number end:".$rows_number."<br>";
                $cycle++;
                echo "<div style='color:green'>cycle: ".$cycle."</div>";
                //return $pageArray;
                echo "page_num: ".$page_num."<br>";
                if( $cycle === 4 ){
                    $rows_number += 3;
                    $page_number="three";
                    return setPages($array, $pageArray, $page_number, $rows_number, $cycle);
                    return $pageArray;
                    
                }
                if( $cycle === 6){
                    $rows_number += 3;
                    $page_number="three";
                    //return setPages($array, $pageArray, $page_number, $rows_number, $cycle);
                    return $pageArray;
                    
                }
                if( $cycle ===2){
               // if(count($array) !== 0){
                    //header coefficient
                    $rows_number += 3;
                    return setPages($array, $pageArray, $page_number, $rows_number, $cycle);
                    return $pageArray;
                   
                }else{
                    
                    
                    
                    echo "count_array::: ".count($array)."<br>";
                }
                /*else{
                    return $pageArray;
                }*/
                
                if(count($pageArray)){
                    //return $pageArray;
                }
                //return $pageArray;
            }

        }
        echo "rows_array_count:".$rows_array_count."<br>";
        $new_group_by_postcode = $group_by_postcode;
        $pageArray=[];
        $pageArray[] = setPages($new_group_by_postcode );
      
         echo "<div style='color:red'><pre>";
         print_r($pageArray);
          echo "</pre>";
         ///////////////////////////
         exit;
        $temp=array();
        $page1=array();
        $groupArray=array();
        $i=1;
        echo "<pre>";
        print_r($group_count);
        echo "</pre>";
        foreach($group_by_postcode as $key => $group){
            foreach($group as $key1 => $stat){

               // echo "count page1:: ".$stat['wtn_destination_postcode']."<br>";
               //echo "count page1:: ".count($page1)."<br>";
                //echo "count temp:: ".count($temp)."<br>";
                if(count($page1)===0){
                    $rows_count = 2;
                    foreach($group_count as $key_count => $value){
                       // echo "!!!!!key_count ".$key_count."<br>";
                       // echo "!!!!!key ".$key."<br>";
                        if($key_count==$key){
                            //if($value == 3){
                               // $rows_count = $value;
                            //}
                           // echo "next ".next($key_count)."<br>";
                            
                        }
                    }
                    
                }else{
                    $rows_count = 3;
                }
                //echo " rows_count:: ". $rows_count."<br>";
                if(count($temp) < $rows_count){
                   // echo "count:: ".count($temp)."<br>";
                    //echo "lower____________".$i." ".$stat['waste_type_name']."<br>";
                    $temp[]=$stat;
                    //continue;
                }else{
                    //echo "more___________".$i." ".$stat['waste_type_name']."<br>";
                    $temp[]=$stat;
                    $page1[]=$temp;
                    $temp=[];
                }
               // echo "i:".$i."<br>";
                
                if ($i == $rows_array_count && count($temp) < 4) {
                    //echo "last:".$i."<br>";
                    //echo "count".count($temp)."<br>";
                    $page1[]=$temp;
                }else{
                    //echo "nolast:".$i."<br>";
                // echo "nolast____________".$rows_array_count."<br>";
                }
                
                $i++ ; 
            }
        }
        
      
        
        
        
        echo "<pre>$$$$$$";
        print_r($pageArray);
        echo "&&&&&&</pre>";
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
    }

    echo "########################<pre>";
   // print_r($page_data_array);
    echo "</pre>";
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
        $page=0;
        $row_per_page=7;
        $page_i=1;
        if($transport_stats_exists==false){
            echo("
                <div class=pbreak></div>
                <div class='container' style='position:relative;height: 18cm;text-align:center'>
                    <div class='center' style=color:red;>There are no entries during this period.</div>
            ");
                    echo footer($page, $path_to_images, $client['name'], $project['project_title']);
            echo("
                </div>
            ");
        }
        static $key_i=array();
        foreach($page_data_array as $key_page => $page_content){
            echo "
            <div class=pbreak></div>
            <div class='container' style='position:relative;height: 900px;'>
                <div class='container-flex1' style='/*position:relative*/'>
                    <div class='left-side-data' style='width:100%;'>
                        <div class='container-data-text1' style='height: 700px;'>
                        <div class='data-text-table' >
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
                        
                        $i=0;
                        foreach($page_content as $key => $group){
                            if($key_i[$key]){
                                $key_i[$key]++;
                            }else{
                                $key_i[$key]=$i;
                            }
                            
                           // echo "key_i:: ".$key_i[$key]."<br>";
                            //echo "key::".$i."<br>";
                            if($key_i[$key]>0 && $i==0){
                               // echo "true:<br>";

                                $continue=true; 
                            }else{
                                //echo "false:<br>";
                                $continue=false;
                            }
                            echo newTable($key, $continue);

                            foreach($group as $key1 => $stat){
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
                            $key_i[$key]++;
                            $i++; 
                        }
                        end($page_data_array);
                        if ($key_page === key($page_data_array)) {
                            //$page++;
                            echo "Further supplier information and documentation can be found on our portal within the duty of care section";
                        }
                        echo footer($page, $path_to_images, $client['name'], $project['project_title']);
                            
                echo ("
                    </div><!--data-text-table-->   
                    </div><!--container-data-text1-->     
                    </div><!--left-side-data-->     
                </div><!--container-flex11--> 
                
            ");
            //echo ("page_i".$page_i."<br>");
            if($page_i==1){
                echo ("
                <div class='right-side' style='position:absolute; top:0; right:0'>
                        <div class='container-logo'>
                            <div class='data-text-right-project text-align-center'>Project Tools</div>
                            <img class='data-track data-right-img center' src='".$path_to_images."truck.png' alt='' />
                            <div class='data-text-right-1 text-align-center'>
                                Total mileage to waste<br>disposal site: <span>".$total_miles."</span>
                            </div>
                        </div>
                        
                        <div class='tonnage center'>
                            <img class='data-right-img center' src='".$path_to_images."tonnage_weight.png' alt='' />
                            <div class='data-text-tonnage text-align-center'>".$total_litres."<br>Tonnes</div>
                        </div>
                        <div class='data-text-right-1 text-align-center'>
                            Total tonnage of <br> waste collected to date
                        </div>
                        <div class='container-logo'>
                            <img class='data-right-img center' src='".$path_to_images."co2_cloud.png' alt='' />
                            <div class='data-text-right-1 text-align-center'>
                                <span>".$total_tonnage." tonnes</span>
                                <div>of CO2 emissions.</div>
                            </div>
                        </div>
                        <div class='container-logo'>
                            <img class='data-right-img center' src='".$path_to_images."pump.png' alt='' />
                            <div class='data-text-right-1 text-align-center'>
                                <span>".$total_co2." Litres</span> of fuel used 
                                <div>of CO2 emissions.</div>
                            </div>
                        </div>
                    </div> 
                ");	
            } 
            echo ("              
            </div><!--container-->
            ");	
            $page_i++;
            $page++;
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
    function footer($page, $path_to_images, $client_name, $project_name){
		//global $global;
		return("
            
                <div class='container-line-logo' style='position: absolute;z-index: 1000;left:0;right:0;bottom:0'>
                    <div class='container-line-logo-left'>
                        <div class='line-logo-text'>
                            &nbsp;
                        </div>
                        <div class='report-text'>
                            
                            <div class='container-flex line-logo-text-2' style='flex-direction: row;'>
                                <div class='line-logo-text-1' style='width:40px;'>".$page."</div>
                                <div style='text-align:right' class='cut-text uppercase'>".$client_name."</div>
                                <div class='footer-divide'>-</div>
                                <div class='cut-text uppercase'>".$project_name."</div> 
                                <div class='footer-divide'>-</div>
                                <div style='padding:4px 0 0 14px'> WASTE MOVEMENT REPORT</div> 
                            </div> 
                            <div class='overflow' style='float: left; width: 50px'>Long text that might overflow</div>
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
    <style>
.footer-divide{
    width:40px;
    text-align:center;
}
        .overflow1 {
  overflow: hidden;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.overflow1 {
  overflow: visible;
}

.cut-text1:hover .overflow {
  position: absolute;
  top:20px;
  left:20px;
  background-color: white;

  box-shadow: 0 0 4px 0 black;
  border-radius: 1px;
}
</style>