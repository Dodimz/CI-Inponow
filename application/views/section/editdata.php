<div class="container" id="con">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card mt-4">
				<div class="card-header">
					<b>Edit data siswa</b>
				</div>
				<?php if (validation_errors() ) : ?>
				<div class="alert alert-danger" role="alert">
					<br><?= validation_errors(); ?>
				</div>
				<?php endif; ?>
				<div class="card-body">
					<form class="" action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" id="iid" value="<?php echo $datanya['id'] ?>">
							<label for="nama">Nama </label>
							<input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Enter Your Name" name="nama" value="<?php echo $datanya['nama'] ?>">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="no_induk">No Induk</label>
							<input type="text" class="form-control" id="idk" placeholder="f23xxx" name="no_induk" value="<?php echo $datanya['no_induk'] ?>">
						</div>

						<div class="form-group">
							<div class="col-md-3">
								<img style="width:100%;" src="<?php echo base_url($datanya['path']) ?>" alt="">
							</div>
							<label for="image">Update Photo</label>
							<input class="form-control" style="padding:3px;" type="file" name="userfile" size="20" />
							<input type="hidden" name="before_path" value="<?php echo $datanya['path'] ?>">
						</div>

						<div class="form-group">
							<label for="seksi">Jurusan</label>
							<select class="form-control" id="seksi" name="seksi" value="<?php $datanya['jurusan'] ?>">

								<?php foreach($seksi as $s) : ?>
									<?php if($s == $datanya['jurusan'] ) : ?>
										<option value="<?= $s; ?>" selected> <?= $s; ?> </option>
								<?php else : ?>
									<option value="<?= $s; ?>"> <?= $s; ?> </option>
								<?php endif; ?>
								<?php endforeach; ?>

							</select>
						</div>
						<div class="form-group pilihan">
							<input type="text" name="" value="" class="area">
						</div>
						<a href="<?php echo base_url('tampildata') ?>" class="btn btn-danger">back</a>
						<button type="submit" id="updateData" class="btn btn-primary"> Edit Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
var baseurl = '<?php echo base_url(); ?>';

$('#seksi').on('change', function (){
	var a = $('#seksi').val()
	if (a== 'Akutansi') {
		$('.area').attr('required', 'true').show()
	}else if (a == 'Teknik Komputer') {
		$('.area').removeAttr('required', 'true').hide()
	}

});

</script>
