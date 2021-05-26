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
function ubah($data)
{
	$conn = koneksi();

	$id = $data ['id'];
	$img = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$description = htmlspecialchars($data['description']);
	$price = htmlspecialchars($data['price']);
	$category = htmlspecialchars($data['category']);

	$queryubah = "UPDATE vga 
					SET
					img = '$img',
					nama = '$nama',
					description = '$description',
					price = '$price',
					category = '$category'
					WHERE id = '$id' ";

	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}

function registrasi($data)
{
$conn = koneksi();
$username = strtolower(stripcslashes($data['username']));
$password = mysqli_real_escape_string($conn, $data['password']);

$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
if (mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('username sudah digunakan');
        </script>";
    return false;
}

$password = password_hash($password, PASSWORD_DEFAULT);

$query_tambah = "INSERT INTO user VALUES('', '$username','$password')";
mysqli_query($conn, $query_tambah);

return mysqli_affected_rows($conn);
}

?>

