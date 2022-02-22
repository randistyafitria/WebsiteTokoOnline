<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

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

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
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
                            <h3>Histori Produk</h3>
                            <p class="text-subtitle text-muted">Kamu bisa cek disini untuk produk apa yang telah kamu beli!</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                        <?php
?>
<h2>Histori Pembelian Produk</h2>
<table class="table table-hover table-striped">
 <thead>
 <th>NO</th><th>Tanggal Pembelian</th><th>Nama Produk</th>
 <th>Harga</th><th>Jumlah</th><th>Total</th>
 </thead>
 <tbody>
 <?php
 include "koneksi.php";
 $qry_histori=mysqli_query($conn,"select * from pembelian_produk order by id_pembelian_produk desc");
 $no=0;
 while($dt_histori=mysqli_fetch_array($qry_histori)){
    $no++;
    //menampilkan produk yang di beli
    $produk_dibeli="<ol>";
    $qry_produk=mysqli_query($conn,"select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk = '".$dt_histori['id_pembelian_produk']."'");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    $produk_dibeli=$dt_produk['nama_produk'];

 }
 
 $produk_dibeli.="</ol>";

 $produk_harga="<ol>";
    $qry_produk=mysqli_query($conn,"select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk = '".$dt_histori['id_pembelian_produk']."'");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    $produk_harga=$dt_produk['harga'];
}
$produk_harga.="</ol>";

$produk_jumlah="<ol>";
    $qry_produk=mysqli_query($conn,"select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk = '".$dt_histori['id_pembelian_produk']."'");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    $produk_jumlah=$dt_produk['qty'];
}
$produk_jumlah.="</ol>";

$produk_total="<ol>";
    $qry_produk=mysqli_query($conn,"select * from detail_pembelian_produk join produk on produk.id_produk=detail_pembelian_produk.id_produk where id_pembelian_produk = '".$dt_histori['id_pembelian_produk']."'");
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    $produk_total=$dt_produk['qty']*$dt_produk['harga'];
}
$produk_total.="</ol>";

 ?>
 <tr>
<td><?=$no?></td>
<td><?=$dt_histori['tanggal_beli']?></td>
<td><?=$produk_dibeli?></td>
<td><?=$produk_harga?></td>
<td><?=$produk_jumlah?></td>
<td><?=$produk_total?></td>

 </tr>
 <?php
 }
 ?>
 </tbody>
</table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>
</html>