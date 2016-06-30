
<?php
include('header.php');
include('sidebar.php');
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
      <div class="row">
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green">
              <div class="widget-user-image">
                <img class="img-circle" src="http://ecovata-montazh.ru/wp-content/uploads/2015/09/c82601c2d502767c58b78d6e2d01d49f.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Lati</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200,000 tonne/month</h5>
                    <span class="description-text">AVERAGE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">MATERIAL</span>
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
                <img class="img-circle" src="http://ecovata-montazh.ru/wp-content/uploads/2015/09/c82601c2d502767c58b78d6e2d01d49f.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Binungan</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200,000 tonne/month</h5>
                    <span class="description-text">AVERAGE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">MATERIAL</span>
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
                <img class="img-circle" src="http://ecovata-montazh.ru/wp-content/uploads/2015/09/c82601c2d502767c58b78d6e2d01d49f.png" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Sambarata</h3>
              <h5 class="widget-user-desc">Mine Operation</h5>
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200,000 tonne/month</h5>
                    <span class="description-text">AVERAGE</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">MATERIAL</span>
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
  include('footer.php');
  ?>