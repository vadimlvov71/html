<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Split Page with Background Image</title>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='css/styles-new.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <?php
        //include "includes/data.php";
        $headers_orgs=array("Name", "Contact", "Contact Info", "Categories", "Metadata");
 
        $value=array();
        $value['name']="ABC Org";
        //$value['address']="Baker street";
        $value['contact']="unclear????";
        $value['contact_info']=array("telephone" => "2 (999) 000-00-00", "email" => "aaa@aaa.com", "address" => "Baker street");
        //$value['telephone']="2 (999) 000-00-00";
        //$value['email']="aaa@aaa.com";
        $value['category']=array("Region" => "Africa", "EcoRegion" => "Desert", "UN coding" => "ABC01");
        $value['metadata']="Metadata ABC";
        $value1=array();
        $value1['name']="DEF Org";
        $value1['contact']="unclear????";
        $value1['contact_info']=array("telephone" => "1 (777) 222-22-2", "email" => "bbbb@bbbbb.com", "address" => "Coronation street");
        $value1['category']=array("Region" => "Africa", "EcoRegion" => "Savanna", "UN coding" => "DEF04");
        $value1['metadata']="Metadata DEF";
        $value1['category']=array("Region" => "Africa", "EcoRegion" => "Savanna", "UN coding" => "DEF04");
        $value1['metadata']="Metadata DEF";
        $orgs=array();
        $orgs[]=$value;
        $orgs[]=$value1;
        $orgs[]=$value;
        $orgs[]=$value1;
            /////
             echo "<div class='container'>
                    <div class='header row'>
                        <div class='page-title col-sm-6'> </div>
                        <div class='col-sm-6'>
                            <div class='btn btn-outline-secondary btn-add'  onclick='add_edit_propety();'>New Organization</div>
                        </div>
                    </div>
                    
                    <div class='row-block form-block'>
                        <div class='col-sm-12 title-row'>Organizations</div>
                        <div class='row'>
                            ";
                            foreach($headers_orgs as $header){
                                echo "<div class='col header-row'>".$header."</div>";
                            }          
                        echo "</div>  
                        ";              
                            foreach($orgs as $dataItem){
                                echo "<div class='row'>"; 
                                    foreach($dataItem as $item){
                                        if(is_array($item)){
                                            echo "<div class='col-sm-3 data-item'>";
                                            foreach($item as $key => $value){
                                                echo "<div class='data-item-array container-flex'>
                                                <div class='key'>".$key."</div> <div>".$value."</div>
                                                </div>";
                                            }
                                            echo "</div>";
                                        }else{
                                            echo "<div class='col-sm-2 data-item'>".$item."</div>";
                                        }
                                        
                                    }
                                echo "</div>"; 
                            }

                            echo "
                      
                    </div>
                </div>";
?>
    </body>
    <style>
    .data-array{
        width:200px;
    }
    .data-item {
        border-top: 1px solid #d0e6fd;
        font-size: 0.9rem;
    }
    .data-item-array{
        border-bottom: 1px dotted #ccc;
    }
    .data-item-array span{
        font-style:italic;
    }
    .data-item-array::first-letter {
        /*font-size: 200%;*/
        color: #6ab1f9;
    }
    .key{
        font-size:0.7rem;
        padding-right:6px;
        background:#fafbe4cc;
        background:#f0f6fd;
        font-style:italic;
        line-height: 21px;
        text-align:right;
        width:80px;
    }
    </style>
</html>

    <?php
   
    ?>