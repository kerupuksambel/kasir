<html>
	<head>
		<?php require "assets/inc/include.php"; ?>
	</head>
	<body>
		<div class="container col-sm-12">
			<div id="grand-total" data-hrg="0">0</div>
			<div class="col-md-2">Sidebar</div>
			<div class="col-md-10" id="content">
				<div id="cashier">
					<table id="trx">
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Harga Satuan</th>
							<th>Jumlah</th>
							<th>Harga Total</th>
						</tr>
						<?php
							for($i = 1; $i <= 50; $i++){
						?>

									<tr id='trx'>
										<td><input type='text' class="id" name='<?php echo $i?>'></td>
										<td><div class='nama' id="nama-<?php echo $i?>"></div></td>
										<td><div class='hrg-sat' id='sat-<?php echo $i?>'></div></td>
										<td><input class='jumlah' type='number' name='jml-<?php echo $i?>' data-id='<?php echo $i?>'></td>
										<td><div class='hrg-tot' id='tot-<?php echo $i?>' data-hrg='0'>0</div></td>
									</tr>
						<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</body>
	<!-- Modal -->
	<div class="modal fade" id="popupTotal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
					...
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<?php require "assets/inc/include.js.php" ?>
</html>
<!-- Saat ID tidak ditemukan, pasang alert -->
<!-- 
	ID pendek
	Jumlah lebih pendek
	Nama, harga panjang
	Grand total (#sum) besar di kanan
	Seluruh grid diberi garis
	<th> dialign ke kiri
	Ubah fontnya, serif nggilani 
-->


<!-- 
BOOTSTRAP
	Tambahkan collapse sidebar dikiri
	- Login akun kasir
	- Kosongkan menu
	- More feature incoming, ngantuk cuk
	Tambahkan kotak dialog untuk cashout
-->

<!-- 
FITUR
- Voucher
- Diskon
- Promo
- Ganti Kasir
- Member Pembeli
- Batalkan pembelanjaan (cancel di konfirmasi)
 -->

