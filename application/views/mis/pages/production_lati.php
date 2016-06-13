
<?php
include('header.php');
include('sidebar.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#container-chart').highcharts({
			chart: {
				type: 'column'
			},
			title: {
				text: 'Hello world foobar. January, 2015 to May, 2015'
			},
			subtitle: {
				text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
			},
			xAxis: {
				type: 'category'
			},
			yAxis: {
				title: {
					text: 'Y Axix Title'
				}

			},
			legend: {
				enabled: false
			},
			plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y:.1f}%'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
			},

			series: [{
				name: 'Brands',
				colorByPoint: true,
				data: [
				<?php
				foreach ($chart as $key => $value) {
					echo "{";
					echo "name: '".$value->LAND1."', y: ".(($value->total)/6.27).", drilldown: 'Microsoft Internet Explorer'";
					echo "},";
				}
				?>
				]
			}],
			drilldown: {
				series: [{
					name: 'Microsoft Internet Explorer',
					id: 'Microsoft Internet Explorer',
					data: [
					['v11.0', 24.13],
					['v8.0', 17.2 ],
					['v9.0', 8.11 ],
					['v10.0', 5.33 ],
					['v6.0', 1.06 ],
					['v7.0', 0.5 ] ]
				}, {
					name: 'Chrome',
					id: 'Chrome',
					data: [
					['v40.0', 5 ],
					['v41.0', 4.32 ],
					['v42.0', 3.68 ],
					['v39.0', 2.96 ],
					['v36.0', 2.53 ],
					['v43.0', 1.45 ],
					['v31.0', 1.24 ],
					['v35.0', 0.85 ],
					['v38.0', 0.6 ],
					['v32.0', 0.55 ],
					['v37.0', 0.38 ],
					['v33.0', 0.19 ],
					['v34.0', 0.14 ],
					['v30.0', 0.14 ] ]
				}, {
					name: 'Firefox',
					id: 'Firefox',
					data: [
					['v35', 2.76 ],
					['v36', 2.32 ],
					['v37', 2.31 ],
					['v34', 1.27 ],
					['v38', 1.02 ],
					['v31', 0.33 ],
					['v33', 0.22 ],
					['v32', 0.15 ] ]
				}, {
					name: 'Safari',
					id: 'Safari',
					data: [
					['v8.0', 2.56 ],
					['v7.1', 0.77 ],
					['v5.1', 0.42 ],
					['v5.0', 0.3 ],
					['v6.1', 0.29 ],
					['v7.0', 0.26 ],
					['v6.2', 0.17 ] ]
				}, {
					name: 'Opera',
					id: 'Opera',
					data: [
					['v12.x', 0.34 ],
					['v28', 0.24 ],
					['v27', 0.17 ],
					['v29', 0.16 ] ]
				}]
			}
		});
	});
</script>
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
								<canvas id="barChart" style="height:300px"></canvas>
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
							<div id="container-chart" style="float:left height: 180px;"></div>
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
							<canvas id="container-chart" style="float:left height: 180px;"></canvas>
						</div>

					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>

<?php
include('footer.php');
?>