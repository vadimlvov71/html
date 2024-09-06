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
function dropDown($id, $options){
    echo "
    
    <div class='btn-group'>
        <select class='custom-select' autocomplete='off'>
        ";
            $selected = " ";
            foreach($options as $key => $value){
                if($key == $id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                echo "<option ".$selected." value='".$key."'>".$value."</option>
                ";
            }
    echo "
        </select>
    </div>";
}
$headers_orgs=array("Name", "Address", "Contact", "Telephone", "Email", "Categories", "Metadata");
$headers_propeties=array("Name", "Address", "Contact", "Telephone", "Email", "Metadata");
$headers_areas=array("Name", "Long/Latit", "Categories", "Metadata");
$headers_surveys=array("Name", "Long/Latit", "Categories", "Metadata");

$value=array();
$value['name']="ABC Org";
$value['address']="Baker street";
$value['contact']="aaaaaa";
$value['telephone']="2 (999) 000-00-00";
$value['email']="aaa@aaa.com";
$value['category']=array("Region" => "Africa", "EcoRegion" => "Desert", "UN coding" => "ABC01");
$value['metadata']="Metadata ABC";

$value1=array();
$value1['name']="DEF Org";
$value1['address']="Douning street";
$value1['contact']="bbbbb";
$value1['telephone']="1 (777) 222-22-2";
$value1['email']="bbbb@bbbbb.com";
$value1['category']=array("Region" => "Africa", "EcoRegion" => "Savanna", "UN coding" => "DEF04");
$value1['metadata']="Metadata DEF";
$orgs=array();
$orgs[]=$value;
$orgs[]=$value1;
$orgs[]=$value;
$orgs[]=$value1;

$orgNames=array("1" => "ABC Org", "2" => "DEF Org", "3" => "XYZ Org");
$propertyNames=array("1" => "ABC Prop", "2" => "DEF Prop", "3" => "XYZ Prop");

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

$options1=array();
$options1['1']="July 2024 Back camp on ridge";
$options1['2']="bbbb";
$options1['3']="cccc";

$options2=array();
$options2['1']="type01";
$options2['2']="type02";
$options2['3']="type03";

$options3=array();
$options3['1']="ABC123";
$options3['2']="bbbb";
$options3['3']="ABC789";

$options4=array();
$options4['1']="5/9/2024";

