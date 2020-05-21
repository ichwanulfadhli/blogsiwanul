<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>New Posts</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Add New Posts</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
						title="Collapse">
						<i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
						title="Remove">
						<i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="card-body p-3">
				<form method="POST" action="<?php echo site_url('Posts/add_posts'); ?>" enctype="multipart/form-data">
					<div class="card-body">

						<div class="form-group">
							<label for="exampleInputText1">Post Title</label>
							<input type="text" class="form-control" id="exampleInputText1" name="pst_title"
								placeholder="Enter the post title" required>
						</div>
						<div class="form-group">
							<label for="exampleInputText1">Post Description</label>
							<input type="text" class="form-control" id="exampleInputText1" name="pst_description"
								placeholder="Enter the post title" required>
						</div>

						<div class="form-group">
							<label for="exampleInputText1">Post Content</label>
							<textarea name="pst_content" class="textarea" placeholder="Place some text here"
								style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>

						<div class="form-group">
							<label for="exampleInputText1">Post Keywords</label>
							<textarea class="form-control" rows="10" name="pst_keywords" placeholder="Enter the post keywords" required></textarea>
							<!-- <input type="text" class="form-control" id="exampleInputText1" name="pst_keywords"
								placeholder="Enter the post keywords" required> -->
						</div>

						<label for="exampleInputFile">Post Cover</label>

						<div class="form-group">
							<label for="exampleInputFile">Upload File</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="pst_cover" id="exampleInputFile">
									<label class="custom-file-label" for="exampleInputFile">Choose file</label>
								</div>

								<div class="input-group-append">
									<span class="input-group-text" id="">Upload</span>
								</div>
							</div>
						</div>

						<label for="exampleInputText1">Or</label>

						<div class="form-group">
							<label for="exampleInputText1">Paste Image URL</label>
							<input type="text" class="form-control" id="exampleInputText1" name="pst_cover_url"
								placeholder="Enter image url">
						</div>

						<div class="form-group">
							<label>Post Status</label>
							<select class="form-control" name="pst_status">
								<option selected disabled>Choose post status</option>
								<option value="0">Inactive</option>
								<option value="1">Active</option>
							</select>
						</div>

					</div>

					<div class="card-footer">
						<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						<input type="reset" name="cancel" class="btn btn-danger" value="Cancel">
					</div>
				</form>
			</div>
		</div>
	</section>
</div>