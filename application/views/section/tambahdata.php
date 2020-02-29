<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card mt-4">
				<div class="card-header">
					<b>Tambah data siswa</b>
				</div>
				<?php if (validation_errors() ) : ?>
				<div class="alert alert-danger" role="alert">
					<br><?= validation_errors(); ?>
				</div>
				<?php endif; ?>
				<div class="card-body">
					<form class="" action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="nama">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<!-- upload file area -->
						<div class="form-group">
							<label for="image">File Photo Upload</label>
							<input class="form-control" style="padding:3px;" type="file" name="userfile" size="20" />
						</div>
						<!-- end upload file area -->
						<div class="form-group">
							<label for="no_induk">No Induk</label>
							<input type="text" class="form-control" id="ininumber" placeholder="f23xxx" name="no_induk" onchange="ubahaja()">
						</div>
						<div class="form-group">
							<label for="seksi">Jurusan</label>
							<select class="form-control" id="seksi" name="seksi">
								<option>Teknik Mesin</option>
								<option>Teknik Komputer</option>
								<option>Akutansi</option>
								<option>Teknik Gambar Bangunan</option>
							</select>
						</div>
						<button type="submit" name="add" class="btn btn-primary"> Add Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>

<script type="text/javascript">
	function ubahaja() {
		console.log('hei');
		var qw = document.getElementById("ininumber").value;
		if (qw == 'NaN') {
			alert('trytry aja...');
		}

	}
</script>
