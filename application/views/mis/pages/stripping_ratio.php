<?php
include('header.php');
include('sidebar.php');
?>
<script type="text/javascript">
var actual = <?php echo json_encode($actual); ?>;
actual.forEach(function(item,index){item.TOTAL=(parseFloat(item.TOTAL)/1000);});
var ob = alasql("SELECT MONTHS,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE 'OB%' GROUP BY MONTHS ORDER BY MONTHS",[actual]);
var rc = alasql("SELECT MONTHS,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE 'Raw%' GROUP BY MONTHS ORDER BY MONTHS",[actual]);
</script>
<script src="<?php echo base_url(); ?>assets/js/chartSR.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Stripping Ratio </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border"><h3 class="box-title">Stripping Ratio</h3></div>
          <div class="box-body">
            <div class="chart"><canvas id="srChart"></canvas></div>
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