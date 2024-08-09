<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Invoice</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <img src="gambar/2.jpeg" alt="header" width="400" height="200">
    </header>
    <nav style="background-color: rgb(40, 40, 94); text-align: center;">
        <ul>
            <li style="margin: 10px;"><a href="index.html">Home</a></li>
            <li style="margin: 10px;"><a href="produk.html">Produk</a></li>
            <li style="margin: 10px;"><a href="kontak_kami.html">Kontak Kami</a></li>
        </ul>
    </nav>


    <table width="100%" style="text-align:center; margin-top: 10px; margin-bottom: 10px;">
        <tr>
            <!-- Konten Utama -->
            <td valign="top" style="text-align: center; border-radius: 10px; ">
                <h2>Struk Invoice</h2>
                <?php
                // Simpan data ke dalam variabel
                $nama = $_POST['nama'];
                echo "<tr><td>Nama :" . $nama;
                $telepon = $_POST['telepon'];
                echo "<tr><td>Telepon :" . $telepon;
                $email = $_POST['email'];
                echo "<tr><td>Email :" . $email;
                $alamat = $_POST['alamat'];
                echo "<tr><td>Alamat :" . $alamat;
                $produk = $_POST['produk'];
                echo "<tr><td>Produk :" . $produk;
                $jumlah = $_POST['jumlah'];
                echo "<tr><td>Jumlah :" . $jumlah;
                $harga = $_POST['harga'];
                echo "<tr><td>Harga :" . $harga;


                ?>
            </td>
        </tr>
    </table>


    <footer>
        <p>&copy; 2024 Rani Shop</p>
    </footer>
</body>

</html>