<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h2><u>Form Pendaftaran Mahasiswa Baru</u></h2>
    <form method="post" action="">
        <table border="0">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="number" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" required>, <input type="date" name="tanggal_lahir" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="50" required></textarea></td>
            </tr>
            <tr>
                <td>Program Studi yang dipilih</td>
                <td>:</td>
                <td>
                    <select name="Prodi" required>
                        <option value="S1 Informatika">S1 Informatika</option>
                        <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                        <option value="S1 Teknik Komputer">S1 Teknik Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
                    <input type="checkbox" name="hobi[]" value="Musik"> Musik
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="daftar" value="Daftar"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['daftar'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $prodi = $_POST['prodi'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "Tidak ada";

        echo "<h3>Data Pendaftaran</h3>";
        echo "NIM: " . $nim . "<br>";
        echo "Nama: " . $nama . "<br>";
        echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
        echo "Tempat, Tanggal Lahir: " . $tempat_lahir . ", " . $tanggal_lahir . "<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Program Studi: " . $prodi . "<br>";
        echo "Hobi: " . $hobi . "<br>";
    }
    ?>
</body>
</html>
