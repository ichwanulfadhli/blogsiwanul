<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>About Me Page</h1>
        </div>
        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div> -->
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="row">
      <div class="col-12">
        <div class="card" style="height: 500px;">
          <div class="card-header">
            <h3 class="card-title">About Me</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <a href="<?php echo site_url('About/new_about') ?>" class="btn btn-app" style="margin: 10px;">
              <i class="fas fa-plus"></i> New Description
            </a>
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (empty($result['data'])) {
                  ?>
                  <tr>
                    <td colspan="9">
                      <h3>
                        <center>There are no data</center>
                      </h3>
                    </td>
                  </tr>
                  <?php
                  }
                  else{
                    foreach ($result['data'] as $data) {
                      $i = 1;
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $data['aboutme_name']; ?></td>
                      <td><?php echo $data['aboutme_description']; ?></td>
                      <td><img width="40%" src="<?php echo $data['aboutme_photo']; ?>"></td>
                      <td><a href="<?php echo site_url('About/view_about/'); ?>"><i class="fas fa-edit"></i></a> | | <a href="<?php echo site_url('About/delete_about'); ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php
                    $i++;
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>


    <!-- /.card-body -->
    <!-- <div class="card-footer">
          Footer
        </div> -->
    <!-- /.card-footer-->
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>