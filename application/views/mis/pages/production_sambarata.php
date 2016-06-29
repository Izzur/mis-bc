<?php
include('header.php');
include('sidebar.php');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/production.css" />
<script src="<?php echo base_url(); ?>assets/js/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/theme1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/drilldown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart3.js"></script>
<script src="<?php echo base_url(); ?>assets/js/production.js"></script>
<script type="text/javascript">
	var charts  = <?php echo json_encode($chart); ?>;
	var charts2 = <?php echo json_encode($chart); ?>;
	var actual = <?php echo json_encode($actual); ?>;
	var plan = <?php echo json_encode($plan); ?>;
	actual.forEach(function(item, index){item.TOTAL=(parseFloat(item.TOTAL)/1000);});
	plan.forEach(function(item, index){item.TOTAL=(parseFloat(item.TOTAL)/1000);});
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sambarata
			<small>Mine Operation</small>
		</h1>
		<ol class="breadcrumb">
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-success" id="option1">
					<input type="radio" name="options" autocomplete="off" checked> Raw Coal
				</label>
				<label class="btn btn-success" id="option2">
					<input type="radio" name="options" autocomplete="off"> Overburden
				</label>
		</div>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- plant vs production -->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Plan vs Actual Production</h3>
				</div>
				<div class="box-body">
					<!-- diagram -->
					<div id="container-main" class="row">
						<div class="col-md-9">
							<div class="chart">
								<canvas id="barChart"></canvas>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="pad box-pane-right bg-green" style="height:100%">
								<div class="description-block" style="height:30%">
									<i class="ion ion-ios-compose" style="font-size:-webkit-xxx-large"></i>
									<h3 id="side-plan" class="description-header">123,456,789.00</h3>
									<span class="description-text">Plan Production</span>
								</div>
								<!-- /.description-block -->
								<div class="description-block" style="height:30%">
									<i class="ion ion-ios-pulse-strong" style="font-size:-webkit-xxx-large"></i>
									<h3 id="side-act" class="description-header">123,456,789.00</h3>
									<span class="description-text">Actual Production</span>
								</div>
								<!-- /.description-block -->
								<div class="description-block" style="height:30%">
									<i class="ion ion-ios-pie" style="font-size:-webkit-xxx-large"></i>
									<h3 id="side-prc" class="description-header">100%</h3>
									<span class="description-text">Percentage</span>
								</div>
								<!-- /.description-block -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<!-- production per pit -->
	<div class="row">
		<div class="col-md-8">
			<div class=box box-default>
				<div class="box-header with-border">
					<h3 class="box-title">Production per PIT</h3>
				</div>
				<div class="box-body">
					<div class="chart">
						<div id="container-chart"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box box-success">
				<div id="piechart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- production per Contractor -->
		<div class="col-md-8">
			<div class=box box-default>
				<div class="box-header with-border">
					<h3 class="box-title">Production per Contractor</h3>
				</div>
				<div class="box-body">
					<div class="chart">
						<div id="container-chart2"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="box box-success">
				<div id="piechart2" style="min-width: 310px; max-width: 600px; margin: 0 auto">
				</div>
			</div>

		</div>
	</div>

</section>
<!-- /.content -->
</div>

<script>
	var label = [];
	var data_plan = [];
	var data_act = [];
	var _act = alasql('SELECT MONTHS, ROUND(SUM(TOTAL),3) AS TOTAL FROM ? GROUP BY MONTHS ORDER BY MONTHS',[actual]);
var _plan = alasql('SELECT MID(GSTRP,5,2) AS MONTHS,TOTAL,MAKTX FROM ?',[plan]);
	_plan = alasql('SELECT MONTHS, ROUND(SUM(TOTAL),3) AS TOTAL FROM ? GROUP BY MONTHS ORDER BY MONTHS',[_plan]);
	_plan.forEach(function(item,index){label.push(item.MONTHS);data_plan.push(item.TOTAL);});
	data_plan.push(0);
	label.push("12");
_act.forEach(function(item,index){data_act.push(item.TOTAL);});

	var ctx = $("#barChart");
var chartData = {
	labels: label,
	datasets: [{
		label: 'Plan (1000 MT)',
		data: data_plan,
		backgroundColor: 'rgba(128, 222, 234, 0.8)',
		borderColor: 'rgba(0, 188, 212,0.8)',
		borderWidth: 2
	},{
		label: 'Actual (1000 MT)',
		data: data_act,
		backgroundColor: 'rgba(0, 230, 118, 0.8)',
		borderColor: 'rgba(0, 200, 83,1)',
		borderWidth: 2
	}]};
var chartOption = {
	scales: {
		xAxes: [{
			scaleLabel: {display:true,labelString:'Month'}
		}],
		yAxes: [{
			scaleLabel: {display:true,labelString:'Total Amount'},
			ticks: {
				beginAtZero:true,
				userCallback:
				function(value,index,values){
					return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				}
			}
		}]
	}};
var myChart = new Chart(ctx, {
	type: 'bar',
	data: chartData,
	options: chartOption
	});

	var total_plan=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE 'Raw%'",[plan]);
	var total_act=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE 'Raw%'",[actual]);
	document.getElementById('side-plan').innerHTML=
total_plan[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	document.getElementById('side-act').innerHTML=
total_act[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	document.getElementById('side-prc').innerHTML=
((total_act[0].TOTAL/total_plan[0].TOTAL)*100).toFixed(2).toString()+"%";

</script>

<?php
include('footer.php');
?>