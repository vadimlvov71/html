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
$headers_propeties=array("Name", "Address", "Contact", "Telephone", "Email", "Metadata");
$headers_areas=array("Name", "Long/Latit", "Categories", "Metadata");
$headers_surveys=array("Name", "Long/Latit", "Categories", "Metadata");
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

$value1=array();
$value1['name']="TestName111";
$value1['latitude']="60";
$value1['long']="120";
$value1['metadata']="Metadata";
$value1['category']="Category 1";

$value2=array();
$value2['name']="TestName";
$value2['latitude']="480";
$value2['long']="73";
$value2['metadata']="Metadata";
$value2['category']="Category 2";

$data_areas=array();
$data_areas[]=$value1;
$data_areas[]=$value2;
$data_areas[]=$value1;

$value3=array();
$value3['name']="TestName111";
$value3['coord_from']="84";
$value3['coord_to']="12";
$value3['metadata']="Metadata";
$value3['category1']="Category 1";

$value4=array();
$value4['name']="TestName111";
$value4['latitude']="60";
$value4['long']="120";
$value4['metadata']="Metadata";
$value4['category']="Category 1";
$value4['latest']="latest text text";
$data_surveys=array();
$data_surveys[]=$value4;
$data_surveys[]=$value4;
$data_surveys[]=$value4;