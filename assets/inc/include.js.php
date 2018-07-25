<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/less.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function koma(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
			val = val.toString().replace(/(\d+)(\d{3})/, '$1'+'.'+'$2');
		}

		return val;
	}

	$("input.id").keydown(function(e){
		var idBrg = $(this).val();
		var idTrx = $(this).attr("name");
		var isFound = true;
		if(e.keyCode == 13){
			// alert(idTrx + " " + idBrg);
			$.ajax({
				url: "assets/inc/db/db.query.php?act=harga_barang&id="+idBrg+"",
				success: function(x){
					$("div#sat-"+ idTrx).html(koma(x)).attr("data-hrg", x);
				}
			});

			$.ajax({
				url: "assets/inc/db/db.query.php?act=nama_barang&id="+idBrg+"",
				success: function(x){
					$("div#nama-"+ idTrx).html(x);
				}
			});

			if(isFound == false){
				alert("AA");
			}
		}
	})

	$("input.jumlah").keydown(function(e){
		var jmlhBrg = $(this).val();
		var idTrx = $(this).attr('data-id');
		var hrgBrg = $("div#sat-"+ idTrx).attr("data-hrg");
		if(e.keyCode == 13){
			var hrg_tot = jmlhBrg * hrgBrg;
			$("div#tot-"+ idTrx).html(koma(hrg_tot)).attr("data-hrg", hrg_tot);
			//Change grand total
			var total = 0;
			for (var i = 1; i <= 50; i++) {
				total = +total + +$("div#tot-"+ i).attr("data-hrg");
			}
			// var gt = $("div#grand-total").attr("data-hrg"); 
			$("div#grand-total").attr("data-hrg", total).html(koma(total));
		}
	})

	$("input").keydown(function(e){
		if(e.keyCode == 32){
			alert("Total Belanja : Rp. " + $("div#grand-total").attr("data-hrg"));
			$("#popupTotal").modal();
		}
	})
</script>

<!-- Incoming :
Autocomplete saat keydown input
Alert saat item tidak ditemukan 
Opsional untuk diberi koma atau tidak pada data-->