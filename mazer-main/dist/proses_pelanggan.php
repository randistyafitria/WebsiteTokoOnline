<?php
if($_POST){
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $telp=$_POST['telp'];

 if(empty($nama)){
 echo "<script>alert('nama tidak boleh kosong');location.href='customer.php';</script>";
 } elseif(empty($alamat)){
 echo "<script>alert('alamat tidak boleh kosong');location.href='customer.php';</script>";
 } elseif(empty($telp)){
 echo "<script>alert('telp tidak boleh kosong');location.href='customer.php';</script>";
 
 } else {
 include "koneksi.php";
 $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp) value ('".$nama."', '".$alamat."', '".$telp."')");
 if($insert){
 echo "<script>alert('Sukses menambahkan pelanggan');location.href='customer.php';</script>";
 } else {
 echo "<script>alert('Gagal menambahkan pelanggan');location.href='customer.php';</script>";
 }
 }
}
?>