
<?php
include('header.php');
include('sidebar.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/production.css" />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
var charts  = <?php echo json_encode($chart); ?>;
var charts2 = <?php echo json_encode($chart); ?>;
var actual = <?php echo json_encode($actual); ?>;
actual.forEach(function(item, index){
	item.TOTAL = (parseFloat(item.TOTAL)/1000);
});
</script>
<script src="<?php echo base_url(); ?>assets/js/chart1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart2.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Lati
			<small>Mine Operation</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- plant vs production -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Plan vs Production</h3>
					</div>
					<div class="box-body">
						<!-- diagram -->
						<div id="container-main" class="row">
							<div class="col-md-9">
								<div class="chart">
									<canvas id="barChart" style="height:300px"></canvas>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="pad box-pane-right bg-green" style="height:100%">
									<div class="description-block" style="height:30%">
										<i class="ion ion-ios-compose" style="font-size:-webkit-xxx-large"></i>
										<h3 class="description-header">123,456,789.00</h3>
										<span class="description-text">Plan Production</span>
									</div>
									<!-- /.description-block -->
									<div class="description-block" style="height:30%">
										<i class="ion ion-ios-pulse-strong" style="font-size:-webkit-xxx-large"></i>
										<h3 class="description-header">123,456,789.00</h3>
										<span class="description-text">Actual Production</span>
									</div>
									<!-- /.description-block -->
									<div class="description-block" style="height:30%">
										<i class="ion ion-ios-pie" style="font-size:-webkit-xxx-large"></i>
										<h3 class="description-header">100%</h3>
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
		</div>

		<!-- production per Contractor -->
		<div class="row">
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
		</div>

		<!-- BAR CHART -->
		<div class="row">
			<div class="col-md-8">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Bar Chart</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="barChart"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>

<script>
var ctx = $("#barChart");
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["Resource", "Resource", "Resource", "Resource", "Resource", "Resource"],
		datasets: [{
			label: 'Plan',
			data: [12, 19, 3, 5, 2, 3],
			backgroundColor: [
			'rgba(128, 222, 234, 0.8)',
			'rgba(128, 222, 234, 0.8)',
			'rgba(128, 222, 234, 0.8)',
			'rgba(128, 222, 234, 0.8)',
			'rgba(128, 222, 234, 0.8)',
			'rgba(128, 222, 234, 0.8)',
			],
			borderColor: [
			'rgba(0, 188, 212,0.8)',
			'rgba(0, 188, 212,0.8)',
			'rgba(0, 188, 212,0.8)',
			'rgba(0, 188, 212,0.8)',
			'rgba(0, 188, 212,0.8)',
			'rgba(0, 188, 212,0.8)',
			],
			borderWidth: 5
		},{
			label: 'Production',
			data: [13, 20, 4, 5, 3, 4],
			backgroundColor: [
			'rgba(0, 230, 118, 0.8)',
			'rgba(0, 230, 118, 0.8)',
			'rgba(0, 230, 118, 0.8)',
			'rgba(0, 230, 118, 0.8)',
			'rgba(0, 230, 118, 0.8)',
			'rgba(0, 230, 118, 0.8)',
			],
			borderColor: [
			'rgba(0, 200, 83,1)',
			'rgba(0, 200, 83,1)',
			'rgba(0, 200, 83,1)',
			'rgba(0, 200, 83,1)',
			'rgba(0, 200, 83,1)',
			'rgba(0, 200, 83,1)',
			],
			borderWidth: 5
		}]
	},
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}
			}]
		}
	}
});
</script>

<?php
include('footer.php');
?>