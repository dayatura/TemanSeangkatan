<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body style="background-color: #ffcd107">

    <?php
    $npm = $npmErr = $angkatan = $prodi = $angkatanErr = $prodiErr = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["npm"])) {
        $npmErr = "Masukan npm";
      } else {
        $npm = test_input($_POST["npm"]);
        if (!preg_match("/^[0-9]*$/",$npm)) {
          $npmErr = "Masukan hanya angka"; 
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
<div class='w3-card-8 w3-center'>
	<div class="w3-container w3-indigo">
	<h1 class="w3-jumbo" style="text-align: center; color: #ffc107" >TEMAN ANGKATAN</h1>
	<p style="text-align: center; color: #ffc107">Masukan NPM dan temukan teman prodi satu angkatan</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  <div class="w3-row">
	  <div class="w3-col w3-container" style="width:20%"></div>
	  <input class="w3-col w3-input w3-border w3-light-grey" style="width:50%" type="text" name="npm" value="<?php echo $npm;?>" placeholder="Masukan NPM Lengkap (mis: 14081016005)"> 
	  <div class="w3-col w3-container" style="width:1%"></div>
	  <input class="w3-col w3-input w3-btn w3-amber" style="width:10%" type="submit" name="submit" value="GO">
	  <div class="w3-rest"></div>
	  </div>
	  <br>
	  <span class="error"><?php echo $npmErr;?></span>
	</form>
	
	
	<p>Bagi yang ingin berkontribusi untuk mengembangkan project ini silahkan ikuti <a style="color: #ffc107;" href="https://github.com/dayatura/TemanSeangkatan">LINK</a> ini</p>
</div>
    
    
<?php  //Ini adalah bagian untuk menampilkan gambar 
    // fisip 170710150054
    //geofis 7
    // statis 6
    //14081014050
    //https://media.unpad.ac.id/photo/mahasiswa/130110/2014/130110140050.JPG
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
	$prodi = substr($npm,3,1);
	$angkatan = substr($npm,6,2);
  $kode = substr($npm, 0, 6);
		
    for ($x = 1; $x <= 9; $x++) {
      echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/".$kode."/20".$angkatan."/".$kode.$angkatan."000"."$x".".JPG' onerror='this.style.display='none'' class='w3-hover-opacity w3-margin' style='box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); ' onclick='onClick(this)'>";
      if ($x % 7 == 0){
        //echo "<br>";
      }
    }
    for ($x = 10; $x <= 99; $x++) {
	if ($kode == 140810 && $angkatan == 14 && $x == 50){
		echo "<img src='https://instagram.fcgk5-1.fna.fbcdn.net/t51.2885-19/s320x320/23498979_303230860176415_5916636836893032448_n.jpg' onerror='this.style.display='none'' class='w3-hover-opacity w3-margin' style='box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); ' onclick='onClick(this)'>";
	}else{
      		echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/".$kode."/20".$angkatan."/".$kode.$angkatan."00"."$x".".JPG' onerror='this.style.display='none'' class='w3-hover-opacity w3-margin' style='box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); ' onclick='onClick(this)'>";
	}
	    if ($x % 7 == 0){
        //echo "<br>";
      }
    }
    for ($x = 100; $x <= 150; $x++) {
      echo "<img src='https://media.unpad.ac.id/photo/mahasiswa/".$kode."/20".$angkatan."/".$kode.$angkatan."0"."$x".".JPG' onerror='this.style.display='none'' class='w3-hover-opacity w3-margin' style='box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); ' onclick='onClick(this)'>";
      if ($x % 7 == 0){
        //echo "<br>";
      }
    }
 }
?>  
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">X</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" style="max-width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

</body>
</html>
