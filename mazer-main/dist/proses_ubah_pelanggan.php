<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='customer.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='customer.php';</script>";
    } else{
        include "koneksi.php";
        if(empty($telp)){
            $update=mysqli_query($conn, "update pelanggan set nama='".$nama."', alamat='".$alamat."' where id_pelanggan='".$id_pelanggan."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='customer.php';</script>";
            } else{
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
            }
        } else {
            $update=mysqli_query($conn, "update pelanggan set nama='".$nama."', alamat='".$alamat."', telp='".$telp."' where id_pelanggan='".$id_pelanggan."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pelanggan');location.href='customer.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_produk."';</script>";
            }
        }
    }
}
?>