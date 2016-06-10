
<?php
include('header.php');
include('sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="fa fa-home">
      <b>
        Production
      </b>
      <small>Binungan Mine Operation</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Box Summary -->
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>122.234.556</h3>

            <p>Total Production</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>6.799.000</h3>

            <p>Average Production</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>160.88<sup style="font-size: 20px">mm</sup></h3>

            <p>Average Rainfall</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <!-- Production -->
    <div class="row">
    <!-- Detail Production -->
      <div class="col-md-6">
        <div class="box">
          <div class="box-header text-center" >
            <h3 class="box-title "><b>Detail Production</b></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i<120;$i++) { ?>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="box">
            lalala
          </div>
        </div>
        <div class="row">
          <div class="box">
            tototo
          </div>
        </div>
      </div>

    <!-- Chart -->

    </div>
  </section>
</div>

<?php
include('footer.php');
?>