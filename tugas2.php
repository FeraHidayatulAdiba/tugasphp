<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
</head>
<body>
    <h1>Data Diri</h1>
    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukan nama anda">

        <label for="">Pekerjaan</label>
        <select name="pekerjaan" id="">
            <option value="">---pilihan pekerjaan---</option>
            <option value="Dosen">Dosen</option>
            <option value="Guru">Guru</option>
            <option value="TNI">TNI</option>
            <option value="Polisi">Polisi</option>
            <option value="Nelayan">Nelayan</option>
            <option value="Koki">Koki</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Penjual">Penjual</option>
            <option value="Satpam">Satpam</option>
            <option value="HRD">HRD</option>
</select><br>
        <label><input type="radio" name="hobby" value="Memasak"> Memasak</label><br>
        <label><input type="radio" name="hobby" value="Tidur"> Tidur</label><br>
        <label><input type="radio" name="hobby" value="Memanah"> Memanah</label><br>
        <label><input type="radio" name="hobby" value="Berenang"> Berenang</label><br>
        <label><input type="radio" name="hobby" value="Bulutangkis"> Bulutangkis</label><br>
        <label><input type="radio" name="hobby" value="Sepakbola"> Sepakbola</label><br>
        <label><input type="radio" name="hobby" value="Memancing"> Memancing</label><br>
        <label><input type="radio" name="hobby" value="Traveling"> Traveling</label><br>
        <label><input type="radio" name="hobby" value="Vlogging"> Vlogging</label><br>
        <label><input type="radio" name="hobby" value="Berbelanja"> Berbelanja</label><br>

        <button name="simpan" type="submit">Simpan</button>

    </form>

    <?php
	if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];


    echo '<table border="1">
				<tr>
					<th>Nama</th>
					<th>Pekerjaan</th>
					<th>Hobby</th>
				</tr>
				<tr>
					<td>' . $_POST['nama']. '</td>
					<td>' . $_POST['pekerjaan']. '</td>
					<td>' . $_POST['hobby']. '</td><br>
				</tr>
			</table>';
	}
	?>
</body>
</html>
