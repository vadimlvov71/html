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
            
            include "includes/data.php";
            /////
             echo "<div class='container'>
                    <div class='header row'>
                        <div class='page-title col-sm-6'>ABC Org <span>/Farm ABC</span></div>
                        <div class='col-sm-6'>
                            <div class='btn btn-outline-secondary btn-add' onclick='add_edit_propety();'>Edit</div>
                            <div class='btn btn-outline-primary btn-add' onclick='add_edit_propety();'>Report</div>
                        </div>
                    </div>
                    <div class='row form-block'>";
                     
                        echo "
                            <div class='col-sm-6' style='padding: 6px 6px;'>
                        ";
                            inputFields("Name", $value3['name']);

                            echo "
                                <div class='container-flex'>
                            ";
                            inputFields("Log/Lat from", $value3['coord_from']); 
                            inputFields("Log/Lat to", $value3['coord_to']); 
                            echo "    
                                </div>
                            ";
                            
                            inputFields("Category", $value3['category1'], "Category 2");
                            inputFields("Metadata", $value3['metadata'], "Metadata 2");
                        echo "
                                
                            </div>
                        ";
                        
                        echo "
                            <div class='col-sm-6'>
                                <div class='map'>
                                    <img src='images/map1.png'>
                                </div>
                            </div>
                        ";
                    echo "
                    </div>
                    <div class='btn btn-outline-secondary btn-add' onclick='add_edit_category();'>Add Surveys Point</div>
                    <div style=clear:both;></div>
                    <div class='row row-block form-block'>
                        <div class='col-sm-12 title-row'>Surveys Points</div>
                        <div class='col-sm-12 row'>
                        
                            ";
                            foreach($headers_surveys as $header){
                                echo "<div class='col-sm-2 header-row'>".$header."</div>";
                            } 
                        echo "
                            <div class='col-sm-2 header-row'>Latest Survey</div>
                            <div class='col-sm-2 data-item'>000</div>
                        </div>
                        
                        
                        <div class='col-sm-12 row'>
                        ";         
                            echo "";                
                            foreach($data_surveys as $dataItem){
                                //foreach($dataItem as $item){
                                    echo "<div class='col-sm-2 data-item'>".$dataItem['name']."</div>";
                                    echo "<div class='col-sm-2 data-item coordinates'><span class='coordinates'>".$dataItem['latitude']."</span> / ".$dataItem['long']."</div>";
                                    echo "<div class='col-sm-2 data-item'>".$dataItem['category']."</div>";
                                    echo "<div class='col-sm-2 data-item'>".$dataItem['metadata']."</div>";
                                    echo "<div class='col-sm-2 data-item'>".$dataItem['latest']."</div>";
                                    echo "<div class='col-sm-2 data-item'>
                                        <div class='container-flex'>
                                            <div>1111</div>
                                            <div>2222</div>
                                        </div>
                                    </div>";
                                //}
                            }

                            echo "
                        </div>
                        <div class='col-sm-12 data-item'>
                            <div class='container-flex'>
                                <div>1111</div>
                                <div>2222</div>
                            </div>
                        </div>
                    </div>
                    
                </div>";
                /*echo "<pre>";
                print_r($data_areas);*/

?>
    </body>
    <style>
        
    </style>
</html>

    <?php
   
    ?>