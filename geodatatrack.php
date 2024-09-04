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
                        <div class='page-title col-sm-6'>ABC Org</div>
                        <div class='col-sm-6'>
                            <div class='btn btn-outline-primary' onclick='add_edit_propety();'>Report</div>
                            <div class='btn btn-outline-secondary' onclick='add_edit_propety();'>Edit</div>
                        </div>
                    </div>
                    <div class='row form-block'>";
                        echo "
                            <div class='col-sm-6' style='padding: 6px 6px;'>
                        ";
                            inputFields("Name", $value['name']);
                            inputFields("Contact", $value['contact']);
                            inputFields("Telephone", $value['telephone']);
                            inputFields("Email", $value['email']);
                            inputFields("Category", $value['category'], "Category 2");
                        echo "
                                <div class='btn btn-outline-secondary form-group' style='margin: 21px 0 0 6px;' onclick='add_edit_propety();'>Edit</div>
                            </div>
                        ";
                        echo "
                            <div class='col-sm-6' style='padding: 6px 6px;'>
                        ";
                            inputFields("Address", $value['address']);
                            inputFields("Suburb", $value['address']);
                            inputFields("Town/City", $value['address']);
                            inputFields("Postcode", $value['postcode']);
                            inputFields("State/Region", $value['state']);
                            inputFields("Country", $value['country']);
                         echo "
                            <div style='margin: 10px 0 0 6px;' class='btn btn-outline-secondary' onclick='add_edit_category();'>Add Property</div>
                        </div>
                    ";
                    echo "
                    </div>
                    <div class='row row-block form-block'>
                        <div class='col-sm-12 title-row'>Properties</div>
                        ";
                        foreach($headers as $header){
                            echo "<div class='col-sm-2 header-row'>".$header."</div>";
                        }          
                                        
                        foreach($data as $dataItem){
                                foreach($dataItem as $item){
                                    echo "<div class='col-sm-2 data-item'>".$item."</div>";
                                }
                        }

                        echo "
                      
                    </div>
                </div>";
?>
    </body>
    <style>
    
    </style>
</html>

    <?php
   
    ?>