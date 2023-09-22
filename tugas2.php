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
            <option value="pekerjaan 1">Dokter</option>
            <option value="pekerjaan 2">Polisi</option>
            <option value="pekerjaan 3">Perawat</option>
            <option value="pekerjaan 4">Koki</option>
            <option value="pekerjaan 5">Guru</option>
            <option value="pekerjaan 6">Dosen</option>
            <option value="pekerjaan 7">Petani</option>
            <option value="pekerjaan 8">Nelayan</option>
            <option value="pekerjaan 9">Pebisnis</option>
            <option value="pekerjaan 10">Penjual</option>
</select><br>
        <label><input type="radio" name="hobby" value="Hobby 1"> Mendesain </label><br>
        <label><input type="radio" name="hobby" value="Hobby 2"> Berenang</label><br>
        <label><input type="radio" name="hobby" value="Hobby 3"> Traveling</label><br>
        <label><input type="radio" name="hobby" value="Hobby 4"> Vlogging</label><br>
        <label><input type="radio" name="hobby" value="Hobby 5"> Memasak</label><br>
        <label><input type="radio" name="hobby" value="Hobby 6"> Berbelanja</label><br>
        <label><input type="radio" name="hobby" value="Hobby 7"> Bernyanyi</label><br>
        <label><input type="radio" name="hobby" value="Hobby 8"> Futsal</label><br>
        <label><input type="radio" name="hobby" value="Hobby 9"> Berkuda</label><br>
        <label><input type="radio" name="hobby" value="Hobby 10"> Tidur</label><br>

        <button name="simpan" type="submit">Simpan</button>

    </form>

    <?php
	if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];


    echo "<table>
				<tr>
					<th>Nama</th>
					<th>Pekerjaan</th>
					<th>Hobby</th>
				</tr>
				<tr>
					<td>$nama</td>
					<td>$pekerjaan</td>
					<td>$hobby</td><br>
				</tr>
			</table>";
	}
	?>
</body>
</html>
