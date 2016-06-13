
<?php
include('header.php');
include('sidebar.php');
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
var charts  = <?php echo json_encode($chart); ?>;
var charts2 = <?php echo json_encode($chart); ?>;
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Plan vs Production</h3>
				</div>
				<div class="box-body">
					<!-- diagram -->
					<div class="row">
						<div class="col-md-9">
							<div class="chart">
								<canvas id="qwe" style="height:300px"></canvas>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-4 col-xs-6">
								<div class="description-block border-right">
									<h5 class="description-header">$10,390.90</h5>
									<span class="description-text">Actual Production</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4 col-xs-6">
								<div class="description-block border-right">
									<h5 class="description-header">$24,813.53</h5>
									<span class="description-text">Plan Production</span>
								</div>
								<!-- /.description-block -->
							</div>
							<!-- /.col -->
							<div class="col-sm-4 col-xs-12">
								<div class="description-block">
									<h5 class="description-header">80%</h5>
									<span class="description-text">Percentage Production</span>
								</div>
								<!-- /.description-block -->
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- box -->
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
					<canvas id="barChart" width="200" height="200"></canvas>
					<script>
					var ctx = $("#barChart");
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
							datasets: [{
								label: '# of Votes',
								data: [12, 19, 3, 5, 2, 3],
								backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
								],
								borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
								],
								borderWidth: 1
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
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>

<?php
include('footer.php');
?>