<!DOCTYPE html>
<html>
<body>

    
    
    
    
    
	<?php  //Ini adalah bagian untuk menampilkan gambar 
        
		//geofis 7
		// statis 6
		
		$angkatan = 15;
		$prodi = 6;
		for ($x = 1; $x <= 9; $x++) {
		  echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/140".$prodi."10/20".$angkatan."/140".$prodi."10".$angkatan."000"."$x".".JPG'> ";
		  if ($x % 7 == 0){
			echo "<br>";
		  }
		}
		for ($x = 10; $x <= 120; $x++) {
		  echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/140".$prodi."10/20".$angkatan."/140".$prodi."10".$angkatan."00"."$x".".JPG'> ";
		  if ($x % 7 == 0){
			echo "<br>";
		  }
		}
	?>  

</body>
</html>