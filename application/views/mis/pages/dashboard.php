
<?php
include('header.php');
include('sidebar.php');
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/production.css" />
<script src="<?php echo base_url(); ?>assets/js/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/theme1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/drilldown.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/chart1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart2.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/js/chart3.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart4.js"></script>
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
        Production
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- plant vs production -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-body">
              <!-- diagram -->
              <div id="container-main" class="row">
                <div class="col-md-8">
                  <div class="chart">
                    <div id="linechart"></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="chart">
                    <div id="piechart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
                    </div>
                  </div>
                </div>
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