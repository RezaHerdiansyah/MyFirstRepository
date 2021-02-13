<script>
	angka = '123456789';
	var huruf = 'ABCDEFGH';
	// alert('Pemasangan Sukses');
	// $('#link_forget_passwd').click({
	// 	alert('Modul OTW Insya Allah...');
	// })

	function forget_passwd(){
		angka = '123456789';
		var huruf = 'ABCDEFGH';
		// alert('Modul OTW Insya Allah...');
		// var email = $('#email').val();
		var h3 = $('#card-header h3').html();
		// alert(h3);

		// $('#card-header h3').html('Assalamualaikum...');
		$('#email').val('Assalamualaikum...');
	}

	function tampilkan_spinner(){
		// $('#spinner_login').show();
	}

	$('#submit').dblclick(function(){
		$('#spinner_login').show();
		$('#card-header h3').html('Assalamualaikum...');
	})

	function coba_vari(){
		alert(angka);
	}
</script>