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
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mahasiswa = array(
                array("2113020123", "Fera", 60),
                array("2113020124", "Putri", 88),
                array("2113020145", "Dina", 50),
                array("2113020126", "Alex", 95),
                array("2113020127", "Eve", 42),
                array("2113020128", "Ezli", 80),
                array("2113020129", "Rizki", 30),
                array("2113020130", "Putra", 100),
                array("2113020131", "Faisal", 45),
                array("2113020132", "Salfa", 72),



            );

            $totalNilai = array_reduce($mahasiswa, function($carry, $item) {
                return $carry + $item[2];
            });

            $nilaiTertinggi = max(array_column($mahasiswa, 2));
            $nilaiTerendah = min(array_column($mahasiswa, 2));

            $no = 1;

            foreach ($mahasiswa as $data) {
                $nim = $data[0];
                $nama = $data[1];
                $nilai = $data[2];

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

                switch ($grade) {
                    case 'A':
                        $predikat = 'Sangat Baik';
                        break;
                    case 'B':
                        $predikat = 'Baik';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    default:
                        $predikat = 'Sangat Kurang';
                        break;
                }

                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$nim</td>";
                echo "<td>$nama</td>";
                echo "<td>$nilai</td>";
                echo "<td>$keterangan</td>";
                echo "<td>$grade</td>";
                echo "<td>$predikat</td>";
                echo "</tr>";

                $no++;
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7" align="center">Data Nilai</td>
            </tr>
            <tr>
                <td colspan="7">Nilai Tertinggi: <?php echo $nilaiTertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="7">Nilai Terendah: <?php echo $nilaiTerendah; ?></td>
            </tr>
            <tr>
                <td colspan="7">Nilai Rata-rata: <?php echo number_format($totalNilai / count($mahasiswa), 2); ?></td>
            </tr>
            <tr>
                <td colspan="7">Jumlah Mahasiswa: <?php echo count($mahasiswa); ?></td>
            </tr>
            <tr>
                <td colspan="7">Jumlah Keseluruhan Nilai: <?php echo array_sum(array_column($mahasiswa, 2)); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
