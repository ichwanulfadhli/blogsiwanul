<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Posts Page</h1>
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
            <h3 class="card-title">List of Posting</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <a href="<?php echo site_url('Posts/new_posts') ?>" class="btn btn-app" style="margin: 10px;">
              <i class="fas fa-plus"></i> New Posts
            </a>
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Post Title</th>
                  <!-- <th>Post Cover</th> -->
                  <th>Post Description</th>
                  <!-- <th>Post Content</th> -->
                  <!-- <th>Post Keywords</th> -->
                  <th>Post Date</th>
                  <th>Post Status</th>
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
                  else {
                      $i = 1;
                      foreach ($result['data'] as $data) {
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $data['post_title']; ?></td>
                      <!-- <td><img src="<?php echo $data['post_cover']; ?>"></td> -->
                      <td><?php echo $data['post_description']; ?></td>
                      <!-- <td><?php echo $data['post_content']; ?></td> -->
                      <!-- <td><?php echo $data['post_keywords']; ?></td> -->
                      <td><?php echo $data['post_date']; ?></td>
                      <td><?php ($data['post_status'] == '1') ? print 'Active' : print 'Inactive'; ?></td>
                      <td><a href="<?php echo site_url('Posts/view_posts/'. $data['post_id']); ?>"><i class="fas fa-edit"></i></a> | | <a href="<?php echo site_url('Posts/delete_posts?post=' . $data['post_id']); ?>"><i class="fas fa-trash"></i></a></td>
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