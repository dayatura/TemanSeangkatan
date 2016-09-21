<!DOCTYPE html>
<html>
<body>

    
    
    <?php
    // define variables and set to empty values
    $angkatan = $prodi = $angkatanErr = $prodiErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["angkatan"])) {
        $angkatanErr = "Masukan dua digit angkatan";
      } else {
        $angkatan = test_input($_POST["angkatan"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*$/",$angkatan)) {
          $angkatanErr = "Masukan hanya angka"; 
        }
      }
        
      if (empty($_POST["prodi"])) {
        $prodiErr = "Masukan 1 digit prodi";
      } else {
        $prodi = test_input($_POST["prodi"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[0-9]*$/",$prodi)) {
          $prodiErr = "Masukan hana angka"; 
        }
      }    
        
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<h1>Teman Angkatan</h1>
<p>Ini adalah program rintisan untuk menampilkan foto pacis teman prodi seangkatan di Universitas Padjadjaran</p>
<p>Untuk sementara program ini hanya bekerja untuk Fakultas FMIPA</p>
<p>Bagi yang ingin berkontribusi untuk mengembangkan project ini silahkan ikuti <a style="color:red; font-size: 20px;" href="https://github.com/dayatura/TemanSeangkatan">LINK</a> ini</p>
<p>Enjoy n_n</p>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Angkatan   : <input type="text" name="angkatan" value="<?php echo $angkatan;?>">
  <span class="error"> Masukan 2 digit angkatan (mis: 14)<?php echo $angkatanErr;?></span>
  <br><br>
  Kode Prodi : <input type="text" name="prodi" value="<?php echo $prodi;?>">
  <span class="error"> Masukan kode prodi (mis: 1)<?php echo $prodiErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <br><br>
</form>

    
    
<?php  //Ini adalah bagian untuk menampilkan gambar 

    //geofis 7
    // statis 6
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($x = 1; $x <= 9; $x++) {
      echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/140".$prodi."10/20".$angkatan."/140".$prodi."10".$angkatan."000"."$x".".JPG'> ";
      if ($x % 7 == 0){
        echo "<br>";
      }
    }
    for ($x = 10; $x <= 100; $x++) {
      echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/140".$prodi."10/20".$angkatan."/140".$prodi."10".$angkatan."00"."$x".".JPG'> ";
      if ($x % 7 == 0){
        echo "<br>";
      }
    }
 }
?>  

</body>
</html>