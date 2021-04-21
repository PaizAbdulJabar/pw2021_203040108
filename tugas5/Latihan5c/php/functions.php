<?php 
//fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_tubes_203040108") or die ("Database salah!");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();
    $img = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);
    

    $query = "INSERT INTO vga
                    VALUES
                    (null, '$img','$nama','$description','$price','$category');
                    ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM vga WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>
