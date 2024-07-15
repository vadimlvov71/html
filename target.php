    <?php
    $site_city='';
    $project['site_city']=' ';
    if(empty($project['site_city'])){
        $site_city=$project['site_city'].', ';
    }
    ?>
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Split Page with Background Image</title>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='css/styles1.css'>
    </head>
    <body>
        <?php
        echo("
            <div class='page_box'>
                <div class='title_page'>Project Waste Targets</div>
                <div class='container-flex'>
                    <div class='target'>
                        <div class='target-title'>Recycling rate</div>
                        <div class='table-waste' style='width:60%;/*height:500px;*/'>
                            <table>
                            <tr><th width='160'>Target</th><th width='160'>Current</th></tr>
                            <tr><td class='cell-number'>90%</td><td class='cell-number'>98.58%</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class='target'>
                        <div class='target-title'>Diversion from landfill</div>
                        <div class='table-waste' style='width:60%;/*height:500px;*/'>
                            <table>
                            <tr><th width='160'>Target</th><th width='160'>Current</th></tr>
                            <tr><td class='cell-number'>90%</td><td class='cell-number'>98.58%</td></tr>
                            </table>
                        </div>
                    </div>
                    <div class='target' style='width:60%'>
                        <div class='target-title'>Resourse efficiency</div>
                        <div class='table-waste' style='width:90%;/*height:500px;*/'>
                            <table>
                            <tr><th width='260'>Target tonnes per 100m2</th><th width='160'>GIFA m2</th><th width='160'>Current</th></tr>
                            <tr><td class='cell-number'>3.5</td><td class='cell-number'>98.58%</td><td class='cell-number'>98.58%</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            <dl>
            <dt>
            Browser market share June 2015
            </dt>
            <dd class='percentage percentage-11'><span class='text'>IE 11: 11.33%</span></dd>
            <dd class='percentage percentage-49'><span class='text'>Chrome: 49.77%</span></dd>
            <dd class='percentage percentage-16'><span class='text'>Firefox: 16.09%</span></dd>
            <dd class='percentage percentage-5'><span class='text'>Safari: 5.41%</span></dd>
            <dd class='percentage percentage-2'><span class='text'>Opera: 1.62%</span></dd>
            <dd class='percentage percentage-2'><span class='text'>Android 4.4: 2%</span></dd>
            </dl>


            </div>
        ");
        ?>
    </body>
    </html>
<style>
.page_box{
    font-family: 'Muli', sans-serif;
    position:relative;
    /*'.($global[pdf]?'
        width:30cm;
        height:20.5cm;
        ':'*/
        width:100%;
        height:auto;
        min-height:17.5cm;
        min-width:320px;
        max-width:1400px;
    /*').'*/
    padding:4%;
    box-sizing: border-box;
    color:black;
}
.title_page{
    font-weight: 700;
    font-size: 1.1rem;
}
.container-flex {
    display: flex;
}
.table-waste{
    padding: 12px 0;
    width: 90%;
}
.table-waste table, th, td {
    border: 1px solid #fff;
    border-collapse: collapse;
    padding: 14px 36px 6px 11px;
  }
.table-waste th, td {
    /*padding: 15px;*/
}
.table-waste th{
    background: #8ec343;
    font-size: 0.9rem;
    color:#fff;
}
.table-waste td{
    background: #e7f1d7;
    font-size: 0.8rem;
}
.target{
    width:20%;
    padding: 37px 0px 0px 0px; 
}
.target-title{
    font-size: 0.9rem;
    font-weight: 700;
    color: #8ec343;
}
dl {
  display: flex;
  background-color: white;
  flex-direction: column;
  width: 100%;
  max-width: 700px;
  position: relative;
  padding: 20px;
}

dt {
  align-self: flex-start;
  width: 100%;
  font-weight: 700;
  display: block;
  text-align: center;
  font-size: 1.2em;
  font-weight: 700;
  margin-bottom: 20px;
  margin-left: 130px;
}

.text {
  font-weight: 600;
  display: flex;
  align-items: center;
  height: 40px;
  width: 130px;
  background-color: white;
  position: absolute;
  left: 0;
  justify-content: flex-end;
}
.percentage {
  font-size: 0.8em;
  line-height: 1;
  text-transform: uppercase;
  width: 100%;
  height: 40px;
  margin-left: 130px;
  background: repeating-linear-gradient(to right, #ddd, #ddd 1px, #fff 1px, #fff 5%);
}
.percentage:after {
  content: "";
  display: block;
  background-color: #3d9970;
  width: 50px;
  margin-bottom: 10px;
  height: 90%;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  transition: background-color 0.3s ease;
  cursor: pointer;
}
.percentage:hover:after, .percentage:focus:after {
  background-color: #aaa;
}

</style>   