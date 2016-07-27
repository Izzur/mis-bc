
<?php
include 'header.php';
include 'sidebar.php';
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/production.css" />
<script src="<?php echo base_url(); ?>assets/js/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/theme1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts/modules/drilldown.js"></script>
  <!--script src="<?php echo base_url(); ?>assets/js/chart1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart2.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/chart3.js"></script-->
  <script src="<?php echo base_url(); ?>assets/js/chart4.js"></script>
  <script type="text/javascript">
  var actual = <?php echo json_encode($actual); ?>;
  var plan = {};
  actual.forEach(function(item, index){item.TOTAL=(parseFloat(item.TOTAL)/1000);});
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
                <div class="col-md-12">
                  <div class="chart">
                    <div id="linechart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 hidden">
          <div class="box box-success">
            <div class="box-body">
              <!-- side chart -->

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/img/home_ava_2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Lati</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="lmo-left">3,200,000 tonne/month</h5>
                    <span class="description-text">LOWEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="lmo-right">13,000</h5>
                    <span class="description-text">HIGHEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/img/home_ava_2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Binungan</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="bmo-left">3,200,000 tonne/month</h5>
                    <span class="description-text">LOWEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="bmo-right">13,000</h5>
                    <span class="description-text">HIGHEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/img/home_ava_2.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Sambarata</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="smo-left">3,200,000 tonne/month</h5>
                    <span class="description-text">LOWEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header" id="smo-right">13,000</h5>
                    <span class="description-text">HIGHEST</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



    </section>
    <!-- /.content -->
  </div>

  <?php
  include 'footer.php';
  ?>
