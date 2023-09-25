<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h3 align="center">Data Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = array(
                array("Fera", 75),
                array("Putri", 88),
                array("Dina", 50),
                array("Alex", 95),
                array("Eve", 42)
            );

            $totalNilai = 0;
            $nilaiTertinggi = $mahasiswa[0][1];
            $nilaiTerendah = $mahasiswa[0][1];

            foreach ($mahasiswa as $data) {
                $nama = $data[0];
                $nilai = $data[1];

                $keterangan = ($nilai >= 60) ? "Selamat Anda Lulus" : "Tidak Lulus";

                if ($nilai >= 90) {
                    $grade = 'A';
                } elseif ($nilai >= 80) {
                    $grade = 'B';
                } elseif ($nilai >= 70) {
                    $grade = 'C';
                } elseif ($nilai >= 60) {
                    $grade = 'D';
                } else {
                    $grade = 'E';
                }

                $totalNilai += $nilai;
                if ($nilai > $nilaiTertinggi) {
                    $nilaiTertinggi = $nilai;
                }
                if ($nilai < $nilaiTerendah) {
                    $nilaiTerendah = $nilai;
                }

                echo "<tr>";
                echo "<td>$nama</td>";
                echo "<td>$nilai</td>";
                echo "<td>$keterangan</td>";
                echo "<td>$grade</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="center">Data Nilai</td>
            </tr>
            <tr>
                <td colspan="4">Nilai Tertinggi: <?php echo $nilaiTertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="4">Nilai Terendah: <?php echo $nilaiTerendah; ?></td>
            </tr>
            <tr>
                <td colspan="4">Nilai Rata-rata: <?php echo number_format($totalNilai / count($mahasiswa), 2); ?></td>
            </tr>
            <tr>
                <td colspan="4">Jumlah Mahasiswa: <?php echo count($mahasiswa); ?></td>
            </tr>
            <tr>
                <td colspan="4">Jumlah Keseluruhan Nilai: <?php echo $totalNilai; ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
