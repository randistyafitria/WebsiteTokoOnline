<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase - TokoOnline</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dashboard.php"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="products.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Products</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="producthistory.php" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Product History</span>
                            </a>
                        </li>

                    
                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="customer.php">Customer</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="officer.php">Officer</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="login.php">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Purchase</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Purchase</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-15">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <?php
include "koneksi.php";
$qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
$dt_produk=mysqli_fetch_array($qry_detail_produk);
?>

<div class="row">
<div class="col-md-4">
<img src="assets/foto/<?=$dt_produk['foto_produk']?>" class="card-img-top" weight="350" height="300">
</div>
<div class="col-md-8">
<form
action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>"
method="post">
<table class="table table-hover table-striped">
<thead>
<tr>
<td>Nama Produk</td><td><?=$dt_produk['nama_produk']?></td>
</tr>
<tr>
<td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
</tr>
<tr>
<td>Harga</td><td><?=$dt_produk['harga']?></td>
</tr>
<tr>
<td>Jumlah Pembelian</td><td><input type="number"
name="jumlah_pembelian" value="1"></td>
</tr>
<tr>

                                              
<td>Metode Pembayaran</td><td>
<select name="metode_pembayaran" button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>      
<option value="Bank">Bank</option>
<option value="Linkaja">Linkaja</option>
<option value="Indomaret">Indomaret</option>
<option value="Alfamaret">Alfamaret</option>
<option value="COD">COD</option>
<option value="Lainnya">Lainnya</option>
</select>
</tr>
<tr>
<td>Opsi Pengiriman</td><td>
<select name="opsi_pengiriman"button class="btn btn-primary dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
<option value="JNT">JNT</option>
<option value="JNE">JNE</option>
<option value="Wahana">Wahana</option>
<option value="Lion Parcel">Lion Parcel</option>
<option value="AnterAja">AnterAja</option>
<option value="Lainnya">Lainnya</option>
</select>
</tr>
<tr>

<td colspan="2"><input class="btn btn-primary" type="submit" value="BELI"></td> 
</tr>
</thead>
</table>
</form>
</div>
</div>
<?php
?>
                            </div>
                            
                        </div>

                        
                    </div>
                </section>

            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; TokoOnline</p>
                    </div>
                   
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>