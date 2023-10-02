<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran (10);
$persegiPanjang = new PersegiPanjang (10,5);
$segitiga = new Segitiga (10,10);

$BidangArray = [$lingkaran,$persegiPanjang,$segitiga];
?>
<html>
    <head>
        <h1 align= "center">Bidang Bentuk 2D</h1>
    </head>
    <body>
            <table border="1" align="center" width="60%" height="60%">
    <tr>
        <th>No</th>
        <th>Nama Bidang</th>
        <th>Keterangan</th>
        <th>Luas</th>
        <th>Keliling</th>
</tr>

<tbody>
<?php
            $no = 1;
            foreach ($BidangArray as $bidang) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $bidang->namaBidang() . "</td>";
                echo "<td>" . $bidang->keterangan(). "</td>"; //keterangan
                echo "<td>" . $bidang->luasBidang() . "</td>";
                echo "<td>" . $bidang->kelilingBidang() . "</td>";
                echo "</tr>";
                $no++;
                $keterangan;
            }
            ?>
        </tbody>
        </table>
        </body>
        </html>