<?php
 function inputFields($label, $value, $cat=null){
    echo ("
    <div class='form-group1' style='padding: 6px 6px;'>
        <div><label class='input'>".$label."</label></div>
        <div class='input'><input style='width: 100%;' class='form-control-new search-input' type=text name='global[fields'][_id']' value='".$value."'></div>
    </div>
    ");
    if($cat){
        echo ("
        <div class='form-group1 input' style='padding: 6px 6px;'>
            <input style='width: 100%;' class='form-control-new search-input' type=text name='global[fields'][_id']' value='".$cat."'>
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
$value4['name']="Survey Name";
$value4['latitude']="60";
$value4['long']="120";
$value4['metadata']="Metadata";
$value4['category']="Category 1";
$value4['latest']="latest text text";
$data_surveys=array();
$data_surveys[]=$value4;
$data_surveys[]=$value4;
$data_surveys[]=$value4;


$createdBy="John Doe";
$createdTime = "5 Sept 2024";
$description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$value5=array();
$value5['A01']=5;
$value5['A02']=4;
$value5['B01']=7;
$value5['B05']=1;
$value5['C01']=3;
$value5['C07']=5;
$value5['Total']=57;
