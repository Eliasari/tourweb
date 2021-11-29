<?php 
    include "koneksi.php";

    session_start();

    if($_FILES['file']['size'] > 0){
        $name = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['bukti']['tmp_name'];
        move_uploaded_file($file_tmp, 'bukti/'.$name);
        $upfile=mysqli_query($conn,"update tiket set bukti='".$name."' where email = '".$_SESSION['email']."' ") ;
    }
    
    if($upfile){
        echo "<script>alert('Success);location.href='tiket_booked.php';</script>";
    }else{
        echo "<script>alert('Fail');location.href='tiket_booked.php';</script>";
    }
    
?>