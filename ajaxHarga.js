// ambil elemen2 yang dibutuhkan
var tempat_wisata = document.getElementById('tempat_wisata');
var ajaxHarga = document.getElementById('ajaxHarga');


	// tambahkan event ketika tempat_wisata ditulis
	$('#tempat_wisata').change(function(){
	// untuk select option gunakan 'change'

	// buat object ajax
	var xhr2 = new XMLHttpRequest();	

	// cek kesiapan ajax
	xhr2.onreadystatechange = function() {
		if ( xhr2.readyState == 4 && xhr2.status == 200 ) {
			ajaxHarga.innerHTML = xhr2.responseText;
		}
	}

	// eksekusi ajax
	xhr2.open('GET', 'ajaxHarga.php?tempat_wisata=' + tempat_wisata.value, true);
	xhr2.send();

	});

