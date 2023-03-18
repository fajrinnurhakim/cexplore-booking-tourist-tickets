// ambil elemen2 yang dibutuhkan
var pengunjung_dewasa = document.getElementById('pengunjung_dewasa');
var pengunjung_anak = document.getElementById('pengunjung_anak');
var tempat_wisata = document.getElementById('tempat_wisata');
var ajax = document.getElementById('ajax');

document.getElementById("checkHarga").addEventListener("click", myFunction);


function myFunction() {

		// buat object ajax
		var xhr = new XMLHttpRequest();	

		// cek kesiapan ajax
		xhr.onreadystatechange = function() {
			if ( xhr.readyState == 4 && xhr.status == 200 ) {
				ajax.innerHTML = xhr.responseText;
				object.className += ' hidden';
			}
		}


		// eksekusi ajax
		xhr.open('GET', 'ajax.php?tempat_wisata=' + tempat_wisata.value + '&&pengunjung_dewasa=' + pengunjung_dewasa.value + '&&pengunjung_anak=' + pengunjung_anak.value, true);
		xhr.send();




};