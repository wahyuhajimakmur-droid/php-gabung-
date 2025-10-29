<?php 
   include 'koneksi.php';

     if (isset($_POST['aksi'])) {
        if($_POST['aksi'] == "add") {

         $nisn = $_POST['nisn'];
         $nama_siswa = $_POST['nama_siswa'];
         $jenis_kelamin = $_POST['jenis_kelamin'];
         $foto_siswa = $_FILES['foto_siswa']['name'];
         $alamat = $_POST['alamat'];

         $dir = "Img/";
         $tmpFile = $_FILES['foto_siswa']['tmp_name'];

         move_uploaded_file($tmpFile , $dir.$foto_siswa);

         $query = "INSERT INTO tb_siswa VALUES(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto_siswa', '$alamat')";
         $sql = mysqli_query ($conn, $query);

         if($sql){
            header ("location: beranda.php");
             //echo "Data Berhasil Ditambahkan <a href='test.php'>[Home]</a>";  
         } else {
            echo $query;
         }


         //echo "$nisn." | ".$nama_siswa." | ".$jenis_kelamin." | ".$foto_siswa." | ".$alamat.;

        //echo "Tambah data <a href='test.php'>[Home]</a>";

     } else if($_POST['aksi'] == "edit") {
        echo "Edit data <a href='beranda.php'>[Home]</a>";
     }
        }
        if (isset($_GET['hapus'])) {
            $id_siswa = $_GET['hapus'];

            $queryshow = "SELECT foto_siswa FROM tb_siswa WHERE id_siswa = '$id_siswa';";
            $sqlshow = mysqli_query ($conn, $queryshow);
            $result = mysqli_fetch_assoc ($sqlshow);

            unlink ("Img/".$result['foto_siswa']);

            $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
            $sql = mysqli_query ($conn, $query);

            if($sql){
            header ("location: beranda.php");
             //echo "Data Berhasil Ditambahkan <a href='test.php'>[Home]</a>";  
         } else {
            echo $query;
         }
            //echo "Hapus data dengan <a href='test.php'>[Home]</a>";
        }

?>