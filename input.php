<br><br>
<html>
<body BACKGROUND="back.jpg">
<h1 align="center" style="color:white">Input Data Pelanggan</h1>
<fieldset style="width: 50%; margin: auto;">
    <legend style="color:white">Form Input Data</legend>
    
    <form action="simpan.php" method="post" style="color:white">
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
        </p>
        
        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required></textarea>
        </p>

        <p>
            Judul Buku<br />
            <input type="radio" name="judul_buku" value="laskar pelangi" id="laskar pelangi" /><label for="laskar pelangi">Laskar pelangi</label>
            <input type="radio" name="judul_buku" value="ayat-ayat cinta" id="ayat-ayat cinta" /><label for="ayat-ayat cinta">Ayat-Ayat Cinta</label>
            <input type="radio" name="judul_buku" value="bumi dan langit" id="bumi dan langit" /><label for="bumi dan langit">Bumi Dan Langit</label>
        </p>
        
        <p>
            Penerbit<br />
            <input type="text" name="penerbit" required />
        </p>

        <p>
            Tanggal Pinjam<br />
            <input type="text" name="tanggal pinjam" required />
        </p>

        <p>
            lama pinjam<br />
            <input type="radio" name="lama pinjam" value="5 hari" id="laskar pelangi" ><label for="laskar pelangi">Pinjam (laskar pelangi)</label>
            <input type="radio" name="lama pinjam" value="8 hari" id="ayat-ayat cinta" /><label for="ayat-ayat cinta">Pinjam (Ayat-Ayat Cinta)</label>
            <input type="radio" name="harga" value="6 hari" id="bumi dan langit" /><label for="bumi dan langit">Pinjam (Bumi Dan Langit)</label>
        </p>
        
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
</fieldset>
<br />
<center><a href="index.php" style="color:white">&Lt; Back Tabel Data Pelanggan</a></center>
</html>
</body>