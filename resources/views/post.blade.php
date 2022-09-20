  <head>

      <style>
        
      </style>
  </head>

  <?php if (admin()) { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h3 class="display-6 text-center">
                              TICKET INFORMATION
                          </h3>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard v1</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->

                  <div class="row">
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <p class="text-center">Waiting Response</p>
                                  <h3 class="text-center"> <?= $tiket_wait ?> </h3>
                                  <style :@keyframes example { from {background-color: red;} to {background-color: yellow;} }> </style>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                              </div>
                              <a href="<?= ('tiket') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <p class="text-center">Ticket Progress</p>
                                  <h3 class="text-center"><?= $tiket_process ?></h3>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="<?= base_url('tiket') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <p class="text-center">Ticket Closing </p>
                                  <h3 class="text-center"><?= $tiket_close ?></h3>

                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-navy">
                              <div class="inner">
                                  <p class="text-center">User</p>
                                  <h3 class="text-center"><?= $jumlah_user ?></h3>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                              </div>
                              <a href="<?= ('employee') ?>" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>

      <!-- // dashboard USER -->
  <?php } else {  ?>
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h3 class="display-6 text-center">
                              TICKET INFORMATION
                          </h3>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard v1</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-navy">
                              <div class="inner">
                                  <p class="text-center">Ticket Summary</p>
                                  <h3 class="text-center"> <?= $jumlah_tiket ?> </h3>
                              </div>
                              <!-- <?php print_r($jumlah_tiket) ?> -->
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                              </div>
                              <a href="tiket" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div><!-- /.container-fluid -->
          </section>
      </div>
  <?php } ?>