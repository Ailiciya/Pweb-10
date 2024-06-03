<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $errors = [];

    if (empty($nama)) {
        $errors[] = "Nama";
    }
    if (empty($email)) {
        $errors[] = "Email";
    }
    if (empty($password)) {
        $errors[] = "Password";
    }
    if (empty($jenis_kelamin)) {
        $errors[] = "Jenis Kelamin";
    }
    if (empty($alamat)) {
        $errors[] = "dan Alamat";
    }

    if (count($errors) > 0) {
        echo "<p style='color:black'>";
        echo implode(", ", $errors) . " wajib diisi!!!";
        echo "<a href='javascript:history.back()' style='color: purple; text-decoration: underline; margin-left: 10px;'>Kembali</a>";
        echo "</p>";
    } else {
        echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; margin-top: 20px;'>";
        echo "<tr>";
        echo "<td style='border: 2px solid black; padding: 5px;'>Nama</td>";
        echo "<td style='border: 2px solid black; padding: 5px;'><input type='text' value='" . htmlspecialchars($nama) . "' readonly style='border: none; background-color: white; width: 100%;'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='border: 2px solid black; padding: 5px;'>Email</td>";
        echo "<td style='border: 2px solid black; padding: 5px;'><input type='text' value='" . htmlspecialchars($email) . "' readonly style='border: none; background-color: white; width: 100%;'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='border: 2px solid black; padding: 5px;'>Password</td>";
        echo "<td style='border: 2px solid black; padding: 5px;'><input type='text' value='" . htmlspecialchars($password) . "' readonly style='border: none; background-color: white; width: 100%;'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='border: 2px solid black; padding: 5px;'>Jenis Kelamin</td>";
        echo "<td style='border: 2px solid black; padding: 5px;'><input type='text' value='" . htmlspecialchars($jenis_kelamin) . "' readonly style='border: none; background-color: white; width: 100%;'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='border: 2px solid black; padding: 5px;'>Alamat</td>";
        echo "<td style='border: 2px solid black; padding: 5px;'><textarea rows='4' cols='30' readonly style='border: none; background-color: white; width: 100%;'>" . htmlspecialchars($alamat) . "</textarea></td>";
        echo "</tr>";
        echo "</table>";
    }
} else {
    echo "<h3 style='color:red'>Form tidak valid!</h3>";
    echo '<a href="index.php" style="color: purple; text-decoration: underline;">Kembali</a>';
}
?>
