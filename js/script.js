document.getElementById('transaksi-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const telepon = document.getElementById('telepon').value;
    const email = document.getElementById('email').value;
    const produk = document.getElementById('produk').value;
    const jumlah = document.getElementById('jumlah').value;

    if (nama && alamat && telepon && email && produk && jumlah) {
        alert(`Transaksi berhasil Nama: ${nama}, Alamat: ${alamat}, Telepon: ${telepon}, Email: ${email}, Produk: ${produk}, Jumlah: ${jumlah}`);
    } else {
        alert('Silakan isi semua form');
    }
});

