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
        <script src="https://www.gstatic.com/charts/51/loader.js"></script>
        

    </head>
    <body>
        <?php
            $car="442.18";
            $elec="0.27";
            $tree="0.17";
            $client=[];
            $client['name']="Client Loooooooooooooooooooooooong";
            $project=[];
            $project['project_title']="Project Name 11111111111";
        $page=1;
         $path_to_images = "images/";
        echo("
            <div class='page_box1' style='padding:10px 0 0 34px;height:20cm'>

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
                        <div class='table-waste' style='width:90%;/*height:500px;*/'>
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
                <div class='container-flex' style='padding:0 0 40px 0'>
                    <div class='width-50-procents diagram-waste-left'>
                        <div class='diagram-waste-left-content'>
                            <div class='diagram-waste-left-title'>Waste Progress Bar</div>
                            <div class=chart_div id='chart_progress_bar'></div>
                        </div>
                    </div>
                    <div class='width-50-procents diagram-waste-right'>
                        <div class=''>
                            <div class='container-flex'>
                                <div class='carbonbox'>
                                    0000
                                </div>
                                <div class='carbonbox vertical-align'>This month</div>
                                <div class='carbonbox vertical-align'>Project to date</div>
                            </div>
                            <div class='container-flex'>
                                <div class='carbonbox'>
                                    <img src=/custom_modules/img/icon_tyre.png style=margin-left:10px;margin-right:10px;width:65px;>
                                    <div>Miles per year driven by an average passenger car.</div>
                                </div>
                                <div class='carbonbox vertical-align'>$car </div>
                                <div class='carbonbox vertical-align'>?????</div>
                            </div>
                            <div class='container-flex'>
                                <div class=carbonbox>
                                    <img src=/img/icon_bolt.png style=margin-left:10px;margin-right:10px;width:65px;>
                                    <div>Homes electricity for the period of a year.</div>
                                </div>
                                <div class='carbonbox vertical-align'>$elec </div>
                                <div class='carbonbox vertical-align'>?????</div>

                            </div>
                            <div class='container-flex'>
                                <div class=carbonbox>
                                    <img src=img/yellow_tree2.png style=margin-left:10px;margin-right:10px;width:65px;>
                                    <div>Carbon sequestered by acres of forests in one year.</div>
                                </div>
                                <div class='carbonbox vertical-align'>$tree </div>
                                <div class='carbonbox vertical-align'>?????</div>
                            </div>  
                        </div>
                    </div>
                </div>
                ");
                echo footer($page, $path_to_images, $client['name'], $project['project_title']);
        echo("
            </div>
        ");
        ?>
        <style>
            .vertical-align{
                display: flex;
                align-items: center;
            }
            .carbonbox{
               
                line-height:9pt;
                width:33.3%;
            }
            .carbonbox div{
                font-size:0.8rem;
            }
        </style>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
				<script type='text/javascript'>
					google.charts.load('current', {packages:['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Element', '', { role: 'style' } ],
						//[null, 572.12, '#f4833d'],
						//[null, 3390, '#4e79ca'],
                        ['Actual Waste', 572.12, '#f4833d'],
						['Forecasted Waste', 3390, '#4e79ca'],

					]);
                    data.getProperty(0, 0, "Actual Waste");
					var view = new google.visualization.DataView(data);
                    
					view.setColumns([0, 1,
									{ calc: 'stringify',
										sourceColumn: 1,
										type: 'string',
										role: 'annotation' },
									2]);
                    //view.hideColumns([0]); 
                    //data.setColumnLabel(0, 'aaaa');
					var options = {
						
						//title: 'Waste Review',
						width: 600,
						height: 400,
						bar: {groupWidth: '95%'},
                        vAxis: {
                            title: 'Waste Review',
                        },
                        isStacked: true,
                        hAxis: { 
                            minValue: 0,
                            gridlines: {
                                count: 10
                            },
                            format: '0',
                           // ticks: [0,500,1000,15,20] 
                        },
						legend: { position: 'none', alignment: 'start' },
                        /*series: [
                            {color: 'black', visibleInLegend: true}, 
                            {color: 'red', visibleInLegend: true}
                        ]*/
                      
					};
					var chart = new google.visualization.BarChart(document.getElementById('chart_progress_bar'));
					chart.draw(view, options);
				}
  				</script>
    </body>
    </html>

    <?php
    function footer1($page, $path_to_images, $client_name, $project_name){
		global $global;
		return("
			<div class='container-line-logo' style='position: absolute;z-index: 1000;left:0;right:0;bottom:0;'>
				<div class='container-line-logo-left'>
					<div class='line-logo-text'>
						&nbsp;
					</div>
					<div class='report-text'>
						<div class='container-flex line-logo-text-2' style='flex-direction: row;'>
							<div class='line-logo-text-1' style='width:40px;'>".$page."</div>
							<div style='text-align:right' class='cut-text uppercase'>".$client_name." </div> 
							<div class='footer-divide'>-</div>
							<div class='cut-text uppercase'> ".$project_name." </div> 
							<div class='footer-divide'>-</div>
							<div style='padding:4px 0 0 14px'>  WASTE MOVEMENT REPORT</div> 
						</div> 
					</div>
				</div>
				<div class='container-line-logo-right'>
						<img
						class='site-logo-1 center'
						src='".$path_to_images."encore_logo_2024.png'
						alt='Logo' />
				</div>
			</div>
		");
	}
    function footer($page, $path_to_images, $client_name, $project_name){
		//global $global;
		return("
            
                <div class='footer-container'>
                    <div class='footer-line-logo-left'>
                        <div class='footer-logo-text'>
                            &nbsp;
                        </div>
                        <div class='container-flex footer-report-text'>
                            <div class='line-logo-text-1' style='width:40px;'>".$page."</div>
                            <div style='text-align:right' class='cut-text uppercase'>".$client_name." </div> 
                            <div class='footer-divide'>-</div>
                            <div class='cut-text uppercase'> ".$project_name." </div> 
                            <div class='footer-divide'>-</div>
                            <div style='padding:4px 0 0 14px'>  WASTE MOVEMENT REPORT</div> 
                        </div>
                    </div>
                    <div class='footer-logo-right' style='padding: 10px 11px 26px 0;'>
                        <img class='footer-logo-1 center' src='".$path_to_images."encore_logo_2024.png' />
                    </div>
                </div>
           
		");
	}
    ?>
<style>





body {
font-family: "Bitter", sans-serif;
margin: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-size: 1.125rem;
color: #101820;
background-color: #f8f8f8;
}
.center{
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.cut-text{
		text-overflow: ellipsis;
		overflow: hidden; 
		width: 200px; 
		height: 1.2em; 
		padding: 4px 4px 0 4px;
		white-space: nowrap;
	}
.uppercase{
    text-transform: uppercase;
}
.diagram-waste-left{
    padding: 22px 6px;
}
.diagram-waste-left-content{
    border: 2px solid #d7b1cd;
    height:360px;
}
.diagram-waste-left-title{
    font-weight: 700;
    padding: 12px 0 0 0;
    text-align:center;
}
.diagram-waste-right{
    
    padding: 22px 6px;
}
.diagram-waste-right-title{
    font-weight: 700;
    padding: 26px 0 20px 37px;
}
.diagram-waste-right-cell{
    width: 200px;
    font-size: 0.9rem;
    padding: 26px 0 0 37px;
}
.diagram-waste-right-cell span{
    font-weight: 700;
}
.diagram-waste-right-content{
    color:#fff;
    height:360px;
    background-color: #ff0000;
    padding: 26px 0 0 37px;
}
.footer-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: absolute;
    z-index: 1000;
    left: 0;
    right: 0;
    bottom:0;
}
.footer-line-logo-left{
    width: 80%;
}
.footer-logo-text{
    position: relative;
}
.footer-logo-text::after {
  content: '';
  position: absolute;
  border-top: 2px solid #9e6eb7;
  width: 100%;
  left: 0;
  top: 23px;
}
.footer-report-text{
    font-weight: 700;
    font-size: 0.8rem;
    letter-spacing: 0.3em;
    padding: 10px 0 0 0;
}

.footer-logo-text-1 {
  font-weight: 700;
  color: #9e6eb7;
  font-size: 1.4rem;
  padding: 0px 30px;
}
.footer-logo-text-2 {
  font-weight: 700;
  font-size: 0.8rem;
  padding: 0px 14px;
  letter-spacing: 0.3em;
}
.footer-logo-right{
    width: 20%;
}
.footer-logo-1 {
  width: 150px;
}
.footer-divide{
    width:40px;
    text-align:center;
}
.line-logo-text-1 {
  font-weight: 700;
  color: #9e6eb7;
  font-size: 1.1rem;
  padding: 0px 30px;
}
.waste-percent-text{
    font-weight: 100;
    font-size: 2.1rem;
}
section {
width: 100%;
max-width: 30rem;
padding: 1.5rem 1.5rem 2rem;
border: 2px solid #a7a8aa;
border-radius: 0.5rem;
margin: auto;
}

h2 {
margin: 0 0 2.5rem;
}

.chart {
display: grid;
grid-template-columns: auto;
gap: 0.5em 0;
align-items: center;
margin: 0;
padding: 0;
list-style-type: none;
grid-auto-columns: 1fr;
}

li {
background: #ffd100;
display: flex;
align-items: center;
justify-content: space-between;
padding: 0.25rem 0.5rem;
}

li span {
font-weight: bold;
}

View SCSS Code


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
.container-flex {
    display: flex;
}
.title_page{
    font-weight: 700;
    font-size: 1.1rem;
    padding: 30px 0 0 0;
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
.width-50-procents{
    width:50%;
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
<div style='display:none;'>

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