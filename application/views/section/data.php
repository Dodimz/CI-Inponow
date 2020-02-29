<div class="container" id="con">
	<div class="row">
		<div class="col-md-3">

		</div>

		<div class="col-md-6">
			<h1 class="mb-4 mt-4">Data Siswa</h1>
		</div>

		<div class="col-md-3"></div>
	</div>
	<div class="row mt-4">
		<div class="col-md-3"></div>
		<div class="col-md-6">

			<form class="" action="" method="post">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari data siswa...">
					<div class="input-group-append">
						<button type="submit" class="btn btn-primary" name="button">Cari</button>
					</div>
				</div>
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>

	<div class="row mt-4">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table" style="text-align:center;">
				<tr>
					<th>Poto</th>
					<th>Nama</th>
					<th>No induk</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<?php foreach ($siswa as $s) :?>
					<td> <img style="width:50%;" src="<?php echo $s['path'] ?>" alt=""> </td>
					<td><?= $s['nama']; ?></td>
					<td>
						<?= $s['no_induk']; ?>
						<!-- <input style="width:50%;border-color:transparent;text-align:center;" type="password" name="" value=""> -->
					</td>
					<td><?= $s['jurusan']; ?></td>
					<td style="width:30%;">

						<input type="hidden" data="" name="id" id="id" value="<?= $s['id'] ?>">

						<!-- <button class="btn btn-danger" type="button" name="button" id="deleteData">Delete
                </button> -->
						<a class="btn btn-danger" onclick="return confirm('yakin data dihapus pak?')" href="<?php echo base_url('hapusData/').$s['id'] ?>">Hapus</a>

						<a class="btn btn-primary" href="<?php echo base_url('updateData/').$s['id'] ?>">Edit</a>

					</td>
					<td>
						<?php if (($s['nama']=="aldi")||($s['nama']=="aldo") || ($s['nama']=="edwin") || ($s['nama']=="goby")) {
              echo "x";
            }else {
              echo "-";
            } ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row mt-4 mb-4">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<a href="<?= base_url('tambahdata'); ?>" class="btn btn-primary">Add Data Employees</a>
		</div>
		<div class="col-md-3"></div>
	</div>









  <div class="container">
    <h1>KASUS 1</h1>
  </div>
	<!-- anyar -->
	<!-- Button trigger modal -->
	<?php foreach ($siswa as $s): ?>

	<button type="button" class="btn btn-primary dataja" data-toggle="modal" data-target="#exampleModal" data-aja="<?php echo $s['path'] ?>">
		Launch demo modal
	</button>
	<br><br>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" id="bebas" name="" value="">
					<iframe src="" width="100%" height="300px" id="aidi"></iframe>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>










  <div class="container">
    <h1>KASUS 2</h1>
  </div>
	<div class="row">

		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table" id="tableku" style="text-align:center;border:1px solid gray">
				<thead>
					<tr>
						<th rowspan="2" style="border: 1px solid black">No</th>
						<th rowspan="2" style="border: 1px solid black">No induk</th>
						<!-- <?php foreach ($siswa as $s){ ?>
							<th colspan="3"><?php echo $s['nama'] ?></th>
						<?php } ?> -->
						<?php
						$bulan = date('m');
						$tahun = date('Y');
						$number = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
						for ($i=1; $i < $number+1; $i++) {?>
							<th colspan="3" style="border: 1px solid black"><?php echo 'Tanggal '.$i; ?></th>
						<?php } ?>
					</tr>
					<tr>
						<?php for ($a= 1; $a < $number+1; $a++) {  ?>
							<th style="border: 1px solid black">S1</th>
							<th style="border: 1px solid black">S2</th>
							<th style="border: 1px solid black">S3</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach ($siswa as $g): ?>
						<tr>
							<td style="border: 1px solid black"> <?php echo $no; ?> </td>
							<td style="border: 1px solid black"> <?php echo $g['nama']; ?> </td>
							<?php for ($i=1; $i < ($number+1)*3-2; $i++) {?>
								<td style="border: 1px solid black"></td>
							<?php } ?>
						</tr>
					<?php $no++; endforeach; ?>
				</tbody>
			</table>
			<!-- <table class="table" id="tableku" style="text-align:center;">

				<thead>
					<tr>
						<th></th>
						<th>Nama</th>
						<th>No induk</th>
						<th>Jurusan</th>
						<th>Aksi</th>
						<th>-</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($siswa as $key => $s): ?>

					<tr>
						<td></td>
						<td><?= $s['nama']; ?></td>
						<td>
							<?= $s['no_induk']; ?>
						</td>
						<td><?= $s['jurusan']; ?></td>
						<td style="width:30%;">
							<input type="hidden" data="" name="id" id="id" value="<?= $s['id'] ?>">
							<a class="btn btn-danger" onclick="return confirm('yakin data dihapus pak?')" href="<?php echo base_url('hapusData/').$s['id'] ?>">Hapus</a>

							<a class="btn btn-primary" href="<?php echo base_url('updateData/').$s['id'] ?>">Edit</a>
						</td>
						<td>
							<?php if (($s['nama']=="aldi")||($s['nama']=="aldo") || ($s['nama']=="edwin") || ($s['nama']=="goby")) {
            echo "x";
          }else {
            echo "-";
          } ?>
						</td>

					</tr>
					<?php endforeach; ?>

				</tbody>

			</table> -->
	</div>
</div>








      <div class="container">
        <h1>KASUS 3</h1>
      </div>

			<table class="table-bordered">
				<tr>
					<?php
      $a = 0;
      for ($i=0; $i < 15; $i++) {
        if ($a !== 5) {
          $h = (!empty($hai[$i])) ? $hai[$i] : "-";
          ?>
					<td width="5%" style="height:150px;">
						<h6 style="margin-top:-60px;text-align:center"><?php echo $h ?></h6>
					</td>
					<?php
          $a++;
        }elseif ($i == 5) {
          echo "</tr>";
        }else{
            $h = (!empty($hai[$i])) ? $hai[$i] : "-";
          echo '</tr><tr><td width="5%" style="height:150px;"> <h6 style="margin-top:-60px;text-align:center">'.$h.'</h6> </td>';
          $a = 1;
        }
      }

      // foreach ($hai as $key => $h):?>
					<!-- <td width="5%" style="height:150px;"> <h6 style="margin-top:-60px;text-align:center"><?php //echo $h ?></h6> </td> -->
					<?php
          //$a++;
           //if ($a == (sizeof($hai) - 0)){
             // echo "</tr>";
           //}elseif ($a%3 == 0) {
            // echo "</tr><tr>";
           //}
           ?>
					<!-- <?php// endforeach; ?> -->

					<!-- </tr> -->
			</table>
		</div>





    <div class="container">
      <h1>KASUS 4</h1>
    </div>

		<div class="col-md-2"></div>
		<div class="container">
			<section>
				<button onclick="plus()">+</button>
				<button onclick="hastag()">#</button>
				<button onclick="dan()">&</button>
				<textarea name="name" rows="8" cols="80" id="textArea"></textarea>
			</section>
		</div>



		<div class="container" style="margin-top:420px;">
			<h1>Ambil Data dengan AJAX Jquery (Inponow Tutorial)</h1>
		</div>
		<br>
		<div class="container">
				<div class="input-group">
					<input type="text" name="keyword" class="form-control" id="search_inponow" placeholder="Cari data ?">
					<div class="input-group-append">
						<button type="button" class="btn btn-primary" name="button" onclick="SearchAjax()">Search</button>
					</div>
					</div>
					<div class="row" style="margin-top:40px;">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<b>Hasil Penelusuran</b>
							<br>
							<div class="hasilSearch">

							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
		</div>

	</div>


<!-- JUST SCRIPT -->
	<script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">

	function SearchAjax() {
		  var isi    = $('#search_inponow').val();
		  console.log(isi);
		  $.ajax({
		           method: 'POST',
		           dataType: 'json',
		           url: 'http://localhost/CI-INPONOW/getDataFromAjx',
		           data: {
		             input_ajx    : isi
		           },
		           success: function(result) {
								 //kita tambahkan ajax lagi untuk mengirim data result
								console.log(result);

								if (result == '') {

									$("h6").remove();
									$("h5").remove();
									$("br").remove();

									var isivalue =
									"<h6 style='border:2px solid #fb1732;'> Tidak Ada di Database ;)</h6><br>";

									$(".hasilSearch").append(isivalue);

								}else {

									$("h6").remove();
									$("h5").remove();
									$("br").remove();
								for (var i = 0; i < result.length; i++) {
										var isivalue =
										"<h5 style='border-bottom:1px solid #878787;'>"+result[i].nama+" | "+result[i].jurusan+"</h5><br>";

										$(".hasilSearch").append(isivalue);

									}

								}

		          }
		  })
		}


		var baseurl = '<?php echo base_url(); ?>';



		$(document).ready(function() {
			$('#tableku').DataTable({
				"scrollX": true,
				"scrollY": true
			});
		});

		function plus() {
			var tmp = $('#textArea').val();
			$('#textArea').val(tmp + '+')
		}

		function hastag() {
			var tmp = $('#textArea').val();
			$('#textArea').val(tmp + '#')
		}

		function dan() {
			$('#textArea').append('&')
		}

		$('.dataja').on('click', function() {
			var as = $(this).attr('data-aja')
			console.log(as);
			$('#aidi').attr('src', as);
			$('#bebas').val(as)
			// console.log($('iframe[src=""]').attr('src', as));
		});

		var baseurl = '<?php echo base_url(); ?>';

		$('#deleteData').on('click', function(id) {

			var id = $('#id').val();
			console.log(id);

			$.ajax({
				url: baseurl + 'delete',
				async: true,
				type: 'POST',
				dataType: 'json',
				data: {
					id: id
				},
				success: function(hai) {

				}
			});

		});
	</script>
