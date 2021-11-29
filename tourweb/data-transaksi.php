<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <table class="tabel">
            <tr>
                <th>Kode Tiket</th>
                <th>Total</th>
            </tr>
            <?php
            include "koneksi.php";
            // $total = $_POST['total'];
            // $q = mysqli_query($conn, "insert into tiket (total)
            // values ('" . $total . "')");

            $q = mysqli_query($conn, "select * from transaksi");
            while ($a = mysqli_fetch_array($q)) {
                @$total = $total + $a['total'];
            ?>
                <tr>
                    <td><?= $a['kodeTiket'] ?></td>
                    <td style="text-align: right;">Rp.<?=number_format($a['total'],0,'.','.')?>,-</td>
                </tr>
            <?php } ?>
            <tr bgcolor="#eee">
                <td style="text-align: center;"><b>TOTAL</b></td>
                <td style="text-align: right;">Rp.<?= number_format($total,0,'.','.')?>,-</td>
            </tr>
        </table>
        <a href="upload_tiket.php"><input type="submit" class="submit" value="Upload Bukti Pembayaran"></a>
    </center>
</body>
</html>