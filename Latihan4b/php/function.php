<?php
// Koneksi Database 
function koneksi(){
    $koneksi = mysqli_connect("localhost", "root","");
    mysqli_select_db($koneksi, "Waleed");

    return $koneksi;

}

// fungsi query
function query($sql){
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, "$sql");

    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}
?>