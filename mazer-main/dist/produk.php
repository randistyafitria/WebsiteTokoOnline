<?php
include "header.php";
    ?>
    <h2>Daftar Produk</h2>
    <div class="row">
        <style>
            img{ weight: 350;
                height: 400;
            }
            </style>
    <?php
include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
    <div class="col-md-3">
    <div class="card" >
    <img src="assets/foto/<?=$dt_produk['foto_produk']?>" class="card-img-top" weight="350" height="300">
    <div class="card-body">
    <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
    <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
    <p class="card-text"><?=substr($dt_produk['harga'], 0,20)?></p>
    <a

href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>

    </div>
    </div>
    </div>
    <?php
    }
    ?>
    </div>
    <?php
    ?>