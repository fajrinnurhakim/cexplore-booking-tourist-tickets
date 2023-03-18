<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cexplore");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	};
	return $rows;
};

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}



?>
