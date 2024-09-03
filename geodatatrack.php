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
            $value['name']="TestName";
            $value['address']="Baker street";
            $value['contact']="aaaaaa";
            $value['telephone']="000-00-00";
            $value['email']="aaa@aaa.com";
            $value['category']="Category 1";
           
            $data=array();
            $data[]=$value;
            $data[]=$value;
            $data[]=$value;
            $value=array();
            $value['name']="TestName";
            $value['contact']="aaaaaa";
            $value['telephone']="000-00-00";
            $value['email']="aaa@aaa.com";
            $value['category']="Category 1";
            $value['address']="Baker street";
            $value['suburb']="Suburb";
            $value['postcode']="12345678";
            $value['state']="Nevada";
            $value['country']="USA";
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
               
                            <div class='col-sm-2'>Name</div>
                            <div class='col-sm-2'>Address</div>
                            <div class='col-sm-2'>Contact</div>
                            <div class='col-sm-2'>Telephone</div>
                            <div class='col-sm-2'>Email</div>
                            <div class='col-sm-2'>Metadata</div>  
                    ";
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
        .data-item{
            color: #9ea5c1;
            padding: 10px 0;
            background:#faffff;
            border-bottom: 1px solid #e9f4ff;
        }
    .form-block{
        padding:16px 0;
        background:#fff;
        border: 1px solid #ced4da;
        border-radius: .75rem;
        border-top-left-radius: 0.75rem;
        border-bottom-left-radius: 0.75rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
    }
    .header{
        padding:10px 20px;
    }
    .page-title{
        font-size:1.3rem;
    }
    .form-control-new{
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .input{
        padding:0; 
        margin:0;
    }
    .row-block{
        margin-top: 10px;
        padding: 20px;
    }
    .title-row{
        border-bottom: 1px solid #e9f4ff;
        font-size:1.1rem;
        padding-left:0!important;
    }
    </style>
</html>

    <?php
    function inputFields($label, $value, $cat=null){
        echo ("
        <div class='form-group1' style='padding: 6px 6px;'>
            <div><label class='input'>".$label."</label></div>
            <div class='input'><input class='form-control-new search-input' type=text name='global[fields'][_id']' value='".$value."'></div>
        </div>
        ");
        if($cat){
            echo ("
            <div class='form-group1 input' style='padding: 6px 6px;'>
                <input class='form-control-new search-input' type=text name='global[fields'][_id']' value='".$cat."'>
            </div>
            ");
        }
    }
    ?>