<!DOCTYPE html>
<html>
<head>
    <title>Challenge Praktikum Minggu ke-9</title>
    <style>
        .error {
            color: black;
        }
        .back-link {
            color: purple;
            text-decoration: underline;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h2><u>Challenge Praktikum Minggu ke-9</u></h2>
    <form method="post" action="aksi.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: left;">
                    <input type="submit" name="kirim" value="Kirim">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
