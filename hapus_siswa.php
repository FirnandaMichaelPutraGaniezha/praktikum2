<?php
    if($_GET['id_kelas']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"DELETE FROM siswa where id_siswa='".$_GET['id_kelas']."'");
    if($query_hapus){
        echo "<script>alert('Sukses Hapus Siswa');location.href='tampil_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Siswa');location.href='tampil_siswa.php';</script>";
        }
    } 
?>