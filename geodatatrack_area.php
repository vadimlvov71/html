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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    </head>
    <body>
        <?php
            
            include "includes/data.php";
            /////
             echo "<div class='container'>
                    <div class='header row'>
                        <div class='page-title col-sm-6'>ABC Org <span>/ Farm ABC</span> / Field ABC</div>
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
                                    <img src='images/map1.png' width='400'>
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
                            <div class='col-sm-2 data-item'>-</div>
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
                                    echo "<div class='col-sm-2 data-item' style='padding-right:0;padding-left:0;'>
                                        <div class='container-flex'>
                                            <div style='padding-right: 8px;'>
                                                <div class='btn-group'>
                                                    <button type='button' style='font-size: 0.7rem; padding:5px 6px;' class='btn btn-outline-secondary dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                                                        Survey type
                                                    </button>
                                                    <div class='dropdown-menu' style='font-size: 0.7rem; min-width: 2rem;'>
                                                        <a class='dropdown-item' href='#'>type1</a>
                                                        <div class='dropdown-divider'></div>
                                                        <a class='dropdown-item' href='#'>type2</a>
                                                        <div class='dropdown-divider'></div>
                                                        <a class='dropdown-item' href='#'>type3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style='font-size:0.7rem;padding: 4px 7px;' class='btn btn-outline-secondary ' onclick='add_edit_category();'>Add Survey</div>
                                        </div>
                                    </div>";
                                //}
                            }

                            echo "
                        </div>
                        <div class='col-sm-12 data-item' style='padding:20px 0;'>
                            <div class='container-flex'>
                                <div></div>
                                <div></div>
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