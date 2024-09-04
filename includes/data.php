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
$value1['address']="Baker street11";
$value1['contact']="aaaaaa11";
$value1['telephone']="000-00-0011";

$data_areas=array();
$data_areas[]=$value1;
$data_areas[]=$value1;
$data_areas[]=$value1;