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
                       <div class='page-title col-sm-6'>ABC Org <span>/ Farm ABC</span> / Field ABC / Survey ABC</div>
                    </div>
                    <div class='row' style='margin-bottom:16px;'>
                       <div class='col-sm-3'>
                       <div class='label'>Survey Title</div>
                       ";
                            dropDown("3", $options1);
                       echo "
                       </div>
                       <div class='col-sm-3'>
                            <div class='label'>Survey Type</div>
                       ";
                            dropDown("3", $options2);
                       echo "
                       </div>
                       <div class='col-sm-3'>
                            <div class='label'>Survey Code</div>
                            ";
                                dropDown("1", $options3);
                            echo "
                        </div>
                       <div class='col-sm-3'>
                            <div class='label'>Survey Date</div>
                            ";
                                dropDown("1", $options4);
                            echo "
                        </div>
                   </div>
                   <div class='row'>";
                       echo "
                           <div class='col-sm-3' style='padding: 6px 6px;'>
                               <div class='row-block form-block1'>
                                   <table><tr><td class='th'>Questions</td><td class='th'>Answers</td></tr>
                       ";
                                foreach($value5 as $key => $value){
                                    echo "<tr>
                                        <td style='padding-left:11px;'>".$key."</td>
                                        <td class='td-value'>".$value."</td>
                                    </tr>";
                                }
                        echo "  
                                    </table>
                                </div>
                           </div>
                        ";
                      
                       echo "
                            <div class='col-sm-9'>
                                <div class='row row-block1 form-block'>
                                    <div class='col-sm-4'>
                                        <div class='field'>Some Field 1</div>
                                        <div class='field'>Some Field 2</div>
                                        <div class='description'>".$description."</div>
                                    </div>
                                    <div class='col-sm-8 '>
                                       <div class='btn btn-outline-secondary btn-add' onclick='add_edit_propety();'>New Note/Attachment</div>
                                       <div style=clear:both;></div>
                                        <div class='devide'></div>
                                       <div style='padding:1px 0 0px 0;'>
                                           <div class='created'>added by <span>".$createdBy."</span> on <span>".$createdTime."</span></div>
                                           <div><img src='images/field.jpeg' width='300' align='right'></div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                       ";
                   echo "
                   </div>
                   
                   <div style=clear:both;></div>
                   <div class='row row-block form-block'>
                       <div class='col-sm-12 title-row'>-</div>
                       
                       ";        
                           
                           echo "
                       
                       
                    </div>
                  
               </div>";
               /*echo "<pre>";
               print_r($data_areas);*/


?>
   </body>
   <style>
       :root {
        --text:#8b95b9;
       --header: #4fa5f9;
       --blue: #1e90ff;
       --white: #ffffff;
       }
        .created{
           color: var(--header);
           font-size: 0.7rem;
           padding:0 0 10px 0;
           text-align:right;
        }
        .created span{
           color: #666;
           /*font-weight:700;*/
        }
        .description{
            color: var(--text);
            font-size: 0.8rem;
            padding:6px 0;
        }
        .field{
            border-left: 3px solid #e6e7e8;
            border-bottom: 1px solid #e6e7e8;
            color: var(--header);
            padding: 0px 0px 0px 6px;
            margin-top: 4px;
            font-size: 0.8rem;
        }

       .devide{
           padding:10px 0;
           width:100%;
           border-bottom: 1px solid var(--header);
       }
       .label{
            color: var(--header);
            font-size:0.9rem;
       }
       .td-value{
        text-align:right;
        padding-right:11px;
       }
       .th{
            background:#eff5fb;
            color: var(--header);
            font-size: 0.8rem;
           text-align:center;
       }
   table {
       border-collapse: collapse;
       width:100%;
   }
   td {
       border: 1px solid #c7cbdb;
       color: var(--text);
   }
   </style>
</html>


   <?php
 
   ?>

