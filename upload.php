<?php

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];
$serverName = "farizshare";

// tentukan lokasi file akan dipindahkan
$dirUpload = "uploads/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile+$serverName);

if ($terupload) {
    echo "Upload Successful!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    echo "<a href="./index.html">Back To Uploader</a>";
} else {
    echo "Upload Failed. Please Try Again.!";
}

?>
