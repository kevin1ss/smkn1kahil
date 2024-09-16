<html lang="en">
<head>
<?php
       
       include "../header.php";
    
    ?>
    <title><?= $title ?></title>
</head>
<body class="bungee-regular">
    <ul class="bungee-regular">
        <li><a class="active">Beranda</a></li>
        <li><a href="#addsiswa" class="tablinks" onclick="openC(event, 'addsiswa')">Tambah Siswa</a></li>
        <li><a href="#addguru" class="tablinks" onclick="openC(event, 'addguru')">Tambah Guru</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;" class="sticky-top">
    <h2>Selamat Datang di Halaman Tambah Data</h2>
    <br>
    <hr>
    <div id="addsiswa" class="tabcontent">
        <form action="" method="post">
            <label for="banyak">Banyak&nbsp;Siswa</label>
            <input type="text" class="form-control"name="banyaksiswa" id="" placeholder="Banyak Siswa">
            <label for="thnajar">Tahun&nbsp;Ajaran</label>
            <input type="number" min="1900" max="2099" step="1" value="2100" / class="form-control">
            <br>
            <select name="thnajar" id="" class="form-control">
            <option selected>Silahlkan&nbsp;Pilih&nbsp;Tahun&nbsp;Ajaran</option>
                <option value="Ganjil">Tahun&nbsp;Ganjil</option>
                <option value="Genap">Tahun&nbsp;Genap</option>
            </select>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="" class="form-control">
                <option selected>Silahlkan&nbsp;Pilih</option>
                <option value="PF">Produksi&nbsp;Film</option>
                <option value="TKJ">Teknik&nbsp;Komputer&nbsp;dan&nbsp;Jaringan</option>
                <option value="AT">Agribisnis&nbsp;Tanaman</option>
                <option value="TKP">Teknik&nbsp;Kontruksi&nbsp;dan &nbsp;Properti</option>
                <option value="MPLB">Manajemen&nbsp;Perkantoran &nbsp;dan &nbsp;Layanan &nbsp;Bisnis</option>
                <option value="TKR">Teknik&nbsp;Kendaraan&nbsp;Ringan</option>
            </select>
            <label for="kelas">Kelas</label>
            <br>
            <input type="radio" name="kelas" value="X">&nbsp;X
            <input type="radio" name="kelas" value="XI">&nbsp;XI
            <input type="radio" name="kelas" value="XII">&nbsp;XII
            <br>
            <button type="submit" class="btn btn-sm btn-success btn-block" name="simpan">Simpan&nbsp;Data</button>
        </form>
    </div>
    <div id="addguru" class="tabcontent">
        <form action="" method="post">
            <label for="banyak">Banyak&nbsp;Guru</label>
            <input type="text" class="form-control"name="banyakguru" id="" placeholder="Banyak Guru">
            <label for="jurusan">Jenis&nbsp;Guru</label>
            <select name="jurusan" id="" class="form-control">
                <option selected>Silahlkan&nbsp;Pilih</option>
                <option value="GURUHONORER">Guru&nbsp;Honorer</option>
                <option value="GURUASN">Guru&nbsp;ASN</option>
            </select>
            <br>
            <button type="submit" class="btn btn-sm btn-success btn-block" name="simpan">Simpan&nbsp;Data</button>
        </form>
    </div>
    <script>
function openC(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
</body>
</html>