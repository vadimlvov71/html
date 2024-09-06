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
                        <div class='page-title col-sm-6'> </div>
                        <div class='col-sm-6'>
                            <div class='btn btn-outline-secondary btn-add'  onclick='add_edit_propety();'>New Organization</div>
                        </div>
                    </div>
                    
                    <div class='row row-block form-block'>
                        <div class='col-sm-12 title-row'>Organizations</div>
                        ";
                        foreach($headers_propeties as $header){
                            echo "<div class='col-sm-2 header-row'>".$header."</div>";
                        }          
                                        
                        foreach($orgs as $dataItem){
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