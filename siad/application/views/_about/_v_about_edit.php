<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Description</h1>
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Description</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>

      </div>

      <div class="card-body p-3">
        <form method="POST" action="<?php echo site_url('About/edit_about/'. $result['data'][0]['aboutme_id']); ?>" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputText1">Name</label>
              <input type="text" class="form-control" id="exampleInputText1" name="my_name" value="<?php echo $result['data'][0]['aboutme_name']; ?>" placeholder="Enter the post title" required>
            </div>

            <div class="form-group">
              <label for="exampleInputText1">Description</label>
              <textarea name="my_description" rows="10" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $result['data'][0]['aboutme_description']; ?></textarea>
            </div>

            <label for="exampleInputFile">Photo</label>
            <div class="form-group">
              <label for="exampleInputFile">Upload File</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="my_photo" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>

            <label for="exampleInputText1">Or</label>

            <div class="form-group">
              <label for="exampleInputText1">Paste Photo URL</label>
              <input type="text" class="form-control" id="exampleInputText1" name="my_photo_url" value="<?php echo $result['data'][0]['aboutme_photo']; ?>" placeholder="Enter image url">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <input type="reset" name="cancel" class="btn btn-danger" value="Cancel">
          </div>
        </form>
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer">
          Footer
        </div> -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>