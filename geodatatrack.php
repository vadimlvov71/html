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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <?php
            
            $value=array();
            $value[]="TestName";
            $value[]="Category";
            /////
             echo "<div class='container'>
                    <div class='c'>ABC Org</div>
                    <div class='row' style='padding:16px 0;background:#f4f4f7;'>";
                     
                    echo "
                        <div class='col-sm-3' style='padding: 6px 6px;'>
                    ";
                            inputFields("Name", $value);
                            inputFields("Contact", $value);
                            inputFields("Telephone", $value);
                            inputFields("Email", $value);
                            inputFields("Category", $value, true);
                    echo "
                        </div>
                    ";
                    echo "
                        <div class='col-sm-3' style='padding: 6px 6px;'>
                    ";
                            inputFields("Name", $value);
                            inputFields("Contact", $value);
                    echo "
                        </div>
                    ";
                    echo "</div>
                </div>";
?>
    </body>
    </html>

    <?php
    function inputFields($label, $value, $cat=false){
        echo ("
        <div class='col-sm-3' style='padding: 6px 6px;'>
            <div><label>".$label."</label></div>
            <input type=text name='global[fields][_id]' value=".$value[0].">
        </div>
        ");
        if($cat==true){
            echo ("
            <div class='col-sm-3' style='padding: 6px 6px;'>
                <input type=text name='global[fields][_id]' value=".$value[1].">
            </div>
            ");
        }
    }
    ?>