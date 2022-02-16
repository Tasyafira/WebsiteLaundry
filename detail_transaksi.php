<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
        th, td {
            text-align : center;
        }
    </style>
<center>
<h2>Detail Transaction</h2>
</center>

<table class="table table-hover table-striped table-bordered">

    <thead>
        <th>NO</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Produk</th>
        <th>Total</th>
        <th>Status</th>
    </thead>

    <tbody>
        <?php 
        include "koneksi.php";
        session_start();

        $qry_histori=mysqli_query($conn,"select * from transaksi where id_user='".$_SESSION['id_user']."' order by id_transaksi desc");
        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan paket yang dibeli

            $paket_dibeli="<ol>";
            $total=0;
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");

            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $paket_dibeli.="<li>".$dt_paket['jenis']."</li>";
                $total += $dt_paket['subtotal'];
            }

            $paket_dibeli.="</ol>";
            $total2 = number_format($total, 2);
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_histori['tgl']?></td>
                <td><?=$paket_dibeli?></td>
                <td><?php echo("Rp. ".$total2); ?></td>
                <td><?php echo("Diproses"); ?></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>